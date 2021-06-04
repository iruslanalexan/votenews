<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Каталог книг");
?><? $APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"",
	array(
		"IBLOCK_TYPE" => "books",
		"IBLOCK_ID" => "6",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "/e-store/books/#SECTION_ID#/",
		"COUNT_ELEMENTS" => "Y",
		"DISPLAY_PANEL" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
); ?>
    <hr/>

<? $APPLICATION->IncludeComponent(
	"bitrix:catalog.top",
	"",
	array(
		"IBLOCK_TYPE" => "books",
		"IBLOCK_ID" => "6",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"SECTION_URL" => "/e-store/books/#SECTION_ID#/",
		"DETAIL_URL" => "/e-store/books/#SECTION_ID#/#ELEMENT_ID#/",
		"BASKET_URL" => "/personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"DISPLAY_COMPARE" => "N",
		"ELEMENT_COUNT" => "3",
		"LINE_ELEMENT_COUNT" => "1",
		"PROPERTY_CODE" => array(),
		"PRICE_CODE" => array("RETAIL"),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
); ?>

    <h2>Видео-новости</h2>

<? $APPLICATION->IncludeComponent(
	"bitrix:player",
	"",
	array(
		"PLAYER_TYPE" => "auto",
		"USE_PLAYLIST" => "N",
		"PATH" => "/upload/intro.flv",
		"WIDTH" => "400",
		"HEIGHT" => "324",
		"FULLSCREEN" => "Y",
		"SKIN_PATH" => "/bitrix/components/bitrix/player/mediaplayer/skins",
		"SKIN" => "bitrix.swf",
		"CONTROLBAR" => "bottom",
		"WMODE" => "transparent",
		"HIDE_MENU" => "N",
		"SHOW_CONTROLS" => "Y",
		"SHOW_STOP" => "N",
		"SHOW_DIGITS" => "Y",
		"CONTROLS_BGCOLOR" => "FFFFFF",
		"CONTROLS_COLOR" => "000000",
		"CONTROLS_OVER_COLOR" => "000000",
		"SCREEN_COLOR" => "000000",
		"WMODE_WMV" => "window",
		"AUTOSTART" => "N",
		"REPEAT" => "N",
		"VOLUME" => "90",
		"DISPLAY_CLICK" => "play",
		"MUTE" => "N",
		"HIGH_QUALITY" => "Y",
		"ADVANCED_MODE_SETTINGS" => "N",
		"BUFFER_LENGTH" => "10",
		"DOWNLOAD_LINK_TARGET" => "_self"
	),
	false
); ?>

    <!-- --><!-- -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
