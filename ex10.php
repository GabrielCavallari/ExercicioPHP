<?php 
// Manipulação de strings

$texto = "Ola Mundo!";

//Converter para minúsculas
echo strtolower($texto);
echo "<br>";

//Converter para maiúsculas
echo strtoupper($texto);
echo "<br>";

// Substituindo uma palavra na string
echo str_replace("Mundo", "PHP", $texto);
?>