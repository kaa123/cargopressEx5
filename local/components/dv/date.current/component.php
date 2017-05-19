<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$time = date('H', time() + CTimeZone::GetOffset());
$day = date('w');

$beginningWorkDay = $arParams["BEGINNING_WORK_DAY"];
$endWorkDay = $arParams["END_WORK_DAY"];
$weekend = array();

if ($arParams["MONDAY"]=="Y") {
	$weekend[] = 1;
}if($arParams["TUESDAY"]=="Y"){
	$weekend[] = 2;
}if($arParams["WEDNESDAY"]=="Y"){
	$weekend[] = 3;
}if($arParams["THURSDAY"]=="Y"){
	$weekend[] = 4;
}if($arParams["FRIDAY"]=="Y"){
	$weekend[] = 5;
}if($arParams["SATURDAY"]=="Y"){
	$weekend[] = 6;
}if($arParams["SUNDAY"]=="Y"){
	$weekend[] = 0;
}


foreach ($weekend as $key => $value) {
	if($day == $value || $time > $endWorkDay || $time < $beginningWorkDay){
            $arResult['IS_WORK'] = false;
	}else{
        $arResult['IS_WORK'] = true;
		$arResult['WORK_TIME'] = "$beginningWorkDay:00 - $endWorkDay:00";
	}
}

$this->IncludeComponentTemplate();