<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $productDescription=$_POST["ProductDescription"];
    $listPrice=$_POST["ListPrice"];
    $discountPercent=$_POST["DiscountPercent"];
    $discountAmount=$listPrice*$discountPercent*0.1;
    $discountPrice=$listPrice+$discountAmount;
    echo "lượng chiết khấu là: $discountAmount <br>";
    echo "giá sau khi chiết khấu là: $discountPrice";
}
?>
