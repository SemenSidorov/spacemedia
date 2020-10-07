<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?

    $arResult['OGImage'] = $arResult["DETAIL_PICTURE"]["SRC"];
    
    $cp = $this->__component; // объект компонента
    
    if (is_object($cp))
    {
       // добавим в arResult компонента поля
       $cp->SetResultCacheKeys(array('OGImage'));
    }
?>