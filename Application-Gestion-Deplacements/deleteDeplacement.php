
<?php
include "connect.php";
$id_deplacement = htmlentities($_GET['id_deplacement']);
$request = mysqli_query($con,"DELETE FROM deplacement WHERE id_deplacement = '$id_deplacement'");

if($request){
        header("Location: deplacement.php?alert=success&msg= deplacement supprimé!");
        exit();
}else{
        header("Location: deplacement.php?alert=error&msg=erreur de suppression!");
        exit();
}

?> 