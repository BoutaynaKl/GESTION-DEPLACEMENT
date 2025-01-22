<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.row {
  float: right;
  width: 80%;
  padding: 5px;   
  
}
  
.column {
  
  float: left;
  width: 20%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

 .column table {
  width: 100%;
  border:  solid black;
  border-collapse: collapse; 
}
.row table{
    width: 100%;
  border:  solid black;
  border-collapse: collapse;  
}
.table2 table{
    width: 100%;
  border:  solid black;
  border-collapse: collapse;    
}
 th, td {
  border: 3px solid black;
  border-collapse: collapse;
  text-align: left;
  padding: 16px;
}
.table3 table{
    width: 100%;
}
@media print{
        .imprimer{
            display:none;
        }
    }


</style>
</head>
<body>



<div class="row">
  
    <table >
     <tr>
        <td>chap.</td>
        <td>Art.</td>
        <td>Par.</td>
        <td>Lig.</td>
     </tr><br>
     <tr>
        <td>12.0.7</td>
        <td>601</td>
        <td>10</td>
        <td>71</td>
     </tr>
    </table>
  </div>
  <div class="column">
  <table>
  <tr>
        <td>Exercice</td>
        <td>2022</td>
     </tr><br>
     <tr>
        <td>Année de créance</td>
        <td>2022</td>
     </tr>
    </table>
  </div>
</div><br>


<br><h2 >ORDRE DE PAIEMENT N°:.................../2022                    du............</h2>
<h3> Rubrique budgétaire  :Frais de deplacement à l'intérieur du Royaume</h3>
<div class="table2">
<table >
     <tr>
        <td>Pièce jointes</td>
        <td>Objet</td>
        <td>Bénificiaire</td>
        <td>Montant</td>
     </tr><br>
     <tr>
        <td>
            .Procés Verbal de Tournées <br>
            .Ordere de Missions <br>
            .Ordre de Virement <br>
            .Liste des  Bénificiaires
        </td>
        <td>
          <center>Règlement:</center><br>
          .  Frais de déplacement à <br>
          l'intérieur du Royaume pour le <br>
          mois de: <br>
        <center>Mois Mars 2022 <br>
                (Siége)
        </center>
        </td>
        <td>
            <center>PERSONNEL DE </center><br>
            <center> L'AGENCE DU BASSIN</center><br>
            <center>HYDRAULIQUE</center><br>  
            <center>DE L'OUM ER-RBIA</center><br>
        

        </td>
        <td></td>
     </tr>
     <tr>
         <td colspan="3"><center>TOTAL</center></td>
         <td><center>0,00</center></td>
     </tr>

    </table>
</div>
     <h3 >    Arreté la somme:</h3>
     <div class="table3">
         <table border="2">
     <tr>
        <td><center><B> Référence de comptabilisation</B></center></td>
        <td><center><B> Référence Règlement</B></center></td>
     </tr><br>
     <tr>
        <th rowspan="2">
            <center><B> COMPTABILISE</B></center><br>
            <B>S/N°:</B><br><br>
            <B>Du:</B><br><br>
            <B>Disp:</B>

        </th>
        <td>
          <center><b>Payé par</b></center><br>
          <b>OV n°      : ............................../2022</b>
        </td>
        
        
     </tr>
     <tr>
    <td></td>
  </tr>
    </table>
     </div><br>

        <br>
<pre style="font-size:15px;">               <b>L'Ordonateur</b>                                                        <b>Le Trésorier Payeur</b>        </pre>
<button onclick="printFunction()" class="imprimer ">Imprimer </button>
<script>
      function printFunction() { 
        window.print(); 
      }
    </script>  
</body>
</html>
