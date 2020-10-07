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
    
<div class="team-block">

<?foreach($arResult["ITEMS"] as $arItem):?>

	<div class="team__item" id="<?=$arItem["CODE"]?>">
		<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
		<div class="team__cell">
			<h5><?=$arItem["NAME"]?></h5>
			<h6><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?></h6>
			<p><?=$arItem["PREVIEW_TEXT"]?></p>
			<a href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?></a>
		</div>
	</div>

<?endforeach;?>

</div>
