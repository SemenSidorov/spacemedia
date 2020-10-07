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

<div class="about-progress-block">

<?foreach($arResult["ITEMS"] as $arItem):?>

    <div class="about-progress-item">

        <div class="about-progress-awards"><?=$arItem["PROPERTIES"]["QUANTITY"]["VALUE"]?></div>

        <div class="about-progress-info">
            <h3><?=$arItem["NAME"]?></h3>
            <p><?=$arItem["PREVIEW_TEXT"]?></p>
        </div>

    </div>

<?endforeach;?>

</div>