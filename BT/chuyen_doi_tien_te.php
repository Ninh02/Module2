<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chuyen doi tien te</title>
</head>
<body>
<form method="post">
    <input type="text" name="usd" placeholder="USD">
    <button type="submit" value="submit">Submit</button><br>
    <label>VND:</label>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $usd=$_POST['usd'];
    $rate=$usd*23000;
    echo $rate.'dong';
}
?>
</body>
</html>
