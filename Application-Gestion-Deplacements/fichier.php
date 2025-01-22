<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
        

        
        .card1{
                
            background:linear-gradient(80deg,#60A3CF, #89E5BC) ;
            padding: 20px;
            width:50%;
           margin-left:15px;
        }
        .card2{
                
                background:linear-gradient(80deg,#60A3CF, #89E5BC) ;
                padding: 1px;
                width:50%;
               margin-left:15px;
               
               
            }
    
        p{
            float:left;
        }
        
        
        
        .fa-eye{
            color:#fff ;

        }
        .card-content2{
            margin-top:50px;
            
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
                <input type="text" name="search" placeholder="search here">
                <label for="search"><i class="fas fa-search"></i></label>
               </form>
            </div>
            <i class=""></i>
            <div class="user">
                 <img src="aboher.jpg" alt="">
            </div>
            
            </div>
           
            <p style="margin: bottom 1000px;color:red;">fghjkl</p><br>
            <p>fichier</p><br>       
            <div class="card">
            
<ul class="list-group list-group-light" style="list-style: none;">
  document <br>

  <br><li class="list-group-item "><h1 style="color:#566573  ;font-family:Times New Roman, Times,sans-serif;margin-left:15px;"><i class="fas fa-file-alt">&nbsp Documents</i></h1></li><br><br>

  
  <li class="list-group-item" style="background:linear-gradient(80deg,#60A3CF, #89E5BC); width:60%;margin-left:150px;padding:30px;"><p class="fas fa-file-alt" style="color:white;font-size:25px">&nbsp Ordre Mission  </p><a href="form.php"> <i class="fas fa-eye" style="margin-left:440px;"></i></a></li><br>
  <li class="list-group-item "></li><br>
  <li class="list-group-item "style="background:linear-gradient(80deg, #89E5BC,#60A3CF) ; width:60%;margin-left:150px;padding:30px;"><p class="fas fa-file-alt"  style="color:white;font-size:25px">&nbsp Listes Bénificiaires  </p><a href="listeBenificiaire.php"> <i class="fas fa-eye" style="margin-left:390px;"></i></a></li><br>
  <li class="list-group-item "></li><br>
  <li class="list-group-item "style="background:linear-gradient(80deg,#60A3CF, #89E5BC) ;; width:60%;margin-left:150px;padding:30px;"><p class="fas fa-file-alt"  style="color:white;font-size:25px">&nbsp Ordre Paiement  </p><a href="OrdrePaiement.php"> <i class="fas fa-eye" style="margin-left:420px;"></i></a></li><br>
  <li class="list-group-item ">     </li><br>
  <li class="list-group-item "style="background:linear-gradient(80deg, #89E5BC,#60A3CF) ; width:60%;margin-left:150px;padding:30px;"><p class="fas fa-file-alt"  style="color:white;font-size:25px">&nbsp Proces Verbal </p><a href="ProcesVerbal.php"> <i class="fas fa-eye" style="margin-left:445px;"></i></a></li><br>
</ul>  
        
            </div>
            </div>
           
        
    
</body>
</html>


