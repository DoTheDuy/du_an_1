<div>
    <div class="alert alert-success" chuc_nang="alert">
        <h2>QUẢN LÝ KHÓA HỌC</h2>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Mã</th>
            <th scope="col">Tên</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Giá</th>
            <th scope="col">Giá km</th>
            <th scope="col">Ngày nhập</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Loại</th>

        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php foreach ($results as $key => $value){ ?>
            <tr>
                <th scope="row"><input type="checkbox"></th>
                <td><?php echo $value['ma_khoa_hoc'] ?></td>
                <td style="width: 200px;"><?php echo $value['ten_khoa_hoc'] ?></td>
                <td><img src="Views/images/<?php echo $value['hinh'];?>" style="width: 50px;height: 50px;border-radius: 50%;" alt="ảnh sp"></td>
                <td style="width: 200px;" ><?php echo $value['mo_ta_tom_tat'] ?></td>
                <td><?php echo $value['don_gia'] ?></td>
                <td><?php echo $value['gia_khuyen_mai'] ?></td>
                <td><?php echo $value['ngay_tao'] ?></td>
                <td><?php echo $value['trang_thai'] ?></td>
                <td><?php echo $value['ma_loai'] ?></td>

                <td>
                    <button type="button" class="btn btn-primary" onclick="location.href='?page=product&act=edit&editId=<?php echo $value['ma_khoa_hoc']; ?>'">Sửa</button>
                    <button type="button" class="btn btn-danger" onclick="
                        const result = confirm('Bạn có chắc chắn muốn xóa không?');
                        if(result){
                        location.href='?page=product&act=list&deleteId=<?php echo $value['ma_khoa_hoc']; ?>'
                        }">Xóa</button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="actions" style="margin-top: 10px;">
        <button type="submit" class="btn btn-outline-secondary" name="btn-add">Chọn tất cả</button>
        <button type="submit" class="btn btn-outline-secondary" name="btn-add">Xóa tất cả các mục đã chọn</button>
        <a href="?page=product&act=add" type="button" class="btn btn-outline-secondary">Thêm mới</a>
    </div>
</div>


