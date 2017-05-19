<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
 $arComponentParameters = array(
	"GROUPS" => array(
		"WEEKEND"    =>  array(
            "NAME"  =>  "Выходные",
            "SORT"  =>  "300",
    	),
    	"TIME_WORK"    =>  array(
            "NAME"  =>  "Время работы",
            "SORT"  =>  "200",
    	),
	),
	"PARAMETERS" => array(
		"BEGINNING_WORK_DAY" => array(
			"PARENT" => "TIME_WORK",
			"NAME" => "Начало рабочего дня",
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "8"
		),
		"END_WORK_DAY" => array(
			"PARENT" => "TIME_WORK",
			"NAME" => "Конец рабочего дня",
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "20"
		),
		
		"MONDAY"	=> array(
			"PARENT" => "WEEKEND",
			"NAME" => "Понедельник",
			"TYPE" => "CHECKBOX",
			"MULTIPLE" => "N",
			"DEFAULT" => "N"
		),
		"TUESDAY"	=> array(
			"PARENT" => "WEEKEND",
			"NAME" => "Вторник",
			"TYPE" => "CHECKBOX",
			"MULTIPLE" => "N",
			"DEFAULT" => "N"
		),
		"WEDNESDAY"	=> array(
			"PARENT" => "WEEKEND",
			"NAME" => "Среда",
			"TYPE" => "CHECKBOX",
			"MULTIPLE" => "N",
			"DEFAULT" => "N"
		),
		"THURSDAY"	=> array(
			"PARENT" => "WEEKEND",
			"NAME" => "Четверг",
			"TYPE" => "CHECKBOX",
			"MULTIPLE" => "N",
			"DEFAULT" => "N"
		),
		"FRIDAY"	=> array(
			"PARENT" => "WEEKEND",
			"NAME" => "Пятница",
			"TYPE" => "CHECKBOX",
			"MULTIPLE" => "N",
			"DEFAULT" => "N"
		),
		"SATURDAY"	=> array(
			"PARENT" => "WEEKEND",
			"NAME" => "Суббота",
			"TYPE" => "CHECKBOX",
			"MULTIPLE" => "N",
			"DEFAULT" => "N"
		),
		"SUNDAY"	=> array(
			"PARENT" => "WEEKEND",
			"NAME" => "Воскресенье",
			"TYPE" => "CHECKBOX",
			"MULTIPLE" => "N",
			"DEFAULT" => "N"
		)
		
	)
);