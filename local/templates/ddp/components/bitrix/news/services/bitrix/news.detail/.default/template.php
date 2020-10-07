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
<section class="title">

	<div class="section title-info">
		<h1><?=$arResult["NAME"]?></h1>
		<h2><?=$arResult["PROPERTIES"]["HEADER"]["VALUE"]?></h2>
		<p><?=$arResult["DETAIL_TEXT"]?></p>
	</div>

	<div class="title-pic">

		<img class="moon" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/moon.png" alt="">

		<img class="man" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/cosmonaut.png" alt="">

	</div>

</section>

<section class="tools section section--mb">

	<?if(count($arResult["PROPERTIES"]["HIW"]["VALUE"]) && !empty($arResult["PROPERTIES"]["HIW"]["VALUE"][0])){?>

	<div class="tools-works">

		<h2><!--<span>Как</span> это работает?--><?=$arResult["PROPERTIES"]["HEADER_HIW"]["VALUE"]?></h2>

		<div class="tools-works__list">
<?foreach($arResult["PROPERTIES"]["HIW"]["VALUE"] as $prop){?>
			<p><?=$prop?></p>
<?}?>
		</div>

	</div>

	<?}?>

	<?if(isset($arResult["PROPERTIES"]["HDWDI"]["~VALUE"]["TEXT"]) && !empty($arResult["PROPERTIES"]["HDWDI"]["~VALUE"]["TEXT"])){?>

	<div class="tools-do">

		<h2><!--<span>Как</span> мы это делаем--><?=$arResult["PROPERTIES"]["HEADER_HDWDI"]["VALUE"]?></h2>

		<div class="tools-do__list">

<?/*
	$i=1;
	foreach($arResult["PROPERTIES"]["HDWDI"]["VALUE"] as $key => $prop){*/
?>

			<div class="tools-do__item">
<?/*
				<div class="tools-do__cell">

					<div class="tools-do__number">
						<?=$i?>
					</div>

					<div class="tools-do__title"><?=$arResult["PROPERTIES"]["HDWDI"]["VALUE"]["TEXT"]?></div>

				</div>

				<p><?=$prop?></p>
*/?>

				<?=$arResult["PROPERTIES"]["HDWDI"]["~VALUE"]["TEXT"]?>

			</div>

<?/*
		$i++;
	}*/
?>

		</div>

	</div>

	<?}?>

	<?if(count($arResult["PROPERTIES"]["WIIWWWU"]["VALUE"]) && !empty($arResult["PROPERTIES"]["WIIWWWU"]["VALUE"][0])){?>

	<div class="tools-advantages">

		<h2>Почему стоит работать с нами</h2>

		<div class="tools-advantages__list">

<?foreach($arResult["PROPERTIES"]["WIIWWWU"]["VALUE"] as $key => $prop){?>

			<div class="tools-advantages__item">

				<h3><?=$arResult["PROPERTIES"]["WIIWWWU"]["DESCRIPTION"][$key]?></h3>

				<p><?=$prop?></p>

			</div>

<?}?>

		</div>

	</div>

	<?}?>