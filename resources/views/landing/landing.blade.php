@extends('layouts.app2')

@section('content')
<!-- Vendor CSS Files -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<main class="main-content">
  <section>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
      <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
        
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>PSIwizard</span></h2>
            <p class="animate__animated fanimate__adeInUp">We are a platform that helps you find a job that suits your skills and interests. With our special algorithm, you can generate accurate and fast results in just a few minutes. Let's start searching for your ideal career.</p>
            <a href="/psi" class="btn-get-started animate__animated animate__fadeInUp scrollto">Start Making Decision</a>
          </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">How PSIwizard Works</h2>
            <p class="animate__animated animate__fadeInUp">PSIWizard unlocks your dream job potential with its powerful PSI algorithm. Simply input your job alternatives and criterion scores, and let PSIWizard generate a list of suitable job matches tailored to your unique profile. Start your job search journey with PSIWizard today!</p>
            <a href="/how-it-works" class="btn-get-started animate__animated animate__fadeInUp scrollto">How it Works</a>
          </div>
        </div>
        
        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">What is PSI?</h2>
            <p class="animate__animated animate__fadeInUp">Preferenced selection index (PSI) is a method used to determine the most suitable job for someone based on their abilities, interests, and experience. PSI measures how well a job fits with a person's profile, and by using this method, PSIwizard helps you make better decisions in your job search. Discover the best job opportunities for you with PSIwizard.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>
      </div>
      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
          </defs>
          <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
              <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
              </g>
              <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
                </g>
              </svg>
            </section>
            <!-- End Hero -->
            <main id="main" style="overflow: hidden;">
              <!-- ======= About Section ======= -->
              <section id="about" class="about">
                <div class="container">
                  
                  <div class="section-title" data-aos="zoom-out">
                    <h2>About</h2>
                    <p>Who we are</p>
                  </div>
                  
                  <div class="row content" data-aos="fade-up">
                    <div class="col-lg-6" >
                      <p class="text-justify">
                        PSIWizard provides a platform that makes it easy for users to determine criteria and generate a list of suitable jobs. Therefore, users can speed up the job search process and get more accurate results that match their profile. PSIWizard offers various features, such as:
                      </p>
                      <ul>
                        <li><i class="ri-check-double-line"></i> Special algorithm to generate PSI</li>
                        <li><i class="ri-check-double-line"></i> Specially designed criteria</li>
                        <li><i class="ri-check-double-line"></i> Accurate and fast results</li>
                      </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                      <p class="text-justify">PSIWizard is a job search tool that uses a multi-criteria decision-making method to generate a list of suitable jobs for users based on their abilities, interests, and work experience. By inputting multiple job alternatives and setting criteria scores, the tool provides a list of job matches that align with the user's profile, making it easier to find suitable employment quickly and accurately.</p>
                      <a href="/psi" class="btn-learn-more">Start Now</a>
                    </div>
                  </div>
                  
                </div>
              </section>
              <!-- End About Section -->
              <!-- ======= Counts Section ======= -->
              <section id="counts" class="counts">
                <div class="container" data-aos="fade-up">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                      <div class="count-box">
                        <i class="bi bi-file-check-fill" style="color: #fb6340;"></i>
                        <div>
                          <span data-purecounter-start="0" data-purecounter-end="{{ $count }}" data-purecounter-duration="1" class="purecounter"></span>
                          <p>Solved Case</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- End Counts Section -->
              <!-- ======= Contact Section ======= -->
              <section id="contact" class="contact">
                <div class="container">
                  <div class="section-title" data-aos="zoom-out">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                  </div>
                  <div class="row gy-4" data-aos="fade-up">
                    <div class="col-lg-6">
                      <div class="row gy-4">
                        <div class="col-md-6">
                          <div class="info-box">
                            <i class="bi bi-geo-alt-fill"></i>
                            <h3>Address</h3>
                            <p>Soekarno-Hatta Street,<br> No. 9, Malang, East Java, 65141</p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box">
                            <i class="bi bi-telephone-fill"></i>
                            <h3>Call Us</h3>
                            <p>+1 2345 67891 01<br>+6 2896 303037 41</p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box">
                            <i class="bi bi-envelope-fill"></i>
                            <h3>Email Us</h3>
                            <p>psiwizard@wizard.com<br>wizard@wizard.com</p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="info-box">
                            <i class="bi bi-clock-fill"></i>
                            <h3>Open Hours</h3>
                            <p>Monday - Friday<br>9:00AM - 08:00AM</p>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    
                    <div class="col-lg-6" data-aos="fade-up">
                      <form action="forms/contact.php" method="post" class="php-email-form">
                        <div class="row gy-4">
                          
                          <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                          </div>
                          
                          <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                          </div>
                          
                          <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                          </div>
                          
                          <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
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
              <!-- End Contact Section -->
            </main>
            <!-- ======= Footer ======= -->
            <footer id="footer" >
              <div class="container">
                <div class="copyright">
                  &copy; Copyright <strong><span>Selecao</span></strong>. All Rights Reserved
                </div>
              </div>
            </footer><!-- End Footer -->
          </section>
        </main>
        
        @endsection
        
