<?php
class kendaraan{

private $merk;
private $harga;

function_construct($merk,$harga){
$this->merk-$merk;
$this->harga=$harga;
}
function BacaMerk(){
return $this->merk;
}
function BacaHarga(){
return$this-$harga;
}
}
$motor = new kendaraan("Ducati",100000000);
echo "Merk kendaraan = ".$motor->BacaMerk()."<br>";
echo "Harga Motor = "$motor->BacaHarga()."<br>";
echo "======================================<br><br>";

$motor2 = new kendaraan("bajaj",150000000);

echo "Merk kendaraan = ".$motor2->BacaMerk()."<br>";
echo "Harga Motor = "$.motor2->BacaHarga()."<br>";
?>