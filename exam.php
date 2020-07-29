//Текущая страница не главная
<?if($APPLICATION->GetCurPage(false) !== '/'):?>
    <header>
        <h1><?$APPLICATION->ShowTitle()?></h1>
    </header>
    <hr>
<?endif;?>
//Изменение в зависимости от времени
<div class="main-phone-block">
    <?if((date('G') >= 9) && (date('G') <= 18)):?>
        <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
    <?else:?>
        <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
    <?endif;?>
    <div class="shedule">время работы с 9-00 до 18-00</div>
</div>
//
https://dev.1c-bitrix.ru/learning/course/?COURSE_ID=43&INDEX=Y
//Цвет меню
class="<?=(array_key_exists("COLOR", $arItem["PARAMS"]) ? "color-" . $arItem["PARAMS"]["COLOR"] : "")?>"
//включаемые области разделов
<? if (0 != filesize( $arResult["FILE"] )): ?> <!-- эта проверка необязательна, но можно использовать, если встроенной проверки компонента нет -->
    <div class="side-block side-anonse">
        <div class="title-block"><span class="i i-title01"></span>Полезная информация!</div>
        <div class="item">
            <?if($arResult["FILE"] <> '')
                include($arResult["FILE"]);?>
        </div>
    </div>
<? endif; ?>