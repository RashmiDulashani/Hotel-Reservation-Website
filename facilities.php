<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Links -->
    <?php require("inc/links.php");?>

    <title><?php echo $setting_r['site_title'] ?>  - Facilities</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

     <style>
        .pop:hover {
            border-top-color: #2ec1ac !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
        </style>


</head>

<body class="bg-light">

    <!-------------------- Header -------------------->

    <?php require("inc/header.php");?>


    <!-------------------- Hero Carousel -------------------->

    <div class="container-fluid px-0">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Facilities/1.jpg');"></div>
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Facilities/2.jpg');"></div>
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Facilities/3.jpg');"></div>
            </div>

            <div class="hero-text position-absolute top-50 start-50 translate-middle text-center text-white">
                <h1 class="display-4 fw-bold">Our Facilities</h1>
                <p class="lead mt-3">Explore the wide range of amenities we offer to make your stay unforgettable!</p>
            </div>
        </div>
    </div>

    <div class="my-5 px-4">
        <h2 class="h-font fw-bold text-center">Exceptional Amenities for Your Comfort</h2>
        <p class="text-center mt-3">Discover a range of thoughtfully designed facilities that elevate your stay. <br> From high-speed Wi-Fi and entertainment options to spa treatments and modern room comforts, our hotel ensures every guest experiences convenience, relaxation, <br> and luxury at every moment of their visit.</p>
    </div>

    <div class="container">
        <div class="row">

            <?php
                $res = selectAll('facilities');
                $path = FACILITIES_IMG_PATH;

                while($row = mysqli_fetch_assoc($res)) {
                    echo <<<data
                    <div class="col-lg-4 col-md-6 mb-5 px-4 pt-5">
                        <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                            <div class="d-flex align-items-center mb-2">
                                <img src="$path$row[icon]" width="40px">
                                <h5 class="m-0 ms-3">$row[name]</h5>
                            </div>
                            <p>$row[description]</p>
                        </div>
                    </div>
                    data;
                }
            ?>
            
        </div>
    </div>

    
    
    <!-------------------- Footer -------------------->

    <?php require("inc/footer.php");?>

    <!-------------------- Swiper JS -------------------->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-------------------- Initializing Hero Swiper -------------------->
    <script src="swiper.js"></script>
  
</body>
</html>