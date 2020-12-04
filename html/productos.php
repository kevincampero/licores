<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/productos.css">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <header>
        <h1>
           <img src="../img/logo-camacho-hnos.png" alt=""> 
        </h1>
        <nav  id="nav">
            
            <a href="../html/home.html">Inicio</a>
            <a href="#">Productos</a>
            <a href="../php/contacto.php">Contacto</a>
            <a href="../index.php">Salir</a>
        </nav>
       
    </header>

    <main>
        <?php
                include "../php/conexion.php";
                    $consulta="SELECT * FROM producto ORDER BY id DESC";
                    $ejecutar= $conexion->query($consulta);
                    while($fila = $ejecutar-> fetch_array()):
        ?>
        
                <div class="card">
                    <div class="image"><img src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']); ?>"></div>
                    <div class="info">
                        <h1><?php echo $fila['nombre']; ?>-<?php echo $fila['tipo']; ?> -<?php echo $fila['marca']; ?> -<?php echo $fila['cantidad']; ?> </h1>
                        <p><?php echo $fila['precio']; ?> Bs </p>
                    </div>
                </div>
        <?php endwhile; ?>

        <br><br><br>
        <br>
        <br>
        <br>
        <br>
    </main>
    

    
    <script src="../js/nava.js"></script>
</body>
</html>