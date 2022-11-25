<?php
$error = [];
if(isset($_POST["btn-add"])){
    $ten_giang_vien = $_POST["ten_giang_vien"];
    $hinh_giang_vien = $_FILES["hinh_giang_vien"]["name"];
    $thong_tin_giang_vien = $_POST["thong_tin_giang_vien"];
    $thong_tin_chi_tiet = $_POST["thong_tin_chi_tiet"];
    $trang_thai = $_POST["trang_thai"];
    if(isset($_FILES["hinh_giang_vien"])){
        $target_dir = "Views/images/";
        $nameImg = $_FILES["hinh_giang_vien"]["name"];
        $target_file = $target_dir.$nameImg;
        $maxFileSize = 800000;
        $allowUpload = true;
        $allowTypes = ["jpg","png","jpeg","gif"];
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        if($_FILES["hinh_giang_vien"]["size"] > $maxFileSize){
            $error["img_size"] = "Khong duoc upload anh > ".$maxFileSize."(Byte)";
            $allowUpload = false;
        }

        if(!in_array($imageFileType,$allowTypes)){
            $error["img_type"] = "Chi duoc upload cac dinh dang jpg,png,jbeg,gif";
            $allowUpload = false;
        }

        if($allowUpload == true){
            move_uploaded_file($_FILES["hinh_giang_vien"]["tmp_name"],$target_file);
        }
    }
    // Cau lenh insert add data
    if (!$error) {
        add_giangvien($ten_giang_vien, $hinh_giang_vien, $thong_tin_giang_vien,$thong_tin_chi_tiet, $trang_thai);
        $message = "Thêm thành công!";
    }
}
?>

<div class="alert alert-success" chuc_nang="alert">
    <h2>QUẢN LÝ GIẢNG VIÊN </h2>
</div>
<form class="row g-3 needs-validation" action="" enctype="multipart/form-data" method="post" novalidate>
    <div class="col-md-6">
        <label for="validationCustom01" class="form-label fw-bold">Tên Giảng Viên</label>
        <input type="text" name="ten_giang_vien" class="form-control" id="validationCustom01" required>
        <div class="invalid-feedback">
            Vui lòng nhập tên giảng viên
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label fw-bold">Hình ảnh</label>
        <input type="file" name="hinh_giang_vien" class="form-control" id="validationCustom05" required>
        <div class="invalid-feedback">
            <?php echo (isset($error["img_size"]) ? $error["img_size"] : isset($error["img_type"])) ? $error["img_type"] : "Vui lòng chọn 1 hình ảnh"; ?>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom06" class="form-label fw-bold">Thông tin</label>
        <textarea name="thong_tin_giang_vien" class="form-control" id="validationCustom06" cols="30" rows="8" required></textarea>
        <div class="invalid-feedback">
            Vui lòng nhập thông tin
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom06" class="form-label fw-bold">Thông tin chi tiet</label>
        <textarea name="thong_tin_chi_tiet" class="form-control" id="validationCustom06" cols="50" rows="8" required></textarea>
        <div class="invalid-feedback">
            Vui lòng nhập thông tin
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom03" class="form-label fw-bold">Trạng thái</label>
        <select class="form-select" name="trang_thai" id="validationCustom03" required>
            <option selected value="false">Rảnh</option>
            <option value="true">Bận </option>
        </select>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" name="btn-add" type="submit">Thêm mới</button>
    </div>
</form>
<br>
<button type="button" class="btn btn-outline-secondary" onclick="window.location.reload()">Nhập lại</button>
<a href="?page=giangvien&act=list" class="btn btn-outline-secondary" >Danh sách</a>
    </br>
    </br>
<?php echo isset($message) ? "<div class='alert alert-success' chuc_nang='alert'>".$message."</div>" : ""; ?>