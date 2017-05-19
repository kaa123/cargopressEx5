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
            <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "breadcrumbs",
                array(
                    "START_FROM" => "0",
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "COMPONENT_TEMPLATE" => "breadcrumbs"
                ),
                false
            );?>
        </div><!-- /.breadcrumbs -->

        <div class="container">

            <div class="row margin-bottom-60 hentry">

