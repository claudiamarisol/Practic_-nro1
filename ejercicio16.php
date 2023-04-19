<?php
echo "<b>Instituto Tecnologico Escuela Industrial Superior</b><br>";
echo "<b>Pedro Domingo Murillo</b><br>";
echo "<b>Sub Sede - Tajani</b><br>";
echo "<b>Informatica - Industrial</b><br>";
echo "<b>Docente:</b> Erik Huallpa Aruquipa<br>";
echo "<b>Estudiante:</b> Claudia Marisol Cachi Q.<br>";
echo "<b>PRACTICA # 1</b><br>";
echo "--------------------------------------------------------------<br>";
echo "<h1>Ejercicio - 16</h1>";
echo "POO, Crear una Clase Estudiante, para los atributos ";
echo "usar metodos GET y SET, crear metodo mostrar.<br>";
?>
<?php
class Estudiante
{
    #Atributos
    private $nombre;
    private $edad;
    private $altura;

    function __construct(){
    }

    #Get
    public function getNombre(){
        return $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getAltura(){
        return $this->altura;
    }
    
    #Set
    public function setNombre($nom){
        $this->nombre = $nom;
    }
    public function setEdad($ed){
        $this->edad = $ed;
    }
    public function setAltura($alt){
        $this->edad = $alt;
    }

    #Metodos
    function Mostrar(){
        return $this->nombre.' tiene '.$this->edad.' años de edad y es de '.$this->altura.' de
Altura.';
    }
}
echo "<h3>Estudiante 1</h3>";
$boris = new Estudiante();
$boris->setNombre('Boris Cristhian');
$boris->setEdad(20);
$boris->setAltura(1.50);
echo $boris->Mostrar();

echo "<h3>Estudiante 2</h3>";
$claudia_marisol = new Estudiante();
$claudia_marisol->setNombre('Claudia Marisol');
$claudia_marisol->setEdad(19);
$claudia_marisol->setAltura(1.50);
echo $claudia_marisol->Mostrar();

echo "<h3>Estudiante 3</h3>";
$martin = new Estudiante();
$martin->setNombre('Martin');
$martin->setEdad(23);
$martin->setAltura(1.50);
echo $martin->Mostrar();

echo "<h3>Estudiante 4</h3>";
$jhessica = new Estudiante();
$jhessica->setNombre('Jhessica');
$jhessica->setEdad(19);
$jhessica->setAltura(1.50);
echo $jhessica->Mostrar();

echo "<h3>Estudiante 5</h3>";
$erika = new Estudiante();
$erika->setNombre('Erika Amanda');
$erika->setEdad(20);
$erika->setAltura(1.50);
echo $erika->Mostrar();

echo "<h3>Estudiante 6</h3>";
$joel = new Estudiante();
$joel->setNombre('Joel');
$joel->setEdad(22);
$joel->setAltura(1.50);
echo $joel->Mostrar();

echo "<h3>Estudiante 7</h3>";
$yola = new Estudiante();
$yola->setNombre('Yola');
$yola->setEdad(20);
$yola->setAltura(1.50);
echo $yola->Mostrar();

echo "<h3>Estudiante 8</h3>";
$juan_paul = new Estudiante();
$juan_paul->setNombre('Juan Paul');
$juan_paul->setEdad(19);
$juan_paul->setAltura(1.50);
echo $juan_paul->Mostrar();

echo "<h3>Estudiante 9</h3>";
$rodrigo = new Estudiante();
$rodrigo->setNombre('Rodrigo');
$rodrigo->setEdad(22);
$rodrigo->setAltura(1.50);
echo $rodrigo->Mostrar();

echo "<h3>Estudiante 10</h3>";
$luz_natalia = new Estudiante();
$luz_natalia->setNombre('Luz Natalia');
$luz_natalia->setEdad(20);
$luz_natalia->setAltura(1.50);
echo $luz_natalia->Mostrar();

echo "<h3>Estudiante 11</h3>";
$juan_ronaldo = new Estudiante();
$juan_ronaldo->setNombre('Juan Ronaldo');
$juan_ronaldo->setEdad(19);
$juan_ronaldo->setAltura(1.50);
echo $juan_ronaldo->Mostrar();

echo "<h3>Estudiante 12</h3>";
$rosse_mary = new Estudiante();
$rosse_mary->setNombre('Rosse Mary');
$rosse_mary->setEdad(20);
$rosse_mary->setAltura(1.50);
echo $rosse_mary->Mostrar();

echo "<h3>Estudiante 13</h3>";
$ever = new Estudiante();
$ever->setNombre('Ever');
$ever->setEdad(20);
$ever->setAltura(1.50);
echo $ever->Mostrar();
?>