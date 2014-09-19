<?php include ("libs/Smarty.class.php");
$smarty = new Smarty();

$imie = 'Janek';
$nazwisko = 'Burczymucha';

$smarty->assign("imie",$imie);
$smarty->assign("nazwisko",$nazwisko);

$smarty->display("index.tpl");

?>