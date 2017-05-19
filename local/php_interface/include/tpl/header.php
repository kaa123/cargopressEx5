<? use Bitrix\Main\Page\Asset;
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Главная | CargoPress</title>
    <?$APPLICATION->ShowHead()?>
    <!-- Styling -->
    <?
    Asset::getInstance()->addCss("/local/assets/css/style.css");
    Asset::getInstance()->addCss("/local/assets/css/magnific-popup.css");

    Asset::getInstance()->addJs("/local/assets/js/modernizr.custom.24530.js");

    Asset::getInstance()->addJs("/local/assets/js/jquery-2.1.4.min.js");
    Asset::getInstance()->addJs("/local/assets/js/bootstrap/carousel.js");
    Asset::getInstance()->addJs("/local/assets/js/bootstrap/transition.js");
    Asset::getInstance()->addJs("/local/assets/js/bootstrap/button.js");
    Asset::getInstance()->addJs("/local/assets/js/bootstrap/collapse.js");
    Asset::getInstance()->addJs("/local/assets/js/bootstrap/validator.js");
    Asset::getInstance()->addJs("/local/assets/js/bootstrap/modal.js");
    Asset::getInstance()->addJs("/local/assets/js/jquery.maskedinput.min.js");
    Asset::getInstance()->addJs("/local/assets/js/underscore.js");
    Asset::getInstance()->addJs("/local/assets/js/SimpleMap.js");
    Asset::getInstance()->addJs("/local/assets/js/NumberCounter.js");
    Asset::getInstance()->addJs("/local/assets/js/jquery.magnific-popup.min.js");
    Asset::getInstance()->addJs("/local/assets/js/custom.js");
    Asset::getInstance()->addJs("/local/assets/js/script.js");

    ?>
</head>
<body>
    <?$APPLICATION->ShowPanel();?>
    <!-- MAIN PAGE CONTAINER -->
    <div class="boxed-container">
        
        <!-- HEADER -->
        <div class="header__container">
            
            <div class="container">
                
                <header class="header">
                    
                    <div class="header__logo">
                        <a href="index.html">
                            <img class="img-responsive" srcset="/local/assets/images/logo.png" alt="CargoPress" src="/local/assets/images/logo.png">
                        </a>
                        <button data-target="#cargopress-navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                            <span class="navbar-toggle__text">Меню</span>
                            <span class="navbar-toggle__icon-bar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                        </button>
                    </div><!-- /.header__logo -->
                    
                    <div class="header__navigation">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "horizontal_multilevel",
                            array(
                                "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                                "ROOT_MENU_TYPE" => "top",
                                "MENU_CACHE_TYPE" => "A",
                                "MENU_CACHE_TIME" => "360000",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array(
                                ),
                                "MAX_LEVEL" => "2",
                                "CHILD_MENU_TYPE" => "left",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "USE_EXT" => "N"
                            ),
                            false
                        );?>
                    </div><!-- /.header__navigation -->
                    
                    <div class="header__widgets">
                        
                        <div class="widget-icon-box">
                            
                            <div class="icon-box">  
                                <i class="fa fa-headphones"></i>
                                <h4 class="icon-box__title">Телефон</h4>
                                <span class="icon-box__subtitle">
                                    <?$APPLICATION->IncludeFile(
                                        $APPLICATION->GetTemplatePath("include_areas/phone.html"),
                                        Array(),
                                        Array("MODE"=>"html")
                                    );?>
                                </span>
                            </div>
                        
                        </div>
                        
                        <div class="widget-icon-box">
                            
                            <div class="icon-box">  
                                <i class="fa fa-clock-o"></i>
                                <h4 class="icon-box__title">Время работы</h4>
                                <span class="icon-box__subtitle">
                                    <?  $APPLICATION->IncludeComponent(
	"dv:date.current", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"BEGINNING_WORK_DAY" => "8",
		"END_WORK_DAY" => "20",
		"MONDAY" => "N",
		"TUESDAY" => "N",
		"WEDNESDAY" => "N",
		"THURSDAY" => "N",
		"FRIDAY" => "N",
		"SATURDAY" => "Y",
		"SUNDAY" => "Y"
	),
	false
);
                                    ?>
                                </span>
                            </div>
                        
                        </div>
                    
                        <div class="widget-icon-box">
                            
                            <div class="icon-box">
                                <i class="fa fa-envelope-o"></i>
                                <h4 class="icon-box__title">Email</h4>
                                <span class="icon-box__subtitle">
                                    <?$APPLICATION->IncludeFile(
                                        $APPLICATION->GetTemplatePath("include_areas/email.php"),
                                        Array(),
                                        Array("MODE"=>"html")
                                    );?>
                                </span>
                            </div>
                            
                        </div>
                    
                        <a target="_self" class="btn btn-info" id="button_requestQuote"  data-toggle="modal" data-target="#myModal">Задать вопрос</a>
                
                    </div><!-- /.header__widgets -->
                
                    <div class="header__navigation-widgets">
                        <a target="_blank" href="#" class="social-icons__link"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="#" class="social-icons__link"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#" class="social-icons__link"><i class="fa fa-wordpress"></i></a>
                        <a target="_blank" href="#" class="social-icons__link"><i class="fa fa-youtube"></i></a>
                    </div>
            
                </header>
            
            </div><!-- /.container -->
        
        </div><!-- /.header__container -->
        
