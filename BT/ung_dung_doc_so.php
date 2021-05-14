<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ứng dụng đọc số </title>
</head>
<body>
<form method="post">
<input type="number" name="number" placeholder="Nhap so can doc">
<button type="submit" value="submit">submit</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $number=$_POST['number'];
    echo readTwoNumber($number);
}
function readOneNumber($number){
    $arr=['zero','one','two','three','four','five','six','seven','eight','nine'];
    return  $arr[$number];
}
function readTwoNumber($number){
    $arr1=[10=>'ten',11=>'eleven',12=>'twelve',13=>'thirteen',14=>'fourteen',15=>'fifteen'];
    $arr2=[2=>'twenty',3=>'thirty',4=>'forty',5=>'fifty',6=>'sixty',7=>'seventy',8=>'eighty',9=>'ninety'];
    if($number<10){
        return readOneNumber($number);
    }elseif ($number>9 && $number<16){
        return $arr1[$number];
    }elseif ($number<20){
        return readOneNumber($number[1]).'teen';
    }elseif ( $number<100){
        if($number%10==0){
            return $arr2[$number[0]];
        }else{
            return $arr2[$number[0]].' '.readOneNumber($number[1]);
        }
    }elseif ($number<1000){
        if($number%100==0){
            return readOneNumber($number).'hundred';
        }else{
            if($number%10==0){
            return readOneNumber($number[1]).'hu
        }
    }
}


?>
</body>
</html>
