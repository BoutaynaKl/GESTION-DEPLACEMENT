<?php 
   
   //include('includes/header.php');
   //include('database/functions.php');

  
  require_once ('connect.php');
  $ReadSql = "SELECT * FROM `vehicule` ";

  $res = mysqli_query($con, $ReadSql);


 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
           .vehicule{
    min-height: 350px;
    
    background: #fff;
    padding: 20px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
        .cards h1{
            color:#5D5B5B ;
            font-family: "Times New Roman", Times,sans-serif;
        }
        .table th{
            color:#5D5B5B ;
            font-family: "Times New Roman", Times,sans-serif;
            font-size:20px;
        }
        
        .dep a{
            color:#5D5B5B ;
            text-decoration:none;
            font-family: "Times New Roman", Times,sans-serif;
        }
        b{
            color:red;
        }
        .btn1{
     
    background:#FE4A4A;
    color: #fff;
    text-decoration: none;
    text-align:center;
    width:40%;
    margin-left:20px;
}


.btn2{
   
   
    background:#46CF74 ;
    color: #fff;
    text-decoration: none;
    text-align:center;
    width:40%;
    margin-left:20px;
}
.fa-trash{
background: #FE4A4A  ;
}
.fa-marker{
background: #60A3CF ;
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
               <form action="searchVehicule.php">
                <input type="text" name="search" placeholder="Rechercher">
                <label for="search"><i class="fas fa-search"></i></label>
               </form>
            </div>
            <i class=></i>
            <div class="user">
                 <img src="aboher.jpg" alt="">
            </div>
            </div>
            
            <div class="cards">
                
                <div class="card-content">
                <div class="the"><pre><h1 >Gestion des véhicules</h1></pre></div>
                </div>
               
           
              
            
        </div>
        <div class="heading">
        
                       
        <a href="addVehicule.php" class="btnn"> <i class="fas fa-plus">  Ajouter</i></a>
                       
                   </div>
            <div class="tables">
                <div class="vehicule">
                    
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
                        <th>Immatricule</th>
                        <th>Marque</th>
                        
                        <th>Etat</th>
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
                        
                        <td>
                        <?php
                        /*$ra="select * from vehicule where marque=$marque ";
                        $resra=mysqli_query($con,$r a);*/
                        $marque=$row['marque'];
                        $immatricule=$row['immatricule'];
                        $id_vehicule=$row['id_vehicule'];
                        $req="SELECT id_vehicule FROM deplacement  WHERE id_vehicule='$id_vehicule'  ";
                        $ress=mysqli_query($con,$req);
                        $count= mysqli_num_rows($ress);
                       
                        $id_vehicule=$row['id_vehicule'];
                        $etat=$row['etat'];
                       
                        
                   
                        if($count==5){
                           $etat='occupee'; 
                            echo "<center><div class=btn1>$etat</div> </center> ";
                           
                            $rqq="update vehicule set etat='occupee' where id_vehicule=$id_vehicule";
                             $rqq1=mysqli_query($con,$rqq);
                            
                          
                            /* if($rqq1){
                                 echo"oui";
                             }
                             else{
                                 echo"non";
                             }*/
                           

                          
                        }
                       
                       
                        if($count<5 ){
                            $etat='libre';
                            echo "<center><div class=btn2>$etat</div></center> ";
                                $rq="update vehicule set etat='libre' where id_vehicule=$id_vehicule";
                                $rq1=mysqli_query($con,$rq);
                               /* if($rq1){
                                    echo"bon";
                                }
                                else{
                                    echo"pas";
                                }*/

                                
                               
                               
                        }
                                
                            
                        
                       
                            
                       
                        ?>
                       </td> 
                        
                        
                        
                      
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

   


