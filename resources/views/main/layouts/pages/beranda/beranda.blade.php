@extends('main.layouts.main')

@section('header')
<img src="{{asset('main/assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

<div class="container text-center" data-aos="fade-up" data-aos-delay="100">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <h2>Halaman Beranda</h2>
      <p>We are team of talented designers making websites with Bootstrap</p>
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </div>
</div>
@endsection

@section('content')
    <!-- Stats Section -->
<section id="stats" class="stats section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
          <p>Clients</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
          <p>Projects</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
          <p>Hours Of Support</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
          <p>Workers</p>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section><!-- /Stats Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

  <img src="assets/img/cta-bg.jpg" alt="">

  <div class="container">
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-10">
        <div class="text-center">
          <h3>Call To Action</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>
      </div>
    </div>
  </div>

</section><!-- /Call To Action Section -->

<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <div><span>Check Our</span> <span class="description-title">Services</span></div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
        <div>
          <h4 class="title"><a href="service-details.html" class="stretched-link">Lorem Ipsum</a></h4>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
        </div>
      </div>
      <!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
        <div>
          <h4 class="title"><a href="service-details.html" class="stretched-link">Dolor Sitema</a></h4>
          <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
        <div>
          <h4 class="title"><a href="service-details.html" class="stretched-link">Sed ut perspiciatis</a></h4>
          <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
        <div>
          <h4 class="title"><a href="service-details.html" class="stretched-link">Magni Dolores</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
        <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
        <div>
          <h4 class="title"><a href="service-details.html" class="stretched-link">Nemo Enim</a></h4>
          <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
        <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
        <div>
          <h4 class="title"><a href="service-details.html" class="stretched-link">Eiusmod Tempor</a></h4>
          <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Portfolio</h2>
    <div><span>Check Our</span> <span class="description-title">Portfolio</span></div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">App</li>
        <li data-filter=".filter-product">Product</li>
        <li data-filter=".filter-branding">Branding</li>
        <li data-filter=".filter-books">Books</li>
      </ul><!-- End Portfolio Filters -->

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/app-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/product-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/branding-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/books-1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/app-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/product-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/branding-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/books-2.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/app-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/product-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/branding-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
          <div class="portfolio-content h-100">
            <a href="assets/img/portfolio/books-3.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt=""></a>
            <div class="portfolio-info">
              <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
              <p>Lorem ipsum, dolor sit amet consectetur</p>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

      </div><!-- End Portfolio Container -->

    </div>

  </div>

</section><!-- /Portfolio Section -->

<!-- Team Section -->
<section id="team" class="team section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Team</h2>
    <div><span>Check Our</span> <span class="description-title">Team</span></div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
          <h4>Walter White</h4>
          <span>Web Development</span>
          <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
          <h4>Sarah Jhinson</h4>
          <span>Marketing</span>
          <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
          <h4>William Anderson</h4>
          <span>Content</span>
          <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="member">
          <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
          <h4>Amanda Jepson</h4>
          <span>Accountant</span>
          <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div><!-- End Team Member -->

    </div>

  </div>

</section><!-- /Team Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section dark-background">

  <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

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
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->

<!-- Pricing Section -->
<section id="pricing" class="pricing section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Pricing</h2>
    <div><span>Check Our</span> <span class="description-title">Pricing</span></div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row g-4 g-lg-0">

      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="pricing-item">
          <h3>Free Plan</h3>
          <h4><sup>$</sup>0<span> / month</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
          </ul>
          <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-lg-4 featured" data-aos="zoom-in" data-aos-delay="200">
        <div class="pricing-item">
          <h3>Business Plan</h3>
          <h4><sup>$</sup>29<span> / month</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
            <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
            <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
          </ul>
          <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="pricing-item">
          <h3>Developer Plan</h3>
          <h4><sup>$</sup>49<span> / month</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
            <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
            <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
          </ul>
          <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
        </div>
      </div><!-- End Pricing Item -->

    </div>

  </div>

</section><!-- /Pricing Section -->

<!-- Faq Section -->
<section id="faq" class="faq section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Frequently Asked Questions</h2>
    <div><span>Check Our</span> <span class="description-title">Frequently Asked Questions</span></div>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-lg-8">

        <div class="faq-container">

          <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Non consectetur a erat nam at lectus urna duis?</h3>
            <div class="faq-content">
              <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h3>
            <div class="faq-content">
              <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
            <div class="faq-content">
              <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
            <div class="faq-content">
              <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
            <i class="faq-icon bi bi-question-circle"></i>
            <h3>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h3>
            <div class="faq-content">
              <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

        </div>

      </div>

    </div>

  </div>

</section><!-- /Faq Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <div><span>Check Our</span> <span class="description-title">Contact</span></div>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
      <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><!-- End Google Maps -->

    <div class="row gy-4">

      <div class="col-lg-4">
        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h3>Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <i class="bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Call Us</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Us</h3>
            <p>info@example.com</p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="col-lg-8">
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->
@endsection