<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

</head>
<body>
<form method="post">
    <div class="login">
        <h2>Tinh Lai</h2>
        <label>
            So tien goc
            <input type="text" name="sotien" size="25" placeholder="Nhap so tien"/><br>
        </label>
        <label>
            So thang gui
            <input type="text" name="thang" size="25" placeholder="Nhap so thang"/>
        </label>
        <input type="submit" value="Sign in"/>
    </div>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sotien = $_POST["sotien"];
    $thang = $_POST["thang"];
    $tonglai = $sotien + (($sotien * 0.03) * $thang);
    echo "sau " . $thang ." thang ". "nhan duoc " . $tonglai;
}


