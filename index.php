<?php
  session_start();
  require("connect.php");
  
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>THAQAAFAT AL-ISLAAMIYYA</title>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/custom-elements/1.5.0/custom-elements.min.js" integrity="sha512-QEq2OoCw4DbyQHVHnjan2wOgKlnPHyUzB/OEpLKXk0OJyifj9a6ulr+tXPdmqx9dhIp9q3D+F9+zHaZE9XBo9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/responsive-tabs/1.4.4/js/jquery.responsiveTabs.min.js" integrity="sha512-JivHCVsojGgBlnpZZg9V5gOlujqyOSjdUZJmglCim4hBC3miZgVMpINRpDAG5YtQrut/OVI2kUmjyYyGMs0kzg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" >
    <!-- <link rel="stylesheet" href="vendor/bootstrap/css/style.css" > -->
    <link rel="stylesheet" href="style.css">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/sourcesanspro-font.css"> -->
    <link rel="stylesheet" href="assets/css/style.css"/>

  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                      LOGO
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <!-- <li><a href="meetings.php">Meetings</a></li>
                          <li class="scroll-to-section"><a href="#apply">Apply Now</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="meetings.php">Upcoming Meetings</a></li>
                                  <li><a href="meeting-details.php">Meeting Details</a></li>
                              </ul>
                          </li> -->
                          <li class="scroll-to-section"><a href="#news_event">news & events</a></li>
                          <li class="scroll-to-section"><a href="#courses">Courses</a></li>
                          <li class="scroll-to-section"><a href="#contact">Contact Us</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <div id="bg-video" class="welcome">
          <!-- <source src="assets/images/course-video.mp4" type="video/mp4" /> -->
      </div>

      <div class="container header-text">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="caption">
              <h6>Assalamu alykum warahmatullah wabarakatuh</h6>
              <h4 id="whead" class="bd-red">Welcome to THAQAAFAT AL-ISLAAMIYYA</h4>
              <p>This is our official website that we will going to use it to run some of our programs and services so as to provide our teaching using the the modern way.</p>
              <p><em>Are you a parent or guardian of a child? if <b>"Yes"</b> please click the button below to create an account so that you can get some update in our Madaaris</em></p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact"> signup or login  </a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
          
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-01.png" alt="">
              </div>
              <div class="down-content">
                <h4>Good Teaching</h4>
                <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Good Teachers</h4>
                <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>Students Awards</h4>
                <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-02.png" alt="">
              </div>
              <div class="down-content">
                <h4>Online Follow up</h4>
                <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
              </div>
            </div>
            
            <div class="item">
              <div class="icon">
                <img src="assets/images/service-icon-03.png" alt="">
              </div>
              <div class="down-content">
                <h4>modern madaaris</h4>
                <!-- <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p> -->
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php

