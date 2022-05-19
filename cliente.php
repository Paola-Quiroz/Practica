<?php 
//datos guardados en arreglos
$array = Array (
    "0"=>Array(
        "id"=>"01",
        "nombre"=>"Isaac",
        "apellido"=>"Reyna",
        "edad "=>"20",
        "grado"=>"2"
    ),
    "1"=>Array(
        "id"=>"02",
        "nombre"=>"Javier",
        "apellido"=>"Luevano",
        "edad "=>"32",
        "grado"=>"4"  
    ),
    "2"=>Array(
        "id"=>"03",
        "nombre"=>"Fernando",
        "apellido"=>"Gomez",
        "edad "=>"45",
        "grado"=>"8"  
    ),

);
$json = json_encode($array);
$bytes = file_put_contents("data.json",$json);
print ("archivo creado");
?>