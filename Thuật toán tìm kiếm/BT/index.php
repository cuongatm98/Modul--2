<?php
$num = 59;
function random($min, $max)
{
    return rand($min, $max);
}

echo "số muốn đoán " . $num;
echo '<br>';
?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $giatri = $_POST['so'];
    $ketqua = (int) $_POST['result'];
//    $arr = range(1, 100);
//    $mid = ($left + $right) / 2;
//    $ketqua = random($min, $max);
//    echo 'min'.$min;
//    echo '<br>';
//    echo 'max'.$max;
//    echo '<br>';
//    echo "kết quả ".$ketqua;
//    echo '<br>';
    if ($giatri == 'nho' ) {
        $min = $ketqua;
        $max = (int) $_POST['max'];
        $ketqua = random($min, $max);

        echo 'min '.$min;
        echo '<br>';
        echo 'max '.$max;
        echo '<br>';
        echo "kết quả ".$ketqua;
        echo '<br>';
    }
    if ($giatri == 'lon') {
        $max = $ketqua ;
        $min = (int) $_POST['min'];
        $ketqua = random($min, $max);

        echo 'min '.$min;
        echo '<br> ';
        echo 'max'.$max;
        echo '<br> ';
        echo "kết quả ".$ketqua;
    }if ($ketqua == $num) {
        echo 'đã tìm ra';
    }
}else {
    $min = 1;
    $max = 100;
    $ketqua = random(1, 100);
    echo "số máy tính đoán: " . $ketqua;
}

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
<form method="post">
    <input name="so" type="radio" value="lon"> Lớn hơn
    <input name="so" type="radio" value="nho"> Nhỏ hơn
    <input name="result" type="hidden" value="<?php echo $ketqua ?>">
    <input name="min" type="hidden" value="<?php echo $min ?>">
    <input name="max" type="hidden" value="<?php echo $max ?>">
    <input name="so1" type="submit" value="submit">
</form>
</body>
</html>

