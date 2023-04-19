<?php
echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> Claudia Marisol Cachi Q.<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "--------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 4</h1>";
echo "Crear un arreglo para mostrar el abecedario.<br>";
//Llenado de arreglo de abecedarios
$abecedario = [
'a', 'b', 'c', 'd', 'e',
'f', 'g', 'h', 'i', 'j',
'k', 'l', 'm', 'n', 'o',
'p', 'q', 'r', 's', 't',
'u', 'v', 'w', 'x', 'y', 'z'
];
//Imprimiendo los elementos
foreach ($abecedario as $letras) {
echo "$letras, ";
}
?>