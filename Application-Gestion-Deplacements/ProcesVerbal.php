<!DOCTYPE html>
<html lang="en">
<head>
    <style> 
      .zone{ border: 1px solid black; padding: 5px;margin:5px; }
      .zone1{ border: 1px solid black; padding: 5px;margin:0.5px; }
      .zone2{ border: 1px solid black; padding: 5px;margin:0.5px; }
      .zone3{ border: 1px solid black; padding: 5px;margin:0.5px; }
      
      .f{
         border: 1px solid black; padding:5px;margin:0.5px; 
      }
      
      
       .gauche {float : left; width : 50%;}
  .droite .zone{float : right; width : 50%;}
   .f .zone{margin:1px;padding: 5px; background:none;text-align:center;display:block;}
   @media print{
        .imprimer{
          display:none;
        }
      }
      
      
    </style>
</head>
<body>
   <div class="zone">
     <div class="zone1">
     <div style="width: 100%;">
        <div style="width: 30%; height: 120px; float: left;  line-height : 30px;"> 
        :الرقم الترتيبي
        </div>
        <div style="width: 40%; height: 120px; float: left; line-height : 30px; "> 
            <center>
           <br>محضر الجولات<br>
           مذكرة الواجب آداؤها للتعويضات عن التنقل<br>
           عن شهر:مارس 2022
       </center>
        </div>
        <div style="margin-left: 30%; height: 120px; line-height : 30px;"> 
        <center>
         المملكة المغربية <br>
         وكالة الحوض المائي لأم الربيع<br>
         بني ملال<br>
         <b>Division</b>
         </center>
        </div>
    </div>
    
     </div>
     <div class="zone2">
     <div style=" width: 50%; height: 100px; float: left;line-height : 30px; "> 
            <center>
                      : السلم<br>
            الإقامة:  بني ملال 

       </center>
        </div>
        <div style="margin-left: 95%; height: 50px; line-height : 30px;"> 
        <center>
        : السيد- <br>
        : الإطار-
         </center>
        </div>
        
    </div>
    <div class="zone3" >
     <div  style="width:61%;line-height : 10px; ">
      <center><b>خلاصة المبالغ الواجب آداؤها</b></center><br>
    
     </div>
     <div  style="margin-left:700px; ">
     <pre>
       <b>
     الباب :12.0.27     -الفصل:601       -الفقرة:10      - السطر:71-
     </b>
    </pre>

     </div>

     <div class="table"style="margin-left:600px;">
       <?php
    require_once('connect.php');
    

     

    $req="select n_ordre,nom,prenom,forfait,heure_depart,heure_retour,nb_jours,nb_repas,taux from employe e , deplacement d 
    where e.id=d.id_employe
    
    order by n_ordre";
    
    $res=mysqli_query($con,$req);
    if(!$res){
        echo("erreur");
    }
    else{
        ?>
       <div class="tables">
       <div class="table1">
        <table style="width:100%;" border="2">
            <tr>
                <td  rowspan=2>المبالغ الواجب آداؤها</td>
                <td  rowspan=2>عدد الوجبات</td>
                <td >النسبة</td>
                <td colspan=2>الساعة</td>
                <td  rowspan=2>بيان التنقلات لأجل المصلحة الإدارية</td>
                <td rowspan=2>التاريخ</td>
     
                
            </tr>
            <tr>
              <td>taux(dh)</td>
             
              <td>الإياب</td>
              <td>الذهاب</td>
              
            </tr>
            
            
            <?php 
            while ($ligne=mysqli_fetch_array($res)){
            ?>
            <tr>
            <td><?php echo $ligne['forfait']?></td>
            <td><?php echo $ligne['nb_repas']?></td>
            <td><?php echo $ligne['taux']?></td>
            <td><?php echo $ligne['heure_retour']?></td>
            <td><?php echo $ligne['heure_depart']?></td>
            <td></td>
            <td></td>
            </tr>
            <?php } ?>
        </table>
        </div>
            </div>
        <?php

    }

    ?> 
    </div>
    <div class="table"style="margin-left:600px;">
       <?php
    require_once('connect.php');
    $req="select sum(forfait)from deplacement; ";
    $res=mysqli_query($con,$req);
    if(!$res){
        echo("erreur");
    }
    else{
        ?>
       <div class="table3">
       <table  style="width:100%;" border="2">
            <tr>
               
                <td >المبلغ الواجب آداؤه</td>
                <td  >الوجبات</td>
                

                
            </tr>
            
            
            <?php 
            while ($ligne=mysqli_fetch_array($res)){
            ?>
            <tr>
            <td><?php echo $ligne['sum(forfait)']?></td>
            <td></td>
            <td>المجموع</td>
            
            </tr>
            <?php } ?>
        </table>
       </div>
        
        <?php

    }

    ?> 
    </div>
    </div>

   
  <div class="gauche">
	  <div class="f">
	   <center> <p style="">إطلع عليه رئيسه المباشر الممضي أسفله الذي يشهد  أن هذه التنقلات 
     <br> قد صدر الأمر بالقيام بها لضرورة المصلحة الإدارية
     </p></center>	
     
	  </div>
	  <div class="f">
    <center><p >إطلع و صادق عليه الأمر بالصرف 
    <br>       :بني ملال في
     </p></center>
	  </div>
</div>
<div class="droite">
	<div class="f">
  
  <center><p style="">إطلع عليه المعني بالأمر الذي يشهد أن هذه
 <br> التنقلات قد قام بها لضرورة المصلحة الإدارية 
     </p></center>
	
  </div>

	 	<div class="f">
     <p style="margin-left:250px;"><center>المبلغ المذكور اعلاه يحول إلى الحساب البنكي للمعني بالأمر تحت رقم
      <br> RIB
       
     </center></P>
      </div>
	
   </div>
  </div>

     
     
   



<div class="imprimer">
<button onclick="printFunction()" class="imprimer ">Imprimer </button>
</div>
   
        
      
      
        <script>
          function printFunction() { 
            window.print(); 
          }
        </script>
    </script>
    
</body>
</html>