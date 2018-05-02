<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<?=GetMessage('SITEDOMAIN')?>
<?if(date("Y")<=2018){echo'2018';}else{echo'2018-'.date("Y");}?>
<?=GetMessage('COPYRIGHT')?>
<?=GetMessage('DEVELOPER')?>

<?$APPLICATION->ShowHeadStrings();?>
<?$APPLICATION->ShowHeadScripts();?>
<? require(INC_PATH.'footer_scripts.php'); ?>

</body>
</html>