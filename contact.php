<?php
    $msg = "";
  use PHPMailer\PHPMailer\PHPMailer;
  include_once "PHPMailer/PHPMailer.php";
  include_once "PHPMailer/Exception.php";
  include_once "PHPMailer/SMTP.php";

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {
      $file = "attachment/" . basename($_FILES['attachment']['name']);
      move_uploaded_file($_FILES['attachment']['tmp_name'], $file);
    } else
      $file = "";

    $mail = new PHPMailer();

    //if we want to send via SMTP
    $mail->Host = "smtp.gmail.com";
    //$mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "senaidbacinovic@gmail.com";
    $mail->Password = "5C1bcnPkDI4Wd%#";
    $mail->SMTPSecure = "ssl"; //TLS
    $mail->Port = 465; //587

    $mail->addAddress('info@sbmozmedia.com');
    $mail->name = $name;
    $mail->setFrom($email, $name);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $message;
    $mail->addAttachment($file);

    if ($mail->send())
        $msg = "YOUR EMAIL HAS BEEN SENT, THANK YOU!";
    else
        $msg = "Please try again!";

    unlink($file);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="vAXOM-C5EUGGIwrxTNowJclsNz2vX4n1x9oochtq--s" />
    <title>Contact | Digital Marketing Agency in Mozambique</title>
    <meta name="description" content="Sbmozmedia is a Digital Marketing Agency based in Mozambique offering leading Social Media Marketing,
    Website Design, Web Development, Email Marketing, SMS Marketing, SEO - Search Engine Marketing, eCommerce
    Development, Domain Registration &amp; Managed Web Hosting, Website design packages, website costs, website pricing,
    price of a website, cost of a website, web design cost, responsive website cost, mobile optimised Call +258 321
    2622 or email at info@sbmozmedia.com">
  <meta name="keywords"
    content="Web Design and Web Development Mozambique, Digital Marketing Mozambique, Affordable Websites Design Mozambique, eCommerce Development Mozambique, Domain Registration Mozambique, Managed Web Hosting Mozambique, Website Quotes Mozambique, Branding Mozambique, Professional Email Mozambique, Website Maintenance Mozambique">
  <meta name="twitter:description"
    content="Digital Marketing Agency Mozambique, Flexible and Affordable for Every Business">
  <meta name="twitter:title" content="Sbmozmedia Digital Marketing Agency in Mozambique">
  <meta name="twitter:description"
    content="Digital Marketing Agency in Mozambique, Flexible and Affordable for Every Business">
  <link rel="canonical" href="https://www.sbmozmedia.com/">
  <meta property="og:title" content="Sbmozmedia - Digital Marketing Agency in Mozambique">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.sbmozmedia.com/">
  <meta property="og:site_name" content="Sbmozmedia">
    <link rel="shortcut icon" type="image/png" href="img/fav_icon.jpg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/main_mini.css">

    <script src="https://kit.fontawesome.com/b0d58c42f6.js" crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122993878-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122993878-1');
