<?php

include 'db1.php';

if(isset($_POST['Submit'])){
  $product = $_POST['productname'];
  $price = $_POST['price'];
  $description = $_POST['quantity'];  
  $image_name =$_FILES['image']['name'];
  $temp_name =$_FILES['image']['tmp_name'];
  //uploads file in folder directory
  $folder = "products/".$image_name;
  if(move_uploaded_file($temp_name, $folder)){
    $query =" INSERT INTO shop(productname, price, quantity, image) VALUES ('$product', '$price', '$quantity', '$image_name')";
    $result = mysqli_query($connection, $query);
    if($result){
      header("Location: marttable.php");
      header("Location: martui.php");
      exit();
    } else {
      echo "Insert FAILED";
    }
    
  }


}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
    <label for="username" class="form-label">product name</label>
    <input type="text" class="form-control"  id="username" aria-describedby="emailHelp" name="productname">
    <div  class="form-text"></div>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">PRICE</label>
    <input type="text" name="price" class="form-control" id="inputAddress" >
  </div>
  
   <!-- <div class="col-12">
    <label for="inputAddress" class="form-label">DESCRIPTION</label>
    <input type="text" name="description" class="form-control" id="inputAddress" >
  </div> -->
  <div class="mb-3">
  <label for="formFile" class="form-label" >Default file input example</label>
  <input class="form-control" type="file" id="formFile" name="image">
</div>
  
  <button type="submit" name="Submit" class="btn btn-primary" >Submit</button>

    </form>
</body>
</html>