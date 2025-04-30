<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inicio de sesion</title>
    <?php include   'Views/cabecera.php'; ?>
</head>
<body>
<div class="container mt-4">
<div class="row">
    <div class="col-md-6">
        <h3>Inicio de sesion</h3>
    <form method="POST" action="<?=PATH.'/Usuarios/check_user'?>">
<div class="mb-3">
    <label for="usuario" class="form-label">User</label>
    <input type="text" class="form-control" id="usuario" name="usuario">
    
  </div>
  <div class="mb-3">
    <label for="pasword" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
if(isset($error)){
    echo "<div class='alert alert-danger'><p>$error</p></div>";
}
?>


    </div>
</div>


</div>
</body>
</html>


  