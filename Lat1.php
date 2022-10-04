<?php 
//class mobil
Class Mobil{
public $nama;
public $merk;
function getInfo($a){
echo "Nama mobil: ". $a->nama."<br/>";
echo "Merk: ". $a->merk."<br/>";
}
}
//bagian main
$ferari=new Mobil();
$ferari->nama="DDD";
$ferari->merk="FFF";
$ferari->getInfo($ferari);
?>