<?php
namespace Local\App;

use Bitrix\Main\Config\Configuration;
use Bitrix\Main\Diag\FileLogger;

class Logger extends FileLogger
{



    public function __construct()
    {

        $config = Configuration::getInstance()->get('logger');
        $settingPath = $config['log_file'] ?? '/local/logs/log.log';
        $settingSize = $config['log_file_size'] ?? 1000;


        parent::__construct($settingPath, $settingSize);
    }



}