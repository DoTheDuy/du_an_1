<?php
include "Views/client/header.php";
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'course':
                include  "Views/client/course.php";;
                break;
            case 'cart':
                $VIEW_NAME = cart.php;
                break;
            case 'instructor':
                $VIEW_NAME = instructor.php;
                break;
            case 'zoom-class':
                $VIEW_NAME = zoom_class.php;
                break;
            case 'about':
                $VIEW_NAME = about.php;
                break;
            case 'register':
                $VIEW_NAME = register.php;
                break;
            default:
                $VIEW_NAME = home.php;
                break;
        }
    }else{
        include "Views/client/home.php";
}
include "Views/client/footer.php";

?>