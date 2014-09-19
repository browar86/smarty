<?php include ("libs/Smarty.class.php");
$smarty = new Smarty();

$imie = 'Janek';
$nazwisko = 'Burczymucha';
$pracownicy = array("Tomek","Piotrek","Kasia");

$smarty->assign("imie",$imie);
$smarty->assign("nazwisko",$nazwisko);
$smarty->assign("pracownicy",$pracownicy);

$smarty->display("index.tpl");

?>