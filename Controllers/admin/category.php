<?php
    include "Models/admin/category.php";
    $act = isset($_GET['act']) ? $_GET['act'] : "add";
    switch ($act){
        case 'add':
            $VIEW_NAME = "Views/admin/category/add.php";
            break;
        case 'edit':
            if(isset($_GET['editId'])) {
                $ma_loai = $_GET['editId'];
                $row = get_one_loai_khoa_hoc($ma_loai);
            }
            $VIEW_NAME = "Views/admin/category/edit.php";
            break;
        case 'list':
            if(isset($_GET['deleteId'])){
                $ma_loai = $_GET['deleteId'];
                xoa_loai_khoa_hoc($ma_loai);
            }
            $results = get_all_loai_khoa_hoc();
            $VIEW_NAME = "Views/admin/category/list.php";
            break;
        default:
            break;
    }
?>

