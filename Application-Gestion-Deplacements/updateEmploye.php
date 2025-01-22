<?php
require_once("connect.php");
include_once('includes/header.php');
$id =$_GET['id'];
$selsql="select * from employe where id=$id ";
$res=mysqli_query($con,$selsql);
$row=mysqli_fetch_assoc($res);
$errors=[];
$message='';
if(isset($_POST)&& !empty($_POST)){
    $n_ordre =($_POST['n_ordre']);
    $nom = ($_POST['nom']);
    $prenom = ($_POST['prenom']);
    $adresse = ($_POST['adresse']);
    $email = ($_POST['email']);
    $tel = ($_POST['tel']);
    $rib = ($_POST['rib']);
    $echelle = ($_POST['echelle']);
   
    $cadre = ($_POST['cadre']);
                             
    $updateSql = "UPDATE employe SET n_ordre='$n_ordre'
    ,nom='$nom',prenom='$prenom'
    ,adresse='$adresse',email ='$email',tel ='$tel',rib ='$rib', echelle ='$echelle',cadre='$cadre' WHERE id='$id'";
    $res=mysqli_query($con,$updateSql)or die(mysqli_error($con));
    if($res ){
        header('location:employe.php?alert=success&msg= employe modifié !');
     }

      
    else{
     header("Location: employe.php?alert=error&msg=erreur de modification");
    }
}
?>

     <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto mt-4">
               <div class="card">
                  <div class=" card-body">
                     <form class="form-horizontal" id="form" method="post" action="updateEmploye.php?id=<?php echo $row['id'];?>">
                      <fieldset>
                      <legend><h1 class="card-title "style="color:#566573  ;font-family:Times New Roman, Times,sans-serif;" ><center><b>Modifier un employé</b></center></h1></legend>
                      <hr>
                      <div class="form-group">
                         <label for="n_ordre" class="col-lg-2 control-label">n_ordre</label>
                      <div class="col-lg-10">
                          <input type="number" class="form-control" id="n_ordre" name="n_ordre" placeholder="n_ordre" value="<?php echo $row['n_ordre'];?>">
                       </div>
                       </div>
                       <div class="form-group">
                           <label for="nom" class="col-lg-2 control-label">nom</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" value="<?php echo $row['nom'];?>">
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="col-lg-2 control-label">prenom</label>
                        <div class="col-lg-10">
                             <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" value="<?php echo $row['prenom'];?>">
                        </div>
                        </div>
                        <div class="form-group">
                             <label for="adresse" class="col-lg-2 control-label">adresse</label>
                        <div class="col-lg-10">
                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse" value="<?php echo $row['adresse'];?>">
                        </div>
                        </div>
                        <div class="form-group">
                             <label for="email" class="col-lg-2 control-label">email</label>
                        <div class="col-lg-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?php echo $row['email'];?>">
                        </div>
                        </div>
                        <div class="form-group">
                                <label for="tel" class="col-lg-2 control-label">tel</label>
                        <div class="col-lg-10">
                                <input type="text" class="form-control" id="tel" name="tel" placeholder="tel" value="<?php echo $row['tel'];?>">
                        </div>
                        </div>
                        <div class="form-group">
                                <label for="rib" class="col-lg-2 control-label">rib</label>
                        <div class="col-lg-10">
                                <input type="text" class="form-control" id="rib" name="rib" placeholder="rib" value="<?php echo $row['rib'];?>">
                        </div>
                        </div>
                        <div class="form-group">
                                <label for="echelle" class="col-lg-2 control-label">echelle</label>
                        <div class="col-lg-10">
                                <input type="number" class="form-control" id="echelle" name="echelle" placeholder="echelle" value="<?php echo $row['echelle'];?>">
                        </div>
                        </div>
                
                        <div class="form-group">
                                <label for="cadre" class="col-lg-2 control-label">cadre</label>
                        <div class="col-lg-10">
                                <input type="text" class="form-control" id="cadre" name="cadre" placeholder="cadre" value="<?php echo $row['cadre'];?>">
                        </div>
                        </div>
                        
                        <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <br>    <button type="update" class="btn btn-primary" id="update" name="update">modifier</button>
                        </div>
                        </div>
                   </fieldset>
                </form>
           
          </div>
        </div>
    </div>
</div>
</div>
