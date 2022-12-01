<?php

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
<div  >
    <!-- footer-area-end -->
    <form  action="" method="post">
        <div style="justify-content: center; width: 1000px; margin-top: 100px;margin-left: 450px" class="signin-area-wrapper">
            <div class="signup-box text-center">
                <div class="signup-text">
                    <h3>Sign in</h3>
                </div>
                <div class="signup-thumb">
                    <img src="Views/client/assets/img/sing-up/sign-up.png" alt="image not found">
                </div>
            </div>

            <div class="signup-form-wrapper">
                <div class="signup-wrapper">
                    <input type="text" name="ten_khach_hang" placeholder="Email or Username">
                </div>
                <div class="signup-wrapper">
                    <input type="password" name="mat_khau" placeholder="Password">
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

    </form>
    <?php } ?>
</div>

