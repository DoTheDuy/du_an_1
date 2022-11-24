<?php
session_start();
if (isset($_POST['btn-login'])) {
    $ten_khach_hang = $_POST['ten_khach_hang'];
    $mat_khau = $_POST['mat_khau'];
    $checkuser = checkuser($ten_khach_hang, $mat_khau);
    if(is_array($checkuser)){
        $_SESSION['user'] = $checkuser;
    }else{
        $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra HOẶC đăng kí mới";
    }
}

if (isset($_POST['exit'])) {
    session_unset();
}
?>

<footer>
      <div class="footer-area pt-100">
         <div class="container">
            <div class="footer-main mb-60">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="footer-widget f-w1 mb-40">
                        <div class="footer-img">
                           <a href="footer.php"> <img src="Views/client/assets/img/logo/footer-logo.png" alt="footer-logo"></a>
                           <p>Great lesson ideas and lesson plans for ESL teachers! Educators can customize lessons as
                              best
                              plans to knowledge.</p>
                        </div>
                        <div class="footer-icon">
                           <a href="#"><i class="fab fa-facebook-f"></i></a>
                           <a href="#"><i class="fab fa-twitter"></i></a>
                           <a href="#"><i class="fab fa-instagram"></i></a>
                           <a href="#"> <i class="fab fa-linkedin-in"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="footer-widget f-w2 mb-40">
                        <h3>Online Platform</h3>
                        <ul>
                           <li><a href="#">Proper Guidelines</a></li>
                           <li><a href="#">Digital Library</a></li>
                           <li><a href="#">Compare Us</a></li>
                           <li><a href="#">Become Instructor</a></li>
                           <li><a href="#">Build Career</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="footer-widget f-w3 mb-40">
                        <h3>Browse Courses</h3>
                        <ul>
                           <li><a href="#">Development</a></li>
                           <li><a href="#">Business</a></li>
                           <li><a href="#">Health & Fitness</a></li>
                           <li><a href="#">Life Styles</a></li>
                           <li><a href="#">Photography</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="footer-widget f-w4 mb-40">
                        <h3>Insight Community</h3>
                        <ul>
                           <li><a href="#">Global Partners</a></li>
                           <li><a href="#">Forum</a></li>
                           <li><a href="#">Help & Support</a></li>
                           <li><a href="#">Community</a></li>
                           <li><a href="#">Documentation</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright-area">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="copyright-text border-line">
                           <p>© Copyrighted & Designed
                              by <a href="https://themeforest.net/user/bdevs"><span>BDevs</span></a> </p>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-sm-6">
                        <div class="copy-right-support border-line-2">
                           <div class="copy-right-svg">
                              <svg xmlns="http://www.w3.org/2000/svg" width="43.945" height="50"
                                 viewBox="0 0 43.945 50">
                                 <g id="headphones" transform="translate(-31)">
                                    <g id="Group_2171" data-name="Group 2171" transform="translate(36.859 20.508)">
                                       <g id="Group_2170" data-name="Group 2170">
                                          <path id="Path_2983" data-name="Path 2983"
                                             d="M95.395,210A4.4,4.4,0,0,0,91,214.395v11.914a4.395,4.395,0,1,0,8.789,0V214.395A4.4,4.4,0,0,0,95.395,210Z"
                                             transform="translate(-91 -210)" fill="#2467ec" />
                                       </g>
                                    </g>
                                    <g id="Group_2173" data-name="Group 2173" transform="translate(31 23.669)">
                                       <g id="Group_2172" data-name="Group 2172">
                                          <path id="Path_2984" data-name="Path 2984"
                                             d="M33.93,243.6a7.268,7.268,0,0,1,.125-1.234A4.386,4.386,0,0,0,31,246.529v6.055a4.386,4.386,0,0,0,3.054,4.163,7.268,7.268,0,0,1-.125-1.234Z"
                                             transform="translate(-31 -242.366)" fill="#2467ec" />
                                       </g>
                                    </g>
                                    <g id="Group_2175" data-name="Group 2175" transform="translate(48.578 20.508)">
                                       <g id="Group_2174" data-name="Group 2174">
                                          <path id="Path_2985" data-name="Path 2985"
                                             d="M227.113,210a4.4,4.4,0,0,0-4.395,4.395v11.914a4.4,4.4,0,0,0,4.395,4.395,4.335,4.335,0,0,0,1.259-.206,4.386,4.386,0,0,1-4.189,3.136h-4.664a4.395,4.395,0,1,0,0,2.93h4.664a7.333,7.333,0,0,0,7.324-7.324V214.395A4.4,4.4,0,0,0,227.113,210Z"
                                             transform="translate(-211 -210)" fill="#2467ec" />
                                       </g>
                                    </g>
                                    <g id="Group_2177" data-name="Group 2177" transform="translate(71.891 23.669)">
                                       <g id="Group_2176" data-name="Group 2176">
                                          <path id="Path_2986" data-name="Path 2986"
                                             d="M449.722,242.366a7.266,7.266,0,0,1,.125,1.234v11.914a7.266,7.266,0,0,1-.125,1.234,4.386,4.386,0,0,0,3.055-4.163v-6.055A4.386,4.386,0,0,0,449.722,242.366Z"
                                             transform="translate(-449.722 -242.366)" fill="#2467ec" />
                                       </g>
                                    </g>
                                    <g id="Group_2179" data-name="Group 2179" transform="translate(31)">
                                       <g id="Group_2178" data-name="Group 2178">
                                          <path id="Path_2987" data-name="Path 2987"
                                             d="M52.973,0A22,22,0,0,0,31,21.973v.037a7.253,7.253,0,0,1,3-1.361,19.02,19.02,0,0,1,37.952,0,7.256,7.256,0,0,1,3,1.361v-.037A22,22,0,0,0,52.973,0Z"
                                             transform="translate(-31)" fill="#2467ec" />
                                       </g>
                                    </g>
                                 </g>
                              </svg>
                           </div>
                           <div class="copyright-svg-content">
                              <p>Have a question? Call us 24/7</p>
                              <h5><a href="tel:(987)547587587">(987) 547587587</a></h5>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="copyright-subcribe">
                           <form action="#" class="widget__subscribe">
                              <div class="field">
                                 <input type="email" placeholder="Enter Email">
                              </div>
                              <button type="submit">Subscribe<i class="fas fa-paper-plane"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
