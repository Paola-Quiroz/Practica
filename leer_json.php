<?php

//Leemos el JSON
$alumnos = file_get_contents("http://192.168.43.249/Isaac/data.json");
$json_alumnos = json_decode($alumnos, true);

foreach ($json_alumnos as $alumno){
    echo $alumno["nombre"]."<br>";
    
}

?>