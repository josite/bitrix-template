<?
	if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	define('BINDEXPAGE', false);
	define("PATH_TO_404", "/404.php");
	IncludeTemplateLangFile(__FILE__);
?>
<!doctype html>
<html lang="ru">
<head>
	<?require(INC_PATH.'head.php'); ?>
</head>

<? require(INC_PATH.'iebody.php'); ?>

<div id="panel"><? //$APPLICATION->ShowPanel();?></div>

<!--[if lt IE 9]><div class="g-warning"><?=GetMessage('WARNING')?></div><![endif]-->