<?php
include "Views/client/header.php";
require "Models/client/index.php";
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $khoa_hoc = get_all_product();
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
                include  "Views/client/instructor.php";
                break;
            case 'zoom_class':
                include  "Views/client/zoom_class.php";
                break;
            case 'about':
                include  "Views/client/about.php";
                break;
            case 'register':
                include  "Views/client/register.php";
                break;
            case 'course_detail':
                if(isset($_GET['idPro'])) {
                    $ma_khoa_hoc = $_GET['idPro'];
                    $row = get_one_product($ma_khoa_hoc);
                }
                include  "Views/client/course_details.php";
                break;
            default:
                include  "Views/client/home.php";
                break;
        }
    }else{
        include "Views/client/home.php";
}
include "Views/client/footer.php";

?>