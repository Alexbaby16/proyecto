<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$name = $_POST['name'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql="UPDATE users SET name='$name', direccion='$direccion', telefono='$telefono', email='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>