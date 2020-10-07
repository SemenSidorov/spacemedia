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

<section class="offers section section--mb_middle">

    <h2><span>Последние</span> предложения</h2>

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

    </div>

    <a class="btn" href="/offers/">Все предложения</a>

</section>