<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .login {
        width: 300px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }

    h2 {
        text-align: center;
    }

    .login input {
        padding: 5px;
        margin: 5px
    }
</style>
<body>
<form method="post">
    <div class="login">
        <h2>Tính chiết khấu</h2>
        <label>
            Tên sản phẩm
            <input type="text" name="tensanpham" size="25" placeholder="Nhap ten san pham"/><br>
        </label>
        <label>
            Gía sản phẩm
            <input type="text" name="giasanpham" size="25" placeholder="Nhap gia"/><br>
        </label>
        <label>
            Tỉ lệ chiết khấu
            <input type="text" name="chietkhau" size="25" placeholder="Ti le chiet khau %"/><br>
        </label>
        <input type="submit" value="Click"
               onClick="Javascript:window.location.href = 'http://localhost/PHP-Stom/MODUL-2/Tong-quan-ung-dung-web-PHP/BT/display_discount.php';"/>
    </div>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tensp = $_POST["tensanpham"];
    $giasp = $_POST["giasanpham"];
    $tilechietkhau = $_POST["chietkhau"];

}
