<?php
include 'db1.php';

$id = $_GET['id'];
$select = "SELECT * FROM shop WHERE id=$id";
$result = mysqli_query($connection, $select);
$data = mysqli_fetch_array($result);


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
     <form class="row g-3" action="update.php" method="POST">
  <div class="col-md-6">
    
    <input type="hidden"  name="id" class="form-control" id="inputId" value="<?php echo $data['id']; ?>" readonly>
</div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">product name</label>
    <input type="text"  name="productname" class="form-control" id="inputProductname" value="<?php echo $data['productname']; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" id="inputPrice" value="<?php echo $data['price']; ?>     ">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">quantity</label>
    <input type="text" name="quantity" class="form-control" id="inputAddress" value ="<?php echo $data['quantity']; ?>">
  </div>
  
  
  <div class="col-md-6">
    <label for="inputImage" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" id="inputImage" value="<?php echo $data['image']; ?>">
  
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
 
  <div class="savebtn">
    <button  name= "save" type="submit"  class="btn btn-success">Save</button>
  </div>
  <div class="cancelbtn">
    <a href="marttable.php">
        <button type="button" class="btn btn-danger"  name="cancel">Cancel</button>
    </a>

  </div>
</form>
    
</body>
</html>