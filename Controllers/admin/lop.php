<?php
    require "Models/admin/category.php";
    // require "Models/admin/giangvien.php";
    require "Models/admin/lop.php";
    $act = isset($_GET['act']) ? $_GET['act'] : "";
    switch ($act) {
        case 'edit':
            if(isset($_GET['editId'])) {
                $ma_lop = $_GET['editId'];
                $row = get_one_lop($ma_lop);
            }
            $loai_khoa_hoc = get_all_loai_khoa_hoc();
            // $giang_vien = get_all_giangvien();
            $VIEW_NAME = "Views/admin/lop/edit.php";
            break;
        case 'list':
            if(isset($_GET['deleteId'])){
                $ma_lop = $_GET['deleteId'];
                delete_lop($ma_lop);
            }
            $results = get_all_lop();
            $VIEW_NAME = "Views/admin/lop/list.php";
            break;
        default:
            $loai_khoa_hoc = get_all_loai_khoa_hoc();
            // $giang_vien = get_all_giangvien();
            $VIEW_NAME = "Views/admin/lop/add.php";
            break;
    }
?>
