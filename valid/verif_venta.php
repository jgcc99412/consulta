<?php
if (isset($_POST['vender'])) {
        //incluimos conexion
        require_once '../conex/conexion.php';

        $cliente = mysqli_real_escape_string($conDB, $_POST['id_cliente']);
        $venta = mysqli_real_escape_string($conDB, $_POST['venta']);
      

     $sql = "SELECT * FROM venta WHERE  id_cliente='$cliente' and venta='COMPRO'";
          $existencia = mysqli_query($conDB,$sql);

          if ($existe = mysqli_fetch_object($existencia)) {
            echo '<script>alert("UD YA REALIZO SU COMPRA")</script>';
              echo "<script>location.href='../index.php'</script>";

          } else if ($venta && $cliente) {
            $sql ="INSERT INTO venta(venta, id_cliente)
            VALUES('$venta', '$cliente')";


            mysqli_query($conDB, $sql);
            echo '<script>alert("Venta Exitoso")</script>';
              echo "<script>location.href='../index.php'</script>";

            mysqli_close($conDB);
          }else 

             echo '<script>alert("Favor de llenar los campos")</script>';
              echo "<script>location.href='../index.php'</script>";  
  }

?>
