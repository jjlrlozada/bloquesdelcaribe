<?php
session_start();


/*
 Este documento es desarrollado y es propiedad
 de Gomosoft, prohíbida su distribución, copia sin au-
 torización previa del creador.

 */

   $seccion = "";

   switch( ($_GET) ? $_GET["cual"] : "" ){

          case "banio":
                
                $seccion = "Baños Portátiles y Servicios de Limpieza";

          break;

          case "casetas":
                
                $seccion = "Casetas Petroleras Prefabricadas";

          break;

          case "contenedores":
                
                $seccion = "Contenedores Marítimos";

          break;

          case "modulos":
                
                $seccion = "Modulos Prefabricados Importados";

          break;

   }

?>



<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8" />

    <title>Innova Espacios - | Alquiler y venta de baños portátiles, casetas y contenedores</title>


     <link rel="stylesheet" href="css/html5_reset.css" type="text/css" />
     <link rel="stylesheet" href="css/reset.css" type="text/css" />
     <link rel="stylesheet" href="css/__estilo_ini.css" type="text/css" />
     <link rel="stylesheet" href="css/nosotros.css" type="text/css" />
     <link rel="stylesheet" href="css/porta-folio.css" type="text/css" />
     <link rel="stylesheet" href="css/botones.css" type="text/css" />
     <link rel="stylesheet" href="css/productos.css" type="text/css" />

     <link rel="shortcut icon" href="favicon.png" type="image/png" />

      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/html5_ie.js"></script>
      <script type="text/javascript" src="js/slide_media.js"></script>
      <script type="text/javascript" src="js/easing.js"></script>
      <script type="text/javascript" src="js/carrusel.js"></script>      
      <script type="text/javascript" src="js/productos.js"></script>

    <script type="text/javascript">

      <?php

        if(isset($_SESSION["edit"]))
    echo "cond=true;";
        else
	echo "cond=false;";


        ?>

                html5_ie();

               $(document).ready(function(){

                   $.slide_mediaf();

                   if(cond)
                     clos_se();

                     productos.init();
                     productos.fichas();
                     productos.click_img();


               });




    </script>

</head>

<body>

<header>

    <figure >

        <a href="inicio" >

            <span class="logo-cab"></span>

        </a>

    </figure>

    <section class="redes-sociales">

          <figure style="right: 35px">
                <a href="https://www.facebook.com/pages/Innova-Espacios/412693412078869" target="_blank">
                    <span class="icono-fbk"></span>
                </a>
          </figure>

          <figure style="right: -10px; top: 30px">
              <a href="https://twitter.com/#!/InnovaEspacios" target="_blank">
                  <span class="icono-twitter" ></span>
              </a>
          </figure>

          <figure style="bottom: 0; right: 40px">
              <a href="http://www.youtube.com/innovaespacios" target="_blank">
                  <span class="icono-mail"></span>
              </a>
          </figure>

      </section>

</header>

  <section id= "cont_centro">
   
      <div id="cont-cols">

      	<div class="item menu">


            <hgroup>
                <h1>productos</h1>
            </hgroup>

            <ul>
              <li> <a href="baños-limpieza" <?php echo ($_GET['cual'] == "banio") ? "class='actt'" : ""; ?> >Baños portátiles y servicios de limpieza</a></li>
              <li><a href="casetas-petroleras" <?php echo ($_GET['cual'] == "casetas") ? "class='actt'" : ""; ?> >Casetas Petroleras Prefabricadas</a></li>
              <li><a href="contenedores-maritimos" <?php echo ($_GET['cual'] == "contenedores") ? "class='actt'" : ""; ?>>Contenedores marítimos</a> </li>
              <li><a href="modulos-prefabricados-importados" <?php echo ($_GET['cual'] == "modulos") ? "class='actt'" : ""; ?>>Módulos prefabricados IMPORTADOS</a></li>
              <li ><a href="productos">Aplicaciones</a></li>
            </ul>
        </div>

      		<div class="item descripciones">      		

         <div class="detalles">

      		 <hgroup>
                <h1>[titulo:producto]</h1>
               </hgroup>

              <p>
                [texto:producto]
              </p>

           </div>

      			<div class="slider-cont">

      				<div class="slider-marco">
      				    	<img src="[img:producto]" alt="" id="tearo">
      				</div>

      				<nav id="controles">
      					<span id="ant">&laquo;</span> <span id="sig">&raquo;</span>
      				</nav>

      				  <div id="carrusel">

                    <span class="annt" id="annt">&laquo;</span>

      				  	     <div class="marco-carrusel">
                      
      				  	     	
      				  	     	<div class="items">

                            [galeria:producto]                            
      				  	     	   
      				  	     	</div>                       

      				  	     </div>

                     <span class="sigg" id="sigg">&raquo;</span>

      				  </div>

      			</div>    


      		</div>      	

      </div>

  </section>

  <section id="menu">

      <nav id="cab_menu" >

          <ul >

              <li>
                  <a href="inicio" class="left">
                      Inicio
                  </a>
              </li>

              <li>
                  <a href="nosotros"  class="left">
                      Nosotros
                  </a>
              </li>


        
              <li>
                  <a href="productos"  class="left">
                      Productos
                  </a>
              </li>



              <li>
                  <a href="clientes"  class="left">
                      Clientes
                  </a>
              </li>


              <li>
                  <a href="contacto"  class="left">
                      Contacto
                  </a>
              </li>

          </ul>

      </nav>

  </section>



   <footer id="pie">

       <div class="cont-cola">

       <section class="dis-pro left">

       
               <hgroup class="left">

              <h1> Diseñado por Markakalinka & Programado por Gomosoft.</h1>

               </hgroup>



       </section>

           <section class="copyrights right">

               <hgroup class="left">

                   <h1> INNOVA ESPACIOS &copy; 2012. Cartagena - Colombia.</h1>

               </hgroup>

           </section>

       </div>

   </footer>

 </body>

</html>