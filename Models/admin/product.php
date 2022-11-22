<?php
    function add_product($ten_khoa_hoc, $don_gia, $gia_khuyen_mai, $ngay_tao,$hinh, $mo_ta_tom_tat, $trang_thai,$ma_loai) {
        $sql = "INSERT INTO khoa_hoc VALUES (null,'$ten_khoa_hoc', '$don_gia', '$gia_khuyen_mai', '$ngay_tao', 
            '$hinh', '$mo_ta_tom_tat', '$trang_thai','$ma_loai');";
        getData($sql,'');
    }

    function get_all_product() {
        $sql = "SELECT * FROM khoa_hoc";
        $results = getData($sql,'FETCH_ALL');
        return $results;
    }
    function delete_product($ma_khoa_hoc) {
        $sql = "DELETE FROM khoa_hoc WHERE ma_khoa_hoc='$ma_khoa_hoc';ALTER TABLE loai_khoa_hoc AUTO_INCREMENT= '$ma_khoa_hoc';";
        getData($sql,'');
    }
    function get_one_product($ma_khoa_hoc) {
        $sql = "SELECT * FROM khoa_hoc WHERE ma_khoa_hoc='$ma_khoa_hoc'";
        $result = getData($sql, "FETCH_ONE");
        return $result;
    }
    function edit_product($ma_khoa_hoc, $ten_khoa_hoc, $don_gia, $gia_khuyen_mai, $ngay_tao, $hinh, $mo_ta_tom_tat, $trang_thai, $ma_loai ){
        $sql = "UPDATE khoa_hoc SET ten_khoa_hoc='$ten_khoa_hoc', don_gia='$don_gia', gia_khuyen_mai='$gia_khuyen_mai', ngay_tao='$ngay_tao',
            hinh='$hinh', mo_ta_tom_tat='$mo_ta_tom_tat', trang_thai='$trang_thai' , ma_loai ='$ma_loai' WHERE ma_khoa_hoc='$ma_khoa_hoc'";
        getData($sql,'');
    }
?>
