<?php
//include "Models/client/index.php";
include "Views/client/header.php";
//    if ((isset($_GET['act']))&&($_GET['act']!="")){
//        $act=$_GET['act'];
//        switch ($act) {
//            case "course":
//                include "Views/client/course.php";
//                break;
//            case "cart":
//                include "Views/client/cart.php";
//                break;
//            case "instructor":
//                include "Views/client/instructor.php";
//                break;
//            case "zoom-class":
//                include "Views/client/zoom-class.php";
//                break;
//            case "about":
//                include "Views/client/about.php";
//                break;
//            case "lop" :
//                $VIEW_NAME = "lop.php";
//                break;
//            default:
//                include "Views/client/home.php";
//                break;
//        }
//    }else{
        include "Views/client/home.php";
//}
    include "Views/client/footer.php";

?>