$qevents = "SELECT * FROM events";
$revents = mysqli_query($db, $qevents);
  if (mysqli_num_rows($revents) > 0) {
    ?>
  <section class='upcoming-meetings' id='news_event'>
      <div class='container'>
        <div class='row'>
          <div class='col-lg-12'>
            <div class='section-heading'>
              <h2>News and events</h2>
            </div>
          </div>
          <div class='col-lg-4'>
            <h2 class='text-light text-center m-2'>events</h2>
            <div class='categories'>
              <h4 class='text-center'>All events</h4>
              <ul>
    <?php
    while ($row = mysqli_fetch_assoc($revents)) { ?>
      
      <li><a href='#'> <?php echo $row["event_names"]; ?> </a></li><br>

    <?php
    }
    ?>
      </ul>
        <div class='main-button-red'>
          <a href='#'>Other events</a>
        </div>
      </div>
    </div>
    <?php
  }
  else {
    echo "
    <section class='upcoming-meetings' id='meetings'>
    <div class='container'>
      <div class='row'>
    ";
  }
  $qnews = "SELECT * FROM news";
  $rnews = mysqli_query($db, $qnews);


    if (mysqli_num_rows($rnews) > 0) {
      ?>
    
    
        <div class='col-lg-8'>
          <h2 class='text-light text-center m-2'>news</h2>
          <div class='row'>
            <?php
            
            while ($newest = mysqli_fetch_assoc($rnews)) {
              ?>
              <div class='col-lg-6'>
              <div class='meeting-item'>
                <div class='thumb'>
                  <div class='price'>
                  </div>
                  <a href='#'><img src='./admin/assets/img/crop.png' alt='New Lecturer Meeting'></a>
                </div>
                <div class='down-content'>
                  <div class='date'>
                  <h6> <?php echo $newest["month"]; ?> <span><?php echo $newest["date"]; ?></span></h6>
                  </div>
                  <a href='#'><h4><?php echo $newest["brief_news"]; ?></h4></a>
                  <p><?php echo $newest["contents"]; ?></p>
                </div>
              </div>
            </div>
              <?php
            }
            
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
    <?php

    }


  ?>
  



  <!-- <div class='col-lg-6'>
              <div class='meeting-item'>
                <div class='thumb'>
                  <div class='price'>

                  </div>
                  <a href='#'><img src='assets/images/meeting-02.jpg' alt='Online Teaching'></a>
                </div>
                <div class='down-content'>
                  <div class='date'>
                    <h6>Nov <span>24</span></h6>
                  </div>
                  <a href='#'><h4>Online Teaching Techniques</h4></a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
            <div class='col-lg-6'>
              <div class='meeting-item'>
                <div class='thumb'>
                  <div class='price'>
                    <span>$14.00</span>
                  </div>
                  <a href='#'><img src='assets/images/meeting-03.jpg' alt='Higher Education'></a>
                </div>
                <div class='down-content'>
                  <div class='date'>
                    <h6>Nov <span>26</span></h6>
                  </div>
                  <a href='#'><h4>Higher Education Conference</h4></a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div>
            <div class='col-lg-6'>
              <div class='meeting-item'>
                <div class='thumb'>
                  <div class='price'>
                    <span>$48.00</span>
                  </div>
                  <a href='#'><img src='assets/images/meeting-04.jpg' alt='Student Training'></a>
                </div>
                <div class='down-content'>
                  <div class='date'>
                    <h6>Nov <span>30</span></h6>
                  </div>
                  <a href='#'><h4>Student Training Meetup</h4></a>
                  <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                </div>
              </div>
            </div> -->



  <!-- <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR BACHELOR DEGREE</h3>
                <p>You are allowed to use this edu meeting CSS template for your school or university or business. You can feel free to modify or edit this layout.</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="item">
                <h3>APPLY FOR BACHELOR DEGREE</h3>
                <p>You are not allowed to redistribute the template ZIP file on any other template website. Please contact us for more information.</p>
                <div class="main-button-yellow">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordions is-first-expanded">
            <article class="accordion">
                <div class="accordion-head">
                    <span>About Edu Meeting HTML Template</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>If you want to get the latest collection of HTML CSS templates for your websites, you may visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">Too CSS website</a>. If you need a working contact form script, please visit <a href="https://templatemo.com/contact" target="_parent">our contact page</a> for more info.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>HTML CSS Bootstrap Layout</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Etiam posuere metus orci, vel consectetur elit imperdiet eu. Cras ipsum magna, maximus at semper sit amet, eleifend eget neque. Nunc facilisis quam purus, sed vulputate augue interdum vitae. Aliquam a elit massa.<br><br>
                        Nulla malesuada elit lacus, ac ultricies massa varius sed. Etiam eu metus eget nibh consequat aliquet. Proin fringilla, quam at euismod porttitor, odio odio tempus ligula, ut feugiat ex erat nec mauris. Donec viverra velit eget lectus sollicitudin tincidunt.</p>
                    </div>
                </div>
            </article>
            <article class="accordion">
                <div class="accordion-head">
                    <span>Please tell your friends</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Ut vehicula mauris est, sed sodales justo rhoncus eu. Morbi porttitor quam velit, at ullamcorper justo suscipit sit amet. Quisque at suscipit mi, non efficitur velit.<br><br>
                        Cras et tortor semper, placerat eros sit amet, porta est. Mauris porttitor sapien et quam volutpat luctus. Nullam sodales ipsum ac neque ultricies varius.</p>
                    </div>
                </div>
            </article>
            <article class="accordion last-accordion">
                <div class="accordion-head">
                    <span>Share this to your colleagues</span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>
                <div class="accordion-body">
                    <div class="content">
                        <p>Maecenas suscipit enim libero, vel lobortis justo condimentum id. Interdum et malesuada fames ac ante ipsum primis in faucibus.<br><br>
                        Sed eleifend metus sit amet magna tristique, posuere laoreet arcu semper. Nulla pellentesque ut tortor sit amet maximus. In eu libero ullamcorper, semper nisi quis, convallis nisi.</p>
                    </div>
                </div>
            </article>
        </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>What we teaches</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-courses-item owl-carousel">
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="Course One">
              <div class="down-content">
                <h4>Quran and its translation</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <!-- <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul> -->
                    </div>
                    <div class="col-4">
                       <span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-02.jpg" alt="Course Two">
              <div class="down-content">
                <h4>Prophet (S.A.W) Hadith</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <!-- <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul> -->
                    </div>
                    <div class="col-4">
                       <span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-03.jpg" alt="">
              <div class="down-content">
                <h4>Tawheed</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <!-- <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul> -->
                    </div>
                    <div class="col-4">
                       <span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-04.jpg" alt="">
              <div class="down-content">
                <h4>All praying fundamentals</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <!-- <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul> -->
                    </div>
                    <div class="col-4">
                       <span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/course-01.jpg" alt="">
              <div class="down-content">
                <h4>Muslims outfits</h4>
                <div class="info">
                  <div class="row">
                    <div class="col-8">
                      <!-- <ul>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                      </ul> -->
                    </div>
                    <div class="col-4">
                       <span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
      <div class='section-heading'>
              <h2>Contacts</h2>
            </div>
          </div>
        <div class="col-sm-12 align-self-center">
          <div class="row respo">
            <div class="col-sm-5 ">
            <div class="form-v8-content">
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')">Sign Up</button>
					</div>
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')" id="defaultOpen">Sign In</button>
					</div>
				</div>
				<form class="form-detail" action="./public/auth/register.php" method="post">
          <?php echo (isset($_SESSION["exists"]))? "<span class='badge text-danger'>$_SESSION[exists]</span>" . session_destroy() : ""; ?>
          <?php echo (isset($_SESSION["wrong"]))? "<span class='badge text-danger'>$_SESSION[wrong]</span>" . session_destroy() : ""; ?>
          <?php echo (isset($_SESSION["success"]))? "<span class='badge text-success'>$_SESSION[success]</span>" . session_destroy() : ""; ?>
          <?php echo (isset($_SESSION["notregistered"]))? "<span class='badge text-danger'>$_SESSION[notregistered]</span>" . session_destroy() : "";  ?>
          <?php echo (isset($_SESSION["logproblem"]))? "<span class='badge text-danger'>$_SESSION[logproblem]</span>" . session_destroy() : ""; ?>
          <?php echo (isset($_SESSION["wrongpass"]))? "<span class='badge text-danger'>$_SESSION[wrongpass]</span>" . session_destroy() : ""; ?>
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="full_name" id="full_name" class="input-text" required>
								<span class="label">full name</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="username" id="your_uname" class="input-text" required>
								<span class="label"> username <span class="badge">i.e. choose a name that you will be using when sign in</span></span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="physical_address" id="" class="input-text" required>
								<span class="label">Physical address</span>
								<span class="border"></span>
							</label>
						</div>
            <div class="form-row">
							<label class="form-row-inner">
								<select name="gender" class="form-control text-center input-text" style="background: transparent !important; color: #fff;" id="" required>
                  <option value="">  </option>
                  <?php
                    $gresult = mysqli_query($db, "SELECT * FROM gender");
                    if($gresult){
                      while ($gloop = mysqli_fetch_assoc($gresult)) {
                        ?>
                        <option value="<?php echo $gloop['id']; ?>"><?php echo "$gloop[sex]"; ?></option>
                        <?php
                      }
                    }
                    else {
                      echo "query error";
                    }
                  ?>
                </select>
								<span class="label">Gender</span>
								<span class="border"></span>
							</label>
						</div>
            <div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="confirm_password" id="comfirm_password" class="input-text" required>
								<span class="label">Confirm Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Register">
						</div>
					</div>
				</form>
				<form class="form-detail" action="./public/auth/login.php" method="post">
					<div class="tabcontent" id="sign-in">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="log_uname" id="full_name_1" class="input-text" required>
								<span class="label">Username</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="log_pass" id="password_1" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="signin" class="register" value="Sign In">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-sm-7">
          <div class="right-info table text-sm">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>0715 641 114</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>ishaqaicon5@gmail.com</span>
              </li>
              <li>
                <h6>Physical Address</h6>
                <span>Arusha, Tanzania</span>
              </li>
              <!-- <li>
                <h6>Website URL</h6>
                <span>www.thaqaafat.com</span>
              </li> -->
            </ul>
          </div>
        </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022, All Rights Reserved. 
          <br>
        </p>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
    <script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body>

</body>
</html>