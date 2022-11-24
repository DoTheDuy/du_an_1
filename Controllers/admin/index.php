<?php

    $page = isset($_GET["page"]) ? $_GET["page"] : "";
    switch ($page){
        case "category":
            require "category.php";
            break;
        case "product":
            include "product.php";
            break;
        case "user":
            include "user.php";
            break;
        case "comment":
            include "comment.php";
            break;
//        case "giangvien":
//            require "giangvien.php";
//            break;
        case "lop":
            include "lop.php";
                break;
        default:
            $VIEW_NAME = "home.php";
            break;
    }
include "Views/admin/layout.php";

    
?>