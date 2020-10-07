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

<div class="cosmos-wrapper">
    <img class="orbita" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/orbita2.svg" alt="">
    <div id="star">

<?foreach($arResult["ITEMS"] as $key => $arItem):?>

        <?$key == 0 ? $text_class = " star-text--active" : $text_class = ""; ?>

        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="star-text<?=$text_class?>"><?=$arItem["NAME"]?></a>

<?endforeach;?>

        <a href="/offers/" class="star-text">Нестандартные спецпроекты</a>

    </div>
    <div id="starTwo">

<?foreach($arResult["ITEMS"] as $key => $arItem):?>

        <?$key == 2 ? $text_class = " star-text--active" : $text_class = ""; ?>

        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="star-text<?=$text_class?>"><?=$arItem["NAME"]?></a>

<?endforeach;?>

        <a href="/offers/" class="star-text">Нестандартные спецпроекты</a>

    </div>
    <img class="man-main" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/cosmonaut.png" alt="">
</div>