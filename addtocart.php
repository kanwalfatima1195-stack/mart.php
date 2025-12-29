<?php
include 'db1.php';
  

$id=$_POST['id'];
$productname=$_POST['productname'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$image=$_POST['image'];

$insert="INSERT INTO cart (productname, price, quantity, image) VALUES ('$productname', '$price', '$quantity', '$image')";
$result=mysqli_query($connection, $insert);

if($result){

header("Location: summary.php");

exit();
}else{
    echo "insert FAILED";
}
?>
