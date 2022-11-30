<div class="alert alert-success" chuc_nang="alert">
    <h2>QUẢN LÝ BÌNH LUẬN</h2>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">ID</th>
        <th scope="col">Nội Dung</th>
        <th scope="col">Tên Khách Hàng</th>
        <th scope="col">Mã Sản Phẩm</th>
        <th scope="col">Ngày Bình Luận</th>
        <th scope="col">Chức Năng</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    <?php foreach ($results as $key => $value){ ?>
        <tr>
            <th scope="row"><input type="checkbox"></th>
            <td><?php echo $value['ma_binh_luan'] ?></td>
            <td><?php echo $value['noi_dung'] ?></td>
            <td><?php echo $value['ten_khach_hang'] ?></td>
            <td><?php echo $value['ma_khoa_hoc'] ?></td>
            <td><?php echo $value['ngay_tao'] ?></td>
            <td>
                <button
                    type="button"
                    class="btn btn-danger"
                    onclick="
                    const result = confirm('Bạn có chắc chắn muốn xóa không?');
                    if(result){
                    location.href='?page=comment&deleteId=<?php echo $value["ma_binh_luan"]; ?>'
                    }"
                >
                    Xóa
                </button>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<div class="actions" style="margin-top: 10px;">
    <button type="submit" class="btn btn-outline-secondary" name="btn-add">Chọn tất cả</button>
    <button type="submit" class="btn btn-outline-secondary" name="btn-add">Xóa tất cả các mục đã chọn</button>
</div>

