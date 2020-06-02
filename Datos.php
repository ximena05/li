<?php
    $conectar=@mysqli_connect('localhost','root','');
    if(!$conectar){
        echo"No se pudo conecatr el servidor";
    }   else{
        $base=@mysqli_select_db('tienda');
        if(!$base){
            echo"No se encontro la base de datos";
        }
    }
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $articulo=$_POST['articulo'];
    $precio=$_POST['precio'];
    $correo=$_POST['correo'];
    $domicilio=$_POST['$domicilio'];

    $sql="INSERT INTO tienda VALUES('$Nombre','$Apellido','$Articulo',$Precio','$Correo','$Domicilio')";

    $ejecutar=@mysqli_query($sql);
      if(!$ejecutar){
      echo"Hubo un error";
    }else{
    echo"Datos guardados correctamente<br><a href='CARRITO DE COMPRAS.html'>Volver</a>";
    }
    ?>