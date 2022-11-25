<?php
    function add_giangvien($ten_giang_vien, $hinh_giang_vien, $thong_tin_giang_vien,$thong_tin_chi_tiet, $trang_thai,$ma_loai) {
        $sql = "INSERT INTO giang_vien VALUES (null,'$ten_giang_vien', '$hinh_giang_vien', '$thong_tin_giang_vien','$thong_tin_chi_tiet', '$trang_thai','$ma_loai')";
        getData($sql,'');
    }

    function get_all_giangvien() {
        $sql = "SELECT * FROM giang_vien";
        $results = getData($sql,'FETCH_ALL');
        return $results;
    }
    function xoa_loai_giang_vien($ma_giang_vien) {
        $sql = "DELETE FROM giang_vien WHERE ma_giang_vien='$ma_giang_vien';";
        getData($sql,'');
    }
    function get_one_giangvien($ma_giang_vien) {
        $sql = "SELECT * FROM giang_vien WHERE ma_giang_vien='$ma_giang_vien'";
        $result = getData($sql, "FETCH_ONE");
        return $result;
    }
    function edit_giangvien($ma_giang_vien, $ten_giang_vien, $hinh_giang_vien, $thong_tin_giang_vien,$thong_tin_chi_tiet, $trang_thai,$ma_loai){
        $sql = "UPDATE giang_vien SET ten_giang_vien='$ten_giang_vien', hinh_giang_vien='$hinh_giang_vien', thong_tin_giang_vien='$thong_tin_giang_vien',thong_tin_chi_tiet='$thong_tin_chi_tiet',
         trang_thai='$trang_thai',ma_loai='$ma_loai' WHERE ma_giang_vien='$ma_giang_vien'";
        getData($sql,'');
    }
?>
