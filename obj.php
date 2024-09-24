<?php
class Snakes{
public $family;
function families($family){
$this->family = $family;
}
function Venom(){
    global $family;
if($this->family == "Elapidae"){
    echo "Medically significant Neurotoxin";
}elseif($this->family=="Viperidae"){
    echo "Medically significant Cytotoxin";
}elseif($this->family=="Colubridae"){
    echo "chance of having medically significant neurotoxin";
}else{
    echo "no medically significant venom";
}
}
}

$Hognose = new Snakes();
$Hognose->family="Colubridae";
echo $Hognose->Venom();
echo "\r\n";
$Cobra = new Snakes();
$Cobra->family="Elapidae";
echo $Cobra->Venom();
echo "\r\n";
$Retic = new Snakes();
$Retic->family="Pythonidae";
echo $Retic->Venom();
echo "\r\n";
$Rattlesnake = new Snakes();
$Rattlesnake->family="Viperidae";
echo $Rattlesnake->Venom();
echo "\r\n";

?>


