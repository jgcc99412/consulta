 <?php 
  //require_once 'conex/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
     <title>Login de Usuario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    
  <link rel="stylesheet" href="css/stylo.css">

</head>
    <body>
    <!--  <img src="img/fondo.jpg"> -->
  <div class="transp">
    <div class="container">
      <div class="container">

        <br>
        
      <br><br><br>
      
    	
       <center><h1>Login de Usuario</h1></center>
       <br>

       <form action="valid/validar_login.php" method="POST" class="">

       	<div class="form-group">
       	   <label class="sr-only"  for="cedula">Cedula: </label>
           <input class="form-control" name="usuario" type="text" placeholder="Ingresar Nro. de Cedula">
        </div>

       <div class="form-group">
       	   <label class="sr-only"  for="cedula">NOmbre: </label>
           <input class="form-control" name="password" type="password" placeholder="Nombre Completo del Cliente">
        </div>

      <div class="form-group">
      	  <div class="row">
      	    <div class="col-md-12 col-xs-12 ">
               	<center><button class="btn btn-primary btn-block active" name="login">Iniciar Sesion</button></center>
      	    </div>

      	  
      	  </div>
      </div>


       
       </form>
       <br><br>

         

      </div>
    </div>

         <!-- .............. carrusel ...............  -->

            <div class="container">
                      
              <div class="row">
                <div class="col-md-4 col-xs-4">
                 <div id="carousel-1" class="carousel slide" data-ride="carousel" style="max-width: 130%; max-height: ;">
                      <ol class="carousel-indicators">
                          <li data-target="#carousel-1" data-slide-to="0" active></li>
                          <li data-target="#carousel-1" data-slide-to="1"></li>
                          <li data-target="#carousel-1" data-slide-to="2"></li>
                          <li data-target="#carousel-1" data-slide-to="3"></li>
                          <li data-target="#carousel-1" data-slide-to="4"></li>
                          <li data-target="#carousel-1" data-slide-to="5"></li>
                      </ol>

                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                           <img src="img/11.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/12.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/13.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/14.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/15.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/16.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  
                           </div>
                        </div>

                      </div>
                     
                    <!-- control del slider  -->
                      <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
                             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                             <span class="sr-only">Anterior</span>
                      </a>

                      <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
                             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                             <span class="sr-only">Siguiente</span>
                      </a>


                   </div>
                </div>


<!--.........................................................-->
                <div class="col-md-4 col-xs-4">
                 <div id="carousel-2" class="carousel slide" data-ride="carousel" style="max-width: 130%; max-height: ;">
                      <ol class="carousel-indicators">
                         <li data-target="#carousel-2" data-slide-to="0" active></li>
                          <li data-target="#carousel-2" data-slide-to="1"></li>
                          <li data-target="#carousel-2" data-slide-to="2"></li>
                          <li data-target="#carousel-2" data-slide-to="3"></li>
                          <li data-target="#carousel-2" data-slide-to="4"></li>
                          <li data-target="#carousel-2" data-slide-to="5"></li>
                      </ol>

                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                           <img src="img/31.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/32.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/33.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/34.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/35.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/36.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  
                           </div>
                        </div>


                      </div>

                      <!-- control del slider  -->
                      <a href="#carousel-2" class="left carousel-control" role="button" data-slide="prev">
                             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                             <span class="sr-only">Anterior</span>
                      </a>

                      <a href="#carousel-2" class="right carousel-control" role="button" data-slide="next">
                             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                             <span class="sr-only">Anterior</span>
                      </a>
                     
                   </div>
                </div>
<!--.........................................................-->
              <div class="col-md-4 col-xs-4">
                 <div id="carousel-3" class="carousel slide" data-ride="carousel" style="max-width: 130%; max-height: ;">
                      <ol class="carousel-indicators">
                          <li data-target="#carousel-3" data-slide-to="0" active></li>
                          <li data-target="#carousel-3" data-slide-to="1"></li>
                          <li data-target="#carousel-3" data-slide-to="2"></li>
                          <li data-target="#carousel-3" data-slide-to="3"></li>
                          <li data-target="#carousel-3" data-slide-to="4"></li>
                          <li data-target="#carousel-3" data-slide-to="5"></li>
                      </ol>

                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                           <img src="img/21.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  <h3> </h3>
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/22.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  <h3> </h3>
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/23.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  <h3> </h3>
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/24.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  <h3> </h3>
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/25.jpg" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  <h3> </h3>
                           </div>
                        </div>

                        <div class="item ">
                           <img src="img/26.png" class="img-responsive"  alt="">
                           <div class="carousel-caption">
                                  <h3> </h3>
                           </div>
                        </div>

                      </div>

                      <!-- control del slider  -->
                      <a href="#carousel-2" class="left carousel-control" role="button" data-slide="prev">
                             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                             <span class="sr-only">Anterior</span>
                      </a>

                      <a href="#carousel-2" class="right carousel-control" role="button" data-slide="next">
                             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                             <span class="sr-only">Anterior</span>
                      </a>
                     
                   </div>
                </div>
<!--.........................................................-->

              </div> 


            </div>
 <!-- ............................fin del carrusel ...........................  -->
            <br><br><br><br>

  </div>


       <!-- <footer>
            <div class="container">
               <center><h3>FIn de la prueba de boosttras</h3></center>
            </div>
        </footer>
        -->
        
    <script src="js/jquery-3.2.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
    <!--<script src='js/script.js'></script>-->
    </body>

</html>