<?php
    include "../php/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login_admi.css">
</head>
<body>
    <div class="cod-container">
        <div class="form-header">
            
            <h1>Camacho <span>Hnos.</span> </h1>
        </div>
        <div class="form-content">
            <form method="POST" class="cod-form">
                <div class="form-title">
                    <h3>Administrar</h3>
                </div>
                <div class="input-group">
                    <input type="text" class="form-input" name="i-ci" id="ci">
                    <label class="label " for="ci">CI</label>
                </div>
                <div class="input-group">
                    <input type="email" class="form-input" name="i-correo" id="correo">
                    <label class="label " for="correo">Correo</label>
                </div>
                <div class="input-group">
                    <input type="password" class="form-input" name="i-contraseña" id="pass">
                    <label class="label " for="pass">Contraseña</label>
                </div>
                <div class="input-group">
                    <input type="submit" name="ingresar" class="form-input" value="Iniciar Sesión">
                    <p>¿No eres administrador? <a href="../index.php" class="alt-form">Volver</a> </p>
                </div>



            </form>
            <?php
            if(isset($_POST['ingresar'])){
                
                $ci= $_POST['i-ci'];
                $email= $_POST['i-correo'];
                $contraseña=$_POST['i-contraseña'];
                if($email!=""){
                    $consulta="SELECT * FROM usuario WHERE ci = '$ci'";
                    $ejecutar= $conexion->query($consulta);
                    $fila = $ejecutar-> fetch_array();

                    if($fila[4]==$contraseña && $fila[3]==$email && $fila[0]==$ci)
                    {
                        echo "<script> alert('exito'); </script>";
                        echo "<script> window.location.replace('../php/inicio_admin.php'); </script>";
                        
                    }
                    else{
                        echo "<script> alert('no coincide'); </script>";    
                    }
                
                }
                
                
                
               
            }
        
        
        
        ?>
    </div>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/log2.js"></script>
</body>
</html>