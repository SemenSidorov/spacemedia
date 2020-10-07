<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<?
$siteUrl = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['SERVER_NAME'];
$curPage = $APPLICATION->GetCurPage();
$sku = explode('?', $_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">


    <meta property="og:url" content="<?=$siteUrl . $curPage?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?$APPLICATION->ShowTitle();?>">
    <meta property="og:description" content="<?$APPLICATION->ShowProperty('description', "Наш приоритет — комплексные digital-стратегии. Наши рекламные кампании всегда достигают цели клиента. Экспертный подход к работе с каждой рекламной технологией позволяет нам предлагать клиентам самые оптимальные решения.");?>">
    <meta property="og:image" content="<?=$siteUrl?><?$APPLICATION->ShowProperty('OGImage', SITE_TEMPLATE_PATH.'/_html/Result/Content/images/general/logo.png');?>">
    
    <link rel="canonical" href="<?=$siteUrl . $sku[0]?>"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php $APPLICATION->ShowTitle(); ?></title>

    <?php $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/_html/Result/Content/css/main.css'); ?>
    <?php $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/_html/Result/Content/libs/slick/slick.css'); ?>
    <?php $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/_html/Result/Content/libs/slick/slick-theme.css'); ?>

    <?php $APPLICATION->ShowHead(); ?>

</head>

<body>
<?php $APPLICATION->ShowPanel(); ?>

<div class="layout">

<?if($sku[0] == "/"){?>

    <div class="cosmos">

        <header class="section header">
            <a href="/" class="logo">SpaceMedia</a>
            <nav class="nav header-nav">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "header",
                    array(
                        "ROOT_MENU_TYPE" => "top",
                        "MENU_CACHE_TYPE" => "Y",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "N",
                        "MENU_THEME" => "site",
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "left",
                        "USE_EXT" => "Y",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                    ),
                    false
                ); ?>
            </nav>
            <div class="btn-menu">
                <span class="menu-span menu-top"></span>
                <span class="menu-span menu-middle"></span>
                <span class="menu-span menu-bottom"></span>
            </div>
            <div class="adaptive-menu">
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "header-adaptive",
                    array(
                        "ROOT_MENU_TYPE" => "top",
                        "MENU_CACHE_TYPE" => "Y",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "N",
                        "MENU_THEME" => "site",
                        "CACHE_SELECTED_ITEMS" => "N",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MAX_LEVEL" => "1",
                        "CHILD_MENU_TYPE" => "left",
                        "USE_EXT" => "Y",
                        "DELAY" => "N",
                        "ALLOW_MULTI_SELECT" => "N",
                    ),
                    false
                ); ?>
            </div>
        </header>

        <section class="main-title">
        
            <div class="section">
                <div class="main-title__text">
                    <h1><span>PERFORMANCE </span><br><span>X </span> brand’s loyalty</h1>
                    <p class="text-bigger">SPACE MEDIA — одно из ведущих performance-агентств в России, ориентированное на результативную рекламу</p>
                </div>
            </div>
        
        </section>

        <div class="main-about section section--flex">
        
            <img class="сosmonaut" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/space_man.png" alt="">
        
            <div class="main-about__info">
                <h2><?=$APPLICATION->ShowTitle(false, false);?></h2>
                <p><?$APPLICATION->ShowProperty('description', 'Наш приоритет — комплексные digital-стратегии. Наши рекламные кампании всегда достигают цели клиента. Экспертный подход к работе с каждой рекламной технологией позволяет нам предлагать клиентам самые оптимальные решения.');?></p>
                <a href="/about/" class="btn">О компании</a>
            </div>
        
            <div class="main-about__list">
                <h3>Приходите к нам</h3>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/about/index_if.php"
                    )
                );?>
            </div>
        
        </div>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main.stars", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "main.stars",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "info",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
			2 => "",
			3 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>


    </div>

<?}else{?>

    <header class="section header">
        <a href="/" class="logo">SpaceMedia</a>
        <nav class="nav header-nav">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "header",
                array(
                    "ROOT_MENU_TYPE" => "top",
                    "MENU_CACHE_TYPE" => "Y",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "MENU_THEME" => "site",
                    "CACHE_SELECTED_ITEMS" => "N",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                ),
                false
            ); ?>
        </nav>
        <div class="btn-menu">
            <span class="menu-span menu-top"></span>
            <span class="menu-span menu-middle"></span>
            <span class="menu-span menu-bottom"></span>
        </div>
        <div class="adaptive-menu">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "header",
                array(
                    "ROOT_MENU_TYPE" => "top",
                    "MENU_CACHE_TYPE" => "Y",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "MENU_THEME" => "site",
                    "CACHE_SELECTED_ITEMS" => "N",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "1",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                ),
                false
            ); ?>
        </div>
    </header>
<?}if(strpos($sku[0],"/portfolio/") === false && strpos($sku[0],"/offers/") === false && strpos($sku[0],"/services/") === false && $sku[0] !== "/" && !defined('ERROR_404') && ERROR_404 !=='Y'){?>
    <section class="title">

        <div class="section title-info">
            <h1><?=$APPLICATION->ShowTitle(false, false);?></h1>
            <p><?$APPLICATION->ShowProperty('description', 'Наш приоритет — комплексные digital-стратегии. Наши рекламные кампании всегда достигают цели клиента. Экспертный подход к работе с каждой рекламной технологией позволяет нам предлагать клиентам самые оптимальные решения.');?></p>
        </div>

        <div class="title-pic">

            <img class="moon" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/moon.png" alt="">

            <img class="man" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/cosmonaut.png" alt="">

        </div>

    </section>
<?}?>