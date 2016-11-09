<?php

//creamos el array con los numeros que vamos a multiplicar

$tablas=[
"primera"=>5,
"segunda"=>13,
"tercera"=>11,
];


//Foreach para el array

foreach ($tablas as $key => $value) {

  echo "Tabla del $value <br>";

//For para crear las tablas
  for ($i=1; $i <=10 ; $i++) {

      $mutiplicar= $i * $value;

      echo " $value x $i = $mutiplicar <br>" ;

    }
  }


 ?>

