<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- search -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/CSS/CommonStyles.css">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/home.css">

    <script>
    // controller: Product controller    
    var availableTags = [];
    $.ajax({
        method: "GET",
        url: "/product_list",
        success: function(response){
            // console.log(response);
            startAutoComplete(response);
        }

    });    
    function startAutoComplete(availableTags){
        $( "#search_product" ).autocomplete({
            source: availableTags
        });
    }    
    
    </script>



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
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">a</a>
                                <a class="dropdown-item" href="#">b</a>
                                <a class="dropdown-item" href="#">c</a>
                            </div>
                        </li> -->
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

    <div class="wrapper d-flex align-items-stretch mt-5">
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
        <div id="content" class="p-4 p-md-5 pt-5">
            <!-- carosol -->
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/images/c1.png" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/images/c2.jpg" alt="">
                    </div>
                    <div class="carousel-item text-center">
                        <img src="/images/c3.jpg" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>


            <section>
                <!-- New collection -->
                <section class="headbtn" id="new_collection">
                    <div class="d-flex flex-wrap justify-content-center mt-5 filter-button-group" style="margin:auto">
                        <a href="#trending"><button type="button"
                                class="btn m-2 text-dark active-filter-btn">All</button></a>
                        <a href="#trending"><button type="button"
                                class="btn m-2 text-dark active-filter-btn">Trending</button></a>
                        <a href="#sale"><button type="button"
                                class="btn m-2 text-dark active-filter-btn">Sale</button></a>
                        <a href="#special"><button type="button" class="btn m-2 text-dark active-filter-btn">Special
                                Offers</button></a>

                    </div>
                </section>

                <section id="collection" class="py-5">
                    <div class="container">
                        <div class="title text-center">
                            <h2 class="position-relative d-inline-block">New Collection</h2>
                            <hr>
                        </div>

                        <div class="row g-0">

                            <div class="mt-4 row gx-0 gy-3">
                            @foreach($new_collection_products as $list)
    <div class="col-md-6 col-lg-4 col-xl-3 p-2 col">
        <a href="/Ekart/home/product_details/{{$list->id}}" class="text-muted">
            <div class="special-img position-relative overflow-hidden special-img">
                <img src="{{asset('storage/media/' .$list->image)}}" onerror="this.onerror=null; this.src='{{asset('storage/media/default-image.jpg')}}'" class="w-100">
            </div>
            <div class="text-center">
                <div class="rating mt-3">
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1 overflow-hidden text-truncate">{{$list->short_desc}}</p>
                <span class="fw-bold">Rs {{$list->price}}</span>
                <div>
                    <button type="submit" class="btn-hover signinbutton" style="width: 150px; font-size: small; height: 30px;">Add to Cart</button>
                </div>
            </div>
        </a>
    </div>
@endforeach

@php
    $defaultProductsCount = 4 - count($new_collection_products);
@endphp

@for ($i = 0; $i < $defaultProductsCount; $i++)
<div class="col-md-6 col-lg-4 col-xl-3 p-2 col">
        <a href="" class="text-muted">
            <div class="special-img position-relative overflow-hidden special-img">
                <img src="/images/default-image.jpg" class="w-100 img-fluid">
            </div>
            <div class="text-center">
                <div class="rating mt-3">
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1 overflow-hidden text-truncate">Default Product</p>
                <span class="fw-bold">Rs Default 0</span>
                <div>
                    <button type="submit" class="btn-hover signinbutton" style="width: 150px; font-size: small; height: 30px;">Add to Cart</button>
                </div>
            </div>
        </a>
    </div>
@endfor
                            </div>
                            <!-- <button class="btn" style="background-color: red; margin: auto;">load more</button> -->
                            <span class="loadmore viewMore1">View more<i class="fa fa-check-circle"></i></span>
                        </div>
                    </div>
                </section>
                <!-- end of New collection -->

                <!-- trending -->
                <section id="trending" class="py-3">
                    <div class="container">
                        <div class="title text-center">
                            <h2 class="position-relative d-inline-block">Trending</h2>
                            <hr>
                        </div>

                        <div class="row g-0">

                            <div class="mt-4 row gx-0 gy-3">
                            @foreach($trending_products as $list)
    <div class="col-md-6 col-lg-4 col-xl-3 p-2 col2">
        <a href="/Ekart/home/product_details/{{$list->id}}" class="text-muted">
            <div class="special-img position-relative overflow-hidden special-img">
                <img src="{{asset('storage/media/' .$list->image)}}" onerror="this.onerror=null; this.src='{{asset('storage/media/default-image.jpg')}}'" class="w-100">
            </div>
            <div class="text-center">
                <div class="rating mt-3">
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1 overflow-hidden text-truncate">{{$list->short_desc}}</p>
                <span class="fw-bold">Rs {{$list->price}}</span>
                <div>
                    <button type="submit" class="btn-hover signinbutton" style="width: 150px; font-size: small; height: 30px;">Add to Cart</button>
                </div>
            </div>
        </a>
    </div>
@endforeach

