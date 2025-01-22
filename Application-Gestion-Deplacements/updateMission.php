<?php
require_once("connect.php");
include_once('includes/header.php');
$id_mission =$_GET['id_mission'];
$selsql="select * from mission where id_mission=$id_mission ";
$res=mysqli_query($con,$selsql);
$row=mysqli_fetch_assoc($res);
$errors=[];
$message='';
if(isset($_POST)&& !empty($_POST)){
    $intitule =($_POST['intitule']);
   
                             
    $updateSql = "UPDATE mission SET intitule='$intitule' where id_mission='$id_mission'";
    $res=mysqli_query($con,$updateSql)or die(mysqli_error($con));
    if($res ){
    header('location:mission.php?alert=success&msg= mission modifié !');
    }
  
    else{
    header("Location mission.php?alert=error&msg=erreur du modification!");
    }
}  
?>

     <div class="container">
        <div class="row ">
            <div class="col-md-8 mx-auto mt-4">
               <div class="card">
                  <div class=" card-body">
                     <form class="form-horizontal" id="form" method="post" action="updateMission.php?id_mission=<?php echo $row['id_mission'];?>">
                      <fieldset>
                      <legend><h1 class="card-title "style="color:#566573  ;font-family:Times New Roman, Times,sans-serif;" ><center><b>Modifier une mission</b></center></h1></legend>
                      <hr>
                      <div class="form-group">
                         <label for="intitule" class="col-lg-2 control-label">intitulé</label>
                      <div class="col-lg-10">
                          <input type="text" class="form-control" id="intitule" name="intitule" placeholder="intitule" value="<?php echo $row['intitule'];?>">
                       </div>
                       </div>
                       
                        <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                              <br>  <button type="update" class="btn btn-primary" id="update" name="update">modifier</button>
                        </div>
                        </div>
                   </fieldset>
                </form>
           
          </div>
        </div>
    </div>
</div>
</div>
