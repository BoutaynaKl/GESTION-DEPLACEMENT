<?php
include_once('includes/header.php');
require_once('connect.php');
$errors = [];
$message="";

?>

            <?php 
           
            $emp="select * from employe";
            $empp=mysqli_query($con,$emp);
           
            $vec="select * from vehicule";
            $vecc=mysqli_query($con,$vec);
           
            $mis="select * from mission";
            $miss=mysqli_query($con,$mis);
               
                if(isset($_POST['submit'])){
                    
                     
                     if (isset($_POST) & !empty($_POST)) {
                       $heure_depart= ($_POST['heure_depart']);
                       $heure_retour = ($_POST['heure_retour']);
                       $ville_depart = ($_POST['ville_depart']);
                       $ville_arrivee = $_POST['ville_arrivee'];
                       $date_depart = $_POST['date_depart'];
                       $date_arrivee = $_POST['date_arrivee'];
                       $forfait = $_POST['forfait'];
                       $id_employe=($_POST['id_employe']);
                       $id_vehicule=($_POST['id_vehicule']);
                       $id_mission=($_POST['id_mission']);
                      
                       
                       $rq1="SELECT id_employe FROM deplacement d
                       WHERE id_employe=$id_employe";
                       $rs1=mysqli_query($con,$rq1);
                       $countt=mysqli_num_rows($rs1);
                       if($countt==0){
                        $rq="SELECT id_vehicule FROM deplacement d where id_vehicule=$id_vehicule";  
                        $rs=mysqli_query($con,$rq);
                        $count=mysqli_num_rows($rs);
                           if($count<5){
                       
                                $CreateSql = "INSERT INTO deplacement (heure_depart,heure_retour,ville_depart,ville_arrivee,date_depart,date_arrivee,forfait,id_employe,id_vehicule,id_mission) 
                                VALUES('$heure_depart', '$heure_retour ', '$ville_depart', '$ville_arrivee', ' $date_depart','$date_arrivee','$forfait','$id_employe','$id_vehicule','$id_mission') ";
                                $res = mysqli_query($con, $CreateSql) or die(mysqli_error($con));   
                                if($res ){
                                   header('location:deplacement.php?alert=success&msg= deplacement ajouté !');
                                }
                                else{header("Location: deplacement.php?alert=error&msg=erreur d'ajout!");}
                            }else{
                            header("Location: addDeplacement.php?alert=error&msg=Véhicule plein!");
                            }
                        }else{
                            header("Location:addDeplacement.php?alert=error&msg=employe existe !");
                        }
                        
                       
        
                         
                      
                       
                   
        
                    
                }}
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
                        <legend><h1 class="card-title" style="color:#566573  ;font-family:Times New Roman, Times,sans-serif;"><center><b>Ajouter un déplacement</b></center></h1></legend>
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
                     <form class="form-horizontal" method="post" action="addDeplacement.php" id="form">
                       <fieldset>
                        <div class="form-group">
                            <label for="heure_depart" class="col-lg-2 control-label">heure_depart</label>
                            <div class="col-lg-10">
                                <input type="time" class="form-control" id="heure_depart" name="heure_depart" placeholder="heure_depart" value="<?php echo isset($_POST['heure_depart']) ? $_POST['heure_depart']:'';?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="heure_retour" class="col-lg-2 control-label">heure_retour</label>
                            <div class="col-lg-10">
                                <input type="time" class="form-control" id="heure_retour" name="heure_retour" placeholder="heure_retour" value="<?php echo isset($_POST['heure_retour']) ? $_POST['heure_retour']:'';?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ville_depart" class="col-lg-2 control-label">ville_depart</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="ville_depart" name="ville_depart" placeholder="ville_depart" value="<?php echo isset($_POST['ville_depart']) ? $_POST['ville_depart']:'';?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ville_arrivee" class="col-lg-2 control-label">ville_arrivee</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="sville_arrivee" name="ville_arrivee" placeholder="ville_arrivee" value="<?php echo isset($_POST['ville_arrivee']) ? $_POST['ville_arrivee']:'';?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_depart" class="col-lg-2 control-label">date_depart</label>
                            <div class="col-lg-10">
                                <input type="date" class="form-control" id="date_depart" name="date_depart" placeholder="date_depart"value="<?php echo isset($_POST['date_depart']) ? $_POST['date_depart']:'';?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_arrivee" class="col-lg-2 control-label">date_arrivee</label>
                            <div class="col-lg-10">
                                <input type="date" class="form-control" id="date_arrivee" name="date_arrivee" placeholder="date_arrivee"value="<?php echo isset($_POST['date_arrivee']) ? $_POST['date_arrivee']:'';?>"required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="forfait" class="col-lg-2 control-label">forfait</label>
                            <div class="col-lg-10">
                                <input type="number" class="form-control" id="forfait" name="forfait" placeholder="forfait"value="<?php echo isset($_POST['forfait']) ? $_POST['forfait']:'';?>"required>
                            </div>
                        </div>
                        
                       
                        <div class="form-group">
                            <label for="id_employe" class="col-lg-2 control-label">employe</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="id_employe" id="id_employe"><?php while($row=mysqli_fetch_array($empp)): ?> 
                                    <option value="<?php echo ($row['0']);?>"><?php echo strtoupper($row['0']).' '.strtoupper($row['2']).' '.strtoupper($row[3]);?></option required>
                                    <?php endwhile?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_vehicule" class="col-lg-2 control-label">vehicule</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="id_vehicule" id="id_vehicule"><?php while($row=mysqli_fetch_array($vecc)): ?> 
                                    <option value="<?php echo ($row['0']);?>"><?php echo strtoupper($row['0']).' '.strtoupper($row['1']).' '.strtoupper($row['2']);?></option required>
                                    <?php endwhile?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_mission" class="col-lg-2 control-label">mission</label>
                            <div class="col-lg-10">
                                <select class="form-control" name="id_mission" id="id_mission"><?php while($row=mysqli_fetch_array($miss)): ?> 
                                    <option value="<?php echo ($row['0']);?>"><?php echo($row['1']);?></option required>
                                    <?php endwhile?>
                                </select>
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