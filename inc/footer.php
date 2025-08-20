<!-------------------- Footer -------------------->

<div class="container-fluid">
    <div class="row justify-content-evenly px-lg-5">
        <div class="col-lg-4 col-md-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2"><img src="Images/Logo.png" class="img-fluid me-2" style="width: 45px; height: auto;">Zenvia</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo voluptas iure, deserunt fugit numquam dolorum corrupti 
                quasi hic quis debitis.
            </p>

        </div>
        <div class="col-lg-4 col-md-4  p-4">
            <h5 class="mb-3">Link</h5>
            <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
            <a href="about.php" class="d-inline-block  mb-2 text-dark text-decoration-none">About</a> <br>
            <a href="rooms.php" class="d-inline-block  mb-2 text-dark text-decoration-none">Rooms</a> <br>
            <a href="facilities.php" class="d-inline-block  mb-2 text-dark text-decoration-none">Facilities</a> <br>
            <a href="#" class="d-inline-block  mb-2 text-dark text-decoration-none">Gallery</a> <br>
            <a href="contact.php" class="d-inline-block  mb-2 text-dark text-decoration-none">Contact us</a>
        </div>
        <div class="col-lg-4 col-md-4  p-4">
            <h5 class="mb-3">Follow us</h5>

            <a href="$contact_r[tw]" class="d-inline-block mb-3 text-dark text-decoration-none"><i class="bi bi-twitter me-1"></i> Twitter </a> <br>
            <a href="<?php echo $contact_r['fb']?>" target="_blank" class="d-inline-block mb-3 text-dark text-decoration-none"><i class="bi bi-facebook me-1"></i> Facebook</a> <br>
            <a href="<?php echo $contact_r['insta']?>" target="_blank" class="d-inline-block mb-3 text-dark text-decoration-none"><i class="bi bi-instagram me-1"></i> Instagram</a>

        </div>
    </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Rash</h6>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<!-- Navigation Bar -->
<!-- <script>

    function setActive()
    {
        let navbar = document.getElementById("nav-bar");
        let a_tags = navbar.getElementsByTagName("a");

        for(let i=0; i<a_tags.length; i++)
        {
            let file = a_tags[i].href.split("/").pop();
            let file_name = file.split(".")[0];

            if(document.location.href.indexOf(file_name) >= 0) {
                a_tags[i].classList.add("active");
            }
        }
    }

    setActive();

</script> -->