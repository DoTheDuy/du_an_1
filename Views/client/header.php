<?php

    include "Models/client/index.php";
    $loai_khoa_hoc = get_all_loai_khoa_hoc();
?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from themepure.net/html/eduman-prv/eduman/layout.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Nov 2022 12:59:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduman - Education & Online Courses HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="Views/client/assets/img/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="Views/client/assets/css/preloader.css">
    <link rel="stylesheet" href="Views/client/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Views/client/assets/css/meanmenu.css">
    <link rel="stylesheet" href="Views/client/assets/css/animate.min.css">
    <link rel="stylesheet" href="Views/client/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Views/client/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="Views/client/assets/css/backToTop.css">
    <link rel="stylesheet" href="Views/client/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="Views/client/assets/css/huicalendar.css">
    <link rel="stylesheet" href="Views/client/assets/css/nice-select.css">
    <link rel="stylesheet" href="Views/client/assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="Views/client/assets/css/flaticon.css">
    <link rel="stylesheet" href="Views/client/assets/css/default.css">
    <link rel="stylesheet" href="Views/client/assets/css/style.css">
</head>

<body>


<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- pre loader area start-->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
                <img src="Views/client/assets/img/logo/logo-text.png" alt="logo-img">
                <img class="loading-logo" src="Views/client/assets/img/logo/preloader.svg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- pre loader area end-->

<!-- cart mini area start -->
<div class="cartmini__area">
    <div class="cartmini__wrapper">
        <div class="cartmini__title">
            <h4>Shopping cart</h4>
        </div>
        <div class="cartmini__close">
            <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="cartmini__widget">
            <div class="cartmini__inner">
                <ul>
                    <li>
                        <div class="cartmini__thumb">
                            <a href="#">
                                <img src="Views/client/assets/img/products/product-thumb-01.png" alt="image not found">
                            </a>
                        </div>
                        <div class="cartmini__content">
                            <h5><a href="#">Turn Yourself</a></h5>
                            <div class="product-quantity mt-10 mb-10">
                                <span class="cart-minus">-</span>
                                <input class="cart-input" type="text" value="1" />
                                <span class="cart-plus">+</span>
                            </div>
                            <div class="product__sm-price-wrapper">
                                <span class="product__sm-price">$24.00</span>
                            </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                    </li>
                    <li>
                        <div class="cartmini__thumb">
                            <a href="#">
                                <img src="Views/client/assets/img/products/product-thumb-02.png" alt="image not found">
                            </a>
                        </div>
                        <div class="cartmini__content">
                            <h5><a href="#">Art of Not Giving</a></h5>
                            <div class="product-quantity mt-10 mb-10">
                                <span class="cart-minus">-</span>
                                <input class="cart-input" type="text" value="1" />
                                <span class="cart-plus">+</span>
                            </div>
                            <div class="product__sm-price-wrapper">
                                <span class="product__sm-price">$12.00</span>
                            </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                    </li>
                    <li>
                        <div class="cartmini__thumb">
                            <a href="#">
                                <img src="Views/client/assets/img/products/product-thumb-03.png" alt="image not found">
                            </a>
                        </div>
                        <div class="cartmini__content">
                            <h5><a href="#">Attract Women</a></h5>
                            <div class="product-quantity mt-10 mb-10">
                                <span class="cart-minus">-</span>
                                <input class="cart-input" type="text" value="1" />
                                <span class="cart-plus">+</span>
                            </div>
                            <div class="product__sm-price-wrapper">
                                <span class="product__sm-price">$42.00</span>
                            </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                    </li>
                </ul>
            </div>
            <div class="cartmini__checkout">
                <div class="cartmini__checkout-title mb-30">
                    <h4>Subtotal:</h4>
                    <span>$78.00</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- cart mini area end -->

<!-- side toggle start -->
<div class="fix">
    <div class="side-info">
        <div class="side-info-content">
            <div class="offset-widget offset-logo mb-40">
                <div class="row align-items-center">
                    <div class="col-9">
                        <a aria-current="act" href="/du_an_1">
                            <img src="Views/client/assets/img/logo/logo-black.png" alt="Logo">
                        </a>
                    </div>
                    <div class="col-3 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button>
                    </div>
                </div>
            </div>
            <div class="mobile-menu d-xl-none fix"></div>
            <div class="offset-widget offset_searchbar mb-30">
                <div class="menu-search position-relative ">
                    <form action="#" class="filter-search-input">
                        <input type="text" placeholder="Search keyword">
                        <button><i class="fal fa-search"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="offcanvas-overlay"></div>
<div class="offcanvas-overlay-white"></div>
<!-- side toggle end -->


<!-- header note area start  -->
<!-- <div class="header-note-area p-relative d-none d-md-block">
   <div class="container-fluid">
      <div class="note-text text-center">
         <p>Enroll now and get <span>40% off</span> any course. Courses from <span>$5. 99</span>.</p>
      </div>
   </div>
   <div class="eduman-header-notice-action-close">
      <button><i class="fal fa-times"></i></button>
   </div>
</div> -->


<!-- header note area end -->

