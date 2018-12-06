<?php
session_start();
if (isset($_POST['verificar'])) {
        //incluimos conexion
        require_once '../conex/conexion.php';

        $cedula = mysqli_real_escape_string($conDB, $_POST['cedula']);
      

     $sql = "SELECT * FROM cliente WHERE cedula='$cedula' ";
          $existencia = mysqli_query($conDB,$sql);


      $sql2 = "SELECT venta, cedula FROM venta INNER JOIN cliente  
                  ON venta.id_cliente=cliente.id_cliente WHERE cedula='$cedula' and venta ='COMPRO'";
          $verificar = mysqli_query($conDB,$sql2);

    


          if ($existe = mysqli_fetch_array($existencia)) {

            if ($verif = mysqli_fetch_object($verificar) ) {
              
              echo '<script>alert("YA UD REALIZO SU COMPRA")</script>';
              echo "<script>location.href='../index.php'</script>";

            }else {

              $_SESSION['id_cliente'] = $existe['id_cliente'];
              $_SESSION['nombre']=$existe['nombre'];
              $_SESSION['cedula']=$existe['cedula'];
              echo '<script>alert("Puede comprar")</script>';
              echo "<script>location.href='../compra.php'</script>";
             }

          } else if ( $cedula != null) {
            
            echo '<script>alert("NO SE ENCUENTRA REGISTRADO")</script>';
              echo "<script>location.href='../index.php'</script>";

            mysqli_close($conDB);
          }else 

            echo '<script>alert("FAvor de llenar los campos")</script>';
              echo "<script>location.href='../index.php'</script>"; 
  }

?>
