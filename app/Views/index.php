<!-- /*
* Template Name: Minimal
* Template Author: Untree.co
* Author URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="<?=base_url('assets/favicon.png')?>">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=PT+Mono&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/owl.carousel.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/owl.theme.default.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/jquery.fancybox.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/fonts/icomoon/style.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/fonts/flaticon/font/flaticon.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/aos.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">

  <title>Garuh CV</title>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="100">

  <div class="lines-wrap">
    <div class="lines-inner">
      <div class="lines"></div>
    </div>
  </div>
  <!-- END lines -->

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
  
  <nav class="site-nav dark mb-5 site-navbar-target">
    <div class="container">
      <div class="site-navigation">
        <a href="#" class="logo m-0">Home<span class="text-primary">.</span></a>

        <ul class="js-clone-nav d-none d-lg-inline-none site-menu float-right site-nav-wrap">
          <li><a href="#home-section" class="nav-link active">Home</a></li>
          <li><a href="#portfolio-section" class="nav-link">Portfolio</a></li>
          <li><a href="#about-section" class="nav-link">About</a></li>
          <li><a href="#contact-section" class="nav-link">Contact us</a></li>
        </ul>

        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-inline-block" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </nav>



  <div class="untree_co-section pb-0" id="home-section">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <h1 class="heading gsap-reveal-hero mb-3"><strong>Garuh<span class="text-primary">.</span> Portfolio</strong></h1>
          <h2 class="subheading gsap-reveal-hero mb-4">
            Saya adalah seorang mahasiswa Teknik Informatika semester 6 di Universitas Muhammadiyah Sukabumi, alasan saya memilih program studi ini karena saya ingin menjadi seorang Programmer.
          </h2>
          <p class="gsap-reveal-hero"><a href="https://instagram.com/itsme_meidy" target="_blank" class="btn btn-outline-black">Find me on Instagram</a></p>    
        </div>
      </div>
      
    </div>
  </div>


  <div class="untree_co-section untree_co-section-4 pb-0"  id="portfolio-section">
    <div class="container">


      <div class="relative"><div class="loader-portfolio-wrap"><div class="loader-portfolio"></div></div> </div>
      <div id="portfolio-single-holder"></div>

      <div class="portfolio-wrapper">

        <div id="posts" class="row">

          <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
            <a href="index" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="2">
              <div class="overlay">
                <span class="wrap-icon icon-link2"></span>
                <div class="portfolio-item-content">
                  <h3>Taekwondo</h3>
                  <p>Sports, Fights</p>
                </div>
              </div>
              <img src="<?=base_url('assets/images/taek.jpg')?>" class="lazyload  img-fluid" alt="Images" />
            </a>
          </div>

          <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
            <a href="index" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="3">
              <div class="overlay">
                <span class="wrap-icon icon-link2"></span>
                <div class="portfolio-item-content">
                  <h3>Coding</h3>
                  <p>web, logic, program</p>
                </div>
              </div>
              <img src="<?=base_url('assets/images/cd.jpeg')?>" class="lazyload  img-fluid" alt="Images" />
            </a>
          </div>

          <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
            <a href="index" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="3">
              <div class="overlay">
                <span class="wrap-icon icon-link2"></span>
                <div class="portfolio-item-content">
                  <h3>UI/UX Design</h3>
                  <p>web, design, arts</p>
                </div>
              </div>
              <img src="<?=base_url('assets/images/uix.jpg')?>" class="lazyload  img-fluid" alt="Images" />
            </a>
          </div>

          <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
            <a href="index" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="2">
              <div class="overlay">
                <span class="wrap-icon icon-link2"></span>
                <div class="portfolio-item-content">
                  <h3>Valorant e-sport</h3>
                  <p>gamers, athlete, esport</p>
                </div>
              </div>
              <img src="<?=base_url('assets/images/valo.jpg')?>" class="lazyload  img-fluid" alt="Images" />
            </a>
          </div>

          <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
            <a href="index" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="3">
              <div class="overlay">
                <span class="wrap-icon icon-link2"></span>
                <div class="portfolio-item-content">
                  <h3>Networking</h3>
                  <p>internet, bandwidth</p>
                </div>
              </div>
              <img src="<?=base_url('assets/images/nt.jpg')?>" class="lazyload  img-fluid" alt="Images" />
            </a>
          </div>

          <div class="item web branding col-sm-6 col-md-6 col-lg-4 isotope-mb-2">
            <a href="index" class="portfolio-item ajax-load-page isotope-item gsap-reveal-img" data-id="3">
              <div class="overlay">
                <span class="wrap-icon icon-link2"></span>
                <div class="portfolio-item-content">
                  <h3>Arts</h3>
                  <p>color, brainstorming</p>
                </div>
              </div>
              <img src="<?=base_url('assets/images/arts.jpeg')?>" class="lazyload  img-fluid" alt="Images" />
            </a>
          </div>


        </div>
      </div>


        <!-- </div>
        </div> -->
      </div>
    </div>


    <div class="untree_co-section pb-0" id="about-section">
      <div class="container">
        <div class="row justify-content-center mb-3">
          <div class="col-lg-7 mx-auto text-center author-wrap">
            <img src="<?=base_url('assets/images/fav-icon2.png')?>" alt="Image" class="img-fluid rounded-circle mb-3">
            <h3 class="text-black h5 font-weight-bold mb-2 gsap-reveal-hero">M. Garuh Meidy Putra</h3>
            <p class="gsap-reveal-hero">Athlete & Student</p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-7">
          <p class="gsap-reveal-hero">Name: <span><?= esc($about['name']) ?></span></p>
           <p class="gsap-reveal-hero">Profile: <span><?= esc($about['hobby']) ?></span></p>
            <p class="gsap-reveal-hero">Email: <span><?= esc($about['email']) ?></span></p>
             <p class="gsap-reveal-hero">Address: <span><?= esc($about['address']) ?></span></p>
             <p class="gsap-reveal-hero">About Me: </p>
            <p class="gsap-reveal-hero">Halo! saya adalah M. Garuh Meidy Putra, saya sangat senang bermain game dan mengeksplorasi dunia virtual. Saat tidak sibuk dengan tugas kuliah atau latihan taekwondo, Anda kemungkinan akan menemukan saya asyik mengikuti petualangan seru di berbagai judul game favorit saya. Saya percaya bahwa dalam setiap tantangan yang saya hadapi di dunia digital, ada pelajaran berharga yang bisa diambil untuk diterapkan dalam kehidupan nyata. </p>

            <p class="gsap-reveal-hero">Selain itu, sebagai seorang atlit taekwondo, saya telah belajar tentang dedikasi, disiplin, dan ketekunan, yang saya terapkan dalam segala aspek kehidupan saya, termasuk dalam mengejar gelar di jurusan Computer Science. Kombinasi antara kecintaan pada teknologi dan keahlian dalam olahraga telah membentuk identitas saya yang unik dan semangat saya untuk terus berkembang.</p>

            <p class="gsap-reveal-hero text-center"><a href="https://instagram.com/itsme_meidy" target="_blank" class="btn btn-outline-black">Instagram</a></p>
          </div>
        </div>
      </div>
    </div>


    <div class="untree_co-section pb-0">
      <div class="container">
        <div class="row mb-4">
          <div class="col-lg-7 text-center mx-auto">
            <h2 class="section-heading gsap-reveal-hero mb-0"><strong>My Skills</strong></h2>
            <div class="wave gsap-reveal-hero" >
              <svg>
                <path d="M10,10 L50,100 L90,50" stroke="#0389ff"></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center" data-aos="fade-up" data-aos-delay="0">
            <div class="progressbar" data-animate="false">
              <div class="circle" data-percent="98">
                <div class="number"></div>
                <p class="caption">Taekwondo Mentor</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="progressbar" data-animate="false">
              <div class="circle" data-percent="85">
                <div class="number"></div>
                <p class="caption">UI/UX Design</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="progressbar" data-animate="false">
              <div class="circle" data-percent="70">
                <div class="number"></div>
                <p class="caption">Mobile App</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="progressbar" data-animate="false">
              <div class="circle" data-percent="79">
                <div class="number"></div>
                <p class="caption">Mikrotik</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="untree_co-section" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-7 text-center mx-auto">
            <h2 class="section-heading gsap-reveal-hero mb-0"><strong>Contact</strong></h2>
            <p class="gsap-reveal-hero">Available for work. Get in touch</p>

            <div class="wave gsap-reveal-hero" >
              <svg>
                <path d="M10,10 L50,100 L90,50" stroke="#0389ff"></path>
              </svg>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <form action="#">
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" placeholder="Firstname">
                </div>
                <div class="col-lg-6 form-group">
                  <input type="text" class="form-control" placeholder="Lastname">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <input type="email" class="form-control" placeholder="Email address">
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 form-group">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Write your message..."></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-12 form-group">
                  <input type="submit" class="btn btn-black" value="Send Message">
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-6">
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d320.12856481718734!2d-73.97263090448001!3d40.78263296621774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588ff21eaaab%3A0xd0128d5d89a30429!2sMargarita%20Anthoine!5e0!3m2!1sen!2sph!4v1597149027268!5m2!1sen!2sph"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-footer">
      <div class="container">
        <div class="row">
         
          <div class="col-lg-3">
            <div class="widget">
              <h3>Connect</h3>
              <ul class="list-unstyled social">
                <li><a href="#"><span class="icon-instagram"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-pinterest"></span></a></li>
                <li><a href="#"><span class="icon-dribbble"></span></a></li>
              </ul>
            </div> <!-- /.widget -->
          </div> <!-- /.col-lg-3 -->
        </div> <!-- /.row -->

        <div class="row mt-5">
          <div class="col-12 text-center">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  

              **==========
            -->
            <p class="mb-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by By Garuh Meidy</a> <!-- License information: https://untree.co/license/ -->
            </p>
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.animateNumber.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.waypoints.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.fancybox.min.js')?>"></script>
    <script src="<?=base_url('assets/js/aos.js')?>"></script>
    <script src="<?=base_url('assets/js/wave-animate.js')?>"></script>
    <script src="<?=base_url('assets/js/circle-progress.js')?>"></script>
    <script src="<?=base_url('assets/js/imagesloaded.pkgd.js')?>"></script>
    <script src="<?=base_url('assets/js/isotope.pkgd.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.easing.1.3.js')?>"></script>
    <script src="<?=base_url('assets/js/TweenMax.min.js')?>"></script>
    <script src="<?=base_url('assets/js/ScrollMagic.min.js')?>"></script>
    <script src="<?=base_url('assets/js/scrollmagic.animation.gsap.min.js')?>"></script>
z

    <script src="<?=base_url('assets/js/custom.js')?>"></script>
    
  </body>

  </html>
