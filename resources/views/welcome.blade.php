<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - NiceRestaurant Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="../../../landing-page/assets/img/favicon.png" rel="icon">
  <link href="../../../landing-page/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../../landing-page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../../landing-page/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="../../../landing-page/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceRestaurant
  * Template URL: https://bootstrapmade.com/nice-restaurant-bootstrap-template/
  * Updated: Jun 06 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="../../../landing-page/assets/img/logo.webp" alt=""> -->
        <i class="bi bi-fork-knife"></i>
        <h1 class="sitename">Therese Restaurant</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Dashboard</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#book-a-table">Book a Table</a></li>
          <li><a href="#chefs">Chefs</a></li>
          <li><a href="#events">Events</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        <li>
          <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
          </a>

          <form id="logout-form" method="POST" action="{{route('logout')}}">
            @csrf
          </form>


        </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted d-none d-sm-block" href="#book-a-table">Book a Table</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container-fluid hero-container" data-aos="fade-up">
        <div class="row g-0 align-items-center">
          <div class="col-lg-6 content-col">
            <div class="content-wrapper">
              <div class="status-badge">Reservations Open</div>
              <h2>"Good food brings people together - one smile, one memory at a time."</h2>
              <p>WHERE EVERY MEAL IS A CELEBRTAION AND EVERY BITE TELLS A STORY.</p>

              <div class="opening-hours" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-clock"></i>
                <span>Open Daily: 10am - 10pm</span>
              </div>

              <div class="btn-group">
                <a href="#book-a-table" class="btn btn-book">Book a Table</a>
                <a href="#menu" class="btn btn-menu">Explore Our Menu</a>
              </div>

              <div class="social-links">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 swiper-col">
            <div class="swiper hero-swiper init-swiper" data-aos="zoom-out" data-aos-delay="100">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 800,
                  "autoplay": {
                    "delay": 5000
                  },
                  "effect": "fade",
                  "slidesPerView": 1,
                  "navigation": {
                    "nextEl": ".swiper-button-next",
                    "prevEl": ".swiper-button-prev"
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="../../../landing-page/assets/img/pic 1.jpg" alt="Restaurant Ambience">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="../../../landing-page/assets/img/pic 2.jpg" alt="Signature Dish">
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="img-container">
                    <img src="../../../landing-page/assets/img/pic 3.jpg" alt="Expert Chefs">
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content">
              <h3>Our Culinary Journey</h3>
              <p class="fst-italic">"Our Culinary journey is a celebration of flavor, passion, and the joy of creating unforgettable experiences."</p>

              <div class="chef-signature mt-4">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <img src="../../../landing-page/assets/img/restaurant/chef-1.webp" class="chef-avatar rounded-circle" alt="Chef Portrait">
                  </div>
                  <div class="col">
                    <p class="chef-message mb-2">"I've had a lot of success; I've had failures, so I learn from the failure"</p>
                    <p class="chef-name">Chloe Therese N. Sarol</p>
                     
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="about-image-wrapper">
              <img src="../../../landing-page/assets/img/pic 5.webp" class="img-fluid main-image shadow" alt="Restaurant Interior">
              <img src="../../../landing-page/assets/img/pic 6.jpg" class="img-fluid accent-image shadow" alt="Chef Preparing Food">
              <span class="establishment-year d-flex align-items-center justify-content-center text-center">Est. 2005</span>
            </div>
          </div>
        </div>

        <div class="row mt-5 pt-4 features-section">
          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-award"></i>
              </div>
              <h4>Award Winning</h4>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-egg-fried"></i>
              </div>
              <h4>Fresh Ingredients</h4>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-people"></i>
              </div>
              <h4>Expert Team</h4>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
            <div class="feature-box">
              <div class="feature-icon">
                <i class="bi bi-heart"></i>
              </div>
              <h4>Cooked with Love</h4>
              
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
            <div class="stats-container">
              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="0" class="purecounter">15</span>+</span>
                <p class="stat-label">Years Experience</p>
              </div>

              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="0" class="purecounter">5</span></span>
                <p class="stat-label">Expert Chefs</p>
              </div>

              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="0" class="purecounter">3</span></span>
                <p class="stat-label">Culinary Awards</p>
              </div>

              <div class="stat-item">
                <span class="stat-number"><span data-purecounter-start="0" data-purecounter-end="15000" data-purecounter-duration="0" class="purecounter">15000</span>+</span>
                <p class="stat-label">Happy Customers</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Menu</h2>
        
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="menu-filters isotope-filters mb-5">
            <ul>
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-main">Best Seller</li>
              <li data-filter=".filter-dessert">Desserts</li>
              <li data-filter=".filter-drinks">Drinks</li>
            </ul>
          </div>

          <div class="menu-container isotope-container row gy-4">

            <!-- Regular Menu Items -->
            <div class="col-lg-6 isotope-item filter-starters">
              <div class="menu-item d-flex align-items-center gap-4">
                <img src="../../../landing-page/assets/img/pic 12.webp" alt="Starter" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Bulalo <span class="menu-tag">Omnivore</span></h5>
                  
                  <div class="price">119.00 Pesos</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-starters">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/pic 10.avif" alt="Starter" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Chopsuey <span class="menu-tag">Vegetarian</span></h5>
                  
                  <div class="price">109.00 Pesos</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-main">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/pic 11.jpg" alt="Main Course" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Adobo <span class="menu-tag">Carnivore</span></h5>
                  
                  <div class="price">119.00 Pesos</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-main">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/pic 13.jpg" alt="Main Course" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Sisig <span class="menu-tag">Omnivore</span></h5>
                  
                  <div class="price">129.00 Pesos</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-dessert">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/pic 14.jpg" alt="Dessert" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Mango Float <span class="menu-tag">Sweet Tooth</span></h5>
                  
                  <div class="price">99.00 Pesos</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-dessert">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/pic 15.jpg" alt="Dessert" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Fruit Salad <span class="menu-tag">Sweet Tooth</span></h5>
                 
                  <div class="price">105.00 Pesos</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-drinks">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/pic 16.webp" alt="Drink" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Pineapple Juice <span class="menu-tag">Non-Alcoholic</span></h5>
            
                  <div class="price">50.00 Pesos</div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 isotope-item filter-drinks">
              <div class="d-flex menu-item align-items-center gap-4">
                <img src="../../../landing-page/assets/img/pic 17.jpg" alt="Drink" class="menu-img img-fluid rounded-3">
                <div class="menu-content">
                  <h5>Orange Juice <span class="menu-tag">Non-Alcoholic</span></h5>
                  
                  <div class="price">50.00 Pesos</div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="text-center mt-5" data-aos="fade-up">
          <a href="#" class="download-menu">
            <i class="bi bi-file-earmark-pdf"></i> Download Full Menu
          </a>
        </div>

        <!-- Chef's Specials -->
        <div class="col-12 mt-5" data-aos="fade-up">
          <div class="specials-badge">
            <span><i class="bi bi-award"></i> Chef's Specials</span>
          </div>
          <div class="specials-container">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="menu-item special-item">
                  <div class="menu-item-img">
                    <img src="../../../landing-page/assets/img/pic 18.webp" alt="Special Dish" class="img-fluid">
                    <div class="menu-item-badges">
                      <span class="badge-special">Special</span>
                      <span class="badge-vegan">Vegan</span>
                    </div>
                  </div>
                  <div class="menu-item-content">
                    <h4>Lumpiang Shanghai</h4>
                    

                    <div class="menu-item-price">25.00 Pesos</div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="menu-item special-item">
                  <div class="menu-item-img">
                    <img src="../../../landing-page/assets/img/pic 19.webp" alt="Special Dish" class="img-fluid">
                    <div class="menu-item-badges">
                      <span class="badge-special">Special</span>
                      <span class="badge-spicy">Spicy</span>
                    </div>
                  </div>
                  <div class="menu-item-content">
                    <h4>Dinuguan</h4>
                    <div class="menu-item-price">40.00 Pesos</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Menu Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                
                </p>
                <div class="profile mt-auto">
                  <img src="../../../landing-page/assets/img/pic 27.jpg" class="testimonial-img" alt="">
                  <h3>Diodana Jane Magsaysay</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>Established with a vision to redefine dining, [Therese Restaurant] was born from a deep passion for culinary artistry and exceptional hospitality. From the beginning, our mission has been clear: to create a unique and memorable experience where food, ambiance, and service come together in perfect harmony.</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                 
                </p>
                <div class="profile mt-auto">
                  <img src="../../../landing-page/assets/img/pic 20.jpg" class="testimonial-img" alt="">
                  <h3>Jason Bajas</h3>
                  <h4>Designer</h4>
                  <p>Our restaurant blends a modern aesthetic with warm, inviting elements to create a space where people feel at home while enjoying elevated, flavorful dishes. The core of our identity is built around authentic, seasonal cuisine with a focus on quality, freshness, and presentation.</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                 
                </p>
                <div class="profile mt-auto">
                  <img src="../../../landing-page/assets/img/face-swap chloe.png" class="testimonial-img" alt="">
                  <h3>Chloe Therese N. Sarol</h3>
                  <h4>Store Owner</h4>
                 <p>[Therese Restaurant] was founded through the vision and dedication of our store owner, whose passion for food, community, and quality hospitality laid the foundation for everything we are today. What began as a dream has grown into a thriving dining destination—known for its warm ambiance, thoughtful service, and distinctive flavors.</p>
      
            
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                 
                </p>
                <div class="profile mt-auto">
                  <img src="../../../landing-page/assets/img/pic 21.jpg" class="testimonial-img" alt="">
                  <h3>Michael jonard alfeche</h3>
                  <h4>Freelancer</h4>
                  <p>We are launching a new restaurant that focuses on delivering a unique, high-quality dining experience centered around.</p>
              
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                 
                </p>
                <div class="profile mt-auto">
                  <img src="../../../landing-page/assets/img/pic 22.jpg" class="testimonial-img" alt="">
                  <h3>Junjie Cruz</h3>
                  <h4>Entrepreneur</h4>
                  <p>We are building a restaurant brand that combines elevated Middle Eastern dining, or health-forward plant-based dishes with a curated dining experience that appeals to todays conscious, experience-seeking customer.</p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Chefs Section -->
    <section id="chefs" class="chefs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Chefs</h2>
        
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-5">
            <div class="chef-highlight" data-aos="fade-right" data-aos-delay="200">
              <figure class="chef-image">
                <img src="../../../landing-page/assets/img/face-swap chloe.png" class="img-fluid" alt="Executive Chef">
              </figure>
              <div class="chef-details">
                <h3>Executive Chef</h3>
                <h2>Chloe Therese N. Sarol</h2>
                <p>At the heart of [Therese Restaurant] lies a deep commitment to culinary excellence—an experience shaped by passion, creativity, and leadership in the kitchen. Since its inception, the restaurant has set out to redefine modern dining through a harmonious blend of refined flavors, seasonal ingredients, and a dedication to innovation.</p>
                <div class="chef-awards">
                  <span><i class="bi bi-star-fill"></i> James Beard Award</span>
                  <span><i class="bi bi-star-fill"></i> Two Michelin Stars</span>
                </div>
                
                <div class="chef-signature">
              
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="team-container" data-aos="fade-left" data-aos-delay="300">
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="chef-img">
                      <img src="../../../landing-page/assets/img/pic 20.jpg" class="img-fluid" alt="Chef Portrait">
                      <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                      </div>
                    </div>
                    <div class="chef-info">
                      <h4>Jason bajas</h4>
                      <p class="role">Pastry Chef</p>
                      <p class="details"></p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="250">
                    <div class="chef-img">
                      <img src="../../../landing-page/assets/img/pic 21.jpg" class="img-fluid" alt="Chef Portrait">
                      <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                      </div>
                    </div>
                    <div class="chef-info">
                      <h4>Michael Jonard Alfeche</h4>
                      <p class="role">Sous Chef</p>
                      <p class="details">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="chef-img">
                      <img src="../../../landing-page/assets/img/pic 22.jpg" class="img-fluid" alt="Chef Portrait">
                      <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                      </div>
                    </div>
                    <div class="chef-info">
                      <h4>Junjie Cruz</h4>
                      <p class="role">Head of Bar</p>
                      <p class="details">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="350">
                    <div class="chef-img">
                      <img src="../../../landing-page/assets/img/pic 28.jpg" class="img-fluid" alt="Chef Portrait">
                      <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                      </div>
                    </div>
                    <div class="chef-info">
                      <h4>Dustin Sedemo</h4>
                      <p class="role">Grill Master</p>
                      <p class="details">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Chefs Section -->

    <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5 mb-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="reservation-info">
              <div class="text-content">
                <h3>Book Your Table</h3>
                

                <div class="reservation-details mt-4">
                  <div class="detail-item">
                    <i class="bi bi-clock"></i>
                    <div>
                      <h5>Opening Hours</h5>
                      <p>Monday - Friday: 11:00 AM - 11:00 PM<br>
                        Saturday - Sunday: 10:00 AM - 12:00 AM</p>
                    </div>
                  </div>

                  <div class="detail-item">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h5>Location</h5>
                      <p>Naga City<br>
                        </p>
                    </div>
                  </div>

                  <div class="detail-item">
                    <i class="bi bi-telephone"></i>
                    <div>
                      <h5>Call Us</h5>
                      <p>09935981224</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="reservation-image">
              <img src="../../../landing-page/assets/img/pic 1.jpg" alt="Restaurant interior" class="img-fluid rounded">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12" data-aos="fade-up" data-aos-delay="400">
            <div class="reservation-form-wrapper">
              <div class="form-header">
                <h3>Book A Table</h3>
                <p>Please fill the form below to make a reservation</p>
              </div>

              <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form mt-4">
                <div class="row gy-4">
                  <div class="col-lg-4 form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Your Phone" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <select name="people" class="form-select" required="">
                      <option value="">Number of guests</option>
                      <option value="1">1 Person</option>
                      <option value="2">2 People</option>
                      <option value="3">3 People</option>
                      <option value="4">4 People</option>
                      <option value="5">5 People</option>
                      <option value="6">6+ People</option>
                    </select>
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="date" name="date" class="form-control" placeholder="Date" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="time" class="form-control" name="time" id="time" placeholder="Time" required="">
                  </div>

                  <div class="form-group mt-4">
                    <textarea class="form-control" name="message" rows="3" placeholder="Special Requests (Optional)"></textarea>
                  </div>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                </div>

                <div class="text-center mt-4">
                  <button type="submit" class="btn-book-table">Book Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Book A Table Section -->

    <!-- Location Section -->
    <section id="location" class="location section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Location</h2>
        
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62819.522970981634!2d123.6845649176413!3d10.243817772140096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9784dc23f97a3%3A0x6e1d801f07e82f31!2sNaga%2C%20Cebu!5e0!3m2!1sen!2sph!4v1753836478653!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="info-container">
              <div class="section-header">
                <h2>Find Us</h2>
                <p>Visit Us Today</p>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                <div class="info-icon">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="info-content">
                  <h3>Our Location</h3>
                  <p>Naga City</p>
                </div>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="400">
                <div class="info-icon">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="info-content">
                  <h3>Reservations</h3>
                  <p>09935981224</p>
                  <p class="small-text">We recommend making reservations at least 48 hours in advance</p>
                </div>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="500">
                <div class="info-icon">
                  <i class="bi bi-clock"></i>
                </div>
                <div class="info-content">
                  <h3>Hours</h3>
                  <div class="hours-grid">
                    <div class="day">Monday - Thursday</div>
                    <div class="time">11:00 AM - 10:00 PM</div>

                    <div class="day">Friday - Saturday</div>
                    <div class="time">11:00 AM - 11:30 PM</div>

                    <div class="day">Sunday</div>
                    <div class="time">10:00 AM - 9:00 PM</div>

                    <div class="day">Brunch Hours</div>
                    <div class="time">Sat &amp; Sun, 10:00 AM - 2:00 PM</div>
                  </div>
                </div>
              </div>

              <div class="cta-wrapper" data-aos="fade-up" data-aos-delay="600">
                <a href="#" class="btn-book">Make a Reservation</a>
                <a href="#" class="btn-contact">Contact Us</a>
                <p>09935981224</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Location Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="intro-text text-center mb-5" data-aos="fade-up" data-aos-delay="150">
          <h2>Create Unforgettable Moments</h2>
         
        </div>

        <div class="event-types">
          <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="event-type-card">
                <div class="icon-wrapper">
                  <i class="bi bi-calendar-heart"></i>
                </div>
                <h3>Weddings &amp; Celebrations</h3>
                
                <span class="capacity">Up to 150 guests</span>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
              <div class="event-type-card">
                <div class="icon-wrapper">
                  <i class="bi bi-building"></i>
                </div>
                <h3>Corporate Events</h3>
                
                <span class="capacity">Up to 100 guests</span>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="event-type-card">
                <div class="icon-wrapper">
                  <i class="bi bi-people"></i>
                </div>
                <h3>Private Gatherings</h3>
                
                <span class="capacity">Up to 50 guests</span>
              </div>
            </div>
          </div>
        </div>

        <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="150">
          <div class="row g-3">
            <div class="col-lg-8">
              <div class="main-image" data-aos="zoom-in" data-aos-delay="200">
                <img src="../../../landing-page/assets/img/pic 23.jpg" alt="Event Space" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row g-3">
                <div class="col-lg-12 col-md-6">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                    <img src="../../../landing-page/assets/img/pic 24.jpg" alt="Event" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-12 col-md-6">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                    <img src="../../../landing-page/assets/img/pic 25.avif" alt="Event" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="event-cta" data-aos="fade-up" data-aos-delay="200">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3>Ready to plan your special event?</h3>
              
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="#" class="btn-reserve">Reserve Venue</a>
            </div>
          </div>
        </div>

        <div class="featured-events" data-aos="fade-up" data-aos-delay="200">
          <h3>Upcoming Featured Events</h3>

          <div class="row g-4">
            <div class="col-lg-6 col-md-6">
              <div class="featured-event-card" data-aos="fade-up" data-aos-delay="250">
                <div class="event-date">
                  <span class="month">Jun</span>
                  <span class="day">18</span>
                </div>
                <div class="event-content">
                  <div class="event-image">
                    <img src="../../../landing-page/assets/img/restaurant/event-3.webp" alt="Summer Wine Festival" class="img-fluid">
                  </div>
                  <div class="event-info">
                    <h4>Summer Wine Festival</h4>
                    <ul class="event-meta">
                      <li><i class="bi bi-clock"></i> 6:00 PM - 10:00 PM</li>
                      <li><i class="bi bi-geo-alt"></i> Garden Terrace</li>
                    </ul>
                    
                    <a href="#" class="btn-details">View Details</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="featured-event-card" data-aos="fade-up" data-aos-delay="300">
                <div class="event-date">
                  <span class="month">Jul</span>
                  <span class="day">05</span>
                </div>
                <div class="event-content">
                  <div class="event-image">
                    <img src="../../../landing-page/assets/img/restaurant/event-8.webp" alt="Gourmet Tasting Night" class="img-fluid">
                  </div>
                  <div class="event-info">
                    <h4>Gourmet Tasting Night</h4>
                    <ul class="event-meta">
                      <li><i class="bi bi-clock"></i> 7:30 PM - 11:00 PM</li>
                      <li><i class="bi bi-geo-alt"></i> Main Dining Hall</li>
                    </ul>
                    
                    <a href="#" class="btn-details">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Events Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        >
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Contact Info Boxes -->
        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="info-content">
                <h4>Our Address</h4>
                <p>Naga City</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="info-content">
                <h4>Email Address</h4>
                <p>chloesarol434@gmail.com</p>
                <p>contact@example.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-headset"></i>
              </div>
              <div class="info-content">
                <h4>Hours of Operation</h4>
                <p>Sunday-Fri: 9 AM - 6 PM</p>
                <p>Saturday: 9 AM - 4 PM</p>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Google Maps (Full Width) -->
      <div class="map-section" data-aos="fade-up" data-aos-delay="200">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125639.01554942834!2d123.64336167209638!3d10.24389446621829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a9784dc23f97a3%3A0x6e1d801f07e82f31!2sNaga%2C%20Cebu!5e0!3m2!1sen!2sph!4v1752109552821!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- Contact Form Section (Overlapping) -->
      <div class="container form-container-overlap">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-10">
            <div class="contact-form-wrapper">
              <h2 class="text-center mb-4">Get in Touch</h2>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-person"></i>
                        <input type="text" class="form-control" name="name" placeholder="First Name" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-envelope"></i>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-text-left"></i>
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-chat-dots message-icon"></i>
                        <textarea class="form-control" name="message" placeholder="Write Message..." style="height: 180px" required=""></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>

                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-submit">SEND MESSAGE</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Therese Restaurant</span>
          </a>
          
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Mohon Langtad City of Naga</p>
          <p>langtad</p>
          <p>City of Naga</p>
          <p class="mt-4"><strong>Phone:</strong> <span>09935981224</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">nicerestaurant</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="../../../landing-page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../landing-page/assets/vendor/php-email-form/validate.js"></script>
  <script src="../../../landing-page/assets/vendor/aos/aos.js"></script>
  <script src="../../../landing-page/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../../landing-page/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../../landing-page/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../../../landing-page/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="../../../landing-page/assets/js/main.js"></script>

</body>

</html>