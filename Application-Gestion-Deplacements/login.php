<?php
require_once('connect.php');
if($con)or die(mysqli_error($con));

if(isset($_POST['submit'])){
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $sql="select * from utilisateur where login='$username' and mot_de_passe='$password'";
        $result=mysqli_query($con,$sql);
        if($result){
            if(mysqli_num_rows($result) > 0){
                //die (" user exists");
                $infos = mysqli_fetch_assoc($result);
               echo"user exist";
                
            }
            else{echo"user n'existe pas";}
              
            
        }
        else{
            die('problem de requete ' );
        }
}}
?>
