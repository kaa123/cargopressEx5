<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

    if($arResult['IS_WORK']){
        echo $arResult['WORK_TIME'];
    }else{
        echo "Сейчас не работаем";
    }
