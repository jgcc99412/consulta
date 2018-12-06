<?php
     
    include ("../conex/conexion.php");

    	$id_cliente = $_REQUEST['id_cliente'];

    	$sql="DELETE FROM cliente WHERE id_cliente='$id_cliente'";

    	$resultado = $conDB->query($sql);
        if ($resultado) {
        	//echo "datos eliminados con exito.";
            header("location: ../lista_clientes.php");
        }else{
            echo '<script>alert(" Primer Debe ELIMINAR LA COMPRA de dicho cliente")</script>';
              echo "<script>location.href='../lista_clientes.php'</script>";
        }
    

?>