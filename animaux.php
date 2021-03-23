<?php
include "class/animal.php";

include "class/mammifere.php";
include "class/chien.php";


$Chien= new Animal;
$Chien= new Mammifere;
$Chien= new Chien;

echo $Chien-> info();echo"<br>";
echo $Chien-> infoPlus();echo"<br>";
echo $Chien-> crie();echo"<br>";