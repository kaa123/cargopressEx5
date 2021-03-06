<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <nav class="collapse navbar-collapse" id="cargopress-navbar-collapse">
        <ul class="main-navigation js-main-nav">

            <?
            $previousLevel = 0;
            foreach($arResult as $arItem):?>

            <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
                <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
            <?endif?>

            <?if ($arItem["IS_PARENT"]):?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <li class="menu-item-has-children"><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?><?else:?><?endif?>"><?=$arItem["TEXT"]?></a>
                <ul role="menu" class="sub-menu">
                    <?else:?>
                    <li <?if ($arItem["SELECTED"]):?> <?endif?>><a href="<?=$arItem["LINK"]?>" class=""><?=$arItem["TEXT"]?></a>
                        <ul role="menu" class="sub-menu">
                            <?endif?>

                            <?else:?>

                                <?if ($arItem["PERMISSION"] > "D"):?>

                                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                                        <li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?><?else:?><?endif?>"><?=$arItem["TEXT"]?></a></li>
                                    <?else:?>
                                        <li<?if ($arItem["SELECTED"]):?> class="current-menu-item"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                                    <?endif?>

                                <?else:?>

                                    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                                        <li><a href="" class="<?if ($arItem["SELECTED"]):?><?else:?><?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
                                    <?else:?>
                                        <li><a href="" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
                                    <?endif?>

                                <?endif?>

                            <?endif?>

                            <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

                            <?endforeach?>

                            <?if ($previousLevel > 1)://close last item tags?>
                                <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
                            <?endif?>

                        </ul>
    </nav>
<?endif?>