<!-- header-area-start  -->
<header>
    <div class="header-area header-transparent sticky-header">
        <div class="container-fluid">
            <div class="header-main-wrapper">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7 col-md-5 col-sm-9 col-9">
                        <div class="header-left d-flex align-items-center">
                            <div class="header-logo">
                                <a aria-current="act" href="/du_an_1"><img src="Views/client/assets/img/logo/logo-black.png" alt="logo"></a>
                            </div>
                            <div class="category-menu d-none d-xxl-block">
                                <div class="Category-click">
                                    <figure class="cattext"><svg class="icons" id="menu_1_" data-name="menu (1)"
                                                                 xmlns="http://www.w3.org/2000/svg" width="18.087" height="18.087"
                                                                 viewBox="0 0 18.087 18.087">
                                            <path id="Path_25" data-name="Path 25"
                                                  d="M3.768,0H.754A.754.754,0,0,0,0,.754V3.768a.754.754,0,0,0,.754.754H3.768a.754.754,0,0,0,.754-.754V.754A.754.754,0,0,0,3.768,0Z"
                                                  fill="#141517"></path>
                                            <path id="Path_26" data-name="Path 26"
                                                  d="M3.768,9H.754A.754.754,0,0,0,0,9.754v3.015a.754.754,0,0,0,.754.754H3.768a.754.754,0,0,0,.754-.754V9.754A.754.754,0,0,0,3.768,9Z"
                                                  transform="translate(0 -2.217)" fill="#141517"></path>
                                            <path id="Path_27" data-name="Path 27"
                                                  d="M3.768,18H.754A.754.754,0,0,0,0,18.754v3.015a.754.754,0,0,0,.754.754H3.768a.754.754,0,0,0,.754-.754V18.754A.754.754,0,0,0,3.768,18Z"
                                                  transform="translate(0 -4.434)" fill="#141517"></path>
                                            <path id="Path_28" data-name="Path 28"
                                                  d="M12.768,0H9.754A.754.754,0,0,0,9,.754V3.768a.754.754,0,0,0,.754.754h3.015a.754.754,0,0,0,.754-.754V.754A.754.754,0,0,0,12.768,0Z"
                                                  transform="translate(-2.217)" fill="#141517"></path>
                                            <path id="Path_29" data-name="Path 29"
                                                  d="M12.768,9H9.754A.754.754,0,0,0,9,9.754v3.015a.754.754,0,0,0,.754.754h3.015a.754.754,0,0,0,.754-.754V9.754A.754.754,0,0,0,12.768,9Z"
                                                  transform="translate(-2.217 -2.217)" fill="#141517"></path>
                                            <path id="Path_30" data-name="Path 30"
                                                  d="M12.768,18H9.754A.754.754,0,0,0,9,18.754v3.015a.754.754,0,0,0,.754.754h3.015a.754.754,0,0,0,.754-.754V18.754A.754.754,0,0,0,12.768,18Z"
                                                  transform="translate(-2.217 -4.434)" fill="#141517"></path>
                                            <path id="Path_31" data-name="Path 31"
                                                  d="M21.768,0H18.754A.754.754,0,0,0,18,.754V3.768a.754.754,0,0,0,.754.754h3.015a.754.754,0,0,0,.754-.754V.754A.754.754,0,0,0,21.768,0Z"
                                                  transform="translate(-4.434)" fill="#141517"></path>
                                            <path id="Path_32" data-name="Path 32"
                                                  d="M21.768,9H18.754A.754.754,0,0,0,18,9.754v3.015a.754.754,0,0,0,.754.754h3.015a.754.754,0,0,0,.754-.754V9.754A.754.754,0,0,0,21.768,9Z"
                                                  transform="translate(-4.434 -2.217)" fill="#141517"></path>
                                            <path id="Path_33" data-name="Path 33"
                                                  d="M21.768,18H18.754a.754.754,0,0,0-.754.754v3.015a.754.754,0,0,0,.754.754h3.015a.754.754,0,0,0,.754-.754V18.754A.754.754,0,0,0,21.768,18Z"
                                                  transform="translate(-4.434 -4.434)" fill="#141517"></path>
                                        </svg> <span class="text">Category</span></figure>
                                    <div class="dropdown-category">
                                        <nav>
                                            <ul>
                                                <li class="item-has-children">
                                                    <?php foreach ($loai_khoa_hoc as $key => $value) { ?>
                                                <a href="/du_an_1?act=course&category<?php echo $value['ma_loai'];?>" ><?php echo $value['ten_loai'];?></a>
                                                <?php } ?>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu d-none d-xl-block">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="menu-item-has-children"><a aria-current="act" href="/du_an_1">Home</a>
                                        </li>
                                        <li class="menu-item-has-children"><a href="/du_an_1?act=course">Course</a>
                                        </li>
                                        <li class="menu-item-has-children"><a href="/du_an_1?act=cart">cart</a>

                                        </li>
                                        <li class="menu-item-has-children"><a href="#!">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="/du_an_1?act=about">About</a></li>
                                                <li class="menu-item-has-children"><a  href="/du_an_1?act=instructor">instructor</a>
                                                </li>
                                                <li class="menu-item-has-children"><a href="/du_an_1?act=zoom_class">zoom class</a>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-3 col-3">
                        <div class="header-right d-flex align-items-center justify-content-end">
                            <div class="header-search d-none d-xxl-block mr-30">
                                <form action="#">
                                    <div class="search-icon p-relative">
                                        <input type="text" placeholder="Search courses...">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="user-btn-inner p-relative d-none d-md-block">
                                <div class="user-btn-wrapper">
                                    <div class="user-btn-content ">
                                        <a class="user-btn-sign-in" href="javascript:void(0)">Sign In</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-md-block">
                                <a class="user-btn-sign-up edu-btn" href="javascript:void(0)">Sign Up</a>
                            </div>

<!--                                Tài khoản-->
<!--                            </h4>-->

                            <div class="menu-bar d-xl-none ml-20">
                                <a class="side-toggle" href="javascript:void(0)">
                                    <div class="bar-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
