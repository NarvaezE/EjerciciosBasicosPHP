<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nombre</h1>
    
    <form action="/nombre.php" method="post">
        <label for="nombre">Ingrese su nombre</label>
        <input type="text" name="nombre">
        <input type="submit" value="Enviar">
    </form>

    <h1>Edad Usuario</h1>
    <form action="/edad.php" method="post">
        <label for="edad">Ingrese su edad</label>
        <input type="number" name="edad">
        <input type="submit" value="Enviar">
    </form>

    <h1>Ingrese una calificacion del 1 al 10</h1>
    
    <form action="/categorizar.php" method="post">
        <label for="categorizar">Ingrese una calificacion del 1 al 10</label>
        <input type="number" name="categorizar">
        <input type="submit" value="Enviar">

    <h1>Promediar calificaciones</h1>   
    <form method="post" action="/calificacion.php">
        <?php for ($i=0; $i < 10; $i++) { ?>
                <!-- echo "<input type='number' name='calificacion$i' placeholder='Nombre $i'><br>"; -->
        <div>
            <label for="calificacion<?php echo $i; ?>">Agregue la calificacion </label>
            <br>
            <input type="number" name="calificacion<?php echo $i; ?>" id="calificacion<?php echo $i; ?>">
        </div>
              
        <?php };  ?>
        <input type="submit" value="Enviar"/>
    </form>

    <h1>Sucesion fibonacci</h1>
    <form action="/fibonacci.php" method="post">
        <div>

        </div>
        <label for="fibonacci">Ingrese cuantos numeros de la sucesion fibonacci quiere ver</label>
            <input type="number" name="fibonacci">
        </label>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>