<div>
    <div class="alert alert-success" chuc_nang="alert">
        <h2>QUẢN LÝ GIẢNG VIÊN</h2>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Mã</th>
            <th scope="col">Tên</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Thông tin</th>
            <th scope="col">Thông tin chi tiet</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Loại</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php foreach ($results as $key => $value){ ?>
            <tr>
                <th scope="row"><input type="checkbox"></th>
                <td><?php echo $value['ma_giang_vien'] ?></td>
                <td style="width: 200px;"><?php echo $value['ten_giang_vien'] ?></td>
                <td><img src="Views/images/<?php echo $value['hinh_giang_vien'];?>" style="width: 50px;height: 50px;border-radius: 50%;" alt="ảnh giảng viên"></td>
                <td style="width: 200px;" ><?php echo $value['thong_tin_giang_vien'] ?></td>
                <td style="width: 200px;" ><?php echo $value['thong_tin_chi_tiet'] ?></td>
                <td><?php echo $value['trang_thai'] ?></td>
                <td><?php echo $value['ma_loai'] ?></td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="location.href='?page=giangvien&act=edit&editId=<?php echo $value['ma_giang_vien']; ?>'">Sửa</button>
                    <button type="button" class="btn btn-danger" onclick="
                        const result = confirm('Bạn có chắc chắn muốn xóa không?');
                        if(result){
                        location.href='?page=giangvien&act=list&deleteId=<?php echo $value['ma_giang_vien']; ?>'
                        }">Xóa</button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="actions" style="margin-top: 10px;">
        <button type="submit" class="btn btn-outline-secondary" name="btn-add">Chọn tất cả</button>
        <button type="submit" class="btn btn-outline-secondary" name="btn-add">Xóa tất cả các mục đã chọn</button>
        <a href="?page=giangvien&act=add" type="button" class="btn btn-outline-secondary">Thêm mới</a>
    </div>
</div>


