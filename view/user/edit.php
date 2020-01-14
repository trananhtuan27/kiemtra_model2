

<form method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Nhập tên" value="<?php echo $user['name'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label>Kiểu máy </label>
            <input type="text" class="form-control" name="type" placeholder="Kiểu máy" value="<?php echo $user['type'] ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Giá bán</label>
        <input type="text" class="form-control" name="price" placeholder="Giá" value="<?php echo $user['price'] ?>">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Địa điểm</label>
        <input type="text" class="form-control" name="quantity" placeholder="Địa điểm"  value="<?php echo $user['quantity'] ?>">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Ngày tạo</label>
            <input type="date" class="form-control" name="createDate" value="<?php echo $user['createDate'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Miêu tả</label>
            <input type="text" class="form-control" name="description" value="<?php echo $user['description'] ?> ">
        </div>

    </div>

    <button type="submit" class="btn btn-primary">Sửa</button>
</form>