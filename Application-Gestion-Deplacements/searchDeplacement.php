<?php
  require_once ("connect.php");
  $search = $_GET['search'];
  $sql = "SELECT * FROM deplacement WHERE id_deplacement=$search";
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
    
    <style>
         .table th{
            color:#797979 ;
            font-family: "Times New Roman", Times,sans-serif;
        }
    </style>
    <title>Utilisateur</title>
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
                        <div class="title">DEPLACEMENT </div>
                       
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
               <form action="searchDeplacement.php" role="search">
                <input type="text" name="search" placeholder="search here">
                <label for="search"><i class="fas fa-search"></i></label>
               </form>
            </div>
            <i ></i>
            <div class="user">
                 <img src="aboher.jpg" alt="">
            </div>
            </div>
            <div class="cards">
                
                    
                
            </div>
            <div class="tables">
                <div class="deplacement">
                    <div class="heading">
                        <h2>deplacement</h2>
                        
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
                    <th>Id</th>
                        <th>Hdepart</th>
                        <th>Hretour</th>
                        <th>Vdepart</th>
                        <th>Varrivée</th>
                        <th>Ddepart</th>
                        <th>Darrivée</th>
                        <th>Forfait</th>
                        <th>Nbj</th>
                        <th>Nbr</th>
                        <!--<th>employe</th>-->
                        <th>Employe</th>
                        <th>Vehicule</th>
                        <th>Mission</th>
                        <th>Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                <?php 
                    
                    while($row = $res->fetch_assoc()):
                ?>
                    <tr>
                        <td><?php echo $row['id_deplacement'];?></td>
                        <td><?php echo $row['heure_depart'];?></td>
                        <td><?php echo $row['heure_retour'];?></td>
                        <td><?php echo $row['ville_depart'];?></td>
                        <td><?php echo $row['ville_arrivee'];?></td>
                        <td><?php echo $row['date_depart'];?></td> 
                        <td><?php echo $row['date_arrivee'];?></td> 
                        <td><?php echo $row['forfait'];?></td>
                        <td><?php echo $row['nb_jours'];?></td> 
                        <td><?php echo $row['nb_repas'];?></td> 
                        <td><?php echo $row['id_employe'];?></td>
                        <td><?php echo $row['id_vehicule'];?></td>
                        <td><?php echo $row['id_mission'];?></td>

                        
                      
                        <td><a href="updateDeplacement.php?id_deplacement=<?php echo $row['id_deplacement'];?>"  class="btn-btn-warning btn-xs"><i class="fa fa-marker" title="Modifier"></i></a> <a href="deleteDeplacement.php?id_deplacement=<?php echo $row['id_deplacement'];?>" class="btn-btn-danger btn-xs" title="Supprimer"><i class="fas fa-trash"></i></a></td>
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


