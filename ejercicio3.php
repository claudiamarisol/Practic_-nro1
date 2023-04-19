<?php
echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> Claudia Marisol Cachi Q.<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "--------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 3</h1>";
echo "Crear un arreglo en el cual se pueda almacenar el las notas
finales obtenidas, tambien el nombre de cada estudiante.<br>";
//Llenado de arreglo de asociativo
$nombres_notas = array(
"Boris Cristhian" => 51,
"Claudia Marisol" => 61,
"Martin" => 65,
"Jhessica" => 61,
"Erika Amanda" => 61,
"Joel" => 61,
"Yola" => 88,
"Juan Paul" => 88,
"Rodrigo" => 61,
"Luz Natalia" => 88,
"Juan Ronaldo" => 70,
"Rosse Mary" => 65,
"Ever" => 88
);
//Imprimiendo los elementos
foreach ($nombres_notas as $estudiante => $nota) {
echo 'Estudiante <b>' . $estudiante . '</b> tiene una nota de <b>' .$nota.'</b><br>';
}
?>