<?php
$error = [];
if(isset($_POST["btn-add"])){
    $ten_lop = $_POST["ten_lop"];
    $ca_hoc = $_POST["ca_hoc"];
    $thoi_gian_khai_giang = $_POST["thoi_gian_khai_giang"];
    $ma_khoa_hoc = $_POST["ma_khoa_hoc"];
    $ma_giang_vien =  $_POST["ma_giang_vien"];
    $trang_thai = $_POST["trang_thai"];
    $so_cho = $_POST["so_cho"];
    if (!$error) {
        add_lop($ten_lop, $ca_hoc, $thoi_gian_khai_giang, $ma_khoa_hoc, $ma_giang_vien, $trang_thai, $so_cho);
        $message = "Thêm thành công!";
    }
}
?>

<div class="alert alert-success" chuc_nang="alert">
    <h2>QUẢN LÝ LỚP HỌC</h2>
</div>
<form class="row g-3 needs-validation" action="" enctype="multipart/form-data" method="post" novalidate>
    <div class="col-md-6">
        <label for="validationCustom01" class="form-label fw-bold">Tên lớp</label>
        <input type="text" name="ten_lop" class="form-control" id="validationCustom01" required>
        <div class="invalid-feedback">
            Vui lòng nhập tên lớp
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-md-6">
        <label for="validationCustom01" class="form-label fw-bold">Ca học </label>
        <input type="text" name="ca_hoc" class="form-control" id="validationCustom01" required>
        <div class="invalid-feedback">
            Vui lòng nhập ca học
        </div>
    </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom02" class="form-label fw-bold">Ngày tạo</label>
        <input type="date" name="thoi_gian_khai_giang" class="form-control" id="validationCustom02" required>
        <div class="invalid-feedback">
            Vui lòng nhập thời gian khai giảng
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
            Vui lòng chọn loại khóa học
        </div>
    </div>

    <!-- <div class="col-md-6">
        <label for="validationCustom04" class="form-label fw-bold">Mã giảng viên</label>
        <select class="form-select" name="ma_giang_vien" id="validationCustom04" required>
            <option selected disabled value="">Choose...</option>
            <?php foreach ($giang_vien as $key => $value) { ?>
            <option value="<?php echo $value['ma_giang_vien']; ?>" ><?php echo $value['ten_giang_vien']; ?></option>
            <?php } ?>
        </select>
        <div class="invalid-feedback">
            Vui lòng chọn mã giảng viên
        </div>
    </div> -->
    <div class="col-md-6">
        <label for="validationCustom03" class="form-label fw-bold">Trạng thái</label>
        <select class="form-select" name="trang_thai" id="validationCustom03" required>
            <option selected value="false">Trống</option>
            <option value="true">Đã đầy</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="validationCustom01" class="form-label fw-bold">Số chỗ </label>
        <input type="text" name="so_cho" class="form-control" id="validationCustom01" required>
        <div class="invalid-feedback">
            Vui lòng nhập số chỗ
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" name="btn-add" type="submit">Thêm mới</button>
    </div>
</form>
<br>
<button type="button" class="btn btn-outline-secondary" onclick="window.location.reload()">Nhập lại</button>
<a href="?page=lop&act=list" class="btn btn-outline-secondary" >Danh sách</a>
    </br>
    </br>
<?php echo isset($message) ? "<div class='alert alert-success' chuc_nang='alert'>".$message."</div>" : ""; ?>