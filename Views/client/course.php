
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
                                 <input class="edu-check-box" type="checkbox" id="e-bus">
                                 <label class="edu-check-label" for="e-bus">Business (12)</label>
                              </div>
                           </li>
                           <li>
                              <div class="course-sidebar-list">
                                 <input class="edu-check-box" type="checkbox" id="e-dev">
                                 <label class="edu-check-label" for="e-dev">Development (9)</label>
                              </div>
                           </li>
                           <li>
                              <div class="course-sidebar-list">
                                 <input class="edu-check-box" type="checkbox" id="e-data">
                                 <label class="edu-check-label" for="e-data">Data Science (25)</label>
                              </div>
                           </li>
                           <li>
                              <div class="course-sidebar-list">
                                 <input class="edu-check-box" type="checkbox" id="e-art">
                                 <label class="edu-check-label" for="e-art">Arts & Design (10)</label>
                              </div>
                           </li>
                           <li>
                              <div class="course-sidebar-list">
                                 <input class="edu-check-box" type="checkbox" id="e-fin">
                                 <label class="edu-check-label" for="e-fin">Finance (8)</label>
                              </div>
                           </li>
                           <li>
                              <div class="course-sidebar-list">
                                 <input class="edu-check-box" type="checkbox" id="e-mark">
                                 <label class="edu-check-label" for="e-mark">Marketing (22)</label>
                              </div>
                           </li>
                           <li>
                              <div class="course-sidebar-list">
                                 <input class="edu-check-box" type="checkbox" id="e-per">
                                 <label class="edu-check-label" for="e-per">Management (12)</label>
                              </div>
                           </li>
                           <li>
                              <div class="course-sidebar-list">
                                 <input class="edu-check-box" type="checkbox" id="e-heal">
                                 <label class="edu-check-label" for="e-heal">Health & Fitness (5)</label>
                              </div>
                           </li>
                           <li>
                              <div class="course-sidebar-list">
                                 <input class="edu-check-box" type="checkbox" id="e-photo">
                                 <label class="edu-check-label" for="e-photo">Photography (18)</label>
                              </div>
                           </li>
                           <li>
                              <div class="course-sidebar-list">
                                 <input class="edu-check-box" type="checkbox" id="e-music">
                                 <label class="edu-check-label" for="e-music">Music (21)</label>
                              </div>
                           </li>
                           <li>
                              <div class="course-sidebar-list">
                                 <input class="edu-check-box" type="checkbox" id="e-acad">
                                 <label class="edu-check-label" for="e-acad">Academic (16)</label>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>



               <div class="col-xl-9 col-lg-8 col-md-12">
                   <?php
                   foreach ($results as $key => $value) { ?>
                  <div class="row">
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-wrapper-2 mb-30">
                           <div class="student-course-img">
                              <img src="Views/client/assets/img/course/course-01.jpg" alt="courde-img">
                           </div>
                           <div class="student-course-footer">
                              <div class="student-course-linkter">
                                 <div class="portfolio-price">
                                    <span><?php echo $value['don_gia']?></span>
                                    <del><?php echo $value['gia_khuyen_mai']?></del>
                                 </div>
                              </div>
                              <div class="student-course-text">
                                 <h3><a href="course-details.html"><?php echo $value['ten_khoa_hoc']?></a>
                                 </h3>
                              </div>
                           </div>
                        </div>
                     </div>
                      <?php } ?>



                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-wrapper-2 mb-30">
                           <div class="student-course-img">
                              <img src="Views/client/assets/img/course/course-02.jpg" alt="course-img">
                           </div>
                           <div class="student-course-footer">
                              <div class="student-course-linkter">
                                 <div class="portfolio-price">
                                    <span>FREE</span>
                                 </div>
                              </div>
                              <div class="student-course-text">
                                 <h3><a href="course-details.html">Write Better Emails: Tactics for Smarter Team
                                       Communication</a></h3>
                              </div>
                              <div class="portfolio-user">
                                 <div class="user-icon">
                                    <a href="instructor-profile.html"><i class="fas fa-user"></i>Eduman</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-wrapper-2 mb-30">
                           <div class="student-course-img">
                              <img src="Views/client/assets/img/course/course-03.jpg" alt="course-img">
                           </div>
                           <div class="student-course-footer">
                              <div class="student-course-linkter">
                                 <div class="portfolio-price">
                                    <span>$22.14</span>
                                 </div>
                              </div>
                              <div class="student-course-text">
                                 <h3><a href="course-details.html">Data Science Real-Life Data Science Exercises
                                       Included</a></h3>
                              </div>
                              <div class="portfolio-user">
                                 <div class="user-icon">
                                    <a href="instructor-profile.html"><i class="fas fa-user"></i>Mark Hanry</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-wrapper-2 mb-30">
                           <div class="student-course-img">
                              <img src="Views/client/assets/img/course/course-04.jpg" alt="course-img">
                           </div>
                           <div class="student-course-footer">
                              <div class="student-course-linkter">
                                 <div class="portfolio-price">
                                    <span>$147.00</span>
                                 </div>
                              </div>
                              <div class="student-course-text">
                                 <h3><a href="course-details.html">MySQL Database : Beginner SQL Database Design</a>
                                 </h3>
                              </div>
                              <div class="portfolio-user">
                                 <div class="user-icon">
                                    <a href="instructor-profile.html"><i class="fas fa-user"></i>Danial</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-wrapper-2 mb-30">
                           <div class="student-course-img">
                              <img src="Views/client/assets/img/course/course-05.jpg" alt="course-img">
                           </div>
                           <div class="student-course-footer">
                              <div class="student-course-linkter">
                                 <div class="portfolio-price">
                                    <span>$21.00</span>
                                 </div>
                              </div>
                              <div class="student-course-text">
                                 <h3><a href="course-details.html">Python and Django Full Stack Web Developer
                                       Bootcamp</a></h3>
                              </div>
                              <div class="portfolio-user">
                                 <div class="user-icon">
                                    <a href="instructor-profile.html"><i class="fas fa-user"></i>Junior Lucy</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-wrapper-2 mb-30">
                           <div class="student-course-img">
                              <img src="Views/client/assets/img/course/course-06.jpg" alt="course-img">
                           </div>
                           <div class="student-course-footer">
                              <div class="student-course-linkter">
                                 <div class="portfolio-price">
                                    <span>$12.00</span>
                                 </div>
                              </div>
                              <div class="student-course-text">
                                 <h3><a href="course-details.html">Data Science Real-Life Data Science Exercises
                                       Included</a></h3>
                              </div>
                              <div class="portfolio-user">
                                 <div class="user-icon">
                                    <a href="instructor-profile.html"><i class="fas fa-user"></i>Mark Hanry</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-wrapper-2 mb-30">
                           <div class="student-course-img">
                              <img src="Views/client/assets/img/course/course-07.jpg" alt="course-img">
                           </div>
                           <div class="student-course-footer">
                              <div class="student-course-linkter">
                                 <div class="portfolio-price">
                                    <span>$48.00</span>
                                    <del>$24.50</del>
                                 </div>
                              </div>
                              <div class="student-course-text">
                                 <h3><a href="course-details.html">Become a Super Human: Naturally & Safely Boost
                                       Testosterone</a></h3>
                              </div>
                              <div class="portfolio-user">
                                 <div class="user-icon">
                                    <a href="instructor-profile.html"><i class="fas fa-user"></i>Edyal Romel</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-wrapper-2 mb-30">
                           <div class="student-course-img">
                              <img src="Views/client/assets/img/course/course-08.jpg" alt="course-img">
                           </div>
                           <div class="student-course-footer">
                              <div class="student-course-linkter">
                                 <div class="portfolio-price">
                                    <span>FREE</span>
                                 </div>
                              </div>
                              <div class="student-course-text">
                                 <h3><a href="course-details.html">Python and Django Full Stack Web Developer
                                       Bootcamp</a></h3>
                              </div>
                              <div class="portfolio-user">
                                 <div class="user-icon">
                                    <a href="3.html"><i class="fas fa-user"></i>Junior Lucy</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="course-wrapper-2 mb-30">
                           <div class="student-course-img">
                              <img src="Views/client/assets/img/course/course-09.jpg" alt="course-img">
                           </div>
                           <div class="student-course-footer">
                              <div class="student-course-linkter">
                                 <div class="portfolio-price">
                                    <span>$12.57</span>
                                 </div>
                              </div>
                              <div class="student-course-text">
                                 <h3><a href="course-details.html">Machine Learning Hands-On Python & R In Data
                                       Science</a></h3>
                              </div>
                              <div class="portfolio-user">
                                 <div class="user-icon">
                                    <a href="instructor-profile.html"><i class="fas fa-user"></i>Danial</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  <div class="row">
                     <div class="edu-pagination mt-30 mb-20">
                        <ul>
                           <li><a href="#"><i class="fal fa-angle-left"></i></a></li>
                           <li class="active"><a href="#"><span>01</span></a></li>
                           <li><a href="#"><span>02</span></a></li>
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


