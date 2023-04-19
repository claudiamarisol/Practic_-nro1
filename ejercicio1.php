<?php
echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> Claudia Marisol Cachi Quispe<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "--------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 1</h1>";
echo "Crear un arreglo de notas con los siguientes elementos 65, 45, 75, 98 32 e imprimirlos. <br>";
//Llenado de arreglo de notas
$notas = array(65, 45, 75, 98, 32);
//Imprimiendo los elementos
echo 'Las notas son: <br>';
foreach ($notas as $n){
print "[ $n ]";
}
?>