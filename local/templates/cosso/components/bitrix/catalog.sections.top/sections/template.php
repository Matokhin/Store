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


<div class="nav nav-tabs nav-justified nav-filter white">
    <ul class="owl-carousel owl-theme js-owl-category">
        <li><a href="/catalog/">Все</a></li>
        <?foreach($arResult["SECTIONS"] as $arSection):?>
            <?if($arSection["DEPTH_LEVEL"] == 1):?>
                <li><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a></li>
            <?endif;?>
        <?endforeach?>

    </ul>
</div>
