<?php
include 'db1.php';
$id = $_GET['id'];
$delete =" DELETE FROM shop WHERE id = $id ";
$result =mysqli_query($connection, $delete);
if($result){
    echo "<script>alert('record deleted');</script>";
}
else{
    echo "<script>alert('record not deleted');</script>";
}