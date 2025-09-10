<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Links -->
    <?php require("inc/links.php");?>

    <title><?php echo $setting_r['site_title'] ?> - Gallery</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

   <style>
        
        .gallery-filter {
            margin-bottom: 30px;
        }
        
        .filter-btn {
            background: transparent;
            border: 1px solid var(--primary-color);
            color: var(--primary-color);
            padding: 8px 20px;
            margin: 5px;
            border-radius: 30px;
            transition: all 0.3s;
        }
        
        .filter-btn.active, .filter-btn:hover {
            background: var(--primary-color);
            color: white;
        }
        
        .gallery-item {
            margin-bottom: 30px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
        }
        
        .gallery-img {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }
        
        .gallery-img img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .gallery-img:hover img {
            transform: scale(1.1);
        }
        
        .img-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(12, 74, 110, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .gallery-img:hover .img-overlay {
            opacity: 1;
        }
        
        .img-overlay i {
            color: white;
            font-size: 30px;
        }
        
        .gallery-caption {
            padding: 15px;
            background: white;
        }
        
        .gallery-caption h5 {
            margin-bottom: 5px;
            color: var(--primary-color);
        }
        
        .testimonial-card {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
        
        /* Modal Styles */
        .modal-content {
            border-radius: 10px;
            overflow: hidden;
        }
        
        .modal-body {
            padding: 0;
        }
        
        .modal-img {
            width: 100%;
        }
        
        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--primary-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            text-decoration: none;
            opacity: 0;
            transition: all 0.3s;
            z-index: 1000;
        }
        
        .back-to-top.show {
            opacity: 1;
        }
        
        .back-to-top:hover {
            background: var(--secondary-color);
        }
    </style>
</head>
<body>

    <!-------------------- Header -------------------->

     <?php require("inc/header.php");?>

    <!-------------------- Hero Carousel -------------------->

    <div class="container-fluid px-0">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Carousel/6.png');"></div>
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Carousel/4.png');"></div>
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Carousel/2.png');"></div>
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Carousel/1.png');"></div>
                <div class="swiper-slide d-flex align-items-center justify-content-center text-center text-white" style="background-image: url('Images/Carousel/5.png');"></div>
            </div>

            <div class="hero-text position-absolute top-50 start-50 translate-middle text-center text-white">
                <h1 class="display-4 fw-bold">Our Gallery</h1>
                <p class="lead mt-3">Experience luxury through our visual journey!</p>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <section class="pt-5 pb-3">
        <div class="container">

            <!-- Filter Buttons -->
            <div class="row text-center gallery-filter">
                <div class="col">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="rooms">Rooms & Suites</button>
                    <button class="filter-btn" data-filter="dining">Dining</button>
                    <button class="filter-btn" data-filter="spa">Spa & Wellness</button>
                    <button class="filter-btn" data-filter="events">Events</button>
                </div>
            </div>
            
            <!-- Gallery Grid -->
            <div class="row" id="gallery-container">
                <!-- Room Items -->
                <div class="col-md-4 gallery-item" data-category="rooms">
                    <div class="gallery-img">
                        <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" alt="Luxury Suite">
                        <div class="img-overlay" data-bs-toggle="modal" data-bs-target="#imageModal" data-img="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" data-title="Luxury Suite">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h5>Luxury Suite</h5>
                        <p>Elegant room with panoramic views</p>
                    </div>
                </div>
                
                <div class="col-md-4 gallery-item" data-category="rooms">
                    <div class="gallery-img">
                        <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" alt="Executive Room">
                        <div class="img-overlay" data-bs-toggle="modal" data-bs-target="#imageModal" data-img="https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" data-title="Executive Room">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h5>Executive Room</h5>
                        <p>Spacious comfort with modern amenities</p>
                    </div>
                </div>


                <!-- Events Items -->
                <div class="col-md-4 gallery-item" data-category="events">
                    <div class="gallery-img">
                        <img src="Images\Gallery\1.jpg" alt="Wedding Venue">
                        <div class="img-overlay" data-bs-toggle="modal" data-bs-target="#imageModal" data-img="Images\Gallery\1.jpg" data-title="Presidential Suite">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h5>Presidential Suite</h5>
                        <p>Ultimate luxury experience</p>
                    </div>
                </div>


                <!-- Events Items -->
                <div class="col-md-4 gallery-item" data-category="events">
                    <div class="gallery-img">
                        <img src="Images\Gallery\5.jpg" alt="Wedding Venue">
                        <div class="img-overlay" data-bs-toggle="modal" data-bs-target="#imageModal" data-img="Images\Gallery\5.jpg" data-title="Wedding Venue">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h5>Wedding Venue</h5>
                        <p>Perfect setting for special occasions</p>
                    </div>
                </div>
                
                
                <!-- Dining Items -->
                <div class="col-md-4 gallery-item" data-category="dining">
                    <div class="gallery-img">
                        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" alt="Main Restaurant">
                        <div class="img-overlay" data-bs-toggle="modal" data-bs-target="#imageModal" data-img="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" data-title="Main Restaurant">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h5>Main Restaurant</h5>
                        <p>Fine dining experience</p>
                    </div>
                </div>
                
                <div class="col-md-4 gallery-item" data-category="dining">
                    <div class="gallery-img">
                        <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" alt="Poolside Bar">
                        <div class="img-overlay" data-bs-toggle="modal" data-bs-target="#imageModal" data-img="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" data-title="Poolside Bar">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h5>Poolside Bar</h5>
                        <p>Refreshments with a view</p>
                    </div>
                </div>
                
                <div class="col-md-4 gallery-item" data-category="dining">
                    <div class="gallery-img">
                        <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" alt="Gourmet Kitchen">
                        <div class="img-overlay" data-bs-toggle="modal" data-bs-target="#imageModal" data-img="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" data-title="Gourmet Kitchen">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h5>Gourmet Kitchen</h5>
                        <p>Exquisite culinary creations</p>
                    </div>
                </div>
                
                <!-- Spa Items -->
                <div class="col-md-4 gallery-item" data-category="spa">
                    <div class="gallery-img">
                        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" alt="Spa Center">
                        <div class="img-overlay" data-bs-toggle="modal" data-bs-target="#imageModal" data-img="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" data-title="Spa Center">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h5>Spa Center</h5>
                        <p>Relaxation and rejuvenation</p>
                    </div>
                </div>
              
                
                <!-- Events Items -->
                <div class="col-md-4 gallery-item" data-category="events">
                    <div class="gallery-img">
                        <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" alt="Wedding Venue">
                        <div class="img-overlay" data-bs-toggle="modal" data-bs-target="#imageModal" data-img="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&h=400&q=80" data-title="Wedding Venue">
                            <i class="fas fa-search-plus"></i>
                        </div>
                    </div>
                    <div class="gallery-caption">
                        <h5>Wellness Treatment</h5>
                        <p>Professional care for body and mind</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Guest Experiences</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"The rooms at Zanvia Hotel are absolutely stunning. The attention to detail and luxury amenities made our stay unforgettable."</p>
                        <div class="testimonial-author">
                            <img src="Images\Gallery\2.jpg" alt="Sarah Johnson">
                            <div>
                                <h5>Sarah Johnson</h5>
                                <p>Business Traveler</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"We hosted our wedding at Zanvia Hotel and it was magical. The event team took care of every detail, making our day perfect."</p>
                        <div class="testimonial-author">
                            <img src="Images\Gallery\4.jpg " alt="Michael Brown">
                            <div>
                                <h5>Michael Brown</h5>
                                <p>Senior Executive</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"The spa services are exceptional. After a week of meetings, the wellness treatments were exactly what I needed to recharge."</p>
                        <div class="testimonial-author">
                            <img src="Images\Gallery\3.jpg " alt="Jennifer Lee">
                            <div>
                                <h5>Jennifer Lee</h5>
                                <p>Corporate Executive</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalImageTitle">Image Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" alt="" class="modal-img" id="modalImage">
                </div>
            </div>
        </div>
    </div>

    <!-------------------- Footer -------------------->

    <?php require("inc/footer.php");?>

    <!-- Bootstrap & jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-------------------- Swiper JS -------------------->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-------------------- Initializing Hero Swiper -------------------->
    <script src="swiper.js"></script>

    <script>
        $(document).ready(function() {
            // Filter functionality
            $('.filter-btn').on('click', function() {
                $('.filter-btn').removeClass('active');
                $(this).addClass('active');
                
                const filter = $(this).data('filter');
                
                if (filter === 'all') {
                    $('.gallery-item').show();
                } else {
                    $('.gallery-item').hide();
                    $(`.gallery-item[data-category="${filter}"]`).show();
                }
            });
            
            // Modal functionality
            $('#imageModal').on('show.bs.modal', function(event) {
                const button = $(event.relatedTarget);
                const imageUrl = button.data('img');
                const imageTitle = button.data('title');
                
                const modal = $(this);
                modal.find('#modalImageTitle').text(imageTitle);
                modal.find('#modalImage').attr('src', imageUrl);
            });
        });
    </script>

</body>
</html>