<div class="signin-area">
   <!-- footer-area-end -->
<?php
if(isset($_SESSION['user'])) {
extract($_SESSION['user']);
?>
<p class="text-center">Xin chào <?=$ten_khach_hang?>!!!</p>
<form method="post" action="" class="mb">
    <a href="?page=quenmk">Quên mật khẩu </a>
    <br>
    <a href="?page=capnhattk">Cập nhật tài khoản</a>
    <br>
    <?php
    if($chuc_nang == "ADMIN" ) { ?>
        <a href="/du_an_1/admin">Đăng nhập Admin</a>
        <br>
    <?php } ?>
    <button class="btn btn-danger exit" type="submit" name="exit">Thoát</button>
</form>
<?php } else { ?>
<form  action="" method="post">

    <div class="signin-area-wrapper">
        <div class="signup-box text-center">
            <div class="signup-text">
                <h3>Sign in</h3>
            </div>
            <div class="signup-thumb">
                <img src="assets/img/sing-up/sign-up.png" alt="image not found">
            </div>
        </div>

        <div class="signup-form-wrapper">
            <div class="signup-wrapper">
                <input type="text" name="ten_khach_hang" placeholder="Email or Username">
            </div>
            <div class="signup-wrapper">
                <input type="text" name="mat_khau" placeholder="Password">
            </div>
            <div class="signup-action">
                <div class="course-sidebar-list">
                    <input class="signup-checkbo" type="checkbox" id="sing-in">
                    <label class="sign-check" for="sing-in"><span>Remember me</span></label>
                </div>
            </div>
            <div class="sing-buttom mb-20">
            <button class="sing-btn" name="btn-login" type="submit" >Register now</button>
            </div>
            <div class="registered wrapper">
                <div class="not-register">
                    <span>Not registered?</span><span><a >Sign up</a></span>
                </div>
                <div class="forget-password">
                    <a href="#">Forgot password?</a>
                </div>
            </div>
            <span style="color: red;margin-top: 5px;"><?php echo isset($thongbao) ? $thongbao : ""; ?></span>
        </div>
    </div>
</div>
</form>
    <?php
}
?>
<!-- sigin-area end-->

