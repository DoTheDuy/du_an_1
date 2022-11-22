<?php
require "Models/admin/giangvien.php";
$act = isset($_GET['act']) ? $_GET['act'] : "add";
switch ($act) {
        case 'add':
            $VIEW_NAME = "Views/admin/giangvien/add.php";
            break;
        case 'edit':
            if(isset($_GET['editId'])) {
                $ma_giang_vien = $_GET['editId'];
                $row = get_one_giangvien($ma_giang_vien);
            }
            $VIEW_NAME = "Views/admin/giangvien/edit.php";
            break;
        case 'list':
            if(isset($_GET['deleteId'])){
                $ma_giang_vien = $_GET['deleteId'];
                xoa_loai_giang_vien($ma_giang_vien);
            }
            $results = get_all_giangvien();
            $VIEW_NAME = "Views/admin/giangvien/list.php";
            break;
        default:
            break;
    }
?>
