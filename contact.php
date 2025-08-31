<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Zenvia Hotel - Contact</title>

    <!-- CSS Links -->
    <?php require("inc/links.php");?>

    <!-- Swiper CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>

<body class="bg-light">

    <!-------------------- Header -------------------->

    <?php require("inc/header.php");?>

    <div class="my-5 px-4">
        <h2 class="h-font fw-bold text-center">Contact Us</h2>
        <p class="text-center mt-3">Lorem ipsum, dolor sit amet <br> consectetur adipisicing elit. Voluptatum labore, rem omnis impedit rerum incidunt excepturi 
            porro ea hic reiciendis.</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="350" src="<?php echo $contact_r['iframe'] ?>"> </iframe>

                    <h5>Address</h5>
                    <a href="<?php echo $contact_r['gmap']?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-4">
                        <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address']?>
                    </a>

                    <h5>Call us</h5>
                    <a href="tel: +<?php echo $contact_r['pn1']?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> <?php echo $contact_r['pn1']?>
                    </a>
                    <br>
                    <a href="tel: +<?php echo $contact_r['pn2']?>" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> <?php echo $contact_r['pn2']?>
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a href="<?php echo $contact_r['email']?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-4">
                        <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email']?>
                    </a>

                    <h5>Follow us</h5>
                    <?php
                        if($contact_r["tw"] != "") {
                            echo <<<data
                            <a href="$contact_r[tw]" target="_blank" class="d-inline-block mb-3">
                                <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-twitter me-1"></i>
                                </span>
                            </a>
                            data;
                        }
                    ?>
                    <a href="<?php echo $contact_r['fb']?>" target="_blank" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="<?php echo $contact_r['insta']?>" target="_blank" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST">
                        <h5>Send a Message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input name ="name" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input name ="email" required type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input name ="subject" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea name ="message" required class="form-control shadow-none" rows="6"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn text-white custom-bg mt-3">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
         if(isset($_POST["send"]))
        {
            $frm_data = filteration($_POST);

            $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
            $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];

            $res = insert($q, $values, "ssss");
            if($res==1) {
                alert('success', 'Mail Sent!');
            }
            else {
                alert('error', 'Server Down! Try Again Later..');
            }
        }
    ?>

    <!-------------------- Footer -------------------->

    <?php require("inc/footer.php");?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  
</body>
</html>