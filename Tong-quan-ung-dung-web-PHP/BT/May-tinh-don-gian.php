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
    form {
        border: 1px #CCC solid;
        height: 200px;
    }
</style>
<body>
<form method="post">
    <h1> Máy tính đơn giản</h1>
    <input type="number" name="so1"><br>
    <select name="pheptinh">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">x</option>
        <option value="/">/</option>
    </select><br>
    <input type="number" name="so2"><br>
    <input type="submit" value="Bằng">
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $so1=$_POST["so1"];
    $so2=$_POST["so2"];
    $pheptinh=$_POST["pheptinh"];
    if($pheptinh=="+"){
        $ketqua=$so1+$so2;
    }
    if($pheptinh=="-"){
        $ketqua=$so1-$so2;
    }
    if($pheptinh=="*"){
        $ketqua=$so1*$so2;
    }
    if($pheptinh=="/"){
        $ketqua=$so1/$so2;
    }
    echo $so1." ".$pheptinh." ".$so2.""." = ".$ketqua ;
}
