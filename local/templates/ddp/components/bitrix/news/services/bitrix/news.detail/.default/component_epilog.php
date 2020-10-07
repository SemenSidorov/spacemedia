

    <div class="tools-form">

        <h2><?=$arResult["TITLE_FORM"]?></h2>

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

    </div>



</section>