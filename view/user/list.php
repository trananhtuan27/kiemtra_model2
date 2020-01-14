
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="?page=add">Thêm</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="?keyword=<?php echo $_GET['keyword'] ?>">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Kiểu máy</th>
        <th>Giá bán</th>
        <th>Địa điểm</th>
        <th>Ngày tạo</th>
        <th>Mô tả</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $key => $user): ?>
    <tr>
        <td><?php echo ++$key; ?></td>
        <td><?php echo $user->getName(); ?></td>
        <td><?php echo $user->getType(); ?></td>
        <td><?php echo $user->getPrice(); ?></td>
        <td><?php echo $user->getQuantity(); ?></td>
        <td><?php echo $user->getCreateDate(); ?></td>
        <td><?php echo $user->getDescription(); ?></td>
        <th><a href="index.php?page=delete&user_id=<?php echo $user->getUserId() ?>">
                <input type="button" value="Delete" class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn xóa không')"></a></th>
        <th><a href="index.php?page=edit&user_id=<?php echo $user->getUserId() ?>">
                <input class="btn btn-primary" type="button" value="Edit"></a></th>
    </tr>
    </tbody>

    <?php endforeach; ?>
</table>


