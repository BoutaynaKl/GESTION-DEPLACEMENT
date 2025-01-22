<?php
  require_once ("connect.php");
  $search = $_GET['search'];
  $sql = "SELECT * FROM vehicule WHERE id_vehicule=$search";
  $res=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Utilisateur</title>
    <style>
         .vehicule{
    min-height: 350px;
    
    background: #fff;
    padding: 20px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="">
                        <i class="fas fa-home"> </i>
                        <div class="title">ABOHER</div>
                       
                    </a>
                </li>
                <li>
                    <a href="employe.php">
                        <i class="fas fa-address-card"> </i>
                        <div class="title">EMPLOYE</div>
                       
                    </a>
                </li>
                <li>
                    <a href="deplacement.php">
                        <i class="fas fa-retweet"> </i>
                        <div class="title">deplacement </div>
                       
                    </a>
                </li>
                <li>
                    <a href="mission.php">
                        <i class="fas fa-clipboard-check"> </i>
                        <div class="title">MISSION </div>
                       
                    </a>
                </li>
                <li>
                    <a href="vehicule.php">
                        <i class="fas fa-car-alt"> </i>
                        <div class="title">VEHICULES </div>
                       
                    </a>
                </li>
                <li>
                    <a href="fichier.php">
                        <i class="fas fa-file-alt"></i>
                        <div class="title">DOCUMENTS</div>
                        
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
            <div class="search">
               <form action="searchVehicule.php" role="search">
                <input type="text" name="search" placeholder="search here">
                <label for="search"><i class="fas fa-search"></i></label>
               </form>
            </div>
            <i ></i>
            <div class="user">
                 <img src="aboher.jpg" alt="">
            </div>
            </div>
            <div class="cards"></div>
            <div class="tables">
                <div class="vehicule">
                    <div class="heading">
                       
                    </div>
                    <div class="row">
        <div class="col-md-8 mx-auto mt-4">
            <?php
               if(isset($_GET['message'])){
                    echo '<div class="alert alert-success">'.$_GET['message'].'</div>';
               }else if(isset($_GET['deleted'])){
                    echo '<div class="alert alert-success">'.$_GET['deleted'].'</div>';
               }else if(isset($_GET['updated'])){
                    echo '<div class="alert alert-success">'.$_GET['updated'].'</div>';
               }
            ?>
            <div class="card">
            <div class=" card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>immatricule</th>
                        <th>marque</th>
                        
                        <th>etat</th>
                        <th>Action</th>
                        
                        
                       
                    </tr>
                </thead>
                <tbody>
                <?php 
                    
                    while($row = $res->fetch_assoc()):
                ?>
                    <tr>
                        <td><?php echo $row['id_vehicule'];?></td>
                        <td><?php echo $row['immatricule'];?></td>
                        <td><?php echo $row['marque'];?></td>
                     
                        <td><?php echo $row['etat'];?></td>
                        
                        
                      
                        <td><a href="updateVehicule.php?id_vehicule=<?php echo $row['id_vehicule'];?>"  class="btn-btn-warning btn-xs"><i class="fa fa-marker" title="Modifier"></i></a> <a href="deleteVehicule.php?id_vehicule=<?php echo $row['id_vehicule'];?>" class="btn-btn-danger btn-xs" title="Supprimer"><i class="fas fa-trash"></i></a></td>
                    </tr>
                <?php 
                    endwhile;
                ?>
                </tbody>
            </table>
            </div>
          </div>
        </div>
    </div>
                </div>
                <div class="container">
   
</div>

            </div>
        </div>
    </div>
   
    
</body>
</html>


