<?php
include_once('includes/header.php');
require_once('connect.php');
$errors = [];
$message="";
?>
                     <?php 
               
               $emp="select * from deplacement";
               $empp=mysqli_query($con,$emp);
                if(isset($_POST['submit'])){
                    
                     
                     if (isset($_POST) & !empty($_POST)) {
                       
                       $immatricule= ($_POST['immatricule']);
                       $marque = ($_POST['marque']);
                       
                    
                        
                         $rq1="SELECT * FROM vehicule  where marque='$marque' and immatricule='$immatricule'";  
                         $rs1=mysqli_query($con,$rq1);
                         $count=mysqli_num_rows($rs1);
                         
                        
                          if($count==0)  {
                                    $rq2="INSERT INTO vehicule (immatricule,marque ) VALUES ('$immatricule','$marque')";
                                    $rs2=mysqli_query($con,$rq2);
                                    if($rs2){
                                        header('location:vehicule.php?alert=success&msg= vehicule ajouté !');
                                    }
                                    else{
                                        header("Location: vehicule.php?alert=error&msg=erreur d'ajout!");
                                    }
                            }   
                            else{
                                header("Location: addVehicule.php?alert=error&msg=Véhicule existe!");
                            }
                       

                   

}   }


                      
            ?>
           
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
                 <div class="row ">
                    <div class="col-md-8 mx-auto mt-4">
                     <div class="card">     
                        <legend><h1 class="card-title "style="color:#566573  ;font-family:Times New Roman, Times,sans-serif;" ><center><b>Ajouter une véhicule</b></center></h1></legend>
                        <hr>
                        <?php
                         if(!empty($errors)){
                             echo '<div class="alert alert-danger">'.$errors.'</div>' ;
                         }
                          else{
                              echo $message;
                          }
                        ?>
                     <div class=" card-body">
                     <form class="form-horizontal" method="post" action="addVehicule.php" id="form">
                       <fieldset>
                        <div class="form-group">
                            <label for="immatricule" class="col-lg-2 control-label">immatricule</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="immatricule" name="immatricule" placeholder="immatricule" value="<?php echo isset($_POST['immatricule']) ? $_POST['immatricule']:'';?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="marque" class="col-lg-2 control-label">marque</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="marque" name="marque" placeholder="marque" value="<?php echo isset($_POST['marque']) ? $_POST['marque']:'';?>"required>
                            </div>
                        </div>
                       
                       
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                               <br> <button type="submit" class="btn btn-primary" id="submit" name="submit">Ajouter</button>
                            </div>
                        </div>
                    </fieldset>
               </form>

             </div>
            </div>  
        </div>
    </div>
</div>

  
</body>
<script>
    <?php if(isset($_GET['alert']) && isset($_GET['msg'])): ?>
          Swal.fire({
            position: 'center',
            icon: "<?php echo $_GET['alert']; ?>",
            title: "<?php echo $_GET['msg']; ?>",
            showConfirmButton: false,
            timer: 3000
          })
        <?php endif; ?>    
  </script>
</html>