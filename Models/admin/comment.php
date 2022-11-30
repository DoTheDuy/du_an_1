<?php
    require "Models/db.php";
    function insert_comment($noi_dung, $ma_khach_hang, $ten_khach_hang, $ma_khoa_hoc, $ngay_tao) {
        $sql = "INSERT INTO binh_luan (noi_dung, ten_khach_hang, ma_khoa_hoc, ngay_tao) values('$noi_dung', '$ma_khach_hang', '$ten_khach_hang', '$ma_khoa_hoc' '$ngay_tao')";
        getData($sql, '');
    }

    function get_all_comment() {
        $sql = "SELECT * FROM binh_luan";
        $results = getData($sql, 'FETCH_ALL');
        return $results;
    }

    function get_all_comment_by_id($ma_khoa_hoc) {
        $sql = "SELECT * FROM binh_luan WHERE ma_khoa_hoc= '$ma_khoa_hoc' ORDER BY ma_khoa_hoc DESC";
        $results = getData($sql, 'FETCH_ALL');
        return $results;
    }

    function delete_comment($ma_binh_luan) {
        $sql = "DELETE FROM  binh_luan WHERE ma_binh_luan='$ma_binh_luan'";
        getData($sql, '');
    }
?>
