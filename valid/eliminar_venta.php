<?php
     
    include ("../conex/conexion.php");

    	$id_venta = $_REQUEST['id_venta'];

    	$sql="DELETE FROM venta WHERE id_venta='$id_venta'";

    	$resultado = $conDB->query($sql);
        if ($resultado) {
        	//echo "datos eliminados con exito.";
            header("location: ../lista_clientes_venta.php");
        }else{
            echo '<script>alert(" NO SE PUDO ELIMINAR LA VENTA")</script>';
              echo "<script>location.href='../index.php'</script>";
        }
    

?>