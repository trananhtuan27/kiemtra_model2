<?php
include_once "controller/UserController.php";
include_once "model/database/DBconnect.php";
include_once "model/user/UserDB.php";
include_once "model/user/User.php";
include_once "view/core/style.php";
$userController = new UserController();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a class="btn btn-primary" href="index.php">Home</a>
<?php

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
switch ($page) {
    case 'add':
        $userController->create();
        break;
    case 'delete':
        $userController->delete();
        break;
    case 'edit':
        $userController->edit();
        break;
    default:
        if (isset($_GET['keyword'])) {
            $userController->search();
        } else {
            $userController->index();
        }
        break;
}
?>

</body>
</html>
