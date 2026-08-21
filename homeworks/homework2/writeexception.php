<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Ошибка для exeption");
$p = new \Local\App\ExceptionHandler();

?>
<ul class="list-group">
    <li class="list-group-item">
        <a href="/local/logs/writeExceptions.txt">Файл лога</a>
    </li>
</ul>
<?php
echo (100/0);

?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
