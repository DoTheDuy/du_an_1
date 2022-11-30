<?php
include "Views/client/header.php";
//include "Models/client/index.php";
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $loai_khoa_hoc = get_all_loai_khoa_hoc();
        $act=$_GET['act'];
        switch ($act) {
            case 'course':
                if(isset($_GET['category'])){
                    $iddm = $_GET['category'];
                    $results =get_product_by_category($iddm);
                }else{
                    $results = get_all_product();
                }
                include  "Views/client/course.php";
                break;
            case 'cart':
                include  "Views/client/cart.php";
                break;
            case 'instructor':
                $results = get_all_giangvien();
                include  "Views/client/instructor.php";
                break;
            case 'instructor_profile':
                $results = get_all_giangvien();
                if(isset($_GET['idPro'])) {
                    $ma_giang_vien = $_GET['idPro'];
                    $row = get_one_giangvien($ma_giang_vien);
                }
                include  "Views/client/instructor_profile.php";
                break;
            case 'zoom_class':
                include  "Views/client/zoom_class.php";
                break;
            case 'about':
                include  "Views/client/about.php";
                break;
            case "quenmk":
                include  "Views/client/quenmk.php";
                break;
            case 'signup':
                include  "Views/client/signup.php";
                break;
            case 'signin':
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
                include  "Views/client/signin.php";
                break;
            case 'register':
                include  "Views/client/register.php";
                break;
            case "course_detail":
                if(isset($_GET['idPro'])) {
                    $ma_khoa_hoc = $_GET['idPro'];
                    $row = get_one_product($ma_khoa_hoc);
                }
                include  "Views/client/course_details.php";
                break;
            case "cart":
                if(isset($_GET['deleteId'])) {
                    session_start();
                    $index = $_GET['deleteId'];
                    unset($_SESSION['mycart'][$index]);
                    header("Location: ?act=cart");
                }
                include "Views/client/cart.php";
                break;
            default:
                include  "Views/client/home.php";
                break;
        }
    }else{
        $khoa_hoc = get_6_product_new();
        include "Views/client/home.php";
}
include "Views/client/footer.php";

?>