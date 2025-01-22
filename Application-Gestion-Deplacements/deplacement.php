<?php 
   

  
  require_once ('connect.php');
  
  $ReadSql = "SELECT * FROM `deplacement` ";

  $res = mysqli_query($con, $ReadSql);

 ?>
 

<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Utilisateur</title>
    <style>
        .cards h1{
            color:#5D5B5B ;
            font-family: "Times New Roman", Times,sans-serif;
        }
        .table th{
            color:#5D5B5B ;
            font-family: "Times New Roman", Times,sans-serif;
            font-size:20px;
        }
        .fa-trash{
    background: #FE4A4A
}
.fa-marker{
    background: #60A3CF ;
}
.btn{
    background: #89E5BC  ;
}
.sidebar{
    background:linear-gradient(55deg,#60A3CF, #89E5BC) ;
}
.btnn{

padding: 5px 10px;
background: #60A3CF;
color: #fff;
text-decoration: none;
text-align:center;
margin-left:20px;
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
                    <a href="fichier.php    ">
                        <i class="fas fa-file-alt"></i>
                        <div class="title">DOCUMENTS</div>
                        
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="top-bar">
            <div class="search">
               <form action="searchDeplacement.php">
                <input type="text" name="search" placeholder="Rechercher">
                <label for="search"><i class="fas fa-search"></i></label>
               </form>
            </div>
            <i ></i>
            <div class="user">
                 <img src="aboher.jpg" alt="">
            </div>
            </div>
            <div class="cards">
                
                
                    
            
                
                   
               
            <div class="the"><pre><a href="test.php"style="text-decoration:none;"><h1 >Gestion des déplacements</h1></a></pre></div>
            </div>
            <div class="heading">
                    <a href="addDeplacement.php" class="btnn"> <i class="fas fa-plus">  Ajouter</i></a>>
                    </div>
            <div class="tables">
                <div class="deplacement">
                   
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
                        <td><?php 
                        $id_deplacement=$row['id_deplacement'];
                        
                        $date_arrivee=strtotime($row['date_arrivee']);
                        $date_depart=strtotime($row['date_depart']);  

                        $diff=$date_arrivee-$date_depart;
                        $nb_jours=floor($diff/(60*60*24));
                        echo $nb_jours;
                        $ress="update deplacement set nb_jours=$nb_jours where id_deplacement=$id_deplacement" ;
                        $rr=mysqli_query($con,$ress);
                       /* if($rr){
                            echo"bien";
                        }

                        else{
                            echo"non";
                        }*/
                        
                       
                        ?></td>
                        <td><?php   

    $heure_depart=strtotime($row['heure_depart']);
    $heure_retour=strtotime($row['heure_retour']);
    
  
    $firstDay = 0;
    $lastDay = 0;
    if($heure_depart <1653901200 ){ $firstDay = 3;}
    elseif($heure_depart >1653901200 ){ $firstDay = 2;}
    else $firstDay==0;
    if($heure_retour==1653930000	) $lastDay = 2;
    elseif ($heure_retour==1653948000) $lastDay = 3;
    else $lastDay = 0;
    $nombre_de_repas = $firstDay + $lastDay + (3*($nb_jours - 2));
    echo  $nombre_de_repas;
    $req="update deplacement set nb_repas=$nombre_de_repas where id_deplacement=$id_deplacement" ;
    $resr=mysqli_query($con,$req);
    /*if($resr){
        echo"bien";
    }
    else{
        echo"nom";
    }*/
   

?>
</td>

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