@php
    $defaultProductsCount = 4 - count($trending_products);
@endphp

@for ($i = 0; $i < $defaultProductsCount; $i++)
<div class="col-md-6 col-lg-4 col-xl-3 p-2 col2">
        <a href="" class="text-muted">
            <div class="special-img position-relative overflow-hidden special-img">
                <img src="/images/default-image.jpg" class="w-100">
            </div>
            <div class="text-center">
                <div class="rating mt-3">
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1 overflow-hidden text-truncate">Default Product</p>
                <span class="fw-bold">Rs Default 0</span>
                <div>
                    <button type="submit" class="btn-hover signinbutton" style="width: 150px; font-size: small; height: 30px;">Add to Cart</button>
                </div>
            </div>
        </a>
    </div>
@endfor               
                            </div>
                            <!-- <span class="viewMore"><a href="">View more </a><i class="fa fa-check-circle"></i></span> -->
                            <span class="loadmore viewMore2">View more<i class="fa fa-check-circle"></i></span>
                        </div>
                    </div>
                </section>
                <!-- end of collection -->

                <!-- Sale -->
                <section id="sale" class="py-5">
                    <div class="container">
                        <div class="title text-center">
                            <h2 class="position-relative d-inline-block">Sale</h2>
                            <hr>
                        </div>

                        <div class="row g-0">

                            <div class="mt-4 row gx-0 gy-3">
                            @foreach($sale_products as $list)
    <div class="col-md-6 col-lg-4 col-xl-3 p-2 col3">
        <a href="/Ekart/home/product_details/{{$list->id}}" class="text-muted">
            <div class="special-img position-relative overflow-hidden special-img">
                <img src="{{asset('storage/media/' .$list->image)}}" onerror="this.onerror=null; this.src='{{asset('storage/media/default-image.jpg')}}'" class="w-100">
            </div>
            <div class="text-center">
                <div class="rating mt-3">
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1 overflow-hidden text-truncate">{{$list->short_desc}}</p>
                <span class="fw-bold">Rs {{$list->price}}</span>
                <div>
                    <button type="submit" class="btn-hover signinbutton" style="width: 150px; font-size: small; height: 30px;">Add to Cart</button>
                </div>
            </div>
        </a>
    </div>
@endforeach

@php
    $defaultProductsCount = 4 - count($sale_products);
@endphp

@for ($i = 0; $i < $defaultProductsCount; $i++)
<div class="col-md-6 col-lg-4 col-xl-3 p-2 col3">
        <a href="" class="text-muted">
            <div class="special-img position-relative overflow-hidden special-img">
                <img src="/images/default-image.jpg" class="w-100">
            </div>
            <div class="text-center">
                <div class="rating mt-3">
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1 overflow-hidden text-truncate">Default Product</p>
                <span class="fw-bold">Rs Default 0</span>
                <div>
                    <button type="submit" class="btn-hover signinbutton" style="width: 150px; font-size: small; height: 30px;">Add to Cart</button>
                </div>
            </div>
        </a>
    </div>
@endfor
                            </div>
                            <span class="loadmore viewMore3">View more<i class="fa fa-check-circle"></i></span>
                            <!-- <span class="viewMore"><a href="">View more </a><i class="fa fa-check-circle"></i></span> -->
                        </div>
                    </div>
                </section>
                <!-- end of collection -->



                <!-- special products -->
                <section id="special" class="py-3">
                    <div class="container">
                        <div class="title text-center py-5">
                            <h2 class="position-relative d-inline-block">Special Offers</h2>
                            <hr>
                        </div>

                        <div class="special-list row g-0">


@foreach($special_offers_products as $list)
    <div class="col-md-6 col-lg-4 col-xl-3 p-2 col4">
        <a href="/Ekart/home/product_details/{{$list->id}}" class="text-muted">
            <div class="special-img position-relative overflow-hidden special-img">
                <img src="{{asset('storage/media/' .$list->image)}}" onerror="this.onerror=null; this.src='{{asset('storage/media/default-image.jpg')}}'" class="w-100">
            </div>
            <div class="text-center">
                <div class="rating mt-3">
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1 overflow-hidden text-truncate">{{$list->short_desc}}</p>
                <span class="fw-bold">Rs {{$list->price}}</span>
                <div>
                    <button type="submit" class="btn-hover signinbutton" style="width: 150px; font-size: small; height: 30px;">Add to Cart</button>
                </div>
            </div>
        </a>
    </div>
@endforeach

@php
    $defaultProductsCount = 4 - count($special_offers_products);
@endphp

@for ($i = 0; $i < $defaultProductsCount; $i++)
    <div class="col-md-6 col-lg-4 col-xl-3 p-2 col4">
        <a href="" class="text-muted">
            <div class="special-img position-relative overflow-hidden special-img">
                <img src="/images/default-image.jpg" class="w-100">
            </div>
            <div class="text-center">
                <div class="rating mt-3">
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                    <span class="text-dark"><i class="fa fa-star"></i></span>
                </div>
                <p class="text-capitalize my-1 overflow-hidden text-truncate">Default Product</p>
                <span class="fw-bold">Rs Default 0</span>
                <div>
                    <button type="submit" class="btn-hover signinbutton" style="width: 150px; font-size: small; height: 30px;">Add to Cart</button>
                </div>
            </div>
        </a>
    </div>
