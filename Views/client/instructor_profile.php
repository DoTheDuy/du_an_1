<main style="margin-top: 100px;">
    <!-- hero-area-start -->
    <div class="hero-arera course-item-height" data-background="Views/client/assets/img/slider/course-slider.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-course-1-text">
                        <h2>Instructor</h2>
                    </div>
                    <div class="course-title-breadcrumb">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><span>Instructor</span></li>
                                <li class="breadcrumb-item active" aria-current="page">David Allberto</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-area-end -->
    <!-- course-detailes-area-start -->
    <form action="" method="post">
    <div class="course-detalies-area pt-120 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="course-instructors-img mb-30">
                        <img src="Views/images/<?php echo $row['hinh_giang_vien']; ?>" alt="nstructors-img">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-9">
                    <div class="course-detelies-wrapper">
                        <div class="course-detiles-tittle mb-30">
                            <h3><?php echo $row['ten_giang_vien']; ?></h3>
                            <span><?php echo $row['thong_tin_giang_vien']; ?></span>
                        </div>
                        <div class="course-detiles-meta">
                            <div class="total-course">
                                <span>Total Courses</span>
                                <label>22</label>
                            </div>
                            <div class="student course">
                                <span>Students</span>
                                <label>5,230</label>
                            </div>
                            <div class="review-course">
                                <span>Review</span>
                                <div class="review-course-inner d-flex">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    </ul>
                                    <p>4.9 (540)</p>
                                </div>
                            </div>
                            <div class="course-details-action">
                                <div class="course-follow">
                                    <a href="javascript:void(0)" class="edu-follow-btn">Follow</a>
                                </div>
                                <div class="course-share">
                                    <a href="#" class="share-btn"><i class="far fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="course-bio-text pt-45 pb-20">
                            <h3>Biography</h3>
                            <p><?php echo $row['thong_tin_chi_tiet']; ?></p>
                        </div>
<!--                        <div class="my-course-info">-->
<!--                            <h3>My Courses</h3>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- course-detailes-area- end -->
</main>