<div>
  <header class="header d-flex align-items-center fixed-top" id="header">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a class="logo d-flex align-items-center me-lg-0 me-auto" href="index.html">
        <h1 class="sitename">CSD</h1>
      </a>

      <nav class="navmenu" id="navmenu">
        <ul>
          <li><a class="active" href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li class="dropdown">
            <a href="#"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#construction">Construction</a></li>
              <li><a href="#est">Estate Management</a></li>
              <li><a href="#supplies">Supplies</a></li>
              <li><a href="#livestock">Livestock</a></li>
              <li><a href="#feed">Feed</a></li>
            </ul>
          </li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a class="btn-getstarted" href="#request-service">Request a Service</a></li>
          <div></div>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <section class="hero section dark-background" id="hero">

      <img data-aos="fade-in" src="build/assets/img/hero-bg.jpg" alt="">

      <div class="container">

        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-6 col-lg-8">
            <h2>Crystaline Stone Dynamics<span>.</span></h2>
            <p>Your trusted partner for reliable supplies, construction projects, and quality livestock and feed
              solutions.</p>
          </div>
        </div>

        <div class="row gy-4 justify-content-center mt-5" data-aos="fade-up" data-aos-delay="200">
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-truck"></i>
              <h3><a href="">Supplies</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-house"></i>
              <h3><a href="">Construction</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <i class="bi bi-egg-fried"></i>
              <h3><a href="">Livestock</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <i class="bi bi-droplet"></i>
              <h3><a href="">Feed</a></h3>
            </div>
          </div>
          <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="icon-box">
              <i class="bi bi-buildings"></i>
              <h3><a href="">Estate Management</a></h3>
            </div>
          </div>
        </div>

      </div>

    </section>
    <section class="about section" id="about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 order-lg-2 order-1">
            <img class="img-fluid" src="build/assets/img/about.jpg" alt="About CSD">
          </div>
          <div class="col-lg-6 order-lg-1 content order-2">
            <h3>About CSD Crystalline Stone Dynamic</h3>
            <p class="fst-italic" style="font-size: x-large;">
              More than just a company, Crystal Stone Dynamic(CSD) is a team with a mission
              to deliver genuine solutions that matter. We focus on supplies, construction and livestock management
              and adjust our services based on the specific needs of each client. From ensuring critical materials get
              delivered on time, to building homes and infrastructure that last
              decades, to assisting farmers in adopting improved livestock management practices, we’re here.” CSD,
              Dynamic Solutions, Real Impact.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> Delivering quality supplies on time to meet client demands.</li>
              <li><i class="bi bi-check2-all"></i> Building houses, roads, and infrastructure with excellence.</li>
              <li><i class="bi bi-check2-all"></i> Offering top-grade livestock and feed solutions for agricultural
                needs.</li>
            </ul>
            <p>
              By leveraging innovation and expertise, CSD aims to empower businesses and individuals with the
              resources they need to succeed.
            </p>
          </div>
        </div>

      </div>

    </section>

    {{-- <!-- Clients Section -->
      <section class="clients section" id="clients">

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
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><img class="img-fluid" src="build/assets/img/clients/client-1.png"
                  alt="">
              </div>
              <div class="swiper-slide"><img class="img-fluid" src="build/assets/img/clients/client-2.png"
                  alt="">
              </div>
              <div class="swiper-slide"><img class="img-fluid" src="build/assets/img/clients/client-3.png"
                  alt="">
              </div>
              <div class="swiper-slide"><img class="img-fluid" src="build/assets/img/clients/client-4.png"
                  alt="">
              </div>
              <div class="swiper-slide"><img class="img-fluid" src="build/assets/img/clients/client-5.png"
                  alt="">
              </div>
              <div class="swiper-slide"><img class="img-fluid" src="build/assets/img/clients/client-6.png"
                  alt="">
              </div>
              <div class="swiper-slide"><img class="img-fluid" src="build/assets/img/clients/client-7.png"
                  alt="">
              </div>
              <div class="swiper-slide"><img class="img-fluid" src="build/assets/img/clients/client-8.png"
                  alt="">
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

      </section><!-- /Clients Section --> --}}
    <section class="features section" id="features">

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="build/assets/img/features-bg.jpg" alt="CSD Features">
          </div>
          <div class="col-lg-6">

            <div class="features-item d-flex ps-lg-3 pt-lg-0 ps-0 pt-4" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-box-seam flex-shrink-0"></i>
              <div>
                <h4>Reliable Supplies</h4>
                <p>We ensure timely delivery of high-quality supplies to meet your business and personal needs.</p>
              </div>
            </div>

            <div class="features-item d-flex ps-lg-3 mt-5 ps-0" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-building flex-shrink-0"></i>
              <div>
                <h4>Precision Construction</h4>
                <p>Our construction services bring your visions to life, from houses to roads and beyond.</p>
              </div>
            </div>

            <div class="features-item d-flex ps-lg-3 mt-5 ps-0" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-basket flex-shrink-0"></i>
              <div>
                <h4>Livestock Solutions</h4>
                <p>We offer high-quality livestock and feed options tailored to agricultural needs.</p>
              </div>
            </div>

            <div class="features-item d-flex ps-lg-3 mt-5 ps-0" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-stars flex-shrink-0"></i>
              <div>
                <h4>Customer-Centric Approach</h4>
                <p>We prioritize your satisfaction through personalized service and unwavering dedication.</p>
              </div>
            </div>

          </div>
        </div>

      </div>

    </section>

    <section class="services section" id="services">

      <div class="section-title container" data-aos="fade-up">
        <h2>Our Services</h2>
        <p>Explore the wide range of services we offer to meet your needs.</p>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-box-seam"></i>
              </div>
              <h3>Supplies</h3>
              <p>From everyday essentials to specialized items, we ensure timely and quality delivery to meet your
                requirements.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-building"></i>
              </div>
              <h3>Construction</h3>
              <p>We specialize in constructing houses, roads, and other infrastructure with precision and care.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-egg-fried"></i>
              </div>
              <h3>Livestock</h3>
              <p>Providing high-quality livestock solutions to support your agricultural ventures.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-droplet"></i>
              </div>
              <h3>Feed</h3>
              <p>Offering premium feed options to keep your livestock healthy and thriving.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-person-check"></i>
              </div>
              <h3>Custom Requests</h3>
              <p>Have a unique need? We work closely with you to deliver customized solutions.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-buildings"></i>
              </div>
              <h3><a href="">Estate Management</a></h3>
              <p>Have a unique need? We work closely with you to deliver customized solutions.</p>
            </div>
          </div>

        </div>

      </div>

    </section>

    <section class="call-to-action section dark-background" id="call-to-action">

      <img src="build/assets/img/cta-bg.jpg" alt="Call to Action Background">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Partner with CSD Today</h3>
              <p>
                Ready to transform your vision into reality? Whether you need reliable supplies, precision
                construction, or quality livestock and feed, CSD is here to help.
              </p>
              <a class="cta-btn" href="#contact">Get in Touch</a>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- Portfolio Section -->
    <section class="portfolio section" id="portfolio">

      <!-- Section Title -->
      <div class="section-title container" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Check our Portfolio</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li class="filter-active" data-filter="*">All</li>
            <li data-filter=".filter-seedlings">Seedlings</li>
            <li data-filter=".filter-plants">Plants</li>
            <li data-filter=".filter-poultry">Poultry</li>
          </ul>

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            @foreach ($portfolios['seedlings'] as $seedling)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-seedlings">
                <img class="img-fluid" src="{{ $seedling['image'] }}" alt="">
                <div class="portfolio-info">
                  <h4>{{ $seedling['name'] }}</h4>
                  <p>{{ $seedling['info'] }} </p>
                  <a class="glightbox preview-link" data-gallery="portfolio-gallery-app"
                    href="{{ $seedling['image'] }}" title="{{ $seedling['name'] }}"><i class="bi bi-zoom-in"></i></a>
                  <a class="details-link" href="portfolio-details.html" title="{{ $seedling['info'] }}"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            @endforeach
            @foreach ($portfolios['plants'] as $plants)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-plants">
                <img class="img-fluid" src="{{ $plants['image'] }}" alt="">
                <div class="portfolio-info">
                  <h4>{{ $plants['name'] }}</h4>
                  <p>{{ $plants['info'] }}</p>
                  <a class="glightbox preview-link" data-gallery="portfolio-gallery-product"
                    href="{{ $plants['image'] }}" title="{{ $plants['name'] }}"><i class="bi bi-zoom-in"></i></a>
                  <a class="details-link" href="portfolio-details.html" title="{{ $plants['info'] }}"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            @endforeach
            @foreach ($portfolios['poultry'] as $poultry)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-poultry">
                <img class="img-fluid" src="{{ $poultry['image'] }}" alt="">
                <div class="portfolio-info">
                  <h4>{{ $poultry['name'] }}</h4>
                  <p>{{ $poultry['info'] }}</p>
                  <a class="glightbox preview-link" data-gallery="portfolio-gallery-branding"
                    href="{{ $poultry['image'] }}" title="{{ $poultry['name'] }}"><i class="bi bi-zoom-in"></i></a>
                  <a class="details-link" href="portfolio-details.html" title="{{ $poultry['info'] }}"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            @endforeach

          </div>

        </div>

      </div>

    </section>

    <section class="stats section" id="stats">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-lg-5">
            <img class="img-fluid" src="build/assets/img/stats-img.png" alt="CSD Stats" height="80%">
          </div>

          <div class="col-lg-6">

            <h3 class="fw-bold fs-2 mb-3">Empowering Businesses with Results</h3>
            <p>
              At CSD, our focus is on delivering excellence in every project. Here’s a look at our accomplishments.
            </p>

            <div class="row gy-4">

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-emoji-smile flex-shrink-0"></i>
                  <div>
                    <span class="purecounter" data-purecounter-start="0" data-purecounter-end="300"
                      data-purecounter-duration="1"></span>
                    <p><strong>Happy Clients</strong> Trusted us for their needs.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-journal-richtext flex-shrink-0"></i>
                  <div>
                    <span class="purecounter" data-purecounter-start="0" data-purecounter-end="500"
                      data-purecounter-duration="1"></span>
                    <p><strong>Projects Delivered</strong> Across multiple sectors.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-headset flex-shrink-0"></i>
                  <div>
                    <span class="purecounter" data-purecounter-start="0" data-purecounter-end="2000"
                      data-purecounter-duration="1"></span>
                    <p><strong>Hours of Support</strong> Dedicated to client success.</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="stats-item d-flex">
                  <i class="bi bi-people flex-shrink-0"></i>
                  <div>
                    <span class="purecounter" data-purecounter-start="0" data-purecounter-end="50"
                      data-purecounter-duration="1"></span>
                    <p><strong>Team Members</strong> Delivering excellence daily.</p>
                  </div>
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!-- Testimonials Section -->
    {{-- <section class="testimonials section dark-background" id="testimonials">

        <img class="testimonials-bg" src="build/assets/img/testimonials-bg.jpg" alt="">

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
                  <img class="testimonial-img" src="build/assets/img/testimonials/testimonials-1.jpg" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                      Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img class="testimonial-img" src="build/assets/img/testimonials/testimonials-2.jpg" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram
                      malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img class="testimonial-img" src="build/assets/img/testimonials/testimonials-3.jpg" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                      minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img class="testimonial-img" src="build/assets/img/testimonials/testimonials-4.jpg" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                      velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                      veniam.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img class="testimonial-img" src="build/assets/img/testimonials/testimonials-5.jpg" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam
                      enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi
                      cillum quid.</span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>

      </section><!-- /Testimonials Section --> --}}

    <!-- Team Section -->
    <section class="team section" id="team">

      <!-- Section Title -->
      <div class="section-title container" data-aos="fade-up">
        <h2>Team</h2>
        <p>our Team</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img class="img-fluid" src="build/assets/img/team/CEO.png" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Abubakar Lawan Dalorima</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img class="img-fluid" src="build/assets/img/team/manager.png" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ali Mustapha Shettima</h4>
                <span>Manager</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          {{-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img class="img-fluid" src="build/assets/img/team/team-3.jpg" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img class="img-fluid" src="build/assets/img/team/team-4.jpg" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div><!-- End Team Member --> --}}

        </div>

      </div>

    </section>

    <!-- Contact Section -->
    <section class="contact section" id="contact">

      <!-- Section Title -->
      <div class="section-title container" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        {{-- <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
              style="border:0; width: 100%; height: 270px;" frameborder="0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps --> --}}

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>No. C7 Assurance Plaza, Giwa Barrack Road Maiduguri.</p>
                <p>Borno State, NG</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+234 70 3212 5158</p>
                <p>+234 80 2840 9874</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>support@csd.com.ng</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form class="php-email-form" data-aos="fade-up" data-aos-delay="200" action="forms/contact.php"
              method="post">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input class="form-control" name="name" type="text" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6">
                  <input class="form-control" name="email" type="email" placeholder="Your Email"
                    required="">
                </div>

                <div class="col-md-12">
                  <input class="form-control" name="subject" type="text" placeholder="Subject" required="">
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
          </div>

        </div>

      </div>

    </section>

  </main>
</div>
