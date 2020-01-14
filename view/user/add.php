
<form method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Nhập tên" >
        </div>
        <div class="form-group col-md-6">
            <label>Kiểu máy </label>
            <input type="text" class="form-control" name="type" placeholder="Kiểu máy">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Giá bán</label>
        <input type="text" class="form-control" name="price" placeholder="Giá">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Địa điểm</label>
        <input type="text" class="form-control" name="quantity" placeholder="Trường">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Ngày tạo</label>
            <input type="date" class="form-control" name="createDate">
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Miêu tả</label>
            <input type="text" class="form-control" name="description">
        </div>

    </div>

    <button type="submit" class="btn btn-primary">Thêm mới</button>
</form>