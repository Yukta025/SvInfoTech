<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SV Info Tech</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <link href="assets/css/ninja-slider.css" rel="stylesheet" />
  <script src="assets/js/ninja-slider.js " type="text/javascript"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" style="background-color: white;">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>SV Info Tech</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#ninja-slider">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#Features">Features</a></li>
          <li><a class="nav-link scrollto" href="#Services">Services</a></li>
          <li><a class="nav-link scrollto" href="#Contact">Contact</a></li>
          <li><a class="getstarted" href="8a6544278ebe9e78ea831d31eb570b73devlineage.php">Login</a></li>
           </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  
      
  <div id="ninja-slider">
    <div class="slider-inner">
        <ul>
            <li>
            <?php
								require_once('dbConfig.php');
								$result = $conn->prepare("SELECT * FROM tbl_image where tbl_image_id = '1' ");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['tbl_image_id'];
							?>
               <?php if($row['image_location'] != ""): ?>
									<a class="ns-img" href="uploads/<?php echo $row['image_location']; ?>"></a>
									<?php else: ?>
                    <a class="ns-img" href="assets/img/istockphoto-870402320-612x612.jpg"></a>
									<?php endif; ?>
                  <?php } ?>

                  <?php
                require_once('dbConfig.php');
                $result = $conn->prepare("SELECT * FROM user where user_id = '1' ");
                $result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['user_id'];
                ?>
                  <?php if($row['text'] != ""): ?>
                <div class="caption"><?php echo $row['text']?></div>
                <?php else: ?>
                  <div class="caption">Creating the access to financing</div>
                  <?php endif; ?>
                  <?php } ?>
            </li>
            <li>
            <?php
								require_once('dbConfig.php');
								$result = $conn->prepare("SELECT * FROM tbl_image where tbl_image_id = '2' ");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['tbl_image_id'];
							?>
               <?php if($row['image_location'] != ""): ?>
									<a class="ns-img" href="uploads/<?php echo $row['image_location']; ?>"></a>
									<?php else: ?>
                    <a class="ns-img" href="assets/img/bf1913b8-e62d-11eb-ae62-001543f36ea0_1626437112344.jpeg"></a>
									<?php endif; ?>
                  <?php } ?>

                  <?php
                require_once('dbConfig.php');
                $result = $conn->prepare("SELECT * FROM user where user_id = '2' ");
                $result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['user_id'];
                ?>
                  <?php if($row['text'] != ""): ?>
                <div class="caption"><?php echo $row['text']?></div>
                <?php else: ?>
                  <div class="caption">Making change in Finance sector</div>
                  <?php endif; ?>
                  <?php } ?>
                <!-- <a class="ns-img" href="assets/img/bf1913b8-e62d-11eb-ae62-001543f36ea0_1626437112344.jpeg"></a>
                <div class="caption">Making change in Finance sector</div> -->
            </li>
            <li>
            <?php
								require_once('dbConfig.php');
								$result = $conn->prepare("SELECT * FROM tbl_image where tbl_image_id = '3' ");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['tbl_image_id'];
							?>
               <?php if($row['image_location'] != ""): ?>
									<a class="ns-img" href="uploads/<?php echo $row['image_location']; ?>"></a>
									<?php else: ?>
                    <a class="ns-img" href="assets/img/women-save-and-lend-amongst-each-other-in-a-village-savings-and-loan-micro-finance-banking-group-in-rural-bihar-india-south-east-asia-2CC5X8E.jpg"></a>
									<?php endif; ?>
                  <?php } ?>

                  <?php
                require_once('dbConfig.php');
                $result = $conn->prepare("SELECT * FROM user where user_id = '3' ");
                $result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['user_id'];
                ?>
                  <?php if($row['text'] != ""): ?>
                <div class="caption"><?php echo $row['text']?></div>
                <?php else: ?>
                  <div class="caption">Time to Participate financially</div>
                  <?php endif; ?>
                  <?php } ?>
                <!-- <a class="ns-img" href="assets/img/women-save-and-lend-amongst-each-other-in-a-village-savings-and-loan-micro-finance-banking-group-in-rural-bihar-india-south-east-asia-2CC5X8E.jpg"></a>
                <div class="caption">Participate financially</div> -->
            </li>
            <!-- <li>
                <a class="ns-img" href="assets/img/portfolio/portfolio-4.jpg"></a>
                <div class="caption">NON</div>
            </li> -->
            
        </ul>
        <div class="navsWrapper">
            <div id="ninja-slider-prev"></div>
            <div id="ninja-slider-next"></div>
        </div>
    </div>