<!-- signup-area-start -->
<!--<div class="signup-area ">-->
<!--    <div class="sign-up-wrapper">-->
<!--        <div class="signup-box text-center">-->
<!--            <div class="signup-text">-->
<!--                <h3>Sign up</h3>-->
<!--            </div>-->
<!--            <div class="signup-message">-->
<!--                <img src="assets/img/sing-up/sign-up-message.png" alt="image not found">-->
<!--            </div>-->
<!--            <div class="signup-thumb">-->
<!--                <img src="assets/img/sing-up/sign-up.png" alt="image not found">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="signup-form-wrapper">-->
<!--            <div class="signup-input-wrapper">-->
<!--                <input type="text" placeholder="First Name">-->
<!--                <input type="text" placeholder="First Name">-->
<!--            </div>-->
<!--            <div class="signup-wrapper">-->
<!--                <input type="text" placeholder="Email">-->
<!--            </div>-->
<!--            <div class="signup-wrapper">-->
<!--                <input type="text" placeholder="Username">-->
<!--            </div>-->
<!--            <div class="signup-wrapper">-->
<!--                <input type="text" placeholder="Password">-->
<!--            </div>-->
<!--            <div class="signup-action">-->
<!--                <div class="course-sidebar-list">-->
<!--                    <input class="signup-checkbo" type="checkbox" id="sing-up">-->
<!--                    <label class="sign-check" for="sing-up"><span>Accept the terms and <a href="#">Privacy-->
<!--                           Policy</a></span></label>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="sing-buttom mb-20">-->
<!--                <button class="sing-btn"  >Register now</button>-->
<!--            </div>-->
<!--            <div class="acount-login text-center">-->
<!--                <span>Already have an account? <a href="#">Log in</a></span>-->
<!--            </div>-->
<!--            <div class="sign-social text-center">-->
<!--                <span>Or Sign- in with</span>-->
<!--            </div>-->
<!--            <div class="sign-social-icon">-->
<!--                <div class="sign-facebook">-->
<!--                    <svg xmlns="http://www.w3.org/2000/svg" width="9.034" height="18.531" viewBox="0 0 9.034 18.531">-->
<!--                        <path id="Path_2121121" data-name="Path 212"-->
<!--                              d="M183.106,757.2v-1.622c0-.811.116-1.274,1.39-1.274h1.621v-3.127h-2.664c-3.243,0-4.285,1.506-4.285,4.169v1.969h-2.085v3.127h1.969v9.265h4.054v-9.265h2.664l.347-3.243Z"-->
<!--                              transform="translate(-177.083 -751.176)" fill="#2467ec" />-->
<!--                    </svg>-->
<!--                    <a href="#">Facebook</a>-->
<!--                </div>-->
<!--                <div class="sign-gmail">-->
<!--                    <svg xmlns="http://www.w3.org/2000/svg" width="21.692" height="16.273" viewBox="0 0 21.692 16.273">-->
<!--                        <g id="gmail-01" transform="translate(0 -63.953)">-->
<!--                            <path id="Path_868365" data-name="Path 863185"-->
<!--                                  d="M1.479,169.418H4.93v-8.381l-2.26-3.946L0,157.339v10.6a1.479,1.479,0,0,0,1.479,1.479Z"-->
<!--                                  transform="translate(0 -89.192)" fill="#0085f7" />-->
<!--                            <path id="Path_863286" data-name="Path 8683106"-->
<!--                                  d="M395.636,169.418h3.451a1.479,1.479,0,0,0,1.479-1.479v-10.6l-2.666-.248-2.264,3.946v8.381Z"-->
<!--                                  transform="translate(-378.874 -89.192)" fill="#00a94b" />-->
<!--                            <path id="Path_8322687" data-name="Path 831687"-->
<!--                                  d="M349.816,65.436,347.789,69.3l2.027,2.541,4.93-3.7V66.176A2.219,2.219,0,0,0,351.2,64.4Z"-->
<!--                                  transform="translate(-333.054)" fill="#ffbc00" />-->
<!--                            <path id="Path_863088" data-name="Path 868038"-->
<!--                                  d="M72.7,105.365l-1.932-4.08L72.7,98.956l5.916,4.437,5.916-4.437v6.409L78.619,109.8Z"-->
<!--                                  transform="translate(-67.773 -33.52)" fill="#ff4131" fill-rule="evenodd" />-->
<!--                            <path id="Path_8682519" data-name="Path 868921"-->
<!--                                  d="M0,66.176v1.972l4.93,3.7V65.436L3.55,64.4A2.219,2.219,0,0,0,0,66.176Z"-->
<!--                                  transform="translate(0)" fill="#e51c19" />-->
<!--                        </g>-->
<!--                    </svg>-->
<!--                    <a href="#">Google</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->


   <!-- JS here -->
   <script src="Views/client/assets/js/vendor/jquery-3.6.0.min.js"></script>
   <script src="Views/client/assets/js/vendor/waypoints.min.js"></script>
   <script src="Views/client/assets/js/bootstrap.bundle.min.js"></script>
   <script src="Views/client/assets/js/meanmenu.js"></script>
   <script src="Views/client/assets/js/swiper-bundle.min.js"></script>
   <script src="Views/client/assets/js/owl.carousel.min.js"></script>
   <script src="Views/client/assets/js/magnific-popup.min.js"></script>
   <script src="Views/client/assets/js/huicalendar.js"></script>
   <script src="Views/client/assets/js/parallax.min.js"></script>
   <script src="Views/client/assets/js/backToTop.js"></script>
   <script src="Views/client/assets/js/nice-select.min.js"></script>
   <script src="Views/client/assets/js/counterup.min.js"></script>
   <script src="Views/client/assets/js/ajax-form.js"></script>
   <script src="Views/client/assets/js/wow.min.js"></script>
   <script src="Views/client/assets/js/isotope.pkgd.min.js"></script>
   <script src="Views/client/assets/js/imagesloaded.pkgd.min.js"></script>
   <script src="Views/client/assets/js/main.js"></script>
</body>


<!-- Mirrored from themepure.net/html/eduman-prv/eduman/layout.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Nov 2022 13:00:10 GMT -->
</html>
