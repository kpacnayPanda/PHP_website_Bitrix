<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div><span class="main_date"><?echo $arResult["DISPLAY_ACTIVE_FROM"]?></span></div>
<?if(is_array($arResult["DETAIL_PICTURE"])):?>
<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" align="left" alt="<?=$arResult["NAME"]?>"/> 
<?endif;?>
<?echo $arResult["DETAIL_TEXT"];?>