</div>
  
 <!-- end slide -->

  <main id="main">
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
         
          <span class="section-divider"></span>
          <p class="section-description">
            About Us   </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img" data-aos="fade-right">
          <figure>
                    <img src="assets/img/upmap.png" alt="">
                    <figcaption style="font-style: italic; text-align: center;">We have our branches over these places in  uttar-pradesh</figcaption></figure>
          </div>

          <div class="col-lg-6 content" data-aos="fade-left">
            <br>
            <h2>Sv info tech is a financial inclusion organization. </h2>
             <p>
              We are an India-based fintech startup specializing in providing financial services to every sector. Our mission is to provide digital finance for the more than two billion unbanked people in rural India and make financial inclusion a reality
Our goal is to make it easier for the unbanked and underbanked to borrow in a simple, secure, and convenient way.

  </p>
<p>We at SV InfoTech believe that a decentralized economy promises new opportunities and business models for businesses of all sizes, from small- and medium-sized enterprises (SMEs) to large enterprises. Our aim is to create a decentralized financial system that will support all sectors of the economy. This includes microfinance, financial technology and insurance services, providing SMEs with access to capital, international payments and liquidity management, as well as enabling them with exchange rates and other payment services. Our goal is that blockchain technology can be used by every sector of the global economy in one way or another — be it via Hyperledger technology or not, on their own application layer or integrated with existing systems.</p>         

             <p>We have been working with the unbanked and low income clients, providing basic savings and credit services availabe to them in a simplified smart way.</p>
              </div>
        </div>

      </div>
    </section><!-- #about -->
    
    <!-- ======= Features Section ======= -->
    <section id="Features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Features</h2>
          <p>Creating an impact by collaborative intelligence</p>
        </header>

        <div class="row">

          <div class="col-lg-6" data-aos="fade-right">
            <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_wthp1bbd.json"  background="transparent"  speed="1"  style="width: 100%; height: 600px;"  loop  autoplay></lottie-player>
           <!-- <img src="assets/img/high-tech-and-touch-1.svg" class="img-fluid" alt=""> -->
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Seamless doorstep banking</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Predictive AI</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Smart bill portal</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Largest neo bank</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Advance business model</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>collaborative intelligence</h3>
                </div>
              </div>

            </div>
          </div>

        </div> <!-- / row -->
   
        <!-- Feature Tabs -->
       
        <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Sv InfoTech Business model linking individuals to financial services</h3>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">B2B</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">B2C</a>
              </li>
              
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                <p>B2B stands for business-to-business</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Who uses B2B?</h4>
                </div>
                <p> any business that wants to do business online or be connected to the latest tech trends. Online-only retailers and tech companies are two of the most prolific users of B2B fintech.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>SVInfoTech Role in B2B</h4>
                </div>
                <p>Partnering with financial institutions and governments to setup banking outlets in remote areas.</p>
              </div><!-- End Tab 1 Content -->

              <div class="tab-pane fade show" id="tab2">
                <p>B2C stands for business-to-consumer</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Who Uses B2C?</h4>
                </div>
                <p>The audience for B2C fintech can be incredibly diverse. There are B2C fintech solutions made for pretty much anyone who wants to engage.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>SVInfoTech Role in B2C</h4>
                </div>
                <p>Providing a marketplace of sachet financial services and digital payments to individuals and micro-enterprises.</p>
              </div><!-- End Tab 2 Content -->

            

            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-left" >
            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_y2G27a.json"  background="transparent"  speed="1"  style="width: 100%; height: 400px;"  loop  autoplay></lottie-player>
            <!-- <img src="assets/img/Business-model-1-1536x1152 (1).jpg" class="img-fluid" alt="">
          </div> -->

        </div><!-- End Feature Tabs -->
