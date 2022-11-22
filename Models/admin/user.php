<?php
require "Models/db.php";
function insert_account($ten_khach_hang, $email, $mat_khau,$dien_thoai){
    $sql = "INSERT INTO khach_hang(ten_khach_hang, email, mat_khau,dien_thoai) values('$ten_khach_hang', '$email', '$mat_khau','$dien_thoai')";
    getData($sql, '');
}
function checkuser($ten_khach_hang, $mat_khau){
    $sql = "SELECT * FROM khach_hang WHERE ten_khach_hang='".$ten_khach_hang."' AND password='".$mat_khau."'";
    $user = getData($sql, 'FETCH_ONE');
    return $user;
}
function update_account($ma_khach_hang, $ten_khach_hang, $email, $mat_khau,$dien_thoai){
    $sql = "UPDATE khach_hang SET ten_khach_hang='$ten_khach_hang', email='$email', password='$mat_khau' dienthoai='$dien_thoai'  WHERE ma_khach_hang='$ma_khach_hang'";
    getData($sql, '');
}
function get_all_users(){
    $sql = "SELECT * FROM khach_hang";
    $results = getData($sql,'FETCH_ALL');
    return $results;
}
function delete_account($ma_khach_hang){
    $sql = "DELETE FROM  khach_hang WHERE ma_khach_hang=".$ma_khach_hang;
    getData($sql, '');
}
?>