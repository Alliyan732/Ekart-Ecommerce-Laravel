<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Product Details</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='' rel='stylesheet'>
        <link rel="stylesheet" href="/CSS/style.css">
        <link rel="stylesheet" href="/CSS/CommonStyles.css">
        <link rel="stylesheet" href="/CSS/home.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>





        
    
    <style>
        body {
            font-family: 'Roboto Condensed', sans-serif;
            background-color: #f5f5f5
        }

        .hedding {
            font-size: 20px;
            color: #ab8181;
        }

        .main-section {
            position: absolute;
            left: 50%;
            right: 50%;
            transform: translate(-50%, 5%);
        }

        .left-side-product-box img {
            width: 100%;
        }

        .left-side-product-box .sub-img img {
            margin-top: 5px;
            width: 95px;
            height: 100px;
        }

        .right-side-pro-detail span {
            font-size: 15px;
        }

        .right-side-pro-detail p {
            font-size: 25px;
            color: #a1a1a1;
        }

        .right-side-pro-detail .price-pro {
            color: #E45641;
        }

        .right-side-pro-detail .tag-section {
            font-size: 18px;
            color: #5D4C46;
        }

        .pro-box-section .pro-box img {
            width: 100%;
            height: 300px;
        }
        .h{
            /* visibility: hidden; */
            margin: 0 auto;
            margin-top: 15px;
            margin-bottom: 30px;
            width: 35%;
            border: 0;
            height: 3px;
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.75), rgba(255, 255, 255, 0));
            background-color: #009fd3;
            background-image: linear-gradient(to right, #25aae1, #4481eb, #04befe, #3f86ed);
            box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
        }

        @media (min-width:360px) and (max-width:640px) {
            .pro-box-section .pro-box img {
                height: auto;
            }
        }
    </style>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
</head>
                            
<body oncontextmenu='return false' class='snippet-body'>
<header class="mb-5">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top mb-5">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                ></button>
            </div>
            <div class="container">
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

                <div class="collapse navbar-collapse text-center" id="account">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="/Ekart/cart">Shopping Cart
                                <i class="fa fa-cart-arrow-down" style="font-size:20px; color: white"></i>
                            </a></li>
                        <li class="nav-item"><a class="nav-link" href="#">My Profile
                                <i class="fa fa-user-circle-o" style="font-size:20px; color: white"></i></a></li>
                        <li class="nav-item"><a class="nav-link" href="/Ekart/login">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

<div class="row">
<nav id="sidebar" col-4 class="mt-3">
            <!-- <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                </button>
            </div> -->
            <div class="img bg-wrap text-center py-4" style="background-image: url(/images/bg_1.jpg);">
                <div class="user-logo">
                    <div class="img" style="background-image: url(/images/me.jpg);"></div>
                    <h3>Alliyan Waheed</h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="/Ekart/home"><span class="fa fa-home mr-3"></span> Home</a>
                </li>
                <li>
                    <a href="#new_collection"><span class="fa fa-download mr-3 notif"><small
                                class="d-flex align-items-center justify-content-center">5</small></span> New Collection</a>
                </li>
                <li>
                    <a href="#trending"><span class="fa fa-gift mr-3"></span> Trending</a>
                </li>
                <li>
                    <a href="#sale"><span class="fa fa-trophy mr-3"></span> Sale</a>
                </li>
                <li>
                    <a href="#special"><span class="fa fa-cog mr-3"></span> Special Offers</a>
                </li>
                <li>
                    <a href="/Ekart/contactUs"><span class="fa fa-support mr-3"></span> Contact US</a>
                </li>
                <li>
                    <a href="logout"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
                </li>
            </ul>

        </nav>
        
        
        <div class="container mt-5">
    <div class="col-lg-8 border p-3 main-section bg-white product_data" style="margin-left: 10%;">
        <div class="row hedding m-0 pl-3 pt-0 pb-3">
            <h1>Product Details</h1> 
        </div>
        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
                <img src="{{asset('storage/media/' .$product_details['image'])}}" class="border p-3">
                <span class="sub-img">
                    <img src="{{asset('storage/media/' .$product_details['image'])}}" class="border p-2">
                    <img src="{{asset('storage/media/' .$product_details['image'])}}" class="border p-2">
                    <img src="{{asset('storage/media/' .$product_details['image'])}}" class="border p-2">
                </span>
            </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail border p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="m-0 p-0">{{$product_details['name']}}</p>
                        </div>
                        <div class="col-lg-12">
                            <p class="m-0 p-0 price-pro">{{$product_details['price']}} Rs</p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Product Detail</h5>
                            <span>{{$product_details['desc']}}</span>
                            
                        </div>
                        <hr>
                        <div class="col-lg-12">
                            <p class="tag-section"><strong>Tag : </strong><a href="">{{$product_details['keywords']}}</a><a href="">, wear</a><a href="">, Man</a><a href="">, Woman</a></p>
                        </div>
                        <input type="hidden" class="product_id" value="{{$product_details->id}}">
                        <div class="col-lg-12">
                            <h6>Quantity :</h6>
                            <input type="number" class="form-control text-center w-100 bg-light product_qty" value="1">
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="row">
                                <div class="col-lg-6 pb-2">
                                    <a id="addToCart" href="#" class="btn btn-danger w-100 addToCartBtn">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
</div>
<div class="container" style="margin-top: 200px">
<div class="row">
            <div class="col-lg-12 text-center pt-3">
                <h4>Related Products</h4>
                <hr class="h">
            </div>
        </div>
        <div class="row mt-3 p-0 text-center pro-box-section">
            <div class="col-lg-3 pb-2">
                <div class="pro-box border p-0 m-0">
                    <img src="{{asset('images\special_product_1.jpg')}}">
                </div>
            </div>
            <div class="col-lg-3 pb-2">
                <div class="pro-box border p-0 m-0">
                    <img src="{{asset('images\special_product_2.jpg')}}">
                </div>
            </div>
            <div class="col-lg-3 pb-2">
                <div class="pro-box border p-0 m-0">
                    <img src="{{asset('images\special_product_3.jpg')}}">
                </div>
            </div>
            <div class="col-lg-3 pb-2">
                <div class="pro-box border p-0 m-0">
                    <img src="{{asset('images\special_product_4.jpg')}}">
                </div>
            </div>
        </div>      
</div>

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
    

    <script>
    // controller: cart controller
    $(document).ready(function(){  
        // jQuerie on click function
        // .addtobtn is the button class
        $('.addToCartBtn').click(function (e){
            e.preventDefault();
            
            //getting values of prod id and qty, product_data is the parent class
            // and product_id is the child class of which value is needed
            var product_id = $(this).closest('.product_data').find('.product_id').val();
            var product_qty = $(this).closest('.product_data').find('.product_qty').val();

            // ajax token 
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "/add_to_cart",
                data: {
                    'product_id': product_id,
                    'product_qty': product_qty
                },
                success: function(response){
                    swal("success" , response.status , "success");
                }
            });
        });
    });
    </script>
<script type='text/javascript'></script>
</body>
</html>