<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Инструменты");
?>
<section class="title">

    <div class="section title-info">
        <h1>Performance <span>инструменты</span></h1>
        <h2>Приводим покупателей из соцсетей</h2>
        <p>
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "title",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => ""
                )
            );?>
        </p>
    </div>

    <div class="title-pic">

        <img class="moon" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/moon.png" alt="">

        <img class="man" src="<?=SITE_TEMPLATE_PATH?>/_html/Result/Content/images/svg/cosmonaut.png" alt="">

    </div>

    </section>

    <section class="tools section section--mb">

    <div class="tools-works">

        <h2><span>Как</span> это работает?</h2>

        <div class="tools-works__list">
            <p>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "page",
                        "AREA_FILE_SUFFIX" => "works-1",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => ""
                    )
                );?>
            </p>
            <p>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "page",
                        "AREA_FILE_SUFFIX" => "works-2",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => ""
                    )
                );?>
            </p>
            <p>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "page",
                        "AREA_FILE_SUFFIX" => "works-3",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => ""
                    )
                );?>
            </p>
        </div>

    </div>

    <div class="tools-do">

        <h2><span>Как</span> мы это делаем</h2>

        <div class="tools-do__list">

            <div class="tools-do__item">

                <div class="tools-do__cell">

                    <div class="tools-do__number">
                        1
                    </div>

                    <div class="tools-do__title">
                        Запускаем тестовую рекламную кампанию
                    </div>

                </div>

                <p>Выясняем, в каких сообществах они состоят, что их привлекает в контенте и сколько всего людей можно охватить
                    рекламной кампанией. Теперь мы знаем как, кому и какие рекламные объявления показывать.
                    Основа успешной рекламной кампании заложена. Утверждаем KPI, формируем бюджет.
                </p>

            </div>

            <div class="tools-do__item">

                <div class="tools-do__cell">

                    <div class="tools-do__number">
                        2
                    </div>

                    <div class="tools-do__title">
                        Запускаем тестовую рекламную кампанию
                    </div>

                </div>

                <p>Выясняем, в каких сообществах они состоят, что их привлекает в контенте и сколько всего людей можно охватить
                    рекламной кампанией. Теперь мы знаем как, кому и какие рекламные объявления показывать.
                    Основа успешной рекламной кампании заложена. Утверждаем KPI, формируем бюджет.
                </p>

            </div>

            <div class="tools-do__item">

                <div class="tools-do__cell">

                    <div class="tools-do__number">
                        3
                    </div>

                    <div class="tools-do__title">
                        Запускаем тестовую рекламную кампанию
                    </div>

                </div>

                <p>Выясняем, в каких сообществах они состоят, что их привлекает в контенте и сколько всего людей можно охватить
                    рекламной кампанией. Теперь мы знаем как, кому и какие рекламные объявления показывать.
                    Основа успешной рекламной кампании заложена. Утверждаем KPI, формируем бюджет.
                </p>

            </div>

            <div class="tools-do__item">

                <div class="tools-do__cell">

                    <div class="tools-do__number">
                        4
                    </div>

                    <div class="tools-do__title">
                        Запускаем тестовую рекламную кампанию
                    </div>

                </div>

                <p>Анализируем на что люди кликают, а что их не цепляет.
                    Оптимизируем рекламную кампанию, доводим до ума подачу, таргетирование и картинки.
                    Теперь все объявления интересны людям.
                </p>

            </div>

            <div class="tools-do__item">

                <div class="tools-do__cell">

                    <div class="tools-do__number">
                        5
                    </div>

                    <div class="tools-do__title">
                        Запускаем тестовую рекламную кампанию
                    </div>

                </div>

                <p>Выясняем, в каких сообществах они состоят, что их привлекает в контенте и сколько всего людей можно охватить
                    рекламной кампанией. Теперь мы знаем как, кому и какие рекламные объявления показывать.
                    Основа успешной рекламной кампании заложена. Утверждаем KPI, формируем бюджет.
                </p>

            </div>

            <div class="tools-do__item">

                <div class="tools-do__cell">

                    <div class="tools-do__number">
                        6
                    </div>

                    <div class="tools-do__title">
                        Запускаем тестовую рекламную кампанию
                    </div>

                </div>

                <p>Выясняем, в каких сообществах они состоят, что их привлекает в контенте и сколько всего людей можно охватить
                    рекламной кампанией. Теперь мы знаем как, кому и какие рекламные объявления показывать.
                    Основа успешной рекламной кампании заложена. Утверждаем KPI, формируем бюджет.
                </p>

            </div>

        </div>

    </div>

    <div class="tools-advantages">

        <h2>Почему нужно заказать рекламу в социальных сетях у нас</h2>

        <div class="tools-advantages__list">

            <div class="tools-advantages__item">

                <h3>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "tools-title-1",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => ""
                        )
                    );?>
                </h3>

                <p>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "tools-p-1",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => ""
                        )
                    );?>
                </p>

            </div>

            <div class="tools-advantages__item">

                <h3>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "tools-title-2",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => ""
                        )
                    );?>
                </h3>

                <p>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "tools-p-2",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => ""
                        )
                    );?>
                </p>

            </div>

            <div class="tools-advantages__item">

                <h3>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "tools-title-3",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => ""
                        )
                    );?>
                </h3>

                <p>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "page",
                            "AREA_FILE_SUFFIX" => "tools-p-3",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => ""
                        )
                    );?>
                </p>

            </div>

        </div>

    </div>

    <div class="tools-form">

        <h2>Получите результат от рекламы в интернете!</h2>

        <div class="contact-form">
            <?$APPLICATION->IncludeComponent(
                "bitrix:form.result.new", 
                "custom", 
                array(
                    "CACHE_TIME" => "3600",
                    "CACHE_TYPE" => "A",
                    "CHAIN_ITEM_LINK" => "",
                    "CHAIN_ITEM_TEXT" => "",
                    "EDIT_URL" => "",
                    "IGNORE_CUSTOM_TEMPLATE" => "N",
                    "LIST_URL" => "",
                    "SEF_MODE" => "N",
                    "SUCCESS_URL" => "",
                    "USE_EXTENDED_ERRORS" => "N",
                    "WEB_FORM_ID" => "1",
                    "COMPONENT_TEMPLATE" => "custom",
                    "VARIABLE_ALIASES" => array(
                        "WEB_FORM_ID" => "WEB_FORM_ID",
                        "RESULT_ID" => "RESULT_ID",
                    )
                ),
                false
            );?>
        </div>

    </div>

</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>