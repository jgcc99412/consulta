<?php
 session_start();
 require("../conex/conexion.php");

  $usuario=$_POST['usuario'];
    $passw=$_POST['password'];
          
   
   $conDB =mysql_connect('localhost', 'root', '');
      mysql_select_db('venta');

     $sql=mysql_query("SELECT * FROM usuario WHERE usuario='$usuario'");
     if ($f=mysql_fetch_array($sql)){
      if ($passw==$f['password']){
        
        $_SESSION['id_usuario']=$f['id_usuario'];
        $_SESSION['nombre']=$f['nombre'];
        header("Location: ../index.php");
       }else {
        echo '<script>alert("CONTRASEÑA INCORRECTA")</script>';

        echo "<script>location.href='../login.php'</script>";
       }
     }else {

        echo '<script>alert("ESTE USUARIO NO EXISTE!. FAVOR DE UN USUARIO VALIDO")</script>';

        echo "<script>location.href='../login.php'</script>";
     }

 ?>