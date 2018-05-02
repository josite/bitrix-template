<?
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Error: Page not found!");
?>

<h1>Page not found!</h1>
<a href="/">Go to home page</a>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>