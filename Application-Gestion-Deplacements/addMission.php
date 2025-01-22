<?php
include_once('includes/header.php');
require_once('connect.php');
$errors = [];
$message="";
?>
            <?php 
               
                if(isset($_POST['submit'])){
                    
                     
                     if (isset($_POST) & !empty($_POST)) {
                       $intitule= ($_POST['intitule']);
                      
                     
                       $CreateSql = "INSERT INTO mission (intitule) VALUES('$intitule') ";
                       $res = mysqli_query($con, $CreateSql) or die(mysqli_error($con));
                        
                      if($res ){
                          header('location:mission.php?alert=success&msg= mission ajouté !');
                      }
   
                     }else{
                          header("Location: mission.php?alert=error&msg=erreur d'ajout!");
                     }
                      
                      
                      
                      
                      
                    }
                
            ?>
              <div class="container">
                 <div class="row ">
                    <div class="col-md-8 mx-auto mt-4">
                     <div class="card">     
                        <legend><h1 class="card-title "style="color:#566573  ;font-family:Times New Roman, Times,sans-serif;" ><center><b>Ajouter une mission</b></center></h1></legend>
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
                     <form class="form-horizontal" method="post" action="addMission.php" id="form">
                       <fieldset>
                        <div class="form-group">
                            <label for="intitule" class="col-lg-2 control-label">intitulé</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="intitule" name="intitule" placeholder="intitulé" value="<?php echo isset($_POST['intitule']) ? $_POST['intitule']:'';?>"required>
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
