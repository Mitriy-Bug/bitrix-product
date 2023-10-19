<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
$arComponentDescription = array(
	"NAME" => GetMessage("Список товаров"),
	"DESCRIPTION" => GetMessage("Выводим список товаров из указанного раздела"),
	"PATH" => array(
		"ID" => "cs_components",
		"CHILD" => array(
			"ID" => "listgoods",
			"NAME" => "Список товаров"
		)
	),
);
?>