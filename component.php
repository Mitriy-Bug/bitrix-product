<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

// тип инфоблока
$arParams['IBLOCK_TYPE'] = trim($arParams['IBLOCK_TYPE']);
// идентификатор инфоблока
$arParams['IBLOCK_ID'] = intval($arParams['IBLOCK_ID']);
// до какой глубины выбирать разделы
$arParams['DEPTH_LEVEL'] = intval($arParams['DEPTH_LEVEL']);

    // какие поля раздела инфоблока выбираем
    $arSelect = array(
        'ID',
        'NAME'
    );
    // условия выборки раздела инфоблока
    $arFilter = array(
    	 'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'IBLOCK_ACTIVE' => 'Y',
        'ACTIVE' => 'Y',
        'GLOBAL_ACTIVE' => 'Y',
        '<=DEPTH_LEVEL' => $arParams['DEPTH_LEVEL']
    );


$items = CIBlockElement::GetList(
        array(),
        $arFilter,
        false,
        false,
        $arSelect
    );

$arResult = $items;
$this->IncludeComponentTemplate();
?>