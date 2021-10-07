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

<div class="sb_action">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
	    	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""/></a>
		<?endif;?>
	    <h4><?=$arItem["NAME"]?></h4>
	    <h5><?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?> P<br />
		<?endforeach;?></a></h5>
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="sb_action_more">Подробнее &rarr;</a> 
	<?endforeach;?>
</div>
