<?php
include('connection.php');
if(isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `info` VALUES ('', '$name', '$email', '$message')";
    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('Record Submitted')</script>";
        
    }
    else{
    echo "data not added";
}

}
?>
<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Road Rescue</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />

    <!--Google fonts links-->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!--Theme Responsive css-->
    <!-- <link rel="stylesheet" href="assets/css/responsive.css" /> -->

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>
  <body>
    <!-- Sections -->
    <section id="social" class="social">
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="social-wrapper">
            <div class="col-md-6">
              <div class="social-icon">
                <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="www.linkedin.com/in/minakshi-purohit-4427a1205"
                  ><i class="fa fa-linkedin"></i
                ></a> -->
              </div>
            </div>
            <div class="col-md-6">
              <div class="social-contact">
                <a href="https://api.whatsapp.com/send?phone=+918347338091&amp;text=Hello%20Rahul Makhija!">+91 7359865480</a>
                <a _ngcontent-ng-c675770353="" href="mailto:pminakshi133@gmail.com" class="text-white poppins400fs-14">pminakshi133@gmail.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /container -->
    </section>

    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <!-- <button
            type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false"
          > -->
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--Insert Your Logo here -->
          <a class="navbar-brand" href="#"><img src="assets/images/logo.png " alt="Logo"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="index.php">Home</a>
            </li>

            <li>
              <a
                href="file:///C:/xampp/htdocs/mini/Vehicle%20assistance/services.html"
                >Service</a
              >
            </li>
            <li>
              <a
                href="file:///C:/xampp/htdocs/mini/Vehicle%20assistance/price.html"
                >PRICE</a
              >
            </li>
            <li>
              <a
                href="file:///C:/xampp/htdocs/mini/Vehicle%20assistance/business.html"
                >Business</a
              >
            </li>
            <li>
              <a
                href="file:///C:/xampp/htdocs/mini/Vehicle%20assistance/contact.html"
                >Contact</a
              >
            </li>
            <li class="login">
              <a href="login.php">Sign In/Sign Up</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

    <!--Home page style-->
    <header id="home" class="home">
      <div class="overlay-fluid-block">
        <div class="container text-center">
          <div class="row">
            <div class="home-wrapper">
              <div class="col-md-10 col-md-offset-1">
                <div class="home-content">
                  <h1>Bike & Car Service</h1>
                  <h2>Anytime & Anywhere in India...</h2>
                  <p>
                    Road Rescue offers seamless bike and car servicing across
                    India, ensuring your vehicles are well-maintained wherever
                    you are. With us, enjoy hassle-free maintenance and stay
                    focused on what matters most to you.
                  </p>

                  
                          </form>
                        </div>
                        <!-- /input-group -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Sections -->
    
    <section id="service" class="service2 sections lightbg">
      <div class="container">
        <div class="row">
          <div class="main_service2">
            <div class="head_title text-center">
              <h2>SERVICES WE PROVIDE</h2>
              <p>
                <strong>Breakdown Assistance:</strong> Count on us for prompt
                assistance during unexpected breakdowns, ensuring you get back
                on the road swiftly.
              </p>
            </div>
            
            <div class="service_content">
              <div class="col-md-6 col-sm-6">
                <div class="single_service2">
                  <div class="single_service_left">
                    <img src="assets/images/car-front.svg" alt="" />
                  </div>
                  <div class="single_service_right">
                    <h2>Flat Tyre</h2>
                    <p>
                      Experience quick and reliable tube/tubeless puncture
                      repair. We'll get you back on the road fast.
                    </p>
                  </div>
                </div>
              </div>
              
              <div class="col-md-6 col-sm-6">
                <div class="single_service2">
                  <div class="single_service_left">
                    
                    </svg>
                    <img src="assets/images/fuel-pump.svg" alt="" />
                  </div>
                  <div class="single_service_right">
                    <h2>Fuel-Delivery</h2>
                    <p>
                      Get rapid fuel delivery to ensure your journey remains
                      uninterrupted and hassle-free, even during emergencies.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="single_service2">
                  <div class="single_service_left">
                    <img src="assets/images/truck-flatbed.svg" alt="" />
                  </div>
                  <div class="single_service_right">
                    <h2>Towing</h2>
                    <p>
                      Efficient and safe vehicle towing services for breakdowns
                      or accidents, ensuring minimal disruption to your journey.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="single_service2">
                  <div class="single_service_left">
                    <img src="assets/images/battery-charging.svg" alt="" />
                  </div>
                  <div class="single_service_right">
                    <h2>Battery-Jumpstart</h2>
                    <p>
                      Swiftly get back on the road with our reliable battery
                      jumpstart service, ensuring minimal delays to your
                      journey.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="single_service2">
                  <div class="single_service_left">
                    <img src="assets/images/unlock.svg" alt="" />
                  </div>
                  <div class="single_service_right">
                    <h2>Key-Unlock Assistance</h2>
                    <p>Rapid and dependable assistance for unlocking your vehicle's doors, ensuring you're back on track swiftly.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="single_service2">
                  <div class="single_service_left">
                    <img src="assets/images/ev-front-fill.svg" alt="" />
                  </div>
                  <div class="single_service_right">
                    <h2>Ignition Issue</h2>
                    
                        <p>Swift assistance for vehicle Ignition Issues.</p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Service2 Section -->

    <!-- Sections -->
    <section id="price" class="price sections">
      <div class="head_title text-center">
        <h1>Availability</h1>
        <p>Our large network is here to help you quickly all over the country. To find out if we can assist you in your location, just click here.</p>
      </div>
      <p _ngcontent-ng-c1919097673="" class="d-none d-lg-block pb-2 pt-2 pt-lg-0 pointer fs-14 poppins400 zoom_hover ng-tns-c1919097673-28" style="letter-spacing: 1.5; border-bottom: 2px solid white; width: fit-content;" tabindex="0">CHECK AVAILABILITY → </p>
               
               
              
           
                
                

    <!-- Sections -->
    <section id="business" class="portfolio sections">
      <div class="container">
        <div class="head_title text-center">
          <h1>Our Business Analytics Platform</h1>
          <p>
            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.
            Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
          </p>
        </div>

        <div class="row">
          <div class="portfolio-wrapper text-center">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="community-edition">
                <i class="fa fa-book"></i>
                <div class="separator"></div>
                <h4>Community Edition</h4>
                <p>
                  Visually explore your data through a free-form drag-and-drop
                  canvas, a broad range of modern data visualizations, and an
                  easy-to-use report authoring experience.
                </p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="community-edition">
                <i class="fa fa-bug"></i>
                <div class="separator"></div>
                <h4>Community Edition</h4>
                <p>
                  Visually explore your data through a free-form drag-and-drop
                  canvas, a broad range of modern data visualizations, and an
                  easy-to-use report authoring experience.
                </p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="community-edition">
                <i class="fa fa-gears"></i>
                <div class="separator"></div>
                <h4>Community Edition</h4>
                <p>
                  Visually explore your data through a free-form drag-and-drop
                  canvas, a broad range of modern data visualizations, and an
                  easy-to-use report authoring experience.
                </p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="community-edition">
                <i class="fa fa-external-link"></i>
                <div class="separator"></div>
                <h4>Community Edition</h4>
                <p>
                  Visually explore your data through a free-form drag-and-drop
                  canvas, a broad range of modern data visualizations, and an
                  easy-to-use report authoring experience.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Example row of columns -->
        <div class="row">
          <div class="portfolio-wrapper2 text-center">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="community-edition">
                <i class="fa fa-coffee"></i>
                <div class="separator"></div>
                <h4>Community Edition</h4>
                <p>
                  Visually explore your data through a free-form drag-and-drop
                  canvas, a broad range of modern data visualizations, and an
                  easy-to-use report authoring experience.
                </p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="community-edition">
                <i class="fa fa-tree"></i>
                <div class="separator"></div>
                <h4>Community Edition</h4>
                <p>
                  Visually explore your data through a free-form drag-and-drop
                  canvas, a broad range of modern data visualizations, and an
                  easy-to-use report authoring experience.
                </p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="community-edition">
                <i class="fa fa-paper-plane-o"></i>
                <div class="separator"></div>
                <h4>Community Edition</h4>
                <p>
                  Visually explore your data through a free-form drag-and-drop
                  canvas, a broad range of modern data visualizations, and an
                  easy-to-use report authoring experience.
                </p>
              </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="community-edition">
                <i class="fa fa-folder-open"></i>
                <div class="separator"></div>
                <h4>Community Edition</h4>
                <p>
                  Visually explore your data through a free-form drag-and-drop
                  canvas, a broad range of modern data visualizations, and an
                  easy-to-use report authoring experience.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /container -->
    </section>

    <section id="contact" class="contact sections">
      <div class="container">
        <div class="row">
          <div class="main_contact whitebackground">
            <div class="head_title text-center">
              <h2>GET IN TOUCH</h2>
              <p>
                SERVE WITH US AND EARN MORE
              </p>
            </div>
            <div class="contact_content">
              <div class="col-md-6">
                <div class="single_left_contact">
                  <form method="POST" id="formid">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        name="name"
                        placeholder="Full Name"
                        required=""
                      />
                    </div>

                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="Email"
                        required=""
                      />
                    </div>

                    <div class="form-group">
                      <textarea
                        class="form-control"
                        name="message"
                        rows="8"
                        placeholder="Message"
                      ></textarea>
                    </div>

                    <div class="center-content">
                      <input
                        type="submit"
                        name="Submit"
                        value="Submit"
                        class="btn btn-default"
                      />
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="single_right_contact">
                  <p>
                    Enter our network of service partners and become a respected member of a large technician family to unlock limitless earning potential. Seize this opportunity to expand your business by joining our service network. Let's work together towards unparalleled success!
                  </p>

                  <div class="contact_address margin-top-40">
                    <span>Vadodara</span>
                    <span>Gujarat,India</span>
                    <span class="margin-top-20">T: (+91) 8347338091</span>
                    <span>M: (+91) 7359865480</span>
                  </div>

                  <div class="contact_socail_bookmark">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href="@RahulMa55191563"><i class="fa fa-twitter"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Contact Section -->

    <section id="footer-menu" class="sections footer-menu">
      <div class="container">
        <div class="row">
          <div class="footer-menu-wrapper">
            <div class="col-md-8 col-sm-12 col-xs-12">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="menu-item">
                  <h5>Quick Links</h5>
                  <ul>
                    <li>About Us</li>
                    <li>Careers</li>
                    <li>Careers Blog</li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="menu-item">
                  <h5>Reach Us</h5>
                  <ul>
                    <li>  <!-- Unicode for telephone symbol -->
                     <a href="https://api.whatsapp.com/send?phone=+918347338091&amp;text=Hello%20Rahul Makhija!"><i class="telephone-number"></i>+91 7359865480</a></li>
                  </ul>
                </div>
                <div>
                  <h5>Email</h5>
                  <ul>
                    <li><a _ngcontent-ng-c675770353="" href="mailto:pminakshi133@gmail.com" class="text-white poppins400 fs-14">pminakshi133@gmail.com</a></li>
                  </ul>
                </div>
              </div>
                

              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="menu-item">
                  <h5>Information</h5>
                  <ul>
                    <li>SUPPORT</li>
                    <li>DEVELOPERS</li>
                    <li>BLOG</li>
                    <li>NEWSLETTER</li>
                    <li>PYRAMID ANALYTICS</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="menu-item">
                <h5>Newsletter</h5>
                <p>
                  Insights await in your company's data. Bring them into focus
                  with BlueLance.
                </p>
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your email address"
                  />
                  <input
                    type="submit"
                    class="form-control"
                    value="Use It Free"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Footer-->
    <footer id="footer" class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-wrapper">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="footer-brand">
                <img src="assets/images/logo.png" alt="logo" />
              </div>
            </div>

            

    <div class="scrollup">
      <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div>

    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
