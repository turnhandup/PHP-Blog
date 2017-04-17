<?php

// load Smarty library
require_once('C:\wamp64\Smarty\libs\Smarty.class.php');
$smarty = new Smarty;
$smarty->debugging = true;

 $smarty->template_dir = 'C:\wamp64\www\blog\smarty\templates';
$smarty->config_dir = 'C:\wamp64\www\blog\smarty\configs';
$smarty->cache_dir = 'C:\wamp64\Smarty\cache';
$smarty->compile_dir = 'C:\wamp64\Smarty\templates_c';

$smarty->assign('name','memohnish');
$smarty->display('index.tpl');
?>
