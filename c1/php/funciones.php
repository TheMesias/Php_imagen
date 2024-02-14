<?php 
    include('conexion.php');


    if(isset($_POST['enviar'])){
        $nombre = $_FILES['imagen']['name'];
        $tipo = $_FILES['imagen']['tmp_name']; //ruta temporal
        $carpeta = '../img';
        $ruta = $carpeta.'/'.$nombre; //ruta con el nombre del archivo
        move_uploaded_file($tipo, $carpeta.'/'.$nombre); //mover el archivo a la carpeta de destino

        if($nombre != ""){
           
               
                $sql = "INSERT INTO dato (ruta) VALUES ('$ruta')";
                $execute = mysqli_query($conn, $sql) or die (mysqli_error($conn));

                if($execute){
                    header('Location: ../index.php');
                }else{
                    echo "Error al insertar";
                }
              
           
        }else{
            echo "Por favor seleccione un archivo";
        }
    }
?>