<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<section class="contact section section--mb">
    <p class="text-bigger">Хотите обсудить проект? Оставьте контакты, и наши менеджеры свяжутся с вами в ближайшее время.</p>
    <div class="contact-block">
        <div class="contact-form">
            <?if(isset($_COOKIE["send"])){ echo $_COOKIE["send"]; } else {
                if(isset($_COOKIE["errors"])) echo $_COOKIE["errors"];?>
            <form action="<?=SITE_TEMPLATE_PATH?>/ajax.php" method="post">
                <input name="name" type="text" placeholder="Ваше имя">
                <input name="phone" type="text" placeholder="Контактный телефон" data-mask="+7-000-000-00-00" id="phone">
                <input name="email" type="text" placeholder="Email">
                <textarea name="text" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
                <input class="btn" type="submit" value="Отправить">
            </form>
            <?}?>
        </div>
        <div class="contact-info">
            <a class="contact-info__item contact-phone" href="tel:<?=file_get_contents($_SERVER['DOCUMENT_ROOT']."/index_phone.php");?>">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/index_phone.php"
					)
				);?>
			</a>
			<a class="contact-info__item contact-mail" href="mailto:<?=file_get_contents($_SERVER['DOCUMENT_ROOT']."/index_mail.php");?>">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/index_mail.php"
					)
				);?>
			</a>
			<div class="contact-info__item contact-address">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/index_address.php"
					)
				);?>
			</div>
        </div>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>