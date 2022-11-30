<?php
if (isset($_POST['btn-signUp'])) {
    $ten_khach_hang = $_POST['ten_khach_hang'];
    $email = $_POST['email'];
    $mat_khau = $_POST['mat_khau'];
    $dien_thoai = $_POST['dien_thoai'];
    insert_account($ten_khach_hang, $email, $mat_khau,$dien_thoai);
    $message = "Đăng ký tài khoản thành công, vui lòng đăng nhập để vào hệ thống!!";
}
?>
<div style="display: flex ;margin-top: 150px;margin-left: 500px; justify-content: center; margin-bottom: 50px ; " class="sign-up-wrapper">
    <div class="signup-box text-center">

        <div class="signup-message">
            <img src="Views/client/assets/img/sing-up/sign-up-message.png" alt="image not found">
        </div>
        <div class="signup-thumb">
            <img src="Views/client/assets/img/sing-up/sign-up.png" alt="image not found">
        </div>
    </div>
    <div class="signup-form-wrapper" >
        <form action="" method="post">
        <h3 style="margin-left: 160px; margin-bottom: 40px; font-size: 40px" role="alert">Sign Up</h3>
        <div class="signup-wrapper" style="width: 500px">
            <input type="email" name="email"  placeholder="Email" value="" required>
        </div>
        <div class="signup-wrapper" style="width: 500px">
            <input type="text"  name="ten_khach_hang" placeholder="Username" value="" required>
        </div>
        <div class="signup-wrapper" style="width: 500px">
            <input type="password" name="mat_khau"   placeholder="Password" value="" required>
        </div>
            <div class="signup-wrapper" style="width: 500px">
                <input type="tel" name="dien_thoai"   placeholder="Phone number" value="" required>
            </div>
        <div class="signup-action" style="width: 500px">
            <div class="course-sidebar-list">
                <input class="signup-checkbo" type="checkbox" id="sing-up">
                <label class="sign-check" for="sing-up"><span>Accept the terms and <a href="#">Privacy
                           Policy</a></span></label>
            </div>
        </div>
        <div class="sing-buttom mb-20" style="width: 500px">
            <button name="btn-signUp" type="submit" >Register now</button>
        </div>
        <div class="acount-login text-center" style="width: 500px">
            <span>Already have an account? <a href="/du_an_1/">Log in</a></span>
        </div>
        <div class="sign-social text-center" style="width: 500px">
            <span>Or Sign- in with</span>
        </div>
        </form>
        <?php echo isset($message) ? "<div class='alert alert-success' role='alert'>".$message."</div>" : ""; ?>
    </div>
</div>