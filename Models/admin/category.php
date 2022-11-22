<?php
    require "Models/db.php";
    function them_loai_khoa_hoc($ten_loai){
        $sql = "INSERT INTO loai_khoa_hoc VALUES (null,'$ten_loai')";
        getData($sql,'');
    }

    function xoa_loai_khoa_hoc($ma_loai) {
        $sql = "DELETE FROM loai_khoa_hoc WHERE ma_loai='$ma_loai';ALTER TABLE loai_khoa_hoc AUTO_INCREMENT= '$ma_loai';";
        getData($sql,'');
    }

    function get_all_loai_khoa_hoc(){
        $sql = "SELECT * FROM loai_khoa_hoc";
        $results = getData($sql, "FETCH_ALL");
        return $results;
    }
    function get_one_loai_khoa_hoc($ma_loai) {
        $sql = "SELECT * FROM loai_khoa_hoc WHERE ma_loai='$ma_loai'";
        $result = getData($sql, "FETCH_ONE");
        return $result;
    }

    function sua_loai_khoa_hoc($ten_loai,$ma_loai){
        $sql = "UPDATE loai_khoa_hoc SET ten_loai='$ten_loai' WHERE ma_loai='$ma_loai'";
        getData($sql,'');
    }
?>
