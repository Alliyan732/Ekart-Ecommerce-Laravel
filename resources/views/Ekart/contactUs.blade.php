<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/CSS/CommonStyles.css">
    <link rel="stylesheet" href="/CSS/contactUs.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand logo-font" href="#" id="brand">
            EKart
        </a>
        <!-- links toggle -->
        <button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#links" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <!-- account toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#account" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-user-circle-o" style="font-size:24px; color: white" aria-hidden="true"></i>
            <span class="badge badge-light">8</span>
        </button>
        
        <div class="collapse navbar-collapse" id="links">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                    Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">a</a>
                        <a class="dropdown-item" href="#">b</a>
                        <a class="dropdown-item" href="#">c</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Ekart/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Ekart/contactUs">Contact Us</a>
                </li>

            </ul>
        </div>
        <!-- search option -->
        <form class="form-inline">
            <input class="form-control mr-sm-2 i" type="text" placeholder="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>

        <div class="collapse navbar-collapse" id="account">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/Ekart/cart">Shopping Cart
                <i class="fa fa-cart-arrow-down" style="font-size:20px; color: white"></i>
                </a></li>

                <!-- logout -->
                <li class="nav-item">
                    <div class="dropdown">
                        <button  class="btn dropdown-toggle ml-5 bg-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Alliyan Alvi
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item d-nav" href="logout">Signout</a>
                        </div>
                    </div> 
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div>
        <img src="/images/banner.png" alt="" class="img-fluid" style="width: 100%; height: 250px; margin-top: 150px; margin-bottom: 50px; background-blend-mode: darken; background: black;">
        <div class="centered" style="color: white; font-size:50px; font-weight: bolder; text-align: center; "><p>Contact Us</p></div>
    </div>
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-lg-3 col-md-3 col-6">
                <i class="fa fa-phone"></i>
                <p class="t">Phone</p>
                <p style="color:rgb(0, 167, 239); font-size: 16px; font-weight: 500;">+01-3-8888-6868</p>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <i class="fa fa-map-marker"></i>
                <p class="t">Address</p>
                <p style="color:rgb(0, 167, 239); font-size: 16px; font-weight: 500;">Park Road Islamabad</p>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <i class="fa fa-clock-o"></i>
                <p class="t">Open Time</p>
                <p style="color:rgb(0, 167, 239); font-size: 16px; font-weight: 500;">24/7</p>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <i class="fa fa-envelope-o"></i>
                <p class="t">Email</p>
                <p style="color:rgb(0, 167, 239); font-size: 16px; font-weight: 500;">Alliyan733@gmail.com</p>
            </div>
        </div>
    </div>
    <h1>Location</h1>
    <iframe style="margin-bottom: 50px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106346.46303968446!2d73.06893443745287!3d33.59681984265879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfea4aee5bdf8f%3A0xe6b55e05d462beb1!2sCOMSATS%20University%20Islamabad!5e0!3m2!1sen!2s!4v1653122243844!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>

    <section>
        <div class="container" style="width: 50%;">
            <h1>Leave Message</h1>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group mb-3">
                        <input id="inputRname" type="Text" placeholder="Enter your name" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form-group mb-3">
                        <input id="inputRname" type="email" placeholder="Enter your email" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="form-outline">
                        <textarea class="form-control" id="textAreaExample1" rows="4"></textarea>
                        <label class="form-label" for="textAreaExample">Message</label>
                    </div>
                </div>
                
            </div>
            <button type="submit" class="btn-hover signinbutton">Send</button>
        </div>
    </section>
    

<footer class="footer_area section_padding_130_0 mt-5 mb-3">
        <div class="container">
        <div class="row">
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Footer Logo-->
              <div class="footer-logo mb-3"></div>
              <p>Best Online Market. But products at reasonable price. Stay connected with Ekart.</p>        
              <!-- Footer Social Area-->
              <div class="footer_social_area"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"><i class="fa fa-skype"></i></a><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></div>
              <div class="mt-3 mb-3">
                <a href="#">Back to top</a>
            </div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">About</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Corporate Sale</a></li>
                  <li><a href="#">Terms &amp; Policy</a></li>
                  <li><a href="#">Community</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">Support</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  <li><a href="#">Help</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Term &amp; Conditions</a></li>
                  <li><a href="#">Help &amp; Support</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">Contact</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  <li><a href="#">Call Centre</a></li>
                  <li><a href="#">Email Us</a></li>
                  <li><a href="#">Term &amp; Conditions</a></li>
                  <li><a href="#">Help Center</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>   
      </div>
      <div class="row">
        <div class="col-12 bg-dark mt-4 text-center ">
            <a style="font-size: small;" class="text-white" href="#">Copyright 2022 &copy All rights reserved!. by Alliyan Waheed</a>
        </div>
    </div>
    </footer>

</body>
</html>