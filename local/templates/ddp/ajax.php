<?
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
?>

<?
if (!empty($_REQUEST['name'])) {

    CModule::IncludeModule('iblock');

    //Погнали
    $el = new CIBlockElement;
    $iblock_id = 9;

    //Свойства
    $PROP = array();

    $PROP['PHONE'] = $_POST['phone']; //Свойство Строка
    $PROP['EMAIL'] = $_POST['email']; //Свойство Строка
    $PROP['MESSAGE'] = $_POST['text']; //Свойство Строка

    //Основные поля элемента
    $fields = array(
        "DATE_CREATE" => date("d.m.Y H:i:s"), //Передаем дата создания
        "CREATED_BY" => $GLOBALS['USER']->GetID(),    //Передаем ID пользователя кто добавляет
        "IBLOCK_ID" => $iblock_id, //ID информационного блока он 24-ый
        "PROPERTY_VALUES" => $PROP, // Передаем массив значении для свойств
        "NAME" => strip_tags($_REQUEST['name']),
        "ACTIVE" => "N", //поумолчанию делаем активным или ставим N для отключении поумолчанию
    );
    
    //Результат в конце отработки
    if ($ID = $el->Add($fields)) {
        $value = "<h3><span>Спасибо! Наш менеджер скоро с Вами свяжется!</span></h3>";
        setcookie("send", $value, time()+600, "/");
        setcookie("errors", "", time());
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    } else {
        $value = "<h3><span>Произошел как-то косяк Попробуйте еще разок</span></h3>";
        setcookie("errors", $value, time()+600, "/");
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    }
} else {
    $value = '<h5 style="color: red;">Не заполнено обязательное поле: "Ваше имя"</h3>';
    setcookie("errors", $value, time()+600, "/");
    header("Location: ".$_SERVER["HTTP_REFERER"]);
}
?>