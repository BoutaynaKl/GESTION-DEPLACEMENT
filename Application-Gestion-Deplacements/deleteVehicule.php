<?php
include_once('connect.php');
$id_vehicule = htmlentities($_GET['id_vehicule']);
$query = "DELETE FROM vehicule WHERE id_vehicule = '$id_vehicule'";
$res=mysqli_query($con,$query);
if($res ){
    header('location:vehicule.php?alert=success&msg=vehicule supprimé !');
 }

  
else{
 header("Location:vehicule.php?alert=error&msg=erreur du supression!");
}
?>