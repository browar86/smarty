<?php include ("libs/Smarty.class.php");
$smarty = new Smarty();

$imie = 'Janek';
$nazwisko = 'Burczymucha';
$pracownicy = array("Tomek","Piotrek","Kasia");
$pracownicy2 = array("Jan"=>array("imie"=>"Jan","stanowisko"=>"księgowy"),"Marian"=>array("imie"=>"Marian","stanowisko"=>"grafik"),"Aga"=>array("imie"=>"Aga","stanowisko"=>"programista"));

$smarty->assign("imie",$imie);
$smarty->assign("nazwisko",$nazwisko);
$smarty->assign("pracownicy",$pracownicy);
$smarty->assign("pracownicy2",$pracownicy2);

$smarty->display("index.tpl");

?>