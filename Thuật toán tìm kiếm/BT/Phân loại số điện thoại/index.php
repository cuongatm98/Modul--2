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
    <table>
        <tr>
            <td><textarea type="number" name="nhap"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit"></td>
        </tr>
    </table>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $so = $_POST['nhap'];
    $arrso = explode(',', $so);

    function checkPhoneNumber($number)
    {
        if (strlen($number) == 10) {
            return true;
        } else {
            return false;
        }
    }

    $viettel = [];
    $mobifone = [];
    $vinaphone = [];
    $headViettel = ["035", "036", "037", '038'];
    $headMobiphone = ["085", "083", "088", '084','087'];
    $headVinaphone = ["077", "076", "079", '074'];
    foreach ($arrso as $number) {
        $headnumber = substr($number, 0, 3);
        if (in_array($headnumber, $headMobiphone)) {
            array_push($mobifone, $number);
        } elseif (in_array($headnumber, $headViettel)) {
            array_push($viettel, $number);
        } elseif (in_array($headnumber, $headVinaphone)) {
            array_push($vinaphone, $number);
        } else {
            echo 'không có số này';
        }
    }

    function showNumber($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            return $arr[$i];
        }
    }
    if (!empty($vinaphone)){
        echo "Vinaphone: " . showNumber($vinaphone) . "<br>";
    }else if (!empty($viettel)){
        echo "Viettel: " . showNumber($viettel) . "<br>";
    } elseif (!empty($vinaphone)){
        echo "Mobiphone: " . showNumber($mobifone) . "<br>";
    }

}
?>
</body>
</html>
