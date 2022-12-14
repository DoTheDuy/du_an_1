<?php
//    require "Models/client/index.php";
//?>
<?php
$loai_khoa_hoc ="get_all_loai_khoa_hoc";
if(isset($_GET['category'])) {
    $ma_loai = $_GET['category'];
    foreach ($loai_khoa_hoc as $key => $item){
        if($item['ma_loai'] == $ma_loai) {
            echo $item['ten_khoa_hoc'];
            break;
        }
    }
}

 ?>
<?php
if(isset($_GET['idPro'])) {
    $ma_khoa_hoc = $_GET['idPro'];
    $row = get_one_product($ma_khoa_hoc);
}

?>
<main  style="margin-top: 100px">

    <!-- hero-area-start -->
    <div class="hero-arera course-item-height" data-background="Views/client/assets/img/slider/course-slider.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-course-1-text">
                        <h2>Courses</h2>
                    </div>
                    <div class="course-title-breadcrumb">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="footer.php">Home</a></li>
                                <li class="breadcrumb-item"><span>Courses</span></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-area-end -->

    <!-- course-barup-area -->
    <div class="course-bar-up-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="course-main-wrapper mb-30">
                        <div class="bar-filter">
                            <i class="flaticon-filter"></i>
                            <span>Filter</span>
                            <span>(2)</span>
                        </div>
                        <div class="corse-bar-wrapper">
                            <div class="bar-search">
                                <form action="#">
                                    <div class="bar-secrch-icon position-relative">
                                        <input type="text" placeholder="Search keyword...">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="course-sidebar-tab">
                            <div class="course-sidebar-wrapper">
                                <div class="curse-tab-left-wrap">
                                    <div class="course-results">
                                        Showing <span class="course-result-showing">9</span> of <span
                                                class="course-result-number">9</span> results
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- course-barup-area-end -->

    <!-- course-content-start -->
    <section class="course-content-area pb-90">
        <div class="container">
            <div class="row mb-10">
                <div class="col-xl-3 col-lg-4 col-md-8">
                    <div class="course-sidebar-widget mb-20">
                        <div class="course-sidebar-info">
                            <h3 class="drop-btn">Categories</h3>
                            <ul>
                                <li>
                                    <div class="course-sidebar-list">
                                        <a href="#" class="edu-check-label" for="e-bus">HTML</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="course-sidebar-list">
                                        <a href="#" class="edu-check-label" for="e-bus">PHP</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="course-sidebar-list">
                                        <a href="#" class="edu-check-label" for="e-bus">JS</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="course-sidebar-list">
                                        <a href="#" class="edu-check-label" for="e-bus">English</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="col-xl-9 col-lg-8 col-md-12">

                    <div class="row">
                        <?php foreach ($results as $key => $value) { ?>
                            <div class="col-xl-4 col-lg-6 col-md-6">

                                <div class="course-wrapper-2 mb-30">

                                    <div class="student-course-img">
                                        <a href="/du_an_1?act=course_detail&idPro=<?php echo $value['ma_khoa_hoc'];?>">
                                        <img src="Views/images/<?php echo $value['hinh']?>" alt="courde-img">
                                        </a>
                                    </div>

                                    <div class="student-course-footer">
                                        <div class="student-course-linkter">
                                            <div class="portfolio-price">
                                                <span>$<?php echo $value['gia_khuyen_mai']?></span>
                                                <del>$<?php echo $value['don_gia']?></del>
                                            </div>
                                        </div>
                                        <div class="student-course-text">
                                            <h3><a href="course-details.html"><?php echo $value['ten_khoa_hoc']?></a>
                                            </h3>
                                        </div>
                                        <div class="portfolio-user">
                                            <div class="user-icon">

                                            </div>
                                        </div>
                                        <div class="course-deteals-btn">
                                            <a href="course-details.html"><span class="me-2">View Details</span><i
                                                        class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                        <div class="row">
                            <div class="edu-pagination mt-30 mb-20">
                                <ul>
                                    <li><a href="#"><i class="fal fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#"><span>01</span></a></li>
                                    <li><a href="#"><i class="fal fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- course-content-end -->

</main>


