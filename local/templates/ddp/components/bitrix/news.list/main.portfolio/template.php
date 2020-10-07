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
<section class="section project">
    
	<h2><span>Наши</span> проекты</h2>

	<div class="project-block">

		<div class="project-slider">
<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="project-slider__item">
				<img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="">
			</div>
<?endforeach;?>

		</div>

		<button class="arrow arrow--prev"></button>
		<button class="arrow arrow--next"></button>

	</div>

	<a href="/portfolio/" class="btn">Все проекты</a>

</section>
