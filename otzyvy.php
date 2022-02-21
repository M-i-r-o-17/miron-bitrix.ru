<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "Отзывы");
$APPLICATION->SetPageProperty("test", "Просто для проверки возможностей!");
$APPLICATION->SetPageProperty("keywords_inner", "Тестим, заполнение, meta, тегов");
$APPLICATION->SetPageProperty("title", "Отзывы | Тестовая работа");
$APPLICATION->SetTitle("Отзывы");
?>
<!--Тело страницы-->
<h1>Title - <?=$APPLICATION->ShowTitle()?></h1>
<h3>Title - <?=$APPLICATION->ShowTitle(false)?></h3>
<hr/>
<p>Tags - <?=$APPLICATION->ShowProperty("tags")?></p>
<p>Test - <?=$APPLICATION->ShowProperty("test")?></p>
<p>Keywords - <?=$APPLICATION->ShowProperty("keywords_inner")?></p>
<p>Title property - <?=$APPLICATION->ShowProperty("title")?></p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>