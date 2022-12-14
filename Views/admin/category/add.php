<?php
    if (isset($_POST['btn-add'])){
        $ten_loai = $_POST['name-category'];
        them_loai_khoa_hoc($ten_loai);
        $message = "Thêm thành công";
    }
?>

<div class="alert alert-success" chuc_nang="alert">
    <h2>QUẢN LÝ LOẠI KHÓA HỌC </h2>
</div>
<form class="form" action="?page=category&act=add" method="POST">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label fw-bold">Mã loại</label>
        <input type="text" class="form-control" id="formGroupExampleInput" value="Auto number" disabled>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label fw-bold">Tên loại</label>
        <input type="text" class="form-control" name="name-category" id="formGroupExampleInput2" placeholder="Enter tên loại">
    </div>
    <button type="submit" class="btn btn-outline-secondary" name="btn-add">Thêm mới</button>
    <button type="button" class="btn btn-outline-secondary" onclick="window.location.reload()">Nhập lại</button>
    <a href="?page=category&act=list" class="btn btn-outline-secondary" >Danh sách</a>
</form>
<br>
<?php echo isset($message) ? "<div class='alert alert-success' chuc_nang='alert'>".$message."</div>" : ""; ?>
