<?php
include_once('connect.php');
$id_mission = htmlentities($_GET['id_mission']);
$query = "DELETE FROM mission WHERE id_mission = '$id_mission'";
$res=mysqli_query($con,$query);
if($res ){
    header('location:mission.php?alert=success&msg= mission supprimé !');
 }
  
else{
 header("Location mission.php?alert=error&msg=erreur du supression!");
}




?>