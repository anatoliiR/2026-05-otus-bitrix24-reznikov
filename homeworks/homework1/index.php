<?php
use Bitrix\Main\Page\Asset;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("ДЗ #1: Создание и настройка проекта в VScode");


?>
    <h1 class="mb-3"><?php  $APPLICATION->ShowTitle() ?></h1>

    <h4 class="mb-3">Пояснительная записка</h4>
    <pre style="color: red;font-style: italic;">
        0. git https://github.com/anatoliiR/2026-05-otus-bitrix24-reznikov
        1. Установлен bitrix24 на хостинг timeweb
        1.1 Для работы CI/CD настроен .github/workflows/deploy.yml и выключен режим защиты у сайта  timeweb
        2. Локально проект запущен в https://github.com/sashazenit4/bitrix24-docker#
        3. В папку Local установлен composer и bitrix24/local-project
    </pre>
    <br>
    <br>
    <hr>



<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>