</section>
        <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="Services" class="services">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <p>SV InfoTech provides solutions to financial services to make a change in financial sector</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <h3>Smart Bill Portal</h3>
              <p>Smart bill portal can help every individual to Participate financially in an easy way.</p>
              <!-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
               <!-- <i class="ri-discuss-line icon"></i> -->
              <h3>Business Banking</h3>
              <p>Helping MSMEs Build Their Dreams With Easy Overdraft Facilities and Procuring Working Capital For Your Business.</p>
              <!-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
                <!-- <i class="ri-discuss-line icon"></i> -->
              <h3>Digital Payment</h3>
              <p>Largest Digital Banking Outreach To Bank On with new payments experience</p>
              <!-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <!-- <i class="ri-discuss-line icon"></i> -->
              <h3>Digital Lending</h3>
              <p>Access to capital for the credit invisible, is now a reality with SV InfoTech's digital lending platform </p>
              <!-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
                <!-- <i class="ri-discuss-line icon"></i> -->
              <h3>Smart Recovery</h3>
              <p>Smart Recovery makes recovery & delinquency management unified, automated, and seamless by combining human intelligence with technological interventions</p>
              <!-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
             <!-- <i class="ri-discuss-line icon"></i> -->
              <h3>Mutual Funds</h3>
              <p>Offering An Accessible Way To Build Wealth For Everyone and Achieve their Financial Goals</p>
              <!-- <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a> -->
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Services Section -->
    <section id="#" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
         
          <span class="section-divider"></span>
          <p class="section-description">
          SV Info Tech Impact   </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img" data-aos="fade-right">
          
                    
					<lottie-player id="firstLottie" src="https://assets6.lottiefiles.com/private_files/lf30_def5qdwp.json"  background="transparent"  speed="1"  style="width: 100%; height: 450px ;" data-aos="fade-left"  ></lottie-player>
           				
           
          </div>

          <div class="col-lg-6 content" data-aos="fade-left">
            
            <p>Being present at underserved areas which often gives near exclusivity in these location which results in consistent footfalls.</p>
              
              <p>SV Info Tech is providing digital finance for the more than two billion unbanked people in rural India and make financial inclusion a reality.
              </p>
            <p>Introducing digital payments, in an economic landscape that is fuelled by misconceptions and bound by traditional beliefs is challenging.</p>
              
             <p> Sv Info Tech has made the successful transition to digital payments with its innovative and tech-powered solutions.</p>
            <p>Sv InfoTech is Providing value added services such as insurance or account opening or cash withdrawals from one’s phone or CSPs.</p>
          <p>With Sv Info Tech indigenously developed technology platform, SV is bringing access to capital to the unbanked, by overcoming challenges that have been a traditional bottleneck</p>  
          </div>
        </div>

      </div>
    </section>
         
           
    <!-- ======= Contact Section ======= -->
    <section id="Contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>SV Info Tech<br>Mirzapur, Uttar Pradesh</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+91 7705890007<br>+91 7394944348</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>svinfotech@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="mail_handle.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="Name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="Email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="Subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="Message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit" name="Submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Subscribe our Newsletter to get all updates regarding our services</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>SV Info Tech</span>
            </a>
            <p>SV InfoTech is a technology company that provides solutions for financial services to every sector. Our goal is to make banking easy, effective and accessible for all members of society.

            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#Features">Features</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#Services">Service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#Services">Smart Bill Portal</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#Services">Digital Payment</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#Services">Digital Lending</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#Services">Mutual Funds</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#Services">Smart Recovery</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              SV InfoTech <br>
              Mirzapur<br>
              Uttar Pradesh<br><br>
              <strong>Phone:</strong> +91 7705890007<br>
              <strong>Email:</strong> svinfotech@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SvInfoTech</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="">Devlineage</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
 
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    LottieInteractivity.create({
        mode:"scroll",
        player:'#firstLottie',
        actions: [
            {
                visibility:[0,1],
                type: "seek",
                frames: [0, 121],
            },
        ]
    });
    </script>
</body>

</html>