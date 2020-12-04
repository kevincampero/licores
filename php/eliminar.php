<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/agregar.css">
</head>
<body>
    <?php
        if(isset($_REQUEST['eliminar'])){
                
                $nam = $_POST['name'];
                include_once "../php/conexion.php";
                $query="DELETE FROM producto WHERE nombre = '$nam'";
                
                $res = mysqli_query($conexion, $query);
                if ($res) {
    ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        Registro eliminado exitosamente
                    </div>
                <?php
                } else {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        Error <?php echo mysqli_error($conexion); ?>
                    </div>
        <?php

                }
            }
        
        
    ?>
    <div class="cod-container">
        <div class="form-content">
            <form method="post" enctype="multipart/form-data">
                <div class="form-title">
                    <h3>Eliminar Producto</h3>
                </div>
                
                <div class="input-group">
                    <input type="text" name="name" class="form-input">
                    <label class="label " for="nombre"> Nombre Producto</label>
                </div>
               
                <div class="input-group" class="form-input">
                    <button class="input" type="submit" name="eliminar"> Eliminar</button>
                    <a class="input" href="../php/inicio_admin.php">Salir</a>
                    
                </div>
             
              
            </form>
        </div>
        
    </div>










    
</body>
</html>