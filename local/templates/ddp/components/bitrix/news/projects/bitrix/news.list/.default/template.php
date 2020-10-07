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
		<h1>Наши <span>предложения</span></h1>
		<p>Наш приоритет — комплексные digital-стратегии. Наши рекламные кампании всегда достигают цели клиента. Экспертный подход к работе с каждой рекламной технологией позволяет нам предлагать клиентам самые оптимальные решения.</p>
	</div>

	<div class="title-pic">

		<img class="moon" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/moon.png" alt="">

		<img class="man" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/cosmonaut.png" alt="">

	</div>

</section>

<section class="offers section section--min_mb">

	<div class="offers-content">

<?foreach($arResult["ITEMS"] as $arItem):?>
	
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="offers-content__item">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
			<div class="offers-content__cell">
				<p><?=$arItem["NAME"]?></p>
				<time><?=$arItem["DISPLAY_ACTIVE_FROM"]?></time>
			</div>
		</a>

<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
		
	</div>

</section>
