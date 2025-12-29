<?php
include 'db1.php';
$selectquery="SELECT * FROM cart";
$result = mysqli_query($connection, $selectquery);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>SUMMARY</title>
</head>
 <style>
        body {
            background: #f8f9fa;
            padding: 20px;
        }
        h1 {
            text-align: center;
            background: #0d6efd;
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 30px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th {
            background: #0d6efd !important;
            color: white !important;
            text-transform: capitalize;
        }
        td img {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 3px;
        }
        tr:hover {
            background-color: #eef6ff;
            transition: 0.2s;
        }
    </style>
<body>
    <h1>card summary</h1>

     <table class="table">
  <thead>
    <tr>
      <th scope="col" type="hidden">ID</th>
      <th scope="col">productname</th>
      <th scope="col">PRICE</th>
      <th scope="col">quantity</th>
      <th scope="col">subtotal</th>
      
      <th scope="col">image</th>
      <th scope="col">Actions</th>
     
    </tr>
  </thead>
  <tbody>
    <?php  while ($fetch = mysqli_fetch_array($result)){?>
       
        <tr>
        <td><?php echo $fetch['id']; ?></td>
        <td><?php echo $fetch['productname']; ?></td>
        <td><?php echo $fetch['price']; ?></td>
        <td><?php echo $fetch['quantity']; ?></td>
        <?php $subtotal = $fetch['price'] * $fetch['quantity']; ?>

        <td><?php echo $subtotal; ?></td>

      
        <td>
          <img src="products/<?php  echo $fetch['image'];?>" alt="100" width="100" height="100">
        </td>
         <td>
    <a href="delete1.php?id=<?php echo $fetch['id']; ?>"onclick="return confirm('Are you sure you want to delete this record?')">
        <button class="btn btn-danger btn-sm">Delete</button>
    </a>
    </tr>




<?php } ?>
</table>
</body>
</html>