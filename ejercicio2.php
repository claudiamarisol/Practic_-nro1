<?php
echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> Claudia Marisol Cachi Q.<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "--------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 2</h1>";
echo "Crear un arreglo de estudiantes de TEW-500.<br>";
//Llenado de arreglo de Estudiantes
$estudiantes = array(
"Boris Cristhian",
"Claudia Marisol",
"Martin",
"Jhessica",
"Erika Amanda",
"Joel",
"Yola",
"Juan Paul",
"Rodrigo",
"Luz Natalia",
"Juan Ronaldo",
"Rosse Mary",
"Ever"
);
//Imprimiendo los elementos
echo 'Los estudiantes son: <br>';
foreach ($estudiantes as $e){
echo "[ $e ]";
}
?>