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

<section class="portfolio-card section section--mb">

	<div class="portfolio-head">
		<h1><?=$arResult["DETAIL_TEXT"]?></h1>
		<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
	</div>

	<div class="portfolio-scheme">

	<?if(isset($arResult["PROPERTIES"]["CLIENT"]["VALUE"]) && !empty($arResult["PROPERTIES"]["CLIENT"]["VALUE"])){?>
		<div class="portfolio-scheme__item">
			<h5>Клиент</h5>
			<h6><?=$arResult["NAME"]?></h6>
			<p><?=$arResult["PROPERTIES"]["CLIENT"]["VALUE"]?></p>
		</div>
	<?}?>

	<?if(isset($arResult["PROPERTIES"]["CHANNEL"]["VALUE"]) && !empty($arResult["PROPERTIES"]["CHANNEL"]["VALUE"])){?>
		<div class="portfolio-scheme__item">
			<h5>Канал</h5>
			<p><?=$arResult["PROPERTIES"]["CHANNEL"]["VALUE"]?></p>
		</div>
	<?}?>

	<?if(isset($arResult["PROPERTIES"]["TASK"]["VALUE"]) && !empty($arResult["PROPERTIES"]["TASK"]["VALUE"])){?>
		<div class="portfolio-scheme__item">
			<h5>Задача</h5>
			<p><?=$arResult["PROPERTIES"]["TASK"]["VALUE"]?></p>
		</div>
	<?}?>

	<?if(isset($arResult["PROPERTIES"]["TECHNOLOGY"]["VALUE"]) && !empty($arResult["PROPERTIES"]["TECHNOLOGY"]["VALUE"])){?>
		<div class="portfolio-scheme__item">
			<h5>Технологии</h5>
			<p><?=$arResult["PROPERTIES"]["TECHNOLOGY"]["VALUE"]?></p>
		</div>
	<?}?>

	</div>

	<?if(isset($arResult["PROPERTIES"]["TARGET"]["VALUE"]) && !empty($arResult["PROPERTIES"]["TARGET"]["VALUE"])){?>
	<div class="portfolio-target">
		<h2>Цель</h2>
		<p><?=$arResult["PROPERTIES"]["TARGET"]["~VALUE"]["TEXT"]?></p>
	</div>
	<?}?>

	<?if(isset($arResult["PROPERTIES"]["DECISION"]["VALUE"]["TEXT"]) && !empty($arResult["PROPERTIES"]["DECISION"]["VALUE"]["TEXT"])){?>
	<div class="portfolio-solution">

		<div class="portfolio-solution__title">
			<h2>Решение</h2>
			<p class="text-bigger"><?=$arResult["PROPERTIES"]["DECISION_HEADER"]["VALUE"]?></p>
		</div>

		<div class="portfolio-solution__block">

<?/*
	$i=1;
	foreach($arResult["PROPERTIES"]["DECISION"]["VALUE"] as $key => $prop){
?>

			<div class="portfolio-solution__item">

				<div class="portfolio-solution__cell">

					<div class="portfolio-solution__number">
						<?=$i?>
					</div>

					<div class="portfolio-solution__head"><?=$arResult["PROPERTIES"]["DECISION"]["DESCRIPTION"][$key]?></div>

				</div>

				<p><?=$prop?></p>

			</div>

<?
		$i++;
	}*/
?>

			<div class="portfolio-solution__item">

				<!--<div class="portfolio-solution__cell">

					<div class="portfolio-solution__number">
						<?//=$i?>
					</div>

					<div class="portfolio-solution__head"><?//=$arResult["PROPERTIES"]["DECISION"]["DESCRIPTION"][$key]?></div>

				</div>

				<p><?//=$prop?></p>-->

				<p><?=$arResult["PROPERTIES"]["DECISION"]["~VALUE"]["TEXT"]?></p>

			</div>

		</div>

	</div>
	<?}?>

	<?if(isset($arResult["PROPERTIES"]["RESULT"]["~VALUE"][0]) && !empty($arResult["PROPERTIES"]["RESULT"]["~VALUE"][0])){?>
	<div class="portfolio-result">

		<h2>Результат</h2>

		<div class="portfolio-result__list">

		<?foreach ($arResult["PROPERTIES"]["RESULT"]["~VALUE"] as $key => $value) {
			
			if(!empty($value) && isset($value) && !empty($arResult["PROPERTIES"]["RESULT"]["DESCRIPTION"][$key]) && isset($arResult["PROPERTIES"]["RESULT"]["DESCRIPTION"][$key])){?>

			<div class="portfolio-result__item">

				<p class="text-bigger"><?=$arResult["PROPERTIES"]["RESULT"]["DESCRIPTION"][$key]?></p>

				<p class="portfolio-result__number"><?=$value?></p>

			</div>

		<?}}?>

		</div>

	</div>
	<?}?>

</section>