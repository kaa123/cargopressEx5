<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


                <div class="col-xs-12  col-md-3">
					
					<div class="sidebar widget_nav_menu faq">
                        <ul class="menu" id="menu-services-menu">
                            <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                                "ALLOW_MULTI_SELECT" => "N",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => "",
                                    "MENU_CACHE_TIME" => "360000",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "right",
                                    "USE_EXT" => "Y",
                                    "COMPONENT_TEMPLATE" => "bottom",
                                    "CHILD_MENU_TYPE" => "left"
                                ),
                                false,
                                array(
                                "ACTIVE_COMPONENT" => "Y"
                                )
                            );?>
						</ul>
					</div>
					
					<a target="_self" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">Задать вопрос</a>


				</div><!-- /.col -->
				
			</div><!-- /.row -->
			
		</div><!-- /.container -->

<? require($_SERVER['DOCUMENT_ROOT']."/local/php_interface/include/tpl/footer.php");?>