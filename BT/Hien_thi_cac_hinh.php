<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hien thi cac hinh</title>
</head>
<body>
<form>
    <h3>MENU:</h3>
    <input type="radio" name="printRectangle" />Print the rectangle<br>
    <input type="radio" name="printSquareTriangleTopLeft"/>Print the square triangle top left<br>
    <input type="radio" name="printSquareTriangleTopRight"/>Print the square triangle top right<br>
    <input type="radio" name="printSquareTriangleButtonLeft"/>Print the square triangle button left<br>
    <input type="radio" name="printSquareTriangleButtonRight"/>Print the square triangle button right<br>
    <input type="radio" name="printIsoscelesTriangle"/>Print the isosceles triangle<br>
    <button type="submit" value="exit">Exit</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

}
?>
</body>
</html>
