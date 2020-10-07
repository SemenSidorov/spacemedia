<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<?
$previousLevel = 0;
foreach($arResult as $arItem):
?>

        <a href="<?=$arItem["LINK"]?>" class="nav__link"><?=$arItem["TEXT"]?></a>


<?endforeach?>

<?endif?>