<?php 

$smarty = new Template();
$smarty->assign('CONTATO', 'Página de Contatos');

ini_set('display_errors', true);
error_reporting(E_ALL);


$smarty->display('contato.tpl');


 ?>