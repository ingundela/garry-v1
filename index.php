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

    $mail->addAddress('sales@abnasirmotors.com');
    $mail->name = $name;
    $mail->setFrom($email, $name);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $message;
    $mail->addAttachment($file);

    if ($mail->send())
        $msg = "Your email has been sent, thank you!";
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
  <title>Garry Hamer consultancy - Driving Facilities Management &amp; Procurement Excellence across multiple sectors
  </title>
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

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-122993878-1');
  </script>

  <!-- Facebook Pixel Code -->
  <script>
    ! function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '533299964225984');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=533299964225984&ev=PageView&noscript=1" /></noscript>
  <!-- End Facebook Pixel Code -->
</head>

<body id="home">
  <!--
  <div class="spinner-ctn">
    <div class="spinner">
      <div class="rectagle1"></div>
      <div class="rectagle2"></div>
      <div class="rectagle3"></div>
      <div class="rectagle4"></div>
      <div class="rectagle5"></div>
    </div>
  </div>
-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container"><a class="navbar-brand" href="index.html"><img src="img/garry_logo.png"
          alt=" logo"></a><button class="navbar-toggler compressed" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a class="nav-link" href="index.html">Home <span
                class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item "><a class="nav-link" href="#">services</a></li>
          <li class="nav-item "><a class="nav-link" href="#">our work</a></li>
          <li class="nav-item"><a class="nav-link get_touch" href="#">contacts</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="hero_caption">
            <h5 class="hero_h5">your partner in growth</h5>
            <h1 class="hero_h1">We Design, Build and Maintain the World's Toughest Projects.</h1>
            <h4 class="hero_h4">We're the number one company in materials services supplying with best and
              competitive solutions for our Clients and Partners.<br>
              We promote a sustainable development of our client’s activities.
            </h4>
            <a href="#" class="btn btn_hero">get in touch</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about_us section_space justify-content-center" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5">
          <div class="about_img_left">
            <img src="img/garry_hero_img.jpg" alt="About us">
          </div>
        </div>
        <div class="col-md-7">
          <div class="about_content_right">
            <span class="top_of_title">about us</span>
            <h2 class="title_h2">Driving Facilities Management &amp; Procurement Excellence across multiple sectors</h2>
            <p class="about_p">Garry Hamer consultancy prides itself in providing the best possible services and
              establishing long term and mutually
              beneficial relations with all its clients.<br>
              We believe that <span class="the_client">The client</span> is the most important person in our business,
              he is not an interruption of our work , he is the <span class="the_client">purpose of our work</span>.
              We are not doing our client a favour by serving, he is doing us a favour by giving us the opportunity to
              do so
              the client is the reason of our existence.</p>
            <a href="#" class="btn btn_quote">Contact us</a>
          </div>
        </div>
      </div>
      <div class="mission_value_vision text-center">
        <div class="row">
          <class class="col-md-4">
            <div class="box">
              <div class="box_img">
                <i class="fas fa-medal"></i>
              </div>
              <h4 class="mission_value_visin_h4">vision</h4>
              <p>Be the number one Company in materials and services supplying with best and competitive solutions to
                our
                Clients
                Promote sustainable development of our client’s activities.</p>
            </div>
          </class>
          <class class="col-md-4">
            <div class="box">
              <div class="box_img">
                <i class="fas fa-medal"></i>
              </div>
              <h4 class="mission_value_visin_h4">mission</h4>
              <p>Garry Hamer Consulting prides itself in providing the best possible Services and establishing long term
                and mutually beneficial relations with all its clients. </p>
            </div>
          </class>
          <class class="col-md-4">
            <div class="box">
              <div class="box_img">
                <i class="fas fa-medal"></i>
              </div>
              <h4 class="mission_value_visin_h4">values</h4>
              <p>Life first
                Valuing who makes our company
                Take care of our planet,
                acting correctly, grow and evolve together making it happen with a can do philosophy.
              </p>
            </div>
          </class>
        </div>
      </div>
    </div>
  </section>
  <section class="services section_space text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <span class="top_of_title text-center">where we can work together</span>
          <h2 class="title_h2 text-center">Our Services</h2>
          <p class="under_title_p text-center">Improve your performance and optimise costs with Garry Hamer's
            consultancy expertise
            in providing heigh quality solutions for your business.</p>
        </div>
      </div>
      <div class="services_wrapper">
        <div class="row">
          <div class="col-md-4">
            <div class="box_servcies_content">
              <div class="box_img_services">
                <img src="img/services/high_level_cleaning.jpg" alt="Deep Cleaning">
              </div>
              <h5 class="service_h5_name text-center">Deep Cleaning</h5>
              <p class="service_breaf_desc">If you want to be sure that your cleaning professional will really make things sparkle, look no further than a deep cleaning service through Garry Hamer Consultancy</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box_servcies_content mobile_view">
              <div class="box_img_services">
                <img src="img/services/facility_management.jpg" alt="Facilities Management">
              </div>
              <h5 class="service_h5_name text-center">Facilities Management</h5>
              <p class="service_breaf_desc">Entrusting the management and delivery of a number of core facilities services to one partner requires confidence in that partner to have the capability and proven experience to deliver.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box_servcies_content">
              <div class="box_img_services">
                <img src="img/services/procurement.jpg" alt="Procurement">
              </div>
              <h5 class="service_h5_name text-center">Procurement</h5>
              <p class="service_breaf_desc">Improve your performance and optimise costs with Hamer's expertise in procurement and supply chain, digitalisation, people and capability development.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="call_to_action text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="home_call_action_content">
            <h3 class="title_h3">Are you looking for a Full Managed Service?</h3>
            <p class="call_to_action_p">Increase staff productivity and focus in your Business while we take care of the
              rest for your.</p>
            <a href="#" class="btn call_to_action_btn">contact us today</a>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!--contact form-->
      <section class="contactForm section_space">
        <div class="container">
          <div class="row align-items-center">
              <div class="col-md-12">
                   <div class="about_content text-center">
        
                    <h2 class="title_h2">Request a Quote</h2>
                    <p class="under_title_p">If you’d like a quote, simply complete this form and we’ll get back to you. Alternatively, please call us on +258 84 782 0243.</p>
                   
              </div>
                      <?php if ($msg != "") echo "$msg<br><br>"; ?>

              <div class="contact_form">
                <form method="post" action="sendemail.php" enctype="multipart/form-data">
                <input class="form-control" name="name" placeholder="Full Name..."><br>
                <input class="form-control" name="subject" placeholder="Subject..."><br>
                <input class="form-control" name="email" type="email" placeholder="Email..."><br>
                <textarea placeholder="Message..." class="form-control" name="message"></textarea><br>
                <input id="sendBtn" class="btn btn_quote" name="submit" type="submit" value="Request quote">
              </form>
              </div>
              </div>
          </div>
        </div>
      </section>
      <section class="footer section_space">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="footer_p"><span class="garry_footer_p">Garry Hamer Consulting</span> prides itself in providing the best possible Services and establishing long term and mutually beneficial relations with all its clients.</p>
          </div>
           <div class="col-md-3 mobile_view">
            <div class="services_footer_list">
               <h5 class="footer_title">Our Services</h5>
                <ul class="list_unstyled">
                  <li><a href="#">Deep Cleaning</a></li>
                    <li><a href="#">Facilities Management</a></li>
                      <li><a href="#">Procurement</a></li>
                </ul>
            </div>
          </div>
           <div class="col-md-3">
           <div class="services_footer_list">
               <h5 class="footer_title">Follow us on Social Media</h5>
                <ul class="list_unstyled">
                  <li><a href="#">Facebook</a></li>
                    <li><a href="#">Linkedin</a></li>
                     
                </ul>
            </div>
          </div>
        </div>
      </div>
      </section>
       <div class="sb_mozmedia text-center">
    <p>Copyright &copy; 2020. All rights Reserved. Designed &amp; Developed by <a href="https://www.sbmozmedia.com/"
        target="_blank">Sb.mozmedia &amp; Services- Digital Marketing Agency</a></p>
  </div>

  

  <!--
  <section class="services section_space">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <span class="top_of_title text-center">where we can work together</span>
          <h2 class="title_h2 text-center">Our Services</h2>
          <p class="under_title_p text-center">Improve your performance and optimise costs with Garry Hamer's
            consultancy expertise
            in providing heigh quality solutions for your business.</p>
        </div>
      </div>
      <div class="service_wrapper">
        <h3 class="service_h3">Industrial cleaning</h3>
        <p class="service_p text-left">We pride ourselves on
          dedication
          to our customers and so responding to your
          technical
          problems is a main priority of our high skilled team.</p>
        <div class="box_services_desc">
          <div class="row">
            <div class="col-md-4">
              <div class="box_servcies_content">
                <div class="box_img_services">
                  <img src="img/services/high_level_cleaning.jpg" alt="">
                </div>
                <h6 class="service_h5_name text-center">Production &amp; manufacturing environments</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque,
                  est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box_servcies_content">
                <div class="box_img_services">
                  <img src="img/services/mechical_env.jpg" alt="">
                </div>
                <h6 class="service_h5_name text-center">Mechanical / electrical environments</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque,
                  est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box_servcies_content">
                <div class="box_img_services">
                  <img src="img/services/large_stores.jpg" alt="">
                </div>
                <h6 class="service_h5_name text-center">Large store environments</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque,
                  est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
          </div>
        </div>
        <div class="box_services_desc mt-4">
          <div class="row">
            <div class="col-md-4">
              <div class="box_servcies_content">
                <div class="box_img_services">
                  <img src="img/services/ext_building.jpg" alt="">
                </div>
                <h6 class="service_h5_name text-center">Exterior industrial building cleaning</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque,
                  est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box_servcies_content">
                <div class="box_img_services">
                  <img src="img/services/pharmacy_cleaning.jpg" alt="">
                </div>
                <h6 class="service_h5_name text-center">Pharmaceutical environments</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque,
                  est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box_servcies_content">
                <div class="box_img_services">
                  <img src="img/services/tank.jpg" alt="">
                </div>
                <h6 class="service_h5_name text-center">Tank, vessel &amp; confined space working</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque,
                  est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="servi_wrapper_button text-center">
        <a href="#" class="btn btn_quote services_contact_us">Contact us today!</a>
      </div>
    </div>

  </section>
  <section class="service_part_2 box_two_serv_wrapper">
    <div class="container">
      <div class="service_wrapper">
        <h3 class="service_h3">Maintenance services</h3>
        <p class="service_p text-left">We pride ourselves on
          dedication
          to our customers and so responding to your
          technical
          problems is a main priority of our high skilled team.</p>
        <div class="box_services_desc">
          <div class="row">
            <div class="col-md-4">
              <div class="box_servcies_content">
                <div class="box_img_services">
                  <img src="img/services/high_level_cleaning.jpg" alt="">
                </div>
                <h6 class="service_h5_name text-center">Generator</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque,
                  est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box_servcies_content">
                <div class="box_img_services">
                  <img src="img/services/high_level_cleaning.jpg" alt="">
                </div>
                <h6 class="service_h5_name text-center">Air Conditioning</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque,
                  est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box_servcies_content">
                <div class="box_img_services">
                  <img src="img/services/high_level_cleaning.jpg" alt="">
                </div>
                <h6 class="service_h5_name text-center">Refrigeration</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque,
                  est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
          </div>
        </div>
        <div class="box_services_desc mt-4 mb-4 ">
          <div class="row">
            <div class="col-md-4">
              <div class="box_servcies_content">
                <div class="box_img_services">
                  <img src="img/services/high_level_cleaning.jpg" alt="">
                </div>
                <h6 class="service_h5_name text-center">thermal Imaging</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque,
                  est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box_servcies_content">
                <div class="box_img_services">
                  <img src="img/services/high_level_cleaning.jpg" alt="">
                </div>
                <h6 class="service_h5_name text-center">Air Conditioning</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque,
                  est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="servi_wrapper_button text-center">
        <a href="#" class="btn btn_quote services_contact_us mb-5">Contact us today!</a>
      </div>
    </div>
  </section>
  <!--services box two
  <section class="service_part_3 ">
    <div class="container">
      <div class="service_wrapper ">
        <h3 class="service_h3">Procurement services</h3>
        <p class="service_p text-left">We pride ourselves on dedication to our customers and so responding to your
          technical
          problems is a main priority of our high skilled team.</p>
        <div class="box_services_desc">
          <div class="row">
            <div class="col-md-4">
              <div class="box_servcies_content">
                <img src="img/garry_hero_img.jpg" alt="Generator">
                <h6 class="service_h5_name text-center">Generator</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque, est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box_servcies_content">
                <img src="img/garry_hero_img.jpg" alt="Generator">
                <h6 class="service_h5_name text-center">Air Conditioning</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque, est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box_servcies_content">
                <img src="img/garry_hero_img.jpg" alt="Generator">
                <h6 class="service_h5_name text-center">Refrigeration</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque, est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
          </div>
        </div>
        <div class="box_services_desc pt-4 pb-4">
          <div class="row">
            <div class="col-md-4">
              <div class="box_servcies_content">
                <img src="img/garry_hero_img.jpg" alt="Generator">
                <h6 class="service_h5_name text-center">thermal Imaging</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque, est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box_servcies_content">
                <img src="img/garry_hero_img.jpg" alt="Generator">
                <h6 class="service_h5_name text-center">Air Conditioning</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque, est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box_servcies_content">
                <img src="img/garry_hero_img.jpg" alt="Generator">
                <h6 class="service_h5_name text-center">Air Conditioning</h6>
                <p class="service_breaf_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed cumque, est
                  officia dolores recusandae magni excepturi similique necessitatibus, </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="servi_wrapper_button text-center">
        <a href="#" class="btn btn_quote services_contact_us mb-5">Contact us today!</a>
      </div>
    </div>
  </section>

  

  
  <section class="services section_space justify-content-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <span class="top_of_title text-center">where we can work together</span>
          <h2 class="title_h2 text-center">Our Services</h2>
          <p class="under_title_p text-center">Improve your performance and optimise costs with Garry Hamer's expertise
            in Procurement and Maintenance solution.</p>
        </div>
      </div>
      <div class="service_wrapper">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="service_img">
              <img src="img/maintenance_services_img.png" class="mx-auto" alt="Maintenance">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="service_h4">Maintenance</h2>
            <p class="service_p text-left">We pride ourselves on dedication to our customers and so responding to your
              technical
              problems is a main priority of our high skilled team.</p>
            <div class="list_services">
              <p><i class="fas fa-angle-right"></i>Generators</p>
              <p><i class="fas fa-angle-right"></i>Air Conditioning</p>
              <p><i class="fas fa-angle-right"></i>Refrigeration</p>
              <p><i class="fas fa-angle-right"></i>Thermal Imaging</p>
              <p><i class="fas fa-angle-right"></i>Decontamination</p>
            </div>
            <a href="#" class="btn btn_quote">Request quote</a>
          </div>
        </div>
      </div>
      <div class="service_wrapper mt-5">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h2 class="service_h4">Procurement</h2>
            <p class="service_p text-left">We have a dedicated team that is highly motivated to achieve high goals.
              Secondly, we have already offered and
              implemented our services and solutions respectively to our clients ventures, businesses and enterprises
              countrywide.</p>
            <div class="list_services">
              <p><i class="fas fa-angle-right"></i>Oil and Gas Sector</p>
              <p><i class="fas fa-angle-right"></i>Mining Sector</p>
              <p><i class="fas fa-angle-right"></i>Hospitality Sector</p>
              <p><i class="fas fa-angle-right"></i>Health and Safety Sector</p>
              <p><i class="fas fa-angle-right"></i>Construction Sector</p>
              <p><i class="fas fa-angle-right"></i>Food and Beverage</p>
            </div>
            <a href="#" class="btn btn_quote">Request quote</a>
          </div>
          <div class="col-md-6">
            <div class="service_img">
              <img src="img/procurement_img.png" class="mx-auto" alt="Procurement">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  -->




















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
