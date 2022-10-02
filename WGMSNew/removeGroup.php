<?php
include('Connection.php');
//delete group from admin page
$id=$_POST["idOfOpendGroup"];


$sql= "delete from usergroup where id=$id";
mysqli_query($conn,$sql);

header("location:AdminIndex.php");
?>