<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FUTURE VALUE CALCULATOR</title>
</head>
<body>
<form method="post">
    <input type="text" name="inventermentAmount" placeholder="inventermentAmount"><br>
    <input type="text" name="yearlyInterestRate" placeholder="yearlyInterestRate"><br>
    <input type="text" name="numberOfYears" placeholder="numberOfYears"><br>
    <button type="submit" value="submit">Submit</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $inventermentAmount=$_POST["inventermentAmount"];
    $yearlyInterestRate=$_POST["yearlyInterestRate"];
    $numberOfYears=$_POST["numberOfYears"];
    $futureValue=($inventermentAmount+($inventermentAmount*$yearlyInterestRate))*$numberOfYears;
    echo "giá trị tương lai là: $futureValue";
}
?>
</body>
</html>
