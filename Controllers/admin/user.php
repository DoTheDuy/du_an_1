<?php
    require "Models/admin/user.php";
    if(isset($_GET['deleteId'])){
        $ma_khach_hang = $_GET['deleteId'];
        delete_account($ma_khach_hang);
    }
    $results = get_all_users();
    $VIEW_NAME = "Views/admin/user/list.php";
?>

