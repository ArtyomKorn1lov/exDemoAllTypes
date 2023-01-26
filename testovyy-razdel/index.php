<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовый раздел");
?><?$APPLICATION->IncludeComponent("bitrix:main.include", "include_info1", Array(
	"AREA_FILE_SHOW" => "page",	// Показывать включаемую область
		"AREA_FILE_SUFFIX" => "inc",	// Суффикс имени файла включаемой области
		"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>