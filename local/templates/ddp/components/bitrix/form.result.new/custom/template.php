<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>


<?//=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
	
<?if ($arResult["isFormNote"] != "Y")
{
?>
<?=$arResult["FORM_HEADER"]?>
<?
/***********************************************************************************
						form questions
***********************************************************************************/
?>
	<?
	foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
	{
		if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
		{
			echo $arQuestion["HTML_CODE"];
		}
		else
		{
			if($arQuestion["STRUCTURE"][0]["QUESTION_ID"] == 3){ $type = 'type="email"';}
			elseif($arQuestion["STRUCTURE"][0]["QUESTION_ID"] == 2){ $type = 'type="tel" data-mask="+7-000-000-00-00"';}
			else { $type = 'type="text"';}

			$OldStyle = array('inputtext', "input", "<textarea", 'type="text"');

			$NewStyle   = array("form__field", 'input placeholder="'.$arQuestion["CAPTION"].'"', '<textarea placeholder="'.$arQuestion["CAPTION"].'"', $type);
			
			$NewCode = str_replace($OldStyle, $NewStyle, $arQuestion["HTML_CODE"]);
			
			echo $NewCode;
			
			/*if ($arQuestion["REQUIRED"] == "Y"){?><span class="form__error">Обязательное поле для заполнения</span><?}*/

		}
	} //endwhile
	?>

	<input class="btn" type="submit" name="web_form_submit" value="Отправить">

<?=$arResult["FORM_FOOTER"]?>
<?
}else{
	?>
		<h3><span>Спасибо! Наш менеджер скоро с Вами свяжется!</span></h3>
	<?
} //endif (isFormNote)
?>