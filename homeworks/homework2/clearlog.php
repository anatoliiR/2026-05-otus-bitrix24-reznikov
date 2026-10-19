<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
if (file_exists(__DIR__ . "/local/logs/writelog.txt")) {
    unlink(__DIR__ . "/local/logs/writelog.txt");
}

LocalRedirect('/otus/students_dz/homework2/');
