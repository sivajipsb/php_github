<?php

require 'vendor/autoload.php';

$smarty = new Smarty();

$smarty->setTemplateDir('/web/www.example.com/guestbook/templates/');
$smarty->setCompileDir('/web/www.example.com/guestbook/templates_c/');
$smarty->setConfigDir('/web/www.example.com/guestbook/configs/');
$smarty->setCacheDir('/web/www.example.com/guestbook/cache/');

$smarty->assign('name', 'Ned');
$smarty->display('index.tpl');
?>