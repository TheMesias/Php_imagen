<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <title>C1-insertar imagen</title>
</head>

<body>

<div class="row">
    <div>
        <h5>Insertar Imagen con PHP</h5>

        <form action="php/funciones.php" method="post" enctype="multipart/form-data">
            <div class="file-field input-field">
                <div class="btn">
                    <span>Imagen</span>
                    <input type="file" name="imagen" id="imagen">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
            <input type="submit" value="Enviar" class="btn" name="enviar" id="enviar">
        </form>
    </div>
</div>



<div class="row">
    <div class="col s8 offset-s2">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <?php 
                require_once('php/conexion.php');
                $sql = "SELECT * FROM dato";
                $execute = mysqli_query($conn, $sql);

                while($fila = mysqli_fetch_array($execute)){
                    
            ?>
            <tbody>
                <tr>
                    <td><?php echo $fila['id'] ?></td>
                    <td><img src="<?php echo substr($fila['ruta'],3) ?>" alt="" srcset="">  </td>
                </tr>
            </tbody>
            <?php 
                }
            ?>
        </table>
    </div>
</div>





















</body>

</html>