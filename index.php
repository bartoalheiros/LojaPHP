<?php 

require './lib/autoload.php';


$smarty = new Template();


// valores para o template
$smarty->assign('NOME', 'JOSÉ BARTOLOMEU A. DIAS');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('SITE_NOME', Config::SITE_NOME);

// var_dump($_GET);


$smarty->display('index.tpl');

 ?>