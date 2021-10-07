<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="sb_reviewed">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
	    	<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="rw_avatar" alt=""/>
		<?endif;?>
        <span class="sb_rw_name"><?echo $arItem["NAME"]?></span>
        <span class="sb_rw_job">
        	<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?> 
				<?if(is_array($arProperty["DISPLAY_VALUE"])):?> 
					<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
				<?else:?>
					<?=$arProperty["DISPLAY_VALUE"];?>
				<?endif?> 
			<?endforeach;?> 
		</span>
        <p><?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
				<?echo $arItem["PREVIEW_TEXT"];?>
			<?endif;?>
		</p>
        <div class="clearboth"></div>
        <div class="sb_rw_arrow"></div>
        <br><a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="sb_action_more">Подробнее &rarr;</a>
	<?endforeach;?>
</div>
