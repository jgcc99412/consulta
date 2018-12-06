<?php
if (isset($_POST['verificar'])) {
        //incluimos conexion
        require_once '../conex/conexion.php';

        $cedula = mysqli_real_escape_string($conDB, $_POST['cedula']);
      

     $sql = "SELECT venta, cedula FROM venta INNER JOIN cliente  
                  ON venta.id_cliente=cliente.id_cliente WHERE cedula='$cedula' and venta ='1'";
          $existencia = mysqli_query($conDB,$sql);

          if ($existe = mysqli_fetch_object($existencia)) {
            echo '<script>alert("YA UD Compro Bachaquerooo")</script>';
              echo "<script>location.href='../index.php'</script>";

          } else if ( $id_cliente) {
            $sql ="INSERT INTO venta(venta, id_cliente)
            VALUES('1', '$cliente')";

            mysqli_query($conDB, $sql);
            echo '<script>alert("Registro Exitoso")</script>';
              echo "<script>location.href='../registro.php'</script>";

            mysqli_close($conDB);
          }else echo "<div class=holder-error>Debes rellenar todos los campos vacios.</div> "; 
  }

?>
