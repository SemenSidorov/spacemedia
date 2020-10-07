<?

\Bitrix\Main\Loader::registerAutoLoadClasses(null, array(
    'SeoMod'    => '/local/php_interface/lib/seomod.php'
));

// отлавливаем и обрабатываем 404 ошибки
AddEventHandler('main', 'OnEpilog', array('SeoMod', 'Check404Error'));

AddEventHandler('iblock', 'OnBeforeIBlockElementAdd', 'IBFeedForm');
function IBFeedForm(&$arFields)
{
	$SITE_ID = 's1';
	$EVEN_TYPE = '';
	$arFeedForm = array();
	if($arFields['IBLOCK_ID'] == 9) {
		$EVEN_TYPE = 'SEND_QUESTION';
		$arFeedForm = array(
			"NAME" => $arFields['NAME'],
			"PHONE" => $arFields['PROPERTY_VALUES']['PHONE'],
			"EMAIL" => $arFields['PROPERTY_VALUES']['EMAIL'],
			"QUESTION" => $arFields['PROPERTY_VALUES']['MESSAGE'],
		);
		CEvent::Send($EVEN_TYPE, $SITE_ID, $arFeedForm );
	}	
}
?>
