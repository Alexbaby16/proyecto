<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['name'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = "INSERT INTO users VALUES('$id','$name','$direccion','$telefono','$email')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>