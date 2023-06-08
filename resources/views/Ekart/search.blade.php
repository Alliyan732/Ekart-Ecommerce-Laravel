<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/CSS/CommonStyles.css">
    <link rel="stylesheet" href="/CSS/home.css">

    <style>
        .loadmore{
            margin: auto; 
            font-size: 16px; font-weight: 500;
            margin-top: 20px;
            text-decoration: underline;
            color: red;
            cursor: pointer;
        }
        
        .row .col {
            display: none;
        }
        .row .col2 {
            display: none;
        }
        .row .col3 {
            display: none;
        }
        .row .col4 {
            display: none;
        }



        @media all and (max-width: 1200px) {

            #sidebar{ 
                display: none; 
            }
            #sidebarCollapse{
                display: none;
            }
        }
        .ui-menu{
            z-index: 3500;
        }

    </style>
</head>

<body>
    <header class="mb-5">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top mb-5">
            
            <div class="container">
                <button type="button" id="sidebarCollapse" class="btn btn-dark" style="margin-right: 10px;">
                ></button>
                <a class="navbar-brand logo-font" href="#" id="brand">
                    EKart
                </a>
                <!-- links toggle -->
                <button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#links"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- account toggle -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#account"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-user-circle-o" style="font-size:24px; color: white" aria-hidden="true"></i>
                    <span class="badge badge-light">8</span>
                </button>

                <div class="collapse navbar-collapse" id="links">
                    <ul class="navbar-nav mr-auto">
                        <li>
                        <div class="custom-menu">
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Ekart/home">Home</a>
        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">a</a>
                                <a class="dropdown-item" href="#">b</a>
                                <a class="dropdown-item" href="#">c</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Ekart/contactUs">Contact Us</a>
                        </li>

                    </ul>
                </div>
                <!-- search option -->
                <form class="form-inline">
                    <input class="form-control mr-sm-2 i" id="search_product" name="product_name" type="search" placeholder="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="button" onclick="funsearch()">Search</button>
                </form>


                <div class="collapse navbar-collapse text-center" id="account">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="/Ekart/cart">Shopping Cart
                                <i class="fa fa-cart-arrow-down" style="font-size:20px; color: white"></i>
                            </a></li>

                                <div class="dropdown">
                                    <button  class="btn dropdown-toggle ml-5 bg-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Alliyan Alvi
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item d-nav" href="logout">Signout</a>
                                    </div>
                                </div>                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>

        <div id="content" class="p-4 p-md-5 pt-5">
            <section id="collection" class="py-5">
                    <div class="container">
                        <div class="title text-center">
                            <h2 class="position-relative d-inline-block">Searched Result</h2>
                            <hr>
                        </div>

                        <div class="row g-0">

                            <div class="mt-4 row gx-0 gy-3">
                              
                              @foreach($product as $list)
                                    <div class="col-md-6 col-lg-4 col-xl-3 p-2 best col" style="max-width: 100%;">
                                    <a href="/Ekart/home/product_details/{{$list->id}}" class="text-muted">
                                        <div class="collection-img position-relative special-img">
                                            <img src="{{asset('storage/media/' .$list->image)}}" class="w-100" >
                                        </div>
                                        <div class="text-center">
                                            <div class="rating mt-3">
                                                <span class="text-primary"><i class="fa fa-star"></i></span>
                                                <span class="text-primary"><i class="fa fa-star"></i></span>
                                                <span class="text-primary"><i class="fa fa-star"></i></span>
                                                <span class="text-primary"><i class="fa fa-star"></i></span>
                                                <span class="text-primary"><i class="fa fa-star"></i></span>
                                            </div>
                                            <!-- <h4><a href="">{{$list->name}}</a></h4> -->
                                            <p class="text-capitalize my-1">{{$list->short_desc}}</p>
                                            <span class="fw-bold">Rs {{$list->price}}</span>
                                            <div><button type="submit" class="btn-hover signinbutton"
                                                style="width: 150px; font-size: small; height: 30px;">Add to
                                                Cart</button>
                                            </div>

                                        </div>
                                    </a>
                                    </div>
                                
                                @endforeach
                            </div>
                            <!-- <button class="btn" style="background-color: red; margin: auto;">load more</button> -->
                            <!-- <span class="loadmore viewMore1">View more<i class="fa fa-check-circle"></i></span> -->
                        </div>
                    </div>
                </section>
            </div>

        <script>
            (function ($) {

"use strict";

var fullHeight = function () {

    $('.js-fullheight').css('height', $(window).height());
    $(window).resize(function () {
        $('.js-fullheight').css('height', $(window).height());
    });

};
fullHeight();

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

})(jQuery);
        </script>


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
                                <div class="footer_social_area"><a href="#" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a><a
                                        href="#" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a><a href="#"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Skype"><i class="fa fa-skype"></i></a><a href="#"
                                        data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Twitter"><i class="fa fa-twitter"></i></a></div>
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
                    <div class="col-12 bg-dark mt-4 text-center " style="    background-image: linear-gradient(to right, #114e68, #283956, #024f69, #234b87);">
                        <a style="font-size: small;" class="text-white" href="#">Copyright 2022 &copy All rights
                            reserved!. by Alliyan Waheed</a>
                    </div>
                </div>
            </footer>
        </div>



        <script>
            
            // side bar animation: 
            // new collection
            $(".col").slice(0, 4).show()
            $(".viewMore1").on("click", function(){
                $(".col:hidden").slice(0, 4).slideDown()
                if ($(".col:hidden").length == 0) {
                    $(".viewMore1").fadeOut('slow')
                }
            })


        </script>

</body>

</html>