</script>

   <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '533299964225984');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=533299964225984&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
  <body id="home">
    
  <!-- <div class="spinner-ctn">
        <div class="spinner">
            <div class="rectagle1"></div>
            <div class="rectagle2"></div>
            <div class="rectagle3"></div>
            <div class="rectagle4"></div>
            <div class="rectagle5"></div>
        </div>
    </div>-->
  
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="img/logo_updated.jpg"
                    alt="logo"></a><button class="navbar-toggler compressed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                     <li class="nav-item"><a class="nav-link" href="index.html">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item "><a class="nav-link" href="about">about</a></li>
                    <li class="nav-item dropdown dropbtn"><a class="nav-link servi_icon" href="#">Services</a>
                        <div class="dropdown-content">
                            <a href="design_development">Web
                                Design &amp; Development</a>
                            <a href="e-commerce">E-commerce Development</a>
                            <a href="digital_marketing">Digital
                                Marketing</a>
                            <a href="domain_web_hosting">Domain &amp; Web Hosting</a>
                            <a href="professional_email">Professional Emails</a>
                            <a href="web_maintenance">Website Maintenance</a>
                        </div>
                    </li>
                    <li class="nav-item "><a class="nav-link" href="portfolio">portfolio</a></li>
                    <li class="nav-item active"><a class="nav-link get_touch" href="contact.php">contacts</a></li>
                </ul>
                <form class="form-inline ml-auto">
                    <a href="https://web.facebook.com/sbmozmedia/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/ingundela/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/sbmozmedia" target="_blank"><i
                            class="fab fa-linkedin-in"></i></a>
                </form>
            </div>
        </div>
    </nav>
    <section id="hero_about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-caption all_pages_caption">

                        <h1 class="hero_h1">Get in touch</h1>
                       <p>We pride ourselves in being at the top of our game, and as our clients have come to learn; “You get what you pay for at Web Devine. Do it right the first time, don’t waste money on empty promises!“</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hero_bottom justify-content-between">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h5 class="hero_bottom_h5"> We have all the resources in house for a full
                        and independent service on Digital
                        Marketing, results oriented.</h5>
                </div>
                <div class="col-md-5 text-right">
                    <p><span class="call_us">call us</span>+258 84 321 2622 <span class="call_us">or</span> <a
              href="https://api.whatsapp.com/send?phone=258843212622&text=&source=&data=&app_absent="
              class="btn btn_chat">let's chat <i class="fab fa-whatsapp"></i></a></p>
                </div>
            </div>
        </div>
    </section>
      
      <!--contact form-->
      <section class="contactForm section_space text-center">
        <div class="container-fluid wild">
          <div class="row justify-content-center">
            <div class="col-md-9">
               <h2 class="section_title">let's do magic together!</h2>
              <p>We would love to take on your next project...</p>

                      <?php if ($msg != "") echo "$msg<br><br>"; ?>

              <div class="contact_form mt-4">
                <form method="post" action="sendemail.php" enctype="multipart/form-data">
                <input class="form-control" name="name" placeholder="Full Name..."><br>
                <input class="form-control" name="subject" placeholder="Subject..."><br>
                <input class="form-control" name="email" type="email" placeholder="Email..."><br>
                <textarea placeholder="Message..." class="form-control" name="message"></textarea><br>
                <input id="sendBtn" class="btn btn_hero" name="submit" type="submit" value="Send Email">
              </form>
              </div>
            </div>
          </div>
        </div>
      </section>
       <section class="footer section_space justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section_title text-center">get in touch</h2>
                    <p class="section_under_p">We would love to take on your next project...<br>
                        With our remote screen technology we can communicate with you wherever you are in the world.</p>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="mailchimp_form">
                            <h4>Subscribe to our news letter</h4>
                            <div class="Sign_up_form">
                                <!-- Begin Mailchimp Signup Form -->
                                <div id="mailchimp">
                  <form id="mc-embedded-subscribe-form" class="validate"
                    action="https://sbmozmedia.us4.list-manage.com/subscribe/post?u=844e3b028e66c0bdc3e11f40a&amp;id=9d6af32c90"
                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                    target="_blank" novalidate>
                    <input id="mce-FNAME" class="name" name="FNAME" size="30" type="text" value=""
                      placeholder="Enter your name" />
                    <input id="mce-EMAIL" class="required email" name="EMAIL" size="30" type="email" value=""
                      placeholder="Enter your email" />
                    <input id="mc-embedded-subscribe" class="button contact-btn" name="subscribe" type="submit"
                      value="subscribe!" />
                  </form>
                </div>
                                <!--End mc_embed_signup-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">

                        <ul class="list_unstyled contact_details">
                            <li>
                                <h5>Location | Contacts</h5>
                            </li>
                            <i class="fas fa-map-marker-alt"></i> Bairro da Malhangalene "B", Rua Reinata Sadimba,
                            número 96, 2o
                            Andar, Quarteirão
                            42</li>
                            <li><i class="fas fa-mobile-alt"></i> +258 84 321 2622</li>
                            <li><i class="far fa-envelope"></i> info@sbmozmedia.com</li>
                            <li><i class="far fa-envelope"></i> support@sbmozmedia.com</li>
                        </ul>
                        <ul class="list_unstyled contact_details social_links">
                            <a href="#">
                                <li><img src="img/facebook.png" alt="facebook page"></li>
                            </a>
                            <a href="#">
                                <li><img src="img/instagram.png" alt="instagram page"></li>
                            </a>
                            <a href="#">
                                <li><img src="img/linkedin.png" alt="linkedin page"></li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footerline text-center">
        <div class="container-fluid wild">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="sb_logo_bottom">
                        <img src="img/sb_white_logo.jpg" class="mx-auto" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <p>2017-2020 &copy; All rights reserved <br>Sbmozmedia - Full service Creative, Digital Marketing,
                        Development
                        & Web Design Agency<br>
                        Maputo - Mozambique</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="js/main.js"></script>
</body>

</html>
