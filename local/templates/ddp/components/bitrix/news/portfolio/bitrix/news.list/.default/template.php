<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<section class="title">

	<div class="section title-info">
		<h1>Наше <span>портфолио</span></h1>
		<p>Наш приоритет — комплексные digital-стратегии. Наши рекламные кампании всегда достигают цели клиента. Экспертный подход к работе с каждой рекламной технологией позволяет нам предлагать клиентам самые оптимальные решения.</p>
	</div>

	<div class="title-pic">

		<img class="moon" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/moon.png" alt="">

		<img class="man" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/cosmonaut.png" alt="">

	</div>

</section>

<section class="portfolio section section--mb">
    
	<div class="portfolio-block">

<?foreach($arResult["ITEMS"] as $arItem):?>
			
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="portfolio__item">
            <div class="portfolio__pic">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
			</div>
				
			<div class="portfolio__cell">
				<h5><?=$arItem["NAME"]?></h5>
				<h6><?=$arItem["PROPERTIES"]["SUBTITLE"]["VALUE"]?></h6>
				<p><?=$arItem["PREVIEW_TEXT"]?></p>
			</div>
		</a>

<?endforeach;?>

	</div>

	<?/*if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<br /><?=$arResult["NAV_STRING"]?>
	<?endif;*/?>
    
	<a href="#" data-id="2" class="btn">Показать еще</a>

	<?
$arFilter = Array("IBLOCK_ID"=>$arResult["ITEMS"][0]["IBLOCK_ID"], "ACTIVE"=>"Y");
$res_count = CIBlockElement::GetList(Array(), $arFilter, Array(), false, Array());
?>

<div class="div-hidden"><?=$res_count?></div>

</section>
