<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
	    <meta charset="utf-8">
    <!-- FORMATO DE CAEACTERES PARA LATINOAMERICA-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- VISTA DE COMPATIBILIDAD PARA TODOS LOS NAVEGADORES - INTERNET EXPLORER 8-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- ETIQUETA PARA QUE SEA RESPONSIVE-->
    <meta name="description" content="Una página web con el propósito de ser un directorios de gimnasios en el municipio de Acacias – Meta.">
    <!-- DESCRIPCION DE LA PAGINA-->
    <meta name="author" content="Maicol Andrey Rojas">
    <!--AUTORES-->
    <link rel="shortcut icon" type="image/x-icon" href="img/icono.jpg">
    <!-- ICONO -->

    <!-- INICIO DE ARCHIVOS CSS -->


    <!-- RESET CSS-->
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <!-- BOOTSTRAP -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- FONT AWESOME -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- ICONMOON -->
    <link href="assets/iconmoon/css/iconmoon.css" rel="stylesheet" type="text/css">
    <!-- LIGHTBOX CSS -->
    <link href="assets/lightbox/css/lightbox.css" rel="stylesheet" type="text/css">
    <!-- OWL CAROUSEL -->
    <link href="assets/owl-carousel/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <!-- ANIMATE -->
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <!-- AOS -->
    <link href="assets/aos/aos.css" rel="stylesheet" type="text/css">
    <!-- CUSTOM STYLE -->
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <!--HOJA DE ESTILO-->
    <link href="css/for.css" rel='stylesheet' type='text/css' />
    <!--FIN DE HOJA DE ESTILO-->


</head>
<body>
    <?php
    include 'header.php';
    ?>
   <br><br><br><br><br><br>

   <style>
       
   </style>
            <div class="login-w3l"> 
            <div class="top-img-agileits-w3layouts">
                <h2 class="sub-head-w3-agileits" >CONTACTO</h2>
                <p style="text-align: justify;">Si tienes una duda, inquietud, sugerencias o si deseas que tu gimnasio sea añadido a nuestro portal web completa el formulario de contacto y lo más pronto posible obtendrás una respuesta, muchas gracias por visitar AcaciasGym.</p>
                <div class="login-form">    
                <form method="post">
                    <input type="text" name="nombre" placeholder="Nombres" required="" />
                    <input type="text" name="apellido" placeholder="Apellidos" required="" />
                    <input type="email" name="correo" placeholder="Correo" required="" />
                    <input type="number" name="telefono" placeholder="Telefono" required="" />
                    <input type="text" name="tema" placeholder="Tema" required="" />
                    <textarea name="mensaje" placeholder="Mensaje" required=""></textarea>
                    <input type="submit" value="Enviar" name="enviar">
                </form> 
            </div>
            </div>          
            
            <!-- //login -->
                </div> 
                <div class="clear"></div>
            <div class="footer-agileits">
            <p>© Todos los derechos reservados 2019. Plataforma digital AcacyasGym.<a href=""> </a></p>
            </div>
            <!--//login-->
            <br>
            <br>
            <?php

                    if (isset($_POST['enviar'])) {
                        try {
                            
                             $dominio = $_SERVER["HTTP_HOST"];
                            $res = $_SERVER["REQUEST_URI"];
                            $url = "http://" . $dominio . $res;

                            $primer_nombre = $_POST['nombre'];
                            $segundo_nombre = $_POST['apellido'];
                            $telefono = $_POST['telefono'];
                            $correo = $_POST['correo'];
                            $tema = $_POST['tema'];
                            $comentario = $_POST['mensaje'];
                            date_default_timezone_set('America/Bogota');
                            $fecha = date("Y-m-d");
                            $hora = date("h:i a");
                            
                            include 'correo_contacto\enviar_comen.php';
                            /*Configuracion de variables para enviar el correo*/
                            $mail_username = "acaciasgyms@gmail.com"; //Correo electronico saliente ejemplo: tucorreo@gmail.com
                            $mail_userpassword = "3112031849"; //Tu contraseña de gmail
                            $mail_addAddress = "$correo"; //correo electronico que recibira el mensaje
                            $template = "correo_contacto\correo_comentario.html"; //Ruta de la plantilla HTML para enviar nuestro mensaje

                            /*Inicio captura de datos enviados por $_POST para enviar el correo */
                            $mail_setFromEmail = "AcaciasGym@gmail.com";
                            $mail_setFromName = "AcaciasGym";

                            email_enviar($mail_username, $mail_userpassword, $mail_setFromEmail, $mail_setFromName, $mail_addAddress, $template, $primer_nombre, $segundo_nombre, $telefono, $correo, $tema, $comentario,$url); //Enviar el mensaje

                        } catch (Exception $e) {
                            echo $e;
                        }
                    }
                    ?>
 <?php
 include "footer.php";
 ?>
    <!-- SE DEBEN LLAMAR LOS ARCHIVOS JS PARA QUE FUNCIONE CORRECTAMENTE-->

    <!-- INICIO DE ARCHIVOS JS-->
    <!--  (NECESARIO PARA BOSTSTRAP Y PLUGINS JAVASCRIPT) -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- LIGHTBOX JS -->
    <script src="assets/lightbox/js/lightbox.js"></script>
    <!-- OWL CAROUSEL JS -->
    <script src="assets/isotope/js/isotope.min.js"></script>
    <!-- OWL CAROUSEL JS -->
    <script src="assets/owl-carousel/js/owl.carousel.min.js"></script>
    <!-- AOS JS -->
    <script src="assets/aos/aos.js"></script>
    <!-- COUNTERUP JS -->
    <script src="assets/counterup/counterup.min.js"></script>
    <script src="assets/counterup/waypoints.min.js"></script>
    <!-- CUSTOM JS -->
    <script src="js/custom.js"></script>
    <!-- FIN DE ARCHIVOS JS-->

</body>
</html>