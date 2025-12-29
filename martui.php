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
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.tailwindcss.com"></script>


</head>
<style>
 body {
            background-color: #ffe135;
            padding: 20px;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.04);
        }
        .card img {
            height: 150px;
            object-fit: contain;
            padding: 10px;
        }
        .card-title {
            font-weight: bold;
            text-transform: capitalize;
        }
        h1 {
            text-align:center;
            background-color:#add8e6;
            padding:20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-transform: uppercase;
        }
    </style>



<body style ="background-color:#FFe135; border-radius:10px; padding:20px;">





  <h1 style="text-align:center; background-color:#add8e6; padding:20px;">SHOPPING MART</h1>
   <div class="container mt-4">
        <div class="row g-4">
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
           <div class="col-lg-3 col-md-4 col-sm-6"> 

    <div class="card h-100">
   <img src="products/<?php echo $row['image']; ?>" class="card-img-top" style="height:200px; object-fit:cover; " alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['productname']; ?></h5>
    <p class="card-text"><?php echo $row['price']; ?></p>

    <form action="addtocart.php" method="post">

      <div class="input-group" style="width:120px;">
            <button  type="button" class="btn btn-outline-secondary" onclick="this.parentNode.querySelector('input').stepDown()">−</button>
            <input type="number" class="form-control text-center" name="quantity" value="1" min="1">
            <button type ="button" class="btn btn-outline-secondary" onclick="this.parentNode.querySelector('input').stepUp()">+</button>
        </div>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="productname" value="<?php echo $row['productname']; ?>">
                        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                        <input type="hidden" name="image" value="<?php echo $row['image']; ?>">
                        
                        <button type="submit" class="btn btn-primary w-100">ADD TO CART</button>
                    </form>
 
<!-- <a href="#" class="btn btn-primary">ADD TO CART</a> -->
  </div>
</div>
        </div>
        
    
    <?php } ?>
    </div>
    </div>
</body>
        </html>