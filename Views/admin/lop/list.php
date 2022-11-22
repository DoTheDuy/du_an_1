<div>
    <div class="alert alert-success" chuc_nang="alert">
        <h2>QUẢN LÝ LỚP HỌC</h2>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Mã</th>
            <th scope="col">Tên</th>
            <th scope="col">Ca học </th>
            <th scope="col">Thời gian </th>
            <th scope="col">Mã khóa học</th>
            <th scope="col">Mã GV</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Số chỗ</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php foreach ($results as $key => $value){ ?>
            <tr>
                <th scope="row"><input type="checkbox"></th>
                <td><?php echo $value['ma_lop'] ?></td>
                <td style="width: 200px;"><?php echo $value['ten_lop'] ?></td>
                <td style="width: 200px;" ><?php echo $value['ca_hoc'] ?></td>
                <td><?php echo $value['thoi_gian_khai_giang'] ?></td>
                <td><?php echo $value['ma_khoa_hoc'] ?></td>
                <td><?php echo $value['ma_giang_vien']; ?></td>
                <td><?php echo $value['trang_thai'] ?></td>
                <td><?php echo $value['so_cho'] ?></td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="location.href='?page=lop&act=edit&editId=<?php echo $value['ma_lop']; ?>'">Sửa</button>
                    <button type="button" class="btn btn-danger" onclick="
                        const result = confirm('Bạn có chắc chắn muốn xóa không?');
                        if(result){
                        location.href='?page=lop&act=list&deleteId=<?php echo $value['ma_lop']; ?>'
                        }">Xóa</button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="actions" style="margin-top: 10px;">
        <button type="submit" class="btn btn-outline-secondary" name="btn-add">Chọn tất cả</button>
        <button type="submit" class="btn btn-outline-secondary" name="btn-add">Xóa tất cả các mục đã chọn</button>
        <a href="?page=lop&act=add" type="button" class="btn btn-outline-secondary">Thêm mới</a>
    </div>
</div>


