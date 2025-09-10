<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Links -->
    <?php require("inc/links.php");?>

    <title><?php echo $setting_r['site_title'] ?>  - Rooms</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>

<body class="bg-light">

    <!-------------------- Header -------------------->

    <?php require("inc/header.php");?>

     <!-------------------- Hero Carousel -------------------->

    <div class="container-fluid px-0">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Rooms/1.jpg'); linear-gradient(rgba(12, 74, 110, 0.7), rgba(12, 74, 110, 0.7))"></div>
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Rooms/2.png');"></div>
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Rooms/3.png');"></div>
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Rooms/4.png');"></div>
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Rooms/5.png');"></div>
            </div>

            <div class="hero-text position-absolute top-50 start-50 translate-middle text-center text-white">
                <h1 class="display-4 fw-bold">Our Rooms</h1>
                <p class="lead mt-3">Experience comfort, style, and luxury in every thoughtfully designed room!</p>
            </div>
        </div>
    </div>

    <div class="my-5 px-4">
        <h2 class="h-font fw-bold text-center">Explore Our Rooms</h2>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0 ps-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <!-- Check Availability -->
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="d-flex align-items-center justify-content-between mb-3" style="font-size: 18px;">
                                    <span>Check Availability</span>
                                    <button id="chk_avail_btn" onclick="chk_avail_clear()"class="btn shadow-none btn-sm text-secondary d-none">Reset</button>
                                </h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3" id="checkin" onchange="chk_avail_filter()">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none" id="checkout" onchange="chk_avail_filter()">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Facilities</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Facility one</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Facility two</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Facility three</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Guests</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Adults</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Children</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4" id="rooms-data">
            </div>
        </div>

    </div>

    <script>

        let rooms_data = document.getElementById('rooms-data');
        let checkin = document.getElementById('checkin');
        let chk_avail_btn = document.getElementById('chk_avail_btn');

        function fetch_rooms()
        {
            let chk_avail = JSON.stringify({
                checkin: checkin.value,
                checkout: checkout.value
            });
            
            let xhr = new XMLHttpRequest();
            xhr.open("GET","ajax/rooms.php?fetch_rooms&chk_avail="+chk_avail,true);

            xhr.onprogress = function() {
                rooms_data.innerHTML = `<div class="spinner-border text-info mb-3 d-block mx-auto" id="loader" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>`;
            }

            xhr.onload = function() {
                rooms_data.innerHTML = this.responseText;
            }

            xhr.send()
        }


        function chk_avail_filter()
        {
            if(checkin.value != '' && checkout != '') {
                fetch_rooms();
                chk_avail_btn.classList.remove('d-none');
            }
        }

        function chk_avail_clear()
        {
            checkin.value = '';
            checkout.value = '';
            chk_avail_btn.classList.add('d-none');
            fetch_rooms();
        }

        fetch_rooms();

    </script>

    <!-------------------- Footer -------------------->

    <?php require("inc/footer.php");?>

    <!-------------------- Swiper JS -------------------->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-------------------- Initializing Hero Swiper -------------------->
    <script src="swiper.js"></script>

</body>
</html>