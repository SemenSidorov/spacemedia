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

<section class="services section">
    
    <h2><span>Наши</span> услуги</h2>

    <div class="services-content">

<?foreach($arResult["ITEMS"] as $arItem):?>
        
        <a class="services-content__item" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
            <div class="services-content__pic">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
            </div>
            <h4><?=$arItem["NAME"]?></h4>
        </a>

<?endforeach;?>

        <a class="services-content__item" href="/offers/">
            <div class="services-content__pic">
                <img src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/servis_4.svg" alt="">
            </div>
            <h4>Нестандартные спецпроекты в онлайн и офлайн.</h4>
        </a>

    </div>

    <a class="btn" href="/services/">Подробнее</a>

</section>