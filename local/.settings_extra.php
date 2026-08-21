<?php
return ['exception_handling' => [
    'value' => [
        'debug' => true,
        'handled_errors_types' =>  E_ERROR,
        'exception_errors_types' => E_ERROR,
        'ignore_silence' => false,
        'assertion_throws_exception' => true,
        'assertion_error_type' => 256,
        'log' => [
            'class_name' => 'Local\\App\\ExceptionHandler',
            'settings' => array(
                'file' => '/local/logs/writeExeptions.txt',
                'log_size' => 1000000,
            ),
        ],
    ],
    'readonly' => false,
],
    'loggers' => [
        'value' => [
            'app.logger' => [
                'className' => '\\Bitrix\\Main\\Diag\\FileLogger',
                'constructorParams' => [
                    $_SERVER['DOCUMENT_ROOT'] .  '/local/logs/writelog.txt',
                    1048576, // 1 Мб
                ],
                'level' => \Psr\Log\LogLevel::DEBUG,
                'formatter' => 'app.formatter',

            ],
        ],],
    'services' => [
        'value' => [
            'app.formatter' => [
                'className' => '\Bitrix\Main\Diag\LogFormatter',
                 'constructorParams' => [true, 50],
            ],
        ],
        'readonly' => true,
    ],
];