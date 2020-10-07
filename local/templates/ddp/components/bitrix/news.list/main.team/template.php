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
<section class="team section">
    
	<h2><span>Наша</span> команда</h2>

	<div class="team-content">

<?foreach($arResult["ITEMS"] as $arItem):?>

		<!--<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="team-content__item">-->
		<a class="team-content__item" href="/team/#<?=$arItem["CODE"]?>">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
			<div class="team-content__cell">
				<h5><?=$arItem["NAME"]?></h5>
				<p><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?></p>
			</div>
		</a>
		<!--</a>-->

<?endforeach;?>

	</div>

	<a class="btn" href="/team/">Вся команда</a>

</section>
