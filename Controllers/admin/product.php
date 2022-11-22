<?php
    require "Models/admin/category.php";
    require "Models/admin/product.php";
    $act = isset($_GET['act']) ? $_GET['act'] : "";
    switch ($act) {
        case 'edit':
            if(isset($_GET['editId'])) {
                $ma_khoa_hoc = $_GET['editId'];
                $row = get_one_product($ma_khoa_hoc);
            }
            $loai_khoa_hoc = get_all_loai_khoa_hoc();
            $VIEW_NAME = "Views/admin/product/edit.php";
            break;
        case 'list':
            if(isset($_GET['deleteId'])){
                $ma_khoa_hoc = $_GET['deleteId'];
                delete_product($ma_khoa_hoc);
            }
            $results = get_all_product();
            $VIEW_NAME = "Views/admin/product/list.php";
            break;
        default:
            $loai_khoa_hoc = get_all_loai_khoa_hoc();
            $VIEW_NAME = "Views/admin/product/add.php";
            break;
    }
?>
