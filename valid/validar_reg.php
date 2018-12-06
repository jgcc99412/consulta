<?php
if (isset($_POST['guardar'])) {
        //incluimos conexion
        require_once '../conex/conexion.php';

        $nombre = mysqli_real_escape_string($conDB, $_POST['nombre']);
        $cedula = mysqli_real_escape_string($conDB, $_POST['cedula']);
      

     $sql = "SELECT * FROM cliente WHERE  cedula='$cedula'";
          $existencia = mysqli_query($conDB,$sql);

          if ($existe = mysqli_fetch_object($existencia)) {
            echo '<script>alert("El Cliente ya se encuentra registrado. Favor verificar datos")</script>';
              echo "<script>location.href='../registro.php'</script>";

          } else if ($nombre &&  $cedula) {
            $sql ="INSERT INTO cliente(nombre, cedula)
            VALUES('$nombre', '$cedula')";


            mysqli_query($conDB, $sql);
            echo '<script>alert("Registro Exitoso")</script>';
              echo "<script>location.href='../registro.php'</script>";

            mysqli_close($conDB);
          }else echo "<div class=holder-error>Debes rellenar todos los campos vacios.</div> "; 
  }

?>
