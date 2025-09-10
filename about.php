<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Links -->
    <?php require("inc/links.php");?>

    <title><?php echo $setting_r['site_title'] ?> - About</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <style>
        .box {
            border-top-color: #2ec1ac !important;
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
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Carousel/4.png');"></div>
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Carousel/6.png');"></div>
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Carousel/5.png');"></div>
            </div>

            <div class="hero-text position-absolute top-50 start-50 translate-middle text-center text-white">
                <h1 class="display-4 fw-bold">About Us</h1>
                <p class="lead mt-3">Luxury, comfort, and exceptional service combine for unforgettable stays!</p>
            </div>
        </div>
    </div>

    <div class="my-5 px-4">
        <h2 class="h-font fw-bold text-center">Message from Our Chairman</h2>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-2 order-lg-1 order-md-1 msg">
                <p>“Welcome to Zenvia, where our passion for hospitality and commitment to excellence create unforgettable experiences. With decades of dedication to guest satisfaction, we strive to offer comfort, elegance, and personalized service that makes every stay truly remarkable.</p>
                <p>With decades of experience in the hospitality industry, our team is committed to excellence at every level. From luxurious accommodations to attentive service, we strive to exceed expectations and ensure that each visit is as remarkable as it is relaxing.”</p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-1 order-lg-2 order-md-1">
                <img src="Images/About/about.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="Images/About/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="Images/About/customers.svg" width="70px">
                    <h4 class="mt-3">200+ Customers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="Images/About/rating.svg" width="70px">
                    <h4 class="mt-3">150+ Reviews</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="Images/About/staff.svg" width="70px">
                    <h4 class="mt-3">100+ Staffs</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">Management Team</h3>

    <div class="container">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">

                 <?php
                    $about_r = selectAll("team_details");
                    $path = ABOUT_IMG_PATH;
                    
                    while($row = mysqli_fetch_assoc($about_r)) {
                        echo <<<data
                            <div class="swiper-slide bg-white rounded text-center">
                                <img src="$path$row[picture]" class="w-100">
                                <h6 class="mt-3">$row[name]</h6>
                            </div>
                        data;
                    }
                ?>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    
    <!-------------------- Footer -------------------->

    <?php require("inc/footer.php");?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-------------------- Initializing Hero Swiper -------------------->
    <script src="swiper.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView:1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
  
</body>
</html>