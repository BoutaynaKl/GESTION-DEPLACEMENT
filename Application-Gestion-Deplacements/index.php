<?php
require_once('connect.php');
if($con)
if(isset($_POST['submit'])){
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $sql="select * from utilisateur where login='$username' and mot_de_passe='$password'";
        $result=mysqli_query($con,$sql);
        if($result){
            if(mysqli_num_rows($result) > 0){
                //die (" user exists");
                $infos = mysqli_fetch_assoc($result);
                header('location:acceuil.php?alert=success&msg= bienvenue ');
                
            }
            else{
            header('location:index.php?alert=error&msg=utilisateur n\'existe pas');
            }
            
        }
        else{
            die('problem de requete ' );
        }
}}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Document</title>
   <style>
       *{
           margin:0;
           padding:0;
           box-sizing:border-box;
           font-family:'Poppins', sans-serif ;
          
       }
       section{
           position:relative;
           width:100%;
           height:100vh;
           display:flex;
       }
       section .image{
           position:relative;
           width:50%;
           height:100%;
       }
      /* section .image::before{
           content:'';
           position:absolute;
           top:0;
           left:0;
           width:100%;
           height:100%;
           background:linear-gradient(45deg,#ef4,#47cb );
           z-index: 1;
           mix-blend-mode:screen;

       }*/
       section .image img {
           position:absolute;
           top:0;
           left:0;
           width:100%;
           height:100%;
           object-fit:cover;
       }
       section .content{
           display:flex;
           width:50%;
           height:100%;
           justify-content:center;
           align-items:center;
          
       }
       section .content .form{
           width:100%;
           padding:40px;
           background:rgb(255 255 255 / 0.9);
           margin:50px;


       }
       
       section .content .form h2{
           color:#337492 ;
           font-weight:600;
           font-size:1,5em;
           text-transform:uppercase;
           margin-bottom:20px;
           border-bottom:4px solid #60C8CF ;
           display:inline-block;
           letter-spacing:1px;


       }
       section .content .form .inputbx{
           margin-bottom:20px;
       }
       section .content .form .inputbx span{
           font-size:16px;
           margin-bottom:5px;
           display:inline-block;
           color:#607d8b; 
           font-weight:300;
           font-size:16px;
           letter-spacing:1px;
       }
       section .content .form .inputbx input{
           width:100%;
           padding: 10px 20px;
           outline:none; 
           font-weight:400;
           border: 1px solid  #59A0CB; 
           font: size 16px;
           letter-spacing:1px;
           color:#59A0CB;
           background:transparent;
           border-radius: 30px;
       }
       section .content .form .inputbx input[type="submit"]{
           background:#60C8CF  ;
           color:#fff;
           outline:none;
           border:none;
           font-weight:500;
           cursor:pointer;  

       }
       section .content .form .inputbx input[type="submit"]:hover{
           background:
       }
       section .content .form .remember{
           margin-bottom:10px;
           color:#607d8b;
           font-weight:400;
           font-size:14px;


       }
       
      
   </style>
</head>
<body>
    <section>
        <div class="image">
            <img src="eau.jpg" alt="">
        </div>
        <div class="content">
        <div class="form">
            <h2>Login</h2>
            <form method="post" action="index.php">
            <div class="inputbx">
                    <span>Username</span>
                    <input type="text" name="username"> 

                </div>
                <div class="inputbx">
                    <span>Password</span>
                    <input type="password" name="password"> 

                </div>
                <div class="remember">
                    <label for=""><input type="checkbox">Remember me</label>
                </div>
                <div class="inputbx">
                    
                    <input type="submit"  value="submit"name="submit"> 

                </div>
            </form>
        </div>
        </div>
    </section>
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
