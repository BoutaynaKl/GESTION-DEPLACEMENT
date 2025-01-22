<?php
require_once("connect.php");
include_once('includes/header.php');
$id_vehicule =$_GET['id_vehicule'];
$selsql="select * from vehicule  where

     id_vehicule='$id_vehicule' ";
$res=mysqli_query($con,$selsql);    
$row=mysqli_fetch_assoc($res);
$errors=[];
$message='';
if(isset($_POST)&& !empty($_POST)){
    $id_vehicule = ($_POST['id_vehicule']);
    $immatricule =($_POST['immatricule']);
    $marque = ($_POST['marque']);
   
    
    
    
    
   
        $updateSql = "UPDATE vehicule SET immatricule='$immatricule',marque='$marque' where id_vehicule='$id_vehicule'";
        $res=mysqli_query($con,$updateSql)or die(mysqli_error($con));
        if($res ){
            header('location:vehicule.php?alert=success&msg= vehicule modifié!');
         }
    
          
        else{
         header("Location: vehicule.php?alert=error&msg=erreur de modification!");
        }   
    }
   

?>

     <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto mt-4">
               <div class="card">
                  <div class=" card-body">
                     <form class="form-horizontal" id="form" method="post" action="updateVehicule.php?id_vehicule=<?php echo $row['id_vehicule'];?>">
                      <fieldset> <legend><h1 class="card-title "style="color:#566573  ;font-family:Times New Roman, Times,sans-serif;" ><center><b>Modifier une véhicule</b></center></h1></legend>
                      <hr>
                      <div class="form-group">
                         <label for="immatricule" class="col-lg-2 control-label">immatricule</label>
                      <div class="col-lg-10">
                          <input type="text" class="form-control" id="immatricule" name="immatricule" placeholder="immatricule" value="<?php echo $row['immatricule'];?>">
                       </div>
                       </div>
                       <div class="form-group">
                           <label for="marque" class="col-lg-2 control-label">marque</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="marque" name="marque" placeholder="marque" value="<?php echo $row['marque'];?>">
                        </div>
                        </div>
                        
                        
                        <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                             <br>   <button type="update" class="btn btn-primary" id="update" name="update">modifier</button>
                        </div>
                        </div>
                   </fieldset>
                </form>
           
          </div>
        </div>
    </div>
</div>
</div>
