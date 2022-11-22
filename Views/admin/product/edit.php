<?php
$ma_khoa_hoc = $_GET['editId'];
$error = [];
    if (isset($_POST['btn-edit'])) {
        $ten_khoa_hoc = $_POST["ten_khoa_hoc"];
        $don_gia = $_POST["don_gia"];
        $gia_khuyen_mai = $_POST["gia_khuyen_mai"];
        $ngay_tao = $_POST["ngay_tao"];
        $hinh = $_FILES["hinh"]["name"];
        $mo_ta_tom_tat = $_POST["mo_ta_tom_tat"];
        $trang_thai = $_POST["trang_thai"];
        $ma_loai = $_POST["ma_loai"];
    if(isset($_FILES["hinh"])){
        $target_dir = "Views/images/";
        $nameImg = $_FILES["hinh"]["name"];
        $target_file = $target_dir.$nameImg;
        $maxFileSize = 800000;
        $allowUpload = true;
        $allowTypes = ["jpg","png","jpeg","gif"];
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        if($_FILES["hinh"]["size"] > $maxFileSize){
            $error["img_size"] = "Khong duoc upload anh > ".$maxFileSize."(Byte)";
            $allowUpload = false;
        }

        if(!in_array($imageFileType,$allowTypes)){
            $error["img_type"] = "Chi duoc upload cac dinh dang jpg,png,jbeg,gif";
            $allowUpload = false;
        }

        if($allowUpload == true){
            move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file);
        }
    }if (!$error) {
        edit_product($ma_khoa_hoc,$ten_khoa_hoc, $don_gia, $gia_khuyen_mai, $ngay_tao, $hinh, $mo_ta_tom_tat, $trang_thai, $ma_loai);
        $message= "Edit thành công";
    }
}
?>

<div class="alert alert-success" chuc_nang="alert">
    <h2>QUẢN LÝ KHÓA HỌC</h2>
</div>
<form class="row g-3 needs-validation" action="" enctype="multipart/form-data" method="POST" novalidate>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label fw-bold">Mã khóa học</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="Auto number" disabled>
    </div>
    <div class="col-md-6">
        <label for="validationCustom01" class="form-label fw-bold">Tên khóa học</label>
        <input type="text" name="ten_khoa_hoc" class="form-control" id="validationCustom01" value="<?php echo $row['ten_khoa_hoc']; ?>" required>
        <div class="invalid-feedback">
            Vui lòng nhập tên hàng hóa
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label fw-bold">Giá</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">$</span>
            <input type="text" name="don_gia" class="form-control" id="validationCustomUsername"
                   aria-describedby="inputGroupPrepend" value="<?php echo $row['don_gia']; ?>" required>
            <div class="invalid-feedback">
                Please choose a price.
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustomUsername" class="form-label fw-bold">Giá khuyến mãi</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">$</span>
            <input type="text" name="gia_khuyen_mai" class="form-control" value="<?php echo $row['gia_khuyen_mai']; ?>"
                   id="validationCustomUsername" aria-describedby="inputGroupPrepend">
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label fw-bold">Ngày tạo</label>
        <input type="date" name="ngay_tao" class="form-control" id="validationCustom02" value="<?php echo $row['ngay_tao']; ?>" required>
        <div class="invalid-feedback">
            Vui lòng nhập ngày tạo
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom04" class="form-label fw-bold">Loại khóa học</label>
        <select class="form-select" name="ma_loai" id="validationCustom04" required>
            <option selected disabled value="">Choose...</option>
            <?php foreach ($loai_khoa_hoc as $key => $value) { ?>
                <option value="<?php echo $value['ma_loai']; ?>" ><?php echo $value['ten_loai']; ?></option>
            <?php } ?>
        </select>
        <div class="invalid-feedback">
            Vui lòng chọn khóa học
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label fw-bold">Hình ảnh</label>
        <input type="file" name="hinh" class="form-control" id="validationCustom05" required>
        <div class="invalid-feedback">
            <?php echo (isset($error["img_size"]) ? $error["img_size"] : isset($error["img_type"])) ? $error["img_type"] : "Vui lòng chọn 1 hình ảnh"; ?>
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom06" class="form-label fw-bold">Mô tả</label>
        <textarea name="mo_ta_tom_tat" class="form-control" id="validationCustom06" cols="30" rows="5" required><?php echo $row['mo_ta_tom_tat']; ?></textarea>
        <div class="invalid-feedback">
            Vui lòng nhập mô tả
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom03" class="form-label fw-bold">Trạng thái</label>
        <select class="form-select" name="trang_thai" id="validationCustom03" required>
            <option <?php echo $row['trang_thai'] == "Trống" ? "selected" : ''; ?> value="Trống">Trống</option>
            <option <?php echo $row['trang_thai'] == "Đã đầy" ? "selected" : ''; ?> value="Đã đầy">Đã đầy</option>
        </select>
    </div>
    
    <button type="submit" class="btn btn-outline-secondary" style="width: 110px;" name="btn-edit">Edit</button>
    <button type="button" class="btn btn-outline-secondary" style="width: 110px; margin-left: 5px;">Nhập lại</button>
    <a href="?page=product&act=list" class="btn btn-outline-secondary" style="width: 110px; margin-left: 5px;" >Danh sách</a>
    
    
</form>

<?php echo isset($message) ? "<div class='alert alert-success' chuc_nang='alert'>".$message."</div>" : ""; ?>

