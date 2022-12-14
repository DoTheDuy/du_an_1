
   <main  style="margin-top: 100px">
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
                           <li class="breadcrumb-item"><a href="footer.php">Home</a></li>
                           <li class="breadcrumb-item"><span>Courses</span></li>
                           <li class="breadcrumb-item active" aria-current="page">instructor</li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- hero-area-end -->

      <!-- member-area-start -->
      <section class="member-area pt-125 pb-90">
         <div class="container">
            <div class="row">
                <?php foreach ($results as $key => $value) { ?>
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="member-main-wrapper mb-30">
                     <div class="member-body text-center">
                        <div class="member-item">
                           <div class="member-thumb">
                              <a href="/du_an_1?act=instructor_profile&idPro=<?php echo $value['ma_giang_vien'];?>"><img src="Views/images/<?php echo $value['hinh_giang_vien']?>"
                                    alt="member-img"></a>
                           </div>
                           <div class="member-content">
                              <h4><a href="/du_an_1?act=instructor_profile&idPro=<?php echo $value['ma_giang_vien'];?>"><?php echo $value['ten_giang_vien']?></a></h4>
                              <span><?php echo $value['thong_tin_giang_vien']?></span>
                           </div>
                           <div class="member-social">
                              <ul>
                                 <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                 <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                 <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                                 <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="member-meta">
                        <div class="member-reating">
                           <i class="fas fa-star"></i>
                           <span>4.8 (54k+)</span>
                        </div>
                        <div class="member-course">
                           <i class="flaticon-computer"></i><a href="#"><span>12 Courses</span></a>
                        </div>
                     </div>
                  </div>
               </div>
                <?php } ?>

            </div>
         </div>
      </section>
      <!-- member-area-end -->
   </main>
   <!-- footer-area-start -->
