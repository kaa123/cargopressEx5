<?
require($_SERVER["DOCUMENT_ROOT"].
    "/bitrix/modules/main/include/prolog_before.php");

$name = $_POST["name"];
$mail = $_POST["mail"];
$phone = $_POST["phone"];
$question = $_POST["question"];

$arResult = array();
if (CModule::IncludeModule("iblock")){
    if($mail != "" || $question != ""){

        $el = new CIBlockElement;

        $arFields = array(
            "ACTIVE" => "N",
            "IBLOCK_ID" => QUESTION_IBLOCK_ID,
            "IBLOCK_SECTION_ID" => false,
            "NAME" => "Пользователь $name с email $mail задал вопрос",
            "DETAIL_TEXT" => $question,
            "PROPERTY_VALUES" => array(
                "NAME" => $name,
                "EMAIL" => $mail,
                "PHONE" => $phone
            )
        );

        if($idElement = $el->Add($arFields, false, false, true)) {
            $url = "//".$_SERVER['SERVER_NAME']."/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=".QUESTION_IBLOCK_ID."&type=services&ID=".$idElement."&lang=ru&find_section_section=".ALL_QUESTIONS_SECTION_ID."&WF=Y";
            $arEventFields = array(
                "USER_EMAIL"          => $mail,
                "URL_ADMIN_EDIT"      => $url
            );

            CEvent::Send("NEW_QUESTION", SITE_ID, $arEventFields, "N", NEW_QUESTION_PATTERN);

            $arResult["SUCCESS"] = "Вопрос отправлен";
        } else {
            $arResult["ERROR"] = $el->LAST_ERROR;
        }

    }else{
        $arResult["ERROR"] = "заполните пустые поля";
    }
    echo json_encode($arResult);


}



