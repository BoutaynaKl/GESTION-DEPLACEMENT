
<?php
include_once('includes/header.php');
require_once('connect.php');
$errors = [];
$message="";
?>
            <?php 
            $dep="select * from deplacement";
            $dep=mysqli_query($con,$dep);
               
                if(isset($_POST['submit'])){
                    
                     
                     if (isset($_POST) & !empty($_POST)) {
                       $n_ordre= ($_POST['n_ordre']);
                       $nom = ($_POST['nom']);
                       $prenom = ($_POST['prenom']);
                       $adresse = $_POST['adresse'];
                       $email = $_POST['email'];
                       $tel = $_POST['tel'];
                       $rib = $_POST['rib'];
                       $echelle = $_POST['echelle'];
                    
                       $cadre = $_POST['cadre'];
                       
                       
                       $CreateSql = "INSERT INTO employe ( n_ordre, nom, prenom, adresse, email, tel, rib, echelle,  cadre) VALUES ('$n_ordre', '$nom', '$prenom', '$adresse', '$email', '$tel', '$rib',' $echelle',  '$cadre')";
                       $res = mysqli_query($con, $CreateSql) or die(mysqli_error($con));
                       if($res ){
                        header('location:employe.php?alert=success&msg= employé ajouté !');
                     }
     
                    else{
                     header("Location: employe.php?alert=error&msg=erreur d'ajout!");
                    }
                }
                }
            ?>
              <div class="container">
                 <div class="row ">
                    <div class="col-md-8 mx-auto mt-4">
                     <div class="card">     
                        <legend><h1 class="card-title " style="color:#566573  ;font-family:Times New Roman, Times,sans-serif;"><center><b>Ajouter un employé</b></center></h1></legend>
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
                     <form class="form-horizontal" method="post" action="addEmploye.php" id="form">
                       <fieldset>
                        <div class="form-group">
                            <label for="n_ordre" class="col-lg-2 control-label">n_ordre</label>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" id="n_ordre" name="n_ordre" placeholder="n_ordre" value="<?php echo isset($_POST['n_ordre']) ? $_POST['n_ordre']:'';?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nom" class="col-lg-2 control-label">nom</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" value="<?php echo isset($_POST['nom']) ? $_POST['nom']:'';?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="col-lg-2 control-label">prenom</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" value="<?php echo isset($_POST['prenom']) ? $_POST['prenom']:'';?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="adresse" class="col-lg-2 control-label">adresse</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse" value="<?php echo isset($_POST['adresse']) ? $_POST['adresse']:'';?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-lg-2 control-label">email</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?php echo isset($_POST['email']) ? $_POST['email']:'';?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-lg-2 control-label">tel</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="tel" name="tel" placeholder="tel"value="<?php echo isset($_POST['tel']) ? $_POST['tel']:'';?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rib" class="col-lg-2 control-label">rib</label>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" id="rib" name="rib" placeholder="rib"value="<?php echo isset($_POST['rib']) ? $_POST['rib']:'';?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="echelle" class="col-lg-2 control-label">echelle</label>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" id="echelle" name="echelle" placeholder="echelle"value="<?php echo isset($_POST['echelle']) ? $_POST['echelle']:'';?>"required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="cadre" class="col-lg-2 control-label">cadre</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="cadre" name="cadre" placeholder="cadre"value="<?php echo isset($_POST['cadre']) ? $_POST['cadre']:'';?>"required>
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="id_deplacement" class="col-lg-2 control-label">id_deplacement</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="id_deplacement" id="id_deplacement"><?php while($row=mysqli_fetch_array($dep)): ?> 
                                    <option value="<?php echo ($row['0']);?>"><?php echo strtoupper($row['4']).' '.strtoupper($row['8'])?></option>
                                    <?php endwhile?>
                                </select>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <br><button type="submit" class="btn btn-primary" id="submit" name="submit">Ajouter</button>
                            </div>
                        </div>
                    </fieldset>
               </form>
             </div>
            </div>  
        </div>
    </div>
</div>
                        