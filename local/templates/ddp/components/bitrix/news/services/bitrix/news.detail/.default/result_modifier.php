<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?
    $arResult['TITLE_FORM'] = $arResult["PROPERTIES"]["CONTACTS"]["VALUE"];
    
    $cp = $this->__component; // объект компонента
    
    if (is_object($cp))
    {
       // добавим в arResult компонента поля
       $cp->SetResultCacheKeys(array('TITLE_FORM'));
    }
?>