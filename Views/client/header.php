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
                                        <a class="user-btn-sign-in" href="/du_an_1?act=signin">Sign In</a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-md-block">
                                <a class="user-btn-sign-up edu-btn" href="/du_an_1?act=signup">Sign Up</a>
                            </div>

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

<?php
//if(isset($_SESSION['user'])){
//    extract($_SESSION['user']);
//    ?>
<!--    <div class="form-act-title flex">-->
<!--                        <span class="icon-user">-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />-->
<!--                            </svg>-->
<!--                        </span>-->
<!--        <div>-->
<!--            <p>Xin Chào</p>-->
<!--            <p>--><?//=$full_name?><!--</p>-->
<!--        </div>-->
<!--    </div>-->
<!--    --><?php
//    if($role==1){
//        echo '
//                        <div class="notify">
//                        <a href="admin/index.php" class="form-action">
//                            <svg fill="none" viewBox="0 0 24 24" size="36" class="css-11md2ba" color="textSecondary"
//                                        height="36" width="36" xmlns="http://www.w3.org/2000/svg">
//                                <path fill-rule="evenodd" clip-rule="evenodd"
//                                    d="M12 3.5C7.30558 3.5 3.5 7.30558 3.5 12C3.5 13.9895 4.18351 15.8194 5.32851 17.2676C5.58317 16.4856 6.12054 15.8107 6.85621 15.3914L8.76361 14.2968C8.1448 13.5615 7.772 12.6122 7.772 11.5759V9.83689C7.772 7.50167 9.66479 5.60889 12 5.60889C14.3349 5.60889 16.229 7.50139 16.229 9.83689V11.5759C16.229 12.6132 15.8554 13.5631 15.2354 14.2986L17.1437 15.3908L17.1444 15.3912C17.8805 15.8106 18.4173 16.4856 18.6716 17.2674C19.8165 15.8192 20.5 13.9894 20.5 12C20.5 7.30558 16.6944 3.5 12 3.5ZM10.0133 15.3091C10.6056 15.6249 11.2819 15.8039 12 15.8039C12.7169 15.8039 13.3922 15.6255 13.984 15.3106L16.3999 16.6934L16.4013 16.6942C16.9789 17.0231 17.3365 17.6396 17.3365 18.3075V18.6164C16.8532 19.0067 16.3263 19.3451 15.7642 19.6232C14.9127 19.9671 13.6909 20.2625 12.0005 20.2625C10.3078 20.2625 9.08478 19.9663 8.23289 19.6217C7.67189 19.3439 7.14595 19.006 6.6635 18.6164V18.3075C6.6635 17.6402 7.0216 17.0234 7.59965 16.6942L7.6018 16.693L10.0133 15.3091ZM13.4184 13.9069C14.2043 13.428 14.729 12.5631 14.729 11.5759V9.83689C14.729 8.33038 13.5071 7.10889 12 7.10889C10.4932 7.10889 9.272 8.3301 9.272 9.83689V11.5759C9.272 12.5628 9.79594 13.4273 10.5809 13.9062C10.6523 13.9484 10.7542 14.0035 10.8812 14.0593C11.1657 14.1842 11.5558 14.3035 12.0005 14.3035C12.445 14.3035 12.8341 14.1846 13.1176 14.0602C13.2451 14.0042 13.3472 13.9489 13.4184 13.9069ZM2 12C2 14.9959 3.31741 17.684 5.40452 19.5168L5.42841 19.5438C5.49553 19.6189 5.59114 19.7182 5.71841 19.8332C5.97322 20.0636 6.35385 20.3562 6.88471 20.6435C7.10268 20.7615 7.34486 20.878 7.6128 20.9888C8.93735 21.6364 10.4262 22 12 22C13.5724 22 15.06 21.6371 16.3837 20.9905C16.6532 20.8792 16.8968 20.7621 17.1159 20.6435C17.6466 20.3561 18.0271 20.0635 18.2819 19.8331C18.4091 19.7181 18.5047 19.6187 18.5718 19.5437L18.5956 19.5167C20.6826 17.6839 22 14.9958 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12Z"
//                                    fill="currentColor"></path>
//                            </svg>
//                        </a>
//                        </div>
//                        ';
//    }else{
//        echo "";
//    }
//    ?>
<!--    <div class="notify">-->
<!--        <a href="index.php?act=logout" class="form-action">-->
<!--            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6" height="36" width="36">-->
<!--                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />-->
<!--            </svg>-->
<!--        </a>-->
<!--    </div>-->
<!--    --><?php
//}else{
//?>
<!--<a href="index.php?act=login" class="form-action">-->
<!--    <div class="form-act-title form_form flex">-->
<!--                            <span class="icon-user">-->
<!--                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">-->
<!--                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />-->
<!--                                </svg>-->
<!--                            </span>-->
<!--        <p>Đăng nhập</p>-->
<!--    </div>-->
<!--</a>-->
<!--<a href="index.php?act=signup" class="form-action">-->
<!--    <div class="form-act-title form_form flex">-->
<!--                            <span class="icon-user">-->
<!--                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">-->
<!--                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />-->
<!--                            </svg>-->
<!---->
<!--                            </span>-->
<!--        <p>Đăng ký</p>-->
<!--    </div>-->
<!--    --><?php //}?>
<!--</a>-->



