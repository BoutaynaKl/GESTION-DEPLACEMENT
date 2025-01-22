<?php 
   
   //include('includes/header.php');
   //include('database/functions.php');

  
  require_once ('connect.php');
  $ReadSql = "SELECT * FROM `employe` order by n_ordre";

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
        .employe{
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
               <form action="searchEmploye.php">
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
            <div class="the"><pre><h1 >Gestion des employés</h1></pre></div>
            </div>
            <div class="heading">
                    <a href="addEmploye.php" class="btnn"> <i class="fas fa-plus">  Ajouter</i></a>>
                        
                    </div>
            <div class="tables">
                <div class="employe">
                    
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
                        <th>N°</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>Email</th>
                        <th>Tel</th>
                        <th>Rib</th>
                        <th>Echelle</th>
                        <th>Taux</th>
                        <th>Cadre</th>
                       
                        <th>Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                <?php 
                    
                    while($row = $res->fetch_assoc()):
                ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['n_ordre'];?></td>
                        <td><?php echo $row['nom'];?></td>
                        <td><?php echo $row['prenom'];?></td>
                        <td><?php echo $row['adresse'];?></td>
                        <td><?php echo $row['email'];?></td> 
                        <td><?php echo $row['tel'];?></td> 
                        <td><?php echo $row['rib'];?></td>
                        <td><?php echo $row['echelle'];?></td>
                        <td><?php 
                        $id=$row['id'];
                        $echelle=$row['echelle'];
                        $taux=0;
                        if($echelle==12){
                            $taux=100;
                            echo $taux;
                        }
                        
                        if($echelle==11){
                            $taux=80;
                            echo $taux;
                        }
                        if($echelle==10){
                            $taux=60;
                            echo $taux;
                        }
                        if($echelle==9){
                            $taux=60;
                            echo $taux;
                        }
                        if($echelle==8){
                            $taux=40;
                            echo $taux;
                        }
                        if($echelle==7){
                            $taux=40;
                            echo $taux;
                        }
                        if($echelle==6){
                            $taux=40;
                            echo $taux;
                        }
                       
                       
                        
                        $ress="update employe set taux=$taux where id=$id" ;
                        $rr=mysqli_query($con,$ress);
                        /*if($rr){
                            echo"bien";
                        }

                        else{
                            echo"non";
                        }*/

                        ?></td>
                        <td><?php echo $row['cadre'];?></td>
                        
                        
                      
                        <td><a href="updateEmploye.php?id=<?php echo $row['id'];?>"  class="btn-btn-warning btn-xs"><i class="fa fa-marker" title="Modifier"></i></a> <a href="deleteEmploye.php?id=<?php echo $row['id'];?>" class="btn-btn-danger btn-xs" title="Supprimer"><i class="fas fa-trash"></i></a></td>
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

   
    
    
