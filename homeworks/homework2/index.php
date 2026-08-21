<?php

use Bitrix\Main\Page\Asset;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("ДЗ #2: Отладка и логирование");



?>


    <h1 class="mb-3"><?php  $APPLICATION->ShowTitle() ?></h1>

    <h4 class="mb-3">Пояснительная записка</h4>
    <pre style="color: red;font-style: italic;">
        Реализован механиз логирования:
            * логирование ошибок в коде
            * логирование событий

        0.    git https://github.com/anatoliiR/2026-05-otus-bitrix24-reznikov

        1.    Написан <a href="/bitrix/admin/fileman_file_edit.php?path=%2Flocal%2Fsrc%2FExceptionHandler.php&full_src=Y&site=s1&lang=ru&&filter=Y&set_filter=Y" target="_blank">ExceptionHandler логер</a>
        1.1   Cам лог хранится <a href="/local/logs/writeExeptions.txt" target="_blank">здесь</a>
        1.2   Файл с ошибкой для записи в <a href="/homeworks/homework2/writeexception.php" target="_blank">лог</a>
        1.3   Здесь его можно очистить<a href="/homeworks/homework2/clearexception.php"  target="_blank"> очистить</a>

        2.    Написан <a href="/bitrix/admin/fileman_file_edit.php?path=%2Flocal%2Fsrc%2FLogger.php&full_src=Y&site=s1&lang=ru&&filter=Y&set_filter=Y" target="_blank">"Бизнес" логер</a>
        2.1   Файл с логом посещения страницы <a href="/homeworks/homework2/writelog.php" target="_blank">лог</a>
        2.2   Здесь его можно очистить<a href="/homeworks/homework2/clearlog.php"  target="_blank"> очистить</a>
        2.3   Cам лог хранится <a href="/local/logs/writelog.txt" target="_blank">здесь</a>

    </pre>
    <br>
    <br>
    <hr>



<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>

