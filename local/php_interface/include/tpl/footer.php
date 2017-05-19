<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();  ?>

		<!-- FOOTER -->
		<footer class="footer">
			
			<div class="footer-top">
				
				<div class="container">
					
					<div class="row">
						
						<div class="col-xs-12 col-md-4">
							
							<p>
								<img alt="logo-footer" src="/local/assets/images/logo-footer.png" class="logo">
							</p>
							<p>
                                <?$APPLICATION->IncludeFile(
                                    $APPLICATION->GetTemplatePath("include_areas/about.html"),
                                    Array(),
                                    Array("MODE"=>"html")
                                );?>
							</p>
							<p>
								<a target="_blank" href="#" class="icon-container icon-container--square">
									<span class="fa fa-facebook"></span>
								</a>
								<a target="_blank" href="#" class="icon-container icon-container--square">
									<span class="fa fa-twitter"></span>
								</a>
								<a target="_blank" href="#" class="icon-container icon-container--square">
									<span class="fa fa-wordpress"></span>
								</a>
								<a target="_blank" href="#" class="icon-container icon-container--square">
									<span class="fa fa-youtube-play"></span>
								</a>
							</p>
							
						</div><!-- /.row -->
						
						<div class="col-xs-12 col-md-2">
							
							<div class="widget_nav_menu">
								
								<h6 class="footer-top__headings">Услуги</h6>
								<?$APPLICATION->IncludeComponent(
									"bitrix:menu", 
									"bottom", 
									array(
										"ALLOW_MULTI_SELECT" => "N",
										"CHILD_MENU_TYPE" => "left",
										"DELAY" => "N",
										"MAX_LEVEL" => "1",
										"MENU_CACHE_GET_VARS" => array(
										),
										"MENU_CACHE_TIME" => "360000",
										"MENU_CACHE_TYPE" => "A",
										"MENU_CACHE_USE_GROUPS" => "Y",
										"ROOT_MENU_TYPE" => "bottom",
										"USE_EXT" => "Y",
										"COMPONENT_TEMPLATE" => "bottom"
									),
									false
								);?>
								
							</div><!-- /.widget_nav_menu -->
							
						</div><!-- /.row -->						
						
					</div><!-- /.row -->
					
				</div><!-- /.footer -->
				
			</div><!-- /.footer-top -->
			
			<div class="footer-bottom">
				
				<div class="container">

                    <div class="footer-bottom__right">
                        &copy; <?=getCopyrightYearRange(2016)?> CargoPress. Все права защищены
                    </div>
					
				</div><!-- /.container -->
				
			</div><!-- /.footer-bottom -->
			
		</footer>
		
	</div><!-- /.boxed-container -->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Задать вопрос</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="form-question" id="form-question">
                    <div class="modal-body">
                        <input type="text" placeholder="Имя" name="name">
                        <input type="email" placeholder="email" required name="mail">
                        <input type="tel" placeholder="Телефон" id="phone" name="phone">
                        <textarea placeholder="Вопрос" required name="question"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary send">Отправить</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


</body>
</html>