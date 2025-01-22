<?php 
$con = mysqli_connect('localhost', 'root', '', 'gestion_deplacement');
$connect = false;
if(!$con) die('not connected to database');
if (isset($_POST['id_deplacement']) ) {
    # code...
    $id_deplacement = $_POST['id_deplacement'];
   
    $requete = "select d.id_deplacement,nom,prenom,cadre,ville_arrivee,immatricule,marque, intitule,date_depart,date_arrivee,heure_depart,heure_retour FROM deplacement d,employe e,
    mission m,vehicule v
    where d.id_employe=e.id
    and d.id_vehicule=v.id_vehicule
    and d.id_mission=m.id_mission
    
    
    and d.id_deplacement=$id_deplacement";
    if($result = mysqli_query($con, $requete)){
        if(mysqli_num_rows($result) > 0){
       
            
            $connect = true;
            
        }
        else{
          header("Location: form.php?alert=error&msg=deplacement n'existe pas");
        }
    }
    else{
        die('problem de requete ' );
    }
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title></title>
    <style>
        .class-a{
            float: right;
            width: 20%;
            padding: 5px; 
            margin-left: 30%; height: 120px; line-height : 30px;
        }
        .class-b{
              line-height : 300px;
              float: right;
              font-size: 40px;
              text-decoration: underline;
              text-underline-position: under; 
        }
        .class-c{
           padding:30px;
           font-size: 25px;
           margin-left:28%;
           line-height:20px;

        }
        .col{
            
        }
        table{
       margin-left:320px;
       


      }
      @media print{
        .imprimer{
          display:none;
        }
      }
  
    </style>
</head>
<body>
    <?php 
    if($connect) : ?>  
        
        <div class="class-a">
               <center>المملكة المغربية <br>
            وكالة الحوض المائي لأم الربيع<br>
            بني ملال</center>
        </div>
        
      
        <div class="class-b" >    
          
          <center><b>أمر بمهمة <br></b></center>
        </div>
        <div class="class-c">
          2022عن شهر :أبريل   
        </div>
        <?php 
            while ($infos=mysqli_fetch_array($result)){
        ?>
        <table>
          <tr>
            
            <td><?php echo strtoupper($infos['nom']).' '.strtoupper($infos['prenom']); ?></td>
            <td>  :    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; يعهد إلى السيد-</td>
          </tr>
          <tr>
            <td>        <?php echo ($infos['cadre']);?> </td>
            <td>  :     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   الإطار أو الوضيفة-</td>
          </tr>
          <tr>
            <td>        <?php echo ($infos['ville_arrivee']); ?> </td>
            <td>     :      &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    بالتوجه إلى-</td>
          </tr>
          <tr>
            <td>        <?php echo ($infos['intitule']);?></td>
            <td>      :     &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  نوع المهمة- </td>
          </tr>
          <tr>
            <td>        <?php echo strtoupper($infos['marque']).' '.strtoupper($infos['immatricule']);?>     </td>
            <td>:     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;نوع و رقم السيارة-</td>
          </tr>
          <tr>
            <td><?php echo strtoupper($infos['heure_depart']).' '.strtoupper($infos['date_depart']);?></td>
            <td>:&nbsp;&nbsp;&nbsp;&nbsp;  تاريخ الذهاب والساعة-</td>
          </tr>
           <tr>
            <td><?php echo strtoupper($infos['heure_retour']).' '.strtoupper($infos['date_arrivee']);?></td>
            <td>:       &nbsp;&nbsp;&nbsp;&nbsp; تاريخ الإياب والساعة-</td>
          </tr>

        </table>
        <div class="col8">
        <br><center style=width:50%;><?php echo date("d/m/Y"); ?>:ببني ملال في</center>
        </div>
        <br><p style="margin-left :144px;">الأمر بالصرف</p>

        
        <?php 
            }
        ?>
       
     
      </div>
      

      
     </div>
     
        
     <!--<div class="col9">
        <center style=width:70%;>:الأمر بالصرف</center>
        
        </div>-->
        <button onclick="printFunction()" class="imprimer " >Imprimer </button>
        
      
    <?php endif; ?>
    <script>
      function printFunction() { 
        window.print(); 
      }
    </script>
</body>
</html>