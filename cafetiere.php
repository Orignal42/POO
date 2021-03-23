

<?php

include "class/cafe.php";

$cafe= new MachineACafe("Senseo ");
echo"<br>";
echo  $cafe->allumage();
for($i=0; $i<15  ;$i++){
    
        
        echo"<br>";
        echo $cafe-> faireDuCafe();
        echo"<br>";
    
}