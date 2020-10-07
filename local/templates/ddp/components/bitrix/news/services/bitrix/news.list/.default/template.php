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

		<div class="services__item">
			<div class="services-img">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
			</div>

			<p><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a><?=$arItem["PREVIEW_TEXT"]?></p>
		</div>

<?endforeach;?>

		<div class="services__item">
			<div class="services-img">
                <img src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/services/servis_4.png" alt="">
			</div>

			<p><a href="/offers/">Нестандартные</a> спецпроекты в онлайн и офлайн.</p>
		</div>

	</div>

</section>
