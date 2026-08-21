<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

if (file_exists(__DIR__ . "/writeExeptions.txt")) {
    unlink(__DIR__ . "/writeExeptions.txt");
}
LocalRedirect('/otus/students_dz/homework2/');

