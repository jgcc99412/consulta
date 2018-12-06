<?php
   //conexion base de datos
   $nombre_servidor = "localhost";
   $nombre_ususario = "root";
   $password = "";
   $Base_datos = "venta";

   $conDB = mysqli_connect($nombre_servidor, $nombre_ususario, $password, $Base_datos);

   if (mysqli_connect_errno()) {
   	echo "Error, no se pudo conectar con el servidor: " . 
   	mysqli_connect_errno();
   
   } else{
    //echo "Conecto al servidor.";
   }

   function desconectar($conDB){

   	mysql_close($conDB);

   }
    

?>
