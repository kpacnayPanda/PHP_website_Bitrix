<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<h4> <?=GetMessage('SHOP')?></h4>

<?if (!empty($arResult)):?>
<ul>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<li><a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?><span></a></li>
	
<?endforeach?>

</ul>
<?endif?>
