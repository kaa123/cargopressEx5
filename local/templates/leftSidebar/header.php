<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
require($_SERVER['DOCUMENT_ROOT']."/local/php_interface/include/tpl/header.php"); ?>
        <!-- MAIN TITLE -->
        <div class="main-title">
            <div class="container">
                <h1 class="main-title__primary"><? $APPLICATION->ShowTitle() ?></h1>
            </div>
        </div><!-- /.main-title -->

        <!-- BREADCRUMBS -->
        <div class="breadcrumbs">
            <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", Array(
                "START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
                "PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                "SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
            ),
                false
            );?>
        </div><!-- /.breadcrumbs -->

        <div class="container">

            <div class="row">
		
