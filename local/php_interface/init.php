<?
define("QUESTION_IBLOCK_ID", 11);
define("ALL_QUESTIONS_SECTION_ID", 90);
define("ANSWER_SEND_PATTERN", 9);
define("NEW_QUESTION_PATTERN", 8);

function getCopyrightYearRange($startYear){
    $today = date("Y");
    if($startYear == $today){
        return $startYear;
    }else{
        return $startYear." - ".$today;
    }
};

AddEventHandler("iblock", "OnAfterIBlockElementUpdate", "OnAfterIBlockElementUpdateHandler");

// создаем обработчик события "OnAfterIBlockElementUpdate"
function OnAfterIBlockElementUpdateHandler($arFields)
{
    if($arFields['IBLOCK_ID'] == QUESTION_IBLOCK_ID ){




        if(in_array (ALL_QUESTIONS_SECTION_ID, $arFields["IBLOCK_SECTION"])){

            if ($arFields['ACTIVE']=="Y"){

                $firstKey = reset(array_keys($arFields['PROPERTY_VALUES'][65]));

                $arEventFields = array(
                    "USER_EMAIL"          => $arFields['PROPERTY_VALUES'][65][$firstKey]['VALUE']
                );

                CEvent::Send("ANSWER_SEND", "s1", $arEventFields, "N", ANSWER_SEND_PATTERN);
            }
        }

    }

}

