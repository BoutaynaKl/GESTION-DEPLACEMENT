<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .zone{ border: 1px solid black; padding: 5px;margin:5px; }
        .zone2{ border: 1px solid black; padding: 5px;margin:0.5spx;margin-top :4px; }
        .zone4{ border: 1px solid black; padding: 5px;margin:0.5spx;margin-top :4px; }
        table{"border: 3px solid black;width:100%;}
       
        
    </style>
</head>
<body>
    <?php
    require_once('connect.php');
    $req="select n_ordre,nom,prenom,forfait from employe e , deplacement d 
    where e.id=d.id_employe
    order by n_ordre
    ; ";
    $res=mysqli_query($con,$req);
    if(!$res){
        echo("erreur");
    }
    else{
        ?>
          <div class="zone">
          <div class="zone1">
     <div style="width: 100%;">
        <div style="border: 1px solid black;width:15%; height: 120px; float: left;  line-height :5px;"> 
      <pre style="margin-left:50px;padding:0.5px;"> السنة المالية:2022-  </pre>   
         <pre style="margin-left:70px;padding:0.5px;">الباب:12.0.17-</pre>
          <pre style="margin-left:95px;padding:0.5px;">الفصل:601-</pre>
          <pre style="margin-left:100px;padding:0.5px;">الفقرة:10-</pre>
          <pre style="margin-left:100px;padding:0.5px;">السطر:71-</pre>
  
      
        </div>
        <div style="border: 1px solid black;width: 55%; height: 120px; float: left; line-height : 30px; "> 
            <center>
           تهييئ و توسيع الممتلكات المائية<br>
           التعويضات عن التنقل داخل المملكه<br><br>
           عن شهر:مارس 2022
       </center>
        </div>
        <div style="border: 1px solid black;; line-height : 30px;"> 
        <center>
         المملكة المغربية <br>
         وكالة الحوض المائي لأم الربيع<br>
         بني ملال<br> </center>
        <div class="none" style="color:white;">.......</div>
        
        </div>
    </div>
    
     </div>
     
     <div class="zone2">
            <center>لائحة رقم : 2022/03</center>
     </div> 

    <table style="width:100%" border=2>
        <tr>
            <td><center>المبلغ</center></td> 
            <td><center>أسماء الأطراف المستفيدة </center></td>
            <td><center>الترتيب</center></td>
            <td><center>المبلغ</center></td> 
            <td><center>أسماء الأطراف المستفيدة </center></td>
            <td><center>الترتيب</center></td>   
            
        </tr>
        <?php 
            while ($row=mysqli_fetch_array($res)){
        ?>
        <tr>
            <td><center></center></td>
            <td><center></center></td>
            <td><center></center></td>
            <td><center><?php echo $row['forfait']?></center></td>
            <td><center><?php echo strtoupper($row['nom']).' '.strtoupper($row['prenom']);?></center></td>
            <td><center><?php echo $row['n_ordre']?></center></td> 
        </tr>
        <?php 
            }
        ?>
        <?php
            $req1="select sum(forfait) from employe e , deplacement d where e.id=d.id_employe;";
            $res1=mysqli_query($con,$req1);
            while ($row=mysqli_fetch_array($res1)){
        ?>
            <td><center></center></td>
            <td colspan=2><center></center></td>
            
            <td ><center><?php echo $row['sum(forfait)']?></center></td>
            <td colspan=2><center>المجموع</center></td>  
        <?php
            }
        ?>

          
    </table>
    <?php
            $req1="select sum(forfait) from employe e , deplacement d where e.id=d.id_employe;";
            $res1=mysqli_query($con,$req1);
            while ($row=mysqli_fetch_array($res1)){
        ?>
    <div class="zone4">
        <b><p style="margin-left: 1160px;">
        :تحصر هذه الائحة في مبلغ 
        </p></b>
        <pre>
        <p  style="margin-left: 150px;">
       <?php echo$row['sum(forfait)'];?>درهم
        </p>
        </pre>

    </div>
    <?php
            }
        ?>
    
    
    
    </div>
    <div class="imprimer">  <button onclick="printFunction()" class="btn btn-primary ">Imprimer</button></div>

          </div>
        <?php

    }

    ?>  
     <script>
      function printFunction() { 
        window.print(); 
      }
    </script>
</body>
</html>