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
        if(isset($_REQUEST['guardar'])){
            if(isset($_FILES['foto']['name'])){
                $tipo=$_POST['tipo'];
                $marca=$_POST['marca'];
                $cantidad=$_POST['cantidad'];
                $precio=$_POST['precio'];
                $porcentaje=$_POST['porcentaje'];
                $nombreArchivo=$_FILES['foto']['name'];
                $tamañoArchivo=$_FILES['foto']['size'];
                $imagenSubida= fopen($_FILES['foto']['tmp_name'],'r');
                $binariosImagen=fread($imagenSubida,$tamañoArchivo);
                $nombre = $_POST['nombre'];
                include_once "../php/conexion.php";
                $binariosImagen=mysqli_escape_string($conexion,$binariosImagen);
                $query="INSERT INTO producto (imagen,nombre,tipo,marca,cantidad,precio,porcentaje_alcohol) 
                VALUES ('".$binariosImagen."','$nombre','$tipo','$marca','$cantidad','$precio','$porcentaje')";
                
                $res = mysqli_query($conexion, $query);
                if ($res) {
    ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        Registro insertado exitosamente
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
        }
        
    ?>
    <div class="cod-container">
        <div class="form-content">
            <form method="post" enctype="multipart/form-data">
                <div class="form-title">
                    <h3>Agregar Producto</h3>
                </div>
                <div class="input-group">
                    
                    <label class="label " for="foto">Imagen de Producto</label>
                    <input type="file" name="foto" class="form-input" >
                </div>
                <div class="input-group">
                    <input type="text" name="nombre" class="form-input">
                    <label class="label " for="correo"> Nombre Producto</label>
                </div>
                <div class="input-group">
                    <input type="text" name="tipo" class="form-input">
                    <label class="label " for="tipo"> Tipo</label>
                </div>
                <div class="input-group">
                    <input type="text" name="marca" class="form-input">
                    <label class="label " for="marca"> Marca</label>
                </div>
                <div class="input-group">
                    <input type="text" name="cantidad" class="form-input">
                    <label class="label " for="cantidad"> Cantidad</label>
                </div>
                <div class="input-group">
                    <input type="text" name="precio" class="form-input">
                    <label class="label " for="precio"> Precio</label>
                </div>
                <div class="input-group">
                    <input type="text" name="porcentaje" class="form-input">
                    <label class="label " for="porcentaje"> Porcentaje</label>
                </div>
                <div class="input-group" class="form-input">
                    <button class="input" type="submit" name="guardar"> Enviar</button>
                    <a class="input" href="../php/inicio_admin.php">Salir</a>
                    
                </div>
             
              
            </form>
        </div>
        
    </div>










    
</body>
</html>