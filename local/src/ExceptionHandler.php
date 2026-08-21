<?php
namespace Local\App;

use Bitrix\Main;
use Bitrix\Main\Diag\ExceptionHandlerLog;
use Bitrix\Main\Diag\FileLogger;
use Psr\Log;

class ExceptionHandler extends \Bitrix\Main\Diag\ExceptionHandlerLog
{
    protected $logger;
    private int $level;

    public function write($exception, $logType)
    {
        $text = \Bitrix\Main\Diag\ExceptionHandlerFormatter::format($exception, false, $this->level);

        $context = [
            'type' => static::logTypeToString($logType),
        ];

        $logLevel = static::logTypeToLevel($logType);

        $message = "OTUS {date} - Host: {host} - {type} - {$text}\n";
        $this->logger->log($logLevel, $message, $context);
    }

    public function initialize(array $options)
    {
        $logFile="/local/logs/log.log";
        if (isset($options["file"]) && !empty($options["file"]))
        {
            $logFile = $options["file"];
        }

            $logFile = Main\Application::getDocumentRoot()."/".$logFile;

        $maxLogSize = 1000;
        if (isset($options["log_size"]) && $options["log_size"] > 0)
        {
            $maxLogSize = (int)$options["log_size"];
        }

        $this->logger = new FileLogger($logFile, $maxLogSize);
        $this->level=0;
        if (isset($options["level"]) && $options["level"] > 0)
        {
            $this->level = (int)$options["level"];
        }
    }

}