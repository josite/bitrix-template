<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!-- META -->
<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<![endif]-->
<!--[if lt IE 9]>
	<script type="text/javascript" src="<?=RS_PATH?>js/html5.js"></script>
<![endif]-->
<!--[if lt IE 8]>
	<script type="text/javascript" src="<?=RS_PATH?>js/json2.js"></script>
<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=<?=LANG_CHARSET;?>" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><? $APPLICATION->ShowTitle();?></title>
<?$APPLICATION->ShowMeta("robots")?>
<?$APPLICATION->ShowMeta("keywords")?>
<?$APPLICATION->ShowMeta("description")?>

<?if($APPLICATION->GetCurDir() === '/'){?>
	<link rel="canonical" href="http://www.site.name/" />
<?}?>

<!-- ICON -->
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">


<!-- Mobile Web-app fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">

<!-- STYLE -->
<?$APPLICATION->SetAdditionalCSS(RS_PATH . "css/style.min.css");?>
<?$APPLICATION->ShowCSS();?>

<!-- JS -->
<script src=""></script>
<?$APPLICATION->AddHeadScript(RS_PATH . "js/jquery-3.3.1.min.js");?>
<?/* OR USE CJSCore::Init(array("jquery")); */ ?>
<?$APPLICATION->AddHeadScript(RS_PATH . "js/scrolltotop.min.js");?>
<?$APPLICATION->AddHeadScript(RS_PATH . "js/common.js");?>