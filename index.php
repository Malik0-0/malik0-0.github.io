<?php
include('Config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Web Profile Malik</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Fonts -->
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
  <!-- Icon -->
  <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons.css">
  <!-- Main Style -->
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <!-- About Style -->
  <link rel="stylesheet" type="text/css" href="assets/css/about.css">

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
  <script type="text/javascript">
    (function() {
      emailjs.init('user_Si1vNgkO5T0KHv80OQII6');
    })();
  </script>
  <script type="text/javascript">
    window.onload = function() {
      document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        this.contact_number.value = Math.random() * 100000 | 0;
        emailjs.sendForm('service_a2xisqe', 'template_3dsl76e', this)
          .then(function() {
            console.log('SUCCESS!');
            alert("Thank You, I'll Relpy ASAP")
          }, function(error) {
            console.log('FAILED...', error);
            alert("Sorry i think there is a little trouble")
          });
      });
    }
  </script>
</head>

<body>

  <header id="header-wrap">
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
          </button>
          <a href="index.php" class="navbar-brand"><img src="assets/img/LOGO TELKOM.png" alt="" height="40"></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">
            <?php if (!isset($_SESSION['username'])) : ?>
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#resume">
                  Resume
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contact
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Login.php">
                  Login
                </a>
              </li>
            <?php else : ?>
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#resume">
                  Resume
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contact
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?= $_SESSION['username'] ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="Details.php?">My Order</a></li>
                  <li><a class="dropdown-item" href="Logout.php?logout=true">Logout</a></li>
                </ul>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>

    <div id="hero-area" class="hero-area-bg">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center">
            <div class="contents">
              <h5 class="script-font wow fadeInUp" data-wow-delay="0.2s">Hi This is</h5>
              <h2 class="head-title wow fadeInUp" data-wow-delay="0.4s">Malik Alrasyid Basori</h2>
              <p class="script-font wow fadeInUp" data-wow-delay="0.6s">Telkom University Students</p>
              <ul class="social-icon wow fadeInUp" data-wow-delay="0.8s">
                <li>
                  <a class="facebook" href="https://www.facebook.com/malikalrasyid.basori"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="https://twitter.com/BasoriMalik?t=X3qf4H4f84IcP0d_xKXbFA&s=08"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                  <a class="instagram" href="https://www.instagram.com/malikalrasyidbasorii"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                  <a class="linkedin" href="https://www.linkedin.com/in/malik-alrasyid-basori-548817202"><i class="icon-social-linkedin"></i></a>
                </li>
              </ul>
              <div class="header-button wow fadeInUp" data-wow-delay="1s">
                <a href="#contact" class="btn btn-common">Contact Me</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
            <img class="img-fluid" src="assets/img/about/Malik Alrasyid Basori.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
            <h3>Hi Guys!</h3>
            <p>I am a student at Telkom University, I majored in S1 Information Systems. I am interested in things related to design, such as graphic design, UI/UX design, and website/application design. I'm a beginner programmer who has skill in python, java, php 5, css and now learning dart, flutter & firebase to expand my skills.</p>
            <div class="about-profile">
              <ul class="admin-profile">
                <li><span class="pro-title"> Name </span> <span class="pro-detail">Malik Alrasyid Basori</span></li>
                <li><span class="pro-title"> Age </span> <span class="pro-detail">20 Years</span></li>
                <li><span class="pro-title"> Work Experience </span> <span class="pro-detail">0 Years</span></li>
                <li><span class="pro-title"> Internship Experience </span> <span class="pro-detail">3 Month</span></li>
                <li><span class="pro-title"> Freelance Experience </span> <span class="pro-detail">1 Years</span></li>
                <li><span class="pro-title"> City </span> <span class="pro-detail">Indonesia</span></li>
                <li><span class="pro-title"> Location </span> <span class="pro-detail">Batam, Kepulauan Riau</span></li>
                <li><span class="pro-title"> E-mail </span> <span class="pro-detail">malikalrasyidbasori.1@gmail.com</span></li>
                <li><span class="pro-title"> Freelance </span> <span class="pro-detail">Available for UI/UX Design & Graphic Design</span></li>
              </ul>
            </div>
            <a href="https://drive.google.com/file/d/1380V4LhrCW3iYdjnLMUxuOUPC8U1sb0b/view?usp=sharing" class="btn btn-common"><i class="icon-paper-clip"></i> Download Resume</a>
            <a href="#contact" class="btn btn-danger"><i class="icon-speech"></i> Contact Me</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="services section-padding">
    <h2 class="section-title wow flipInX" data-wow-delay="0.4s">What i do</h2>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-3 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.6s">
            <div class="icon">
              <i class="icon-layers"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">Graphic Design</a></h3>
              <p>Create logo, virtual background/background and CV/Resume</p>
              <a href="Form index.php" class="btn btn-common mt-3">Order Service</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 col-xs-12">
          <div class="services-item wow fadeInDown" data-wow-delay="0.9s">
            <div class="icon">
              <i class="icon-briefcase"></i>
            </div>
            <div class="services-content">
              <h3><a href="#">UI/UX Research</a></h3>
              <p>Participate in various UI/UX competitions and research community problems and try to make solutions with UI/UX prototypes</p>
              <a href="Form index.php" class="btn btn-common mt-3">Order Service</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <h1 class="display-4 d-flex w-100 justify-content-center">Design Portfolio</h1>
  <div class="d-flex w-100 justify-content-center">
    <div id="carouselExampleInterval" class="carousel slide align-items-center" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="./assets/img/ZOOM BACKGROUND 1 (lik).jpg" class="d-block" alt="..." height="800px" width="1500">
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="./assets/img/Zoom Background 2.png" class="d-block" alt="..." height="800px" width="1500">
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="./assets/img/1.jpg" class="d-block" alt="..." height="800px" width="1500">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="jumbotron jumbotron-fluid align-content-center justify-content-center text-center">
    <div class="container">
      <h1 class="display-4">MacKet</h1>
      <p class="lead">Hacking Output in BNI Hackathon Festival</p>
      <iframe width="800" height="500" src="https://www.youtube.com/embed/yBHz0fW8yN0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>

  <div id="resume" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="education wow fadeInRight" data-wow-delay="0.3s">
            <ul class="timeline">
              <li>
                <i class="icon-graduation"></i>
                <h2 class="timelin-title">Education</h2>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">S1 Information Systems - Telkom University</h3>
                  <span>2019 - now</span>
                  <p class="line-text text-justify">3rd year student at Telkom University. Currently developing skills in Website Design, Virtual Operating Systems, Project Management, Enterprise Architecture, SAP SCM Modules, and Data Warehouse & Business Intelligence at Telkom University. and also developing darts, flutter & firebase skills at <a class="udemy" href="https://www.udemy.com/" class="line-text"> Udemy.com</a></p>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Computer and Network Engineering - SMKN 1 Batam</h3>
                  <span>2010 - 2012</span>
                  <p class="line-text text-justify">SMKN 1 Batam student majoring in computer & network engineering. While in High School, I have skills in networking such as <a class="mikrotik" href="https://mikrotik.com/" class="line-text">Mikrotik</a> & <a class="cisco" href="https://www.cisco.com/" class="line-text">Cisco</a>, and have taken Cisco certification at <a class="netacad" href="https://www.netacad.com/" class="line-text">Netacad</a> and Mikrotik certification at High School, but I did not renew the certificate.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="experience wow fadeInRight" data-wow-delay="0.6s">
            <ul class="timeline">
              <li>
                <i class="icon-briefcase"></i>
                <h2 class="timelin-title">Experience</h2>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Human Resources Staff at SEARCH Telkom University</h3>
                  <span>January 2021 - Present</span>
                  <p class="line-text text-justify">Become one of the HR staff at SEARCH Telkom University. During my time as HR staff, I gained a lot of experience, from how to organize events from start to finish, how to lead a team, how to make relationships within the organization closer, how to manage stress & burnout, how to manage time, and how to make public speaking better.</p>
                  <dl>
                    <dt>More info about SEARCH Telkom University :</dt>
                    <dd><a class="more-info head-title" href="https://www.instagram.com/searchtelkomunv/" style="color:white;">Instagram</a></dd>
                  </dl>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                      75% Complete
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">PIC of UI/UX Competition,Competition Organizer Division of JBC 2021</h3>
                  <span>June 2021 - September 2021</span>
                  <p class="line-text text-justify">Person in Charge of the UI/UX Competition, On the Committee for the Java Business Competition 2021. Here I had the opportunity to be the leader of the UI/UX team to lead this team in preparing and compiling the entire series of UI/UX competition events. In the UI/UX series, there are several events such as live Instagram with judges discussing Tips for Brainstorming Ideas & Research and the main event of the national level UI/UX competition. The main event for the Java Business Competition 2021 itself is the International Webminar.</p>
                  <dl>
                    <dt>More info about Java Business Competition 2021 :</dt>
                    <dd><a class="more-info head-title" href="https://www.instagram.com/jbc_telkomuniv/" style="color:white;">Instagram</a></dd>
                    <dd><a class="more-info head-title" href="https://javabusinesscompetition.id/" style="color:white;">Website</a></dd>
                  </dl>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                      100% Complete
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Championship Regeneration 2021 - UI/UX Competition</h3>
                  <span>January 2021 - February 2021</span>
                  <p class="line-text text-justify">Participated in the UI/UX 2021 Regeneration Championship Competition with team V. In the UI/UX Championship Regeneration competition, I took the role of UX Research which looked for data on problems that existed in the community and finally raised the problem of difficulties in time management. From this problem, after brainstorming various solution ideas, Team V finally agreed to create an application that can make it easier for students to manage time and assignments. The application is "Daily Manager", this application can manage meeting schedules and tasks, classify schedule lists and task lists by category, can change application themes, and view daily, weekly and monthly meeting schedules and tasks.</p>
                  <dl>
                    <dt>Team V consists of:</dt>
                    <dd>- Farhan Hilmi as team leader (Role as UI Designer)<a class="website-farhan" href="https://farhanhilmi.tech/"> More Info</a></dd>
                    <dd>- M. Safik Assegaf as member 1 (Role as Technical Writer)<a class="instagram-safik" href="https://www.instagram.com/safik_assegaf/"> More Info</a></dd>
                    <dd>- Malik Alrasyid Basori as member 2 (Role as UX Research)<a class="instagram-malik" href="https://www.instagram.com/malikalrasyidbasorii/"> More Info</a></dd>
                    <dt>More info about Championship Regeneration 2021 :</dt>
                    <dd><a class="more-info head-title" href="https://www.instagram.com/crsearch2021/" style="color:white;">Instagram</a></dd>
                  </dl>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                      100% Complete
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Head of Public Relations Division of Championship Regeneration 2020</h3>
                  <span>January 2020 - February 2020</span>
                  <p class="line-text text-justify">My first committee in college, and my first time being a division head in a committee. In this committee I learned many things, especially in leadership, I started to know that I have many shortcomings in leading a team, and from this experience, I can become better at leading a team.</p>
                  <dl>
                    <dt>More info about Championship Regeneration 2020 :</dt>
                    <dd><a class="more-info head-title" href="https://www.instagram.com/crsearch2021/" style="color:white;">Instagram</a></dd>
                  </dl>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                      100% Complete
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="content-text">
                  <h3 class="line-title">Internship at PT Infineon Batam</h3>
                  <span>July 2017 - September 2017</span>
                  <p class="line-text text-justify">Internship at PT Infineon in the IT Support Department, where I learned how to maintain devices, ranging from laptops, computers, printers, and photocopiers. besides that, I also learned how to install windows through a server, how it is a server and how a server works, and also learned to manage the data in the company.</p>
                  <dl>
                    <dt>More info about PT Infineon Batam :</dt>
                    <dd><a class="more-info head-title" href="https://www.infineon.com/cms/en/careers/our-locations/batam/" style="color:white;">Website</a></dd>
                  </dl>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                      100% Complete
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="contact" class="section-padding">
    <div class="contact-form">
      <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
              <h2>Contact Form</h2>
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="hidden" name="contact_number">
                      <input type="text" class="form-control" id="name" name="user_name" placeholder="Name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Email" id="email" class="form-control" name="user_email" required data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="footer-right-area wow fadeIn">
              <h2>Contact Address</h2>
              <div class="footer-right-contact">
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <p>Batam, Kepulauan Riau</p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <p><a href="mailto:malikalrasyidbasori.1@gmail.com">malikalrasyidbasori.1@gmail.com</a></p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <p><a href="https://wa.me/628117788522">+(62) 811 7788 522</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <object style="border:0; height: 450px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0789216107314!2d104.05283741470106!3d1.1030802991954007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d988d67596cf4f%3A0xc23cf940ac578d43!2sJl.%20Legenda%20Malaka%2C%20Baloi%20Permai%2C%20Kec.%20Batam%20Kota%2C%20Kota%20Batam%2C%20Kepulauan%20Riau%2029444!5e0!3m2!1sen!2sid!4v1633760140922!5m2!1sen!2sid"></object>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="footer-text text-center wow fadeInDown" data-wow-delay="0.3s">
            <ul class="social-icon">
              <li>
                <a class="facebook" href="https://www.facebook.com/malikalrasyid.basori"><i class="icon-social-facebook"></i></a>
              </li>
              <li>
                <a class="twitter" href="https://twitter.com/BasoriMalik?t=X3qf4H4f84IcP0d_xKXbFA&s=08"><i class="icon-social-twitter"></i></a>
              </li>
              <li>
                <a class="instagram" href="https://www.instagram.com/malikalrasyidbasorii"><i class="icon-social-instagram"></i></a>
              </li>
              <li>
                <a class="linkedin" href="https://www.linkedin.com/in/malik-alrasyid-basori-548817202"><i class="icon-social-linkedin"></i></a>
              </li>
            </ul>
            <p style="font-size: larger">HAVE A NICE DAY 😄</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</php>