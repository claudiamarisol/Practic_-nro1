<?php
echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> Claudia Marisol Cachi Q.<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "--------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 10</h1>";
echo "Crear una funcion con valores inicializados.<br>";
function Saludar($nombre = 'Carlos')
{
    return "¿Como estás $nombre? <br>";
}
echo "<pre>";
echo Saludar();
echo Saludar('Boris Cristhian');
echo Saludar('Claudia Marisol');
echo Saludar('Martin');
echo Saludar('Jhessica');
echo Saludar('Erika Amanda');
echo Saludar('Joel');
echo Saludar('Yola');
echo Saludar('Juan Paul');
echo Saludar('Rodrigo');
echo Saludar('Luz Natalia');
echo Saludar('Juan Ronaldo');
echo Saludar('Rosse Mary');
echo Saludar('Ever');
echo "</pre>";
?>