@endfor

                            <span class="viewMore4 loadmore">View more<i class="fa fa-check-circle"></i></span>
                            <!-- <span class="viewMore"><a href="">View more </a><i class="fa fa-check-circle"></i></span> -->
                        </div>
                    </div>
                </section>
                <!-- end of special products -->

                <!-- blogs -->
                <section id="blogs">
                    <div class="container">
                        <div class="title text-center py-5">
                            <h2 class="position-relative d-inline-block">Our Latest Blog</h2>
                            <hr>
                        </div>

                        <div class="row g-3">
                            <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3 special-img">
                                <img src="/images/blog_1.jpg" alt="">
                                <div class="card-body px-0">
                                    <h4 class="card-title">Lorem ipsum, dolor sit amet consectetur adipisicing</h4>
                                    <p class="card-text mt-3 text-muted">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Eveniet aspernatur repudiandae nostrum dolorem molestias odio.
                                        Sit fugit adipisci omnis quia itaque ratione iusto sapiente reiciendis, numquam
                                        officiis aliquid ipsam fuga.</p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <span class="fw-bold">Author: </span>Alliyan Waheed
                                        </small>
                                    </p>
                                    <a href="">Read more </a><i class="fa fa-check-circle"></i>
                                </div>
                            </div>

                            <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3 special-img">
                                <img src="/images/blog_2.jpg" alt="">
                                <div class="card-body px-0">
                                    <h4 class="card-title">Lorem ipsum, dolor sit amet consectetur adipisicing</h4>
                                    <p class="card-text mt-3 text-muted">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Eveniet aspernatur repudiandae nostrum dolorem molestias odio.
                                        Sit fugit adipisci omnis quia itaque ratione iusto sapiente reiciendis, numquam
                                        officiis aliquid ipsam fuga.</p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <span class="fw-bold">Author: </span>Alliyan Waheed
                                        </small>
                                    </p>
                                    <a href="">Read more </a><i class="fa fa-check-circle"></i>
                                </div>
                            </div>

                            <div class="card border-0 col-md-6 col-lg-4 bg-transparent my-3 special-img">
                                <img src="/images/blog_3.jpg" alt="">
                                <div class="card-body px-0">
                                    <h4 class="card-title">Lorem ipsum, dolor sit amet consectetur adipisicing</h4>
                                    <p class="card-text mt-3 text-muted">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Eveniet aspernatur repudiandae nostrum dolorem molestias odio.
                                        Sit fugit adipisci omnis quia itaque ratione iusto sapiente reiciendis, numquam
                                        officiis aliquid ipsam fuga.</p>
                                    <p class="card-text">
                                        <small class="text-muted">
                                            <span class="fw-bold">Author: </span>Alliyan Waheed
                                        </small>
                                    </p>
                                    <a href="">Read more </a><i class="fa fa-check-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of blogs -->

                <!-- about us -->
                <section id="about" class="py-5">
                    <div class="container">
                        <div class="row gy-lg-5 align-items-center">
                            <div class="col-lg-6 order-lg-1 text-center text-lg-start">
                                <div class="title pt-3 pb-5">
                                    <h2 class="position-relative d-inline-block ms-4">About Us</h2>
                                    <hr>
                                </div>
                                <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Nobis, ipsam.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem fuga blanditiis,
                                    modi exercitationem quae quam eveniet! Minus labore voluptatibus corporis recusandae
                                    accusantium velit, nemo, nobis, nulla ullam pariatur totam quos.</p>
                            </div>
                            <div class="col-lg-6 order-lg-1">
                                <img src="/images/me.jpg" alt="" class="img-fluid" height="300px" width="300px"
                                    style="border-radius: 10px;">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end of about us -->

            </section>



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
            //trending
            $(".col2").slice(0, 4).show()
            $(".viewMore2").on("click", function(){
                $(".col2:hidden").slice(0, 4).slideDown()
                if ($(".col2:hidden").length == 0) {
                    $(".viewMore2").fadeOut('slow')
                }
            })
            //sale
            $(".col3").slice(0, 4).show()
            $(".viewMore3").on("click", function(){
                $(".col3:hidden").slice(0, 4).slideDown()
                if ($(".col3:hidden").length == 0) {
                    $(".viewMore3").fadeOut('slow')
                }
            })
            //special offers
            $(".col4").slice(0, 4).show()
            $(".viewMore4").on("click", function(){
                $(".col4:hidden").slice(0, 4).slideDown()
                if ($(".col4:hidden").length == 0) {
                    $(".viewMore4").fadeOut('slow')
                }
            })

            // for search
            function funsearch(){
                var search_product=jQuery('#search_product').val();
                if(search_product != ''){
                    window.location.href='/search/'+search_product;
                }
            }
        </script>

</body>

</html>