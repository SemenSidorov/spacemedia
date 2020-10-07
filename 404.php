<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
/*
$APPLICATION->IncludeComponent("bitrix:main.map", ".default", Array(
	"LEVEL"	=>	"3",
	"COL_NUM"	=>	"2",
	"SHOW_DESCRIPTION"	=>	"Y",
	"SET_TITLE"	=>	"Y",
	"CACHE_TIME"	=>	"36000000"
	)
);
*/
?>

<section class="title no-page">

	<div class="section title-info" >
		<h1><span>404</span></h1>
		<span>Страница не найдена</span>
		<p>Возможно она была удалена с сервера или никогда не существовала. Возможно Вы ошиблись при вводе url - адреса страницы.</p>
		<a class="btn" href="/" style="display: inline-block;">Перейти на главную</a>
	</div>

	<div class="title-pic">

		<img class="moon" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/moon.png" alt="">

		<img class="man" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/cosmonaut.png" alt="">

	</div>

</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>