<?php ?>
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
<form action="" method="post">
    Account: <input type="text" name="account">
    <input type="submit" name="btn" value="Xác Nhận">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $account = $_REQUEST['account'];
    $pattern = '/^[_a-z0-9]{6,}$/';
    if (preg_match($pattern,$account)){
        echo "Account $account hợp lệ ";
    }else{
        echo "Account $account không hợp lệ ";
    }
}
?>
</body>
</html>