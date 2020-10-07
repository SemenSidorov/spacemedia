<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Об агенстве");
?>
<section class="about section section--mb">
    
    <div class="statistics statistics--mb">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/index_statistics.php"
            )
        );?>
    </div>

    <div class="about-perk">
        <h2><span>Приходите</span> к нам</h2>
        <div class="about-perk-block">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "if",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => ""
                )
            );?>
        </div>
    </div>

    <div class="about-progress">
        <h2>Достижения</h2>

        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "achievements",
            Array(
                "ACTIVE_DATE_FORMAT" => "j F Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("",""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "10",
                "IBLOCK_TYPE" => "info",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "20",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("QUANTITY",""),
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );?>

    </div>

    <div class="about-company">

        <div class="about-slider">

            <div class="about-slider__item">
                <img src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/about/1.png" alt="">
            </div>

            <div class="about-slider__item">
                <img src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/about/2.png" alt="">
            </div>

            <div class="about-slider__item">
                <img src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/about/3.png" alt="">
            </div>

            <div class="about-slider__item">
                <img src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/about/4.png" alt="">
            </div>

            <div class="about-slider__item">
                <img src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/about/5.png" alt="">
            </div>

            <div class="about-slider__item">
                <img src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/about/2.png" alt="">
            </div>

            <div class="about-slider__item">
                <img src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/about/3.png" alt="">
            </div>

            <div class="about-slider__item">
                <img src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/about/4.png" alt="">
            </div>

        </div>

        <button class="arrow arrow--prev"></button>
        <button class="arrow arrow--next"></button>

    </div>

</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>