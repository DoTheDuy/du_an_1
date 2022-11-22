<div class="alert alert-success" chuc_nang="alert">
    <h2>QUẢN LÝ LOẠI HÀNG</h2>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Mã Khóa Học </th>
        <th scope="col">Tên Khóa Học</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    <?php foreach ($results as $key => $value){ ?>
    <tr>
        <th scope="row"><input type="checkbox"></th>
        <td><?php echo $value['ma_loai'] ?></td>
        <td><?php echo $value['ten_loai'] ?></td>
        <td>
            <button type="button" class="btn btn-primary" onclick="location.href='?page=category&act=edit&editId=<?php echo $value['ma_loai']; ?>'">Sửa</button>
            <button type="button" class="btn btn-danger" onclick="
                    const result = confirm('Bạn có chắc chắn muốn xóa không?');
                    if(result){
                    location.href='?page=category&act=list&deleteId=<?php echo $value['ma_loai']; ?>'
                    }">Xóa</button>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>
<div class="actions" style="margin-top: 10px;">
    <button type="submit" class="btn btn-outline-secondary" name="btn-add">Chọn tất cả</button>
    <button type="submit" class="btn btn-outline-secondary" name="btn-add">Xóa tất cả các mục đã chọn</button>
    <a href="?page=category&act=add" type="button" class="btn btn-outline-secondary">Thêm mới</a>
</div>

