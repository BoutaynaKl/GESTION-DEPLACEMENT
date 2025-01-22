
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Login</title>
</head>
<body>
   
    <form class="container" method="POST" action="ordreMission.php">
  
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">id_deplacement</label>
                    <input type="text" class="form-control" name="id_deplacement" placeholder="id_deplacement">
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <button class="btn btn-primary" name="submit"type="submit">submit</button>
                </div>
            </div>
        </div>
        
    </form>
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
