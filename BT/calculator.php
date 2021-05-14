<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<form method="post">
    <fieldset style="width: 300px">
        <h3>Calculator</h3>
        <label>Fist operand:</label>
        <input type="text" name="number1"><br>
        <label> Operator:</label>
        <select name="calculation">
            <option name="Addition">Addition</option>
            <option name="Subtraction">Subtraction</option>
            <option name="Multiplication">Multiplication</option>
            <option name="Division">Division</option>
        </select><br>
        <label>Second operand:</label>
        <input type="text" name="number2"><br>
        <button type="submit" value="calculator">Calculator</button>

    </fieldset>
</form>
<h3>Result:</h3>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $number1=$_POST['number1'];
    $number2=$_POST['number2'];
    $calculation=$_POST['calculation'];
    if($calculation==="Addition"){
        $calculator=$number1+$number2;
        echo "$number1 + $number2 = $calculator";
    }
    if($calculation==="Subtraction"){
        $calculator=$number1-$number2;
        echo "$number1 -$number2 =$calculator";
    }
    if($calculation==="Multiplication"){
        $calculator=$number1*$number2;
        echo "$number1 * $number2 =$calculator";
    }
    if($calculation==="Division"){
        $calculator=$number1/$number2;
        echo "$number1 /$number2 =$calculator";
    }
}
?>

</body>
</html>
