<?php
 $nom=$_POST['nom'];
 $pregunta1=$_POST['pregunta1']; $pregunta2=$_POST['pregunta2'];
 $pregunta3=$_POST['pregunta3']; $pregunta4=$_POST['pregunta4'];
 $pregunta5=$_POST['pregunta5']; $consum=0;
if ($pregunta1=='B') {
    $consum = $consum + 1;
}
if ($pregunta2=='B') {
    $consum = $consum + 1;
}
if ($pregunta3=='C') {
    $consum = $consum + 1;
}
if ($pregunta4=='A') {
    $consum = $consum + 1;
}
if ($pregunta5=='B') {
    $consum = $consum + 1;
}

if($nom and $consum){
$conexion = new mysqli('127.0.0.1', 'root', '', 'ajax');
$var_consulta= "INSERT INTO usuarios(nombre,puntuacion) VALUES('$nom','$consum')";
$var_resultado = $conexion->query($var_consulta);
}
?> 

<html>
    <head>
	  <link rel="stylesheet" href="www/css/styles.css">
    <link rel="stylesheet" href="www/css/materialize.css">
    <link rel="stylesheet" href="www/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Test de inteligencia</title>
</head>


    <body>
    
 
 	 <div class="views">
        <div class="view view-main">
            <div class="navbar-fixed">
<nav>
        <div class="nav-wrapper green darken-1">
            <a href="../apk20/www/index.html" class="brand-logo">RANDOM TEST</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Inicio</a></li>
                    <li><a href="badges.html">Nosotros</a></li>
                    <li><a href="collapsible.html">Contáctanos</a></li>
                </ul>
        </div>
    </nav>
 </div>
   			<div class="pages navbar-through toolbar-through">
                <div data-page="index" class="page">
                    <div class="page-content">
                        <div class="content-block">
                            <div>
                            <?php
                            if ($consum==5) {
                                echo "FELICIDADES!! Obtuviste ".$consum. "/5 puntos";
                            }else{

                                        echo "Lamentablemente obtuviste ".$consum. "/50 puntos";

                                        echo "<p> Respuestas correctas 1) 4, 2) Turim, 3) Apocalipsis, 4) McGuire, 5) Pencil";
                                    };
                             ?> </div>
 
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
    <script type="text/javascript" src="cordova.js"></script>
    <script type="text/javascript" src="lib/framework7/js/framework7.min.js"></script>
    <script type="text/javascript" src="js/my-app.js"></script>
    </body>                   
</html>
