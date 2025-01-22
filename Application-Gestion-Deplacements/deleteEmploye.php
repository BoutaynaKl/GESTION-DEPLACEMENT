<?php
include "connect.php";
$id = htmlentities($_GET['id']);
$query = "DELETE FROM employe WHERE id = '$id'";
$rse=mysqli_query($con,$query);
if($query ){
    header('location:employe.php?alert=success&msg=employé supprimé !');
 }
else{
 header("Location:employe.php?alert=error&msg=erreur du supression!");
}

?>