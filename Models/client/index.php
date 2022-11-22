<?php
require "Models/db.php";
    // Get All categoties
function get_all_loai_khoa_hoc(){
    $sql_get_categoty = "SELECT * FROM loai_khoa_hoc";
    $loai_khoa_hoc = getData($sql_get_categoty, "FETCH_ALL");
    return $loai_khoa_hoc;
}

    // get All product
function get_all_product() {
    $sql = "SELECT * FROM khoa_hoc";
    $khoa_hoc = getData($sql, "FETCH_ALL");
    return $khoa_hoc;
}
function get_all_giangvien() {
    $sql_get_categoty = "SELECT * FROM giang_vien";
    $giang_vien = getData($sql_get_categoty, "FETCH_ALL");
    return $giang_vien;
}
function get_all_lop() {
    $sql = "SELECT * FROM lop";
    $lop = getData($sql, "FETCH_ALL");
    return $lop;
}

// function get_9_product_new() {
//     $sql = "SELECT * FROM khoa_hoc WHERE 1 ORDER BY id DESC LIMIT 0,9";
//     $khoa_hoc = getData($sql, "FETCH_ALL");
//     return $khoa_hoc;
// }
// function get_product_special() {
//     $sql_get_product_special = "SELECT * FROM products WHERE especially='true'";
//     $product_specials = getData($sql_get_product_special, "FETCH_ALL");
//     return $product_specials;
// }

function insert_account($ten_khach_hang, $email, $mat_khau,$dien_thoai){
    $sql = "INSERT INTO khach_hang(ten_khach_hang, email, mat_khau,dien_thoai) values('$ten_khach_hang', '$email', '$mat_khau','$dien_thoai')";
    getData($sql, '');
}

function checkuser($ten_khach_hang, $mat_khau){
    $sql = "SELECT * FROM khach_hang WHERE ten_khach_hang='".$ten_khach_hang."' AND mat_khau='".$mat_khau."'";
    $khach_hang = getData($sql, 'FETCH_ONE');
    return $khach_hang;
}

function get_one_product($ma_khoa_hoc) {
    $sql = "SELECT * FROM khoa_hoc WHERE ma_khoa_hoc='$ma_khoa_hoc'";
    $result = getData($sql, "FETCH_ONE");
    return $result;
}
function get_one_giangvien($ma_giang_vien) {
    $sql = "SELECT * FROM giang_vien WHERE ma_giang_vien='$ma_giang_vien'";
    $result = getData($sql, "FETCH_ONE");
    return $result;
}
function get_one_lop($ma_lop) {
    $sql = "SELECT * FROM lop WHERE ma_lop='$ma_lop'";
    $result = getData($sql, "FETCH_ONE");
    return $result;
}

function insert_comment($content, $id_user, $name_user,  $id_product, $date_comment) {
    $sql = "INSERT INTO comments(content, id_user, name_user, id_product, date_comment) values('$content', '$id_user', '$name_user', '$id_product',  '$date_comment')";
    getData($sql, '');
}

function get_all_comment_by_id($id_product) {
    $sql = "SELECT * FROM comments WHERE id_product= '$id_product' ORDER BY id DESC";
    $results = getData($sql, 'FETCH_ALL');
    return $results;
}


function loadall_pro_top10(){
    $sql = "SELECT * FROM khoa_hoc WHERE 1 ORDER BY view DESC LIMIT 0,10";
    $listpro = getData($sql, 'FETCH_ALL');
    return $listpro;
}

function get_product_by_category($ma_khoa_hoc){
    $sql = "SELECT * FROM khoa_hoc WHERE ma_loai = '$ma_khoa_hoc'";
    $listpro = getData($sql, "FETCH_ALL");
    return $listpro;
}
function get_lop_by_category($ma_khoa_hoc){
    $sql = "SELECT * FROM lop WHERE ma_loai = '$ma_khoa_hoc'";
    $listpro = getData($sql, "FETCH_ALL");
    return $listpro;
}
function get_lop_by_giangvien($ma_lop){
    $sql = "SELECT * FROM lop WHERE ma_giang_vien = '$ma_lop'";
    $listpro = getData($sql, "FETCH_ALL");
    return $listpro;
}

function checkEmail($email) {
    $sql = "SELECT * FROM khach_hang WHERE email='$email'";
    $result = getData($sql, "FETCH_ONE");
    return $result;
}

function get_one_user($ma_khach_hang) {
    $sql = "SELECT * FROM khach_hang WHERE ma_khach_hang='$ma_khach_hang'";
    $result = getData($sql, 'FETCH_ONE');
    return $result;
}

function update_account($ma_khach_hang, $ten_khach_hang, $email, $mat_khau,$dien_thoai){
    $sql = "UPDATE khach_hang SET ten_khach_hang='$ten_khach_hang', email='$email', mat_khau='$mat_khau' , dien_thoai='$dien_thoai'  WHERE ma_khach_hang='$ma_khach_hang'";
    getData($sql, '');
}

?>
