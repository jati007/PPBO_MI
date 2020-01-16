<?php
/*pewarisan.php*/
class Bapak{
var $nama = "Bapak";
function Bapak($n){
$this->nama = $n;
}
function Hallo(){
echo "Halo,Saya Anita putri $this->nama<br>";
}
function Hallo1(){
echo "Halo,Saya alfredo anak ke-2 $this->nama<br>";
}
}
class Anak extends Bapak{
}
$test= new Anak("Anak dari Bapak Joko");
$test->Hallo();
$test= new Anak("Anak dari Bapak Joko");
$test->Hallo1();
?>