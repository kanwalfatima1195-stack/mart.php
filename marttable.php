 <?php
 include 'db1.php';

 $selectquery = "SELECT * FROM shop";
    $result = mysqli_query($connection, $selectquery);
 
 ?>
 
 
 
 
 
 
 
 
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mart Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">PRODUCT</th>
      <th scope="col">PRICE</th>
      <!-- <th scope="col">DESCRIPTION</th> -->
      <th scope="col">IMAGE</th>
      <th scope ="col">ACTIONS</th>
    </tr>
  </thead>
  <tbody>

<?php  while ($fetch = mysqli_fetch_array($result)){?>
      <tr>
        <td><?php echo $fetch['id']; ?></td>
        <td><?php echo $fetch['productname']; ?></td>
        <td><?php echo $fetch['price']; ?></td>
        <!-- <td><?php echo $fetch['quantity']; ?></td> -->
        <td>
          <img src="products/<?php  echo $fetch['image'];?>" alt="100" width="100" height="100">
        </td>
      <td>
    <a href="delete.php?id=<?php echo $fetch['id']; ?>"onclick="return confirm('Are you sure you want to delete this record?')">
        <button class="btn btn-danger btn-sm">Delete</button>
    </a>
   
    <a href="edit.php?id=<?php echo $fetch['id']; ?>">
        <button class="btn btn-primary btn-sm">edit</button>
    </a> 
</td>
      </tr>

<?php } ?>
  <table>
    
</body>
</html>