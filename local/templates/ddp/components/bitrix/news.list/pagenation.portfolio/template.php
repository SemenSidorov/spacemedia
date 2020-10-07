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