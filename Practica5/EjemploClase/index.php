<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Formulario de registro</h3>
                  <?php
                    session_start();
                    $errores = $_SESSION['errores']??[];
                    $datos = $_SESSION['datos']??[];
                    session_unset();

                    if(!empty($errores)){
                      echo "<div class='alert alert-danger'>";
                      echo "<ul>";
                      foreach($errores as $error){
                        echo "<li>{$error}</li>";
                      }
                      echo "</ul>";
                      echo "</div>";
                    }
                  
                  ?>
                  <form method="POST" action="procesar.php">
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="nombres" name="nombres" value="<?= $datos['nombres']??'' ?>" class="form-control form-control-lg" />
                          <label class="form-label" for="nombres">Nombres</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline">
                          <input type="text" id="apellidos" name="apellidos" value="<?= $datos["apellidos"] ?? '' ?>" class="form-control form-control-lg" />
                          <label class="form-label" for="apellidos">Apellidos</label>
                        </div>
      
                      </div>
                    </div>
      
                    
                    <div class="row">
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="text" id="correo" name="correo"  value="<?= $datos["correo"] ?? '' ?>" class="form-control form-control-lg" />
                          <label class="form-label" for="correo">Correo</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4 pb-2">
      
                        <div class="form-outline">
                          <input type="text" id="telefono" name="telefono" value="<?= $datos["telefono"] ?? '' ?>" class="form-control form-control-lg" />
                          <label class="form-label" for="telefono">Telefono</label>
                        </div>
      
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">
        
                          <div class="form-outline">
                            <input type="text" id="carnet" name="carnet" value="<?= $datos['carnet']??'' ?>"  class="form-control form-control-lg" />
                            <label class="form-label" for="carnet">Carnet</label>
                          </div>
        
                        </div>
                        
                      </div>
      
                      <input class="btn btn-primary btn-lg" type="submit" value="Enviar" />
                    
      
                  </form>
                </div>
              </div>
            </div>
            <div style="margin-top: 24px; text-align: center; font-size: 16px;">
                <a href="../../" 
                  style="padding: 12px 24px; background-color: #312e81; color: white; font-weight: 600; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: background-color 0.2s ease-in-out;"
                  onmouseover="this.style.backgroundColor='#3730a3'"
                  onmouseout="this.style.backgroundColor='#312e81'">
                    Regresar al Inicio
                </a>
            </div>

          </div>
        </div>
      </section>
</body>
</html>