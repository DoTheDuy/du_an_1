<?php
    // require "Models/db.php";
    function add_lop($ten_lop, $ca_hoc, $thoi_gian_khai_giang, $ma_khoa_hoc,$ma_giang_vien, $trang_thai, $so_cho) {
        $sql = "INSERT INTO lop VALUES (null,'$ten_lop', '$ca_hoc', '$thoi_gian_khai_giang', '$ma_khoa_hoc', 
            '$ma_giang_vien', '$trang_thai', '$so_cho');";
        getData($sql,'');
    }

    function get_all_lop() {
        $sql = "SELECT * FROM lop";
        $results = getData($sql,'FETCH_ALL');
        return $results;
    }
    function delete_lop($ma_lop) {
        $sql = "DELETE FROM lop WHERE ma_lop='$ma_lop';";
        getData($sql,'');
    }
    function get_one_lop($ma_lop) {
        $sql = "SELECT * FROM lop WHERE ma_lop='$ma_lop'";
        $result = getData($sql, "FETCH_ONE");
        return $result;
    }
    function edit_lop($ma_lop, $ten_lop, $ca_hoc, $thoi_gian_khai_giang, $ma_khoa_hoc, $ma_loma_giang_vienai, $trang_thai, $so_cho){
        $sql = "UPDATE lop SET ten_lop='$ten_lop', ca_hoc='$ca_hoc', thoi_gian_khai_giang='$thoi_gian_khai_giang', ma_khoa_hoc='$ma_khoa_hoc', ma_loma_giang_vienai ='$ma_loma_giang_vienai',
            trang_thai='$trang_thai', so_cho='$so_cho' WHERE ma_lop='$ma_lop'";
        getData($sql,'');
    }
?>
