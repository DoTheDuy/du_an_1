<?php
    $ma_khach_hang = $_SESSION['user']['ma_khach_hang'];
if (isset($_POST['btn-edit'])) {
    $ten_khach_hang = $_POST['ten_khach_hang'];
    $email = $_POST['email'];
    $mat_khau = $_POST['mat_khau'];
    $dien_thoai = $_POST['dien_thoai'];
    update_account($ma_khach_hang, $ten_khach_hang, $email, $mat_khau,$dien_thoai);
    $message = "Cập nhật tài khoản thành công!!";
}

$row = get_one_user($id);

?>

<div>
    <div class="alert alert-danger" chuc_nang="alert">
        <h2 class="text-center">CẬP NHẬT TÀI KHOẢN</h2>
    </div>
    <form class="d-flex flex-column gap-3 needs-validation" action="" method="post">
        <div class="w-100">
            <label for="validationCustom01" class="form-label">Username</label>
            <input type="text" class="form-control" name="ma_khach_hang" id="validationCustom01" value="<?php echo $row['ma_khach_hang'] ?>" required>
            <div class="valid-feedback">
                Please choose a username.
            </div>
        </div>
        <div class="w-100">
            <label for="validationCustom03" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="validationCustom03" value="<?php echo $row['email'] ?>" required>
            <div class="valid-feedback">
                Please choose a Email.
            </div>
        </div>
        <div class="w-100">
            <label for="validationCustom02" class="form-label">Password</label>
            <input type="text" class="form-control" name="mat_khau" id="validationCustom02" value="<?php echo $row['mat_khau'] ?>" required>
            <div class="valid-feedback">
                Please choose a password.
            </div>
        </div>
        <div class="w-100">
            <label for="validationCustom01" class="form-label">Phone number</label>
            <input type="text" class="form-control" name="dien_thoai" id="validationCustom01" value="<?php echo $row['dien_thoai'] ?>" required>
            <div class="valid-feedback">
                Please choose a phone number.
            </div>
        </div>
        <div class="w-100">
            <button class="btn btn-dark w-100" name="btn-edit" type="submit">Edit</button>
        </div>
    </form>
    </br>
    <?php echo isset($message) ? "<div class='alert alert-success' chuc_nang='alert'>".$message."</div>" : ""; ?>
</div>

