<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog",
    |                    "custom", "stack"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['single', 'slack'],
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'blastlog' => [
            'driver' => 'single',
            'path' => storage_path('logs/blast.log'),
        ],

        //messagelog
        'messageerror' => [
            'driver' => 'stack',
            'channels' => ['messageerrorsingle', 'messageslack'],
            'ignore_exceptions' => false,
        ],

        'messageerrorsingle' => [
            'driver' => 'single',
            'path' => storage_path('logs/message.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'messageslack' => [
            'driver' => 'slack',
            'url' => env('MESSAGE_LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Bizappbot Message Log',
            'emoji' => ':boom:',
            // 'level' => env('LOG_LEVEL', 'critical'),
        ],

        //devicelog
        'deviceerror' => [
            'driver' => 'stack',
            'channels' => ['deviceerrorsingle', 'deviceslack'],
            'ignore_exceptions' => false,
        ],

        'deviceerrorsingle' => [
            'driver' => 'single',
            'path' => storage_path('logs/device.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'deviceslack' => [
            'driver' => 'slack',
            'url' => env('DEVICE_LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Bizappbot Device Log',
            'emoji' => ':boom:',
            // 'level' => env('LOG_LEVEL', 'critical'),
        ],

        //subscriptionlog
        'subserror' => [
            'driver' => 'stack',
            'channels' => ['subserrorsingle', 'subsslack'],
            'ignore_exceptions' => false,
        ],

        'subserrorsingle' => [
            'driver' => 'single',
            'path' => storage_path('logs/subscription.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'subsslack' => [
            'driver' => 'slack',
            'url' => env('SUBS_LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Bizappbot Subscription Log',
            'emoji' => ':boom:',
            // 'level' => env('LOG_LEVEL', 'critical'),
        ],

        //boadcastlog
        'broadcasterror' => [
            'driver' => 'stack',
            'channels' => ['broadcasterrorsingle', 'broadcastslack'],
            'ignore_exceptions' => false,
        ],

        'broadcasterrorsingle' => [
            'driver' => 'single',
            'path' => storage_path('logs/broadcast.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'broadcastslack' => [
            'driver' => 'slack',
            'url' => env('BROADCAST_LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Bizappbot Broadcast Log',
            'emoji' => ':boom:',
            // 'level' => env('LOG_LEVEL', 'critical'),
        ],

        //invoicelog
        'invoiceerror' => [
            'driver' => 'stack',
            'channels' => ['invoiceerrorsingle', 'invoiceslack'],
            'ignore_exceptions' => false,
        ],

        'invoiceerrorsingle' => [
            'driver' => 'single',
            'path' => storage_path('logs/invoice.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'invoiceslack' => [
            'driver' => 'slack',
            'url' => env('INVOICE_LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Bizappbot Invoice Log',
            'emoji' => ':boom:',
            // 'level' => env('LOG_LEVEL', 'critical'),
        ],

        //paymentlog
        'paymenterror' => [
            'driver' => 'stack',
            'channels' => ['paymenterrorsingle', 'paymentslack'],
            'ignore_exceptions' => false,
        ],

        'paymenterrorsingle' => [
            'driver' => 'single',
            'path' => storage_path('logs/payment.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'paymentslack' => [
            'driver' => 'slack',
            'url' => env('PAYMENT_LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Bizappbot Payment Log',
            'emoji' => ':boom:',
            // 'level' => env('LOG_LEVEL', 'critical'),
        ],

        //contactlog
        'contacterror' => [
            'driver' => 'stack',
            'channels' => ['contacterrorsingle', 'contactslack'],
            'ignore_exceptions' => false,
        ],

        'contacterrorsingle' => [
            'driver' => 'single',
            'path' => storage_path('logs/contact.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'contactslack' => [
            'driver' => 'slack',
            'url' => env('CONTACT_LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Bizappbot Contact Log',
            'emoji' => ':boom:',
            // 'level' => env('LOG_LEVEL', 'critical'),
        ],

        //chatlog
        'chaterror' => [
            'driver' => 'stack',
            'channels' => ['chaterrorsingle', 'chatslack'],
            'ignore_exceptions' => false,
        ],

        'chaterrorsingle' => [
            'driver' => 'single',
            'path' => storage_path('logs/chat.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'chatslack' => [
            'driver' => 'slack',
            'url' => env('CHAT_LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Bizappbot Chat Log',
            'emoji' => ':boom:',
            // 'level' => env('LOG_LEVEL', 'critical'),
        ],

        //adminlog
        'adminerror' => [
            'driver' => 'stack',
            'channels' => ['adminerrorsingle', 'adminslack'],
            'ignore_exceptions' => false,
        ],

        'adminerrorsingle' => [
            'driver' => 'single',
            'path' => storage_path('logs/admin.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'adminslack' => [
            'driver' => 'slack',
            'url' => env('ADMIN_LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Bizappbot Admin Log',
            'emoji' => ':boom:',
            // 'level' => env('LOG_LEVEL', 'critical'),
        ],

        //autoreplylog
        'autoreplyerror' => [
            'driver' => 'stack',
            'channels' => ['autoreplyerrorsingle', 'autoreplyslack'],
            'ignore_exceptions' => false,
        ],

        'autoreplyerrorsingle' => [
            'driver' => 'single',
            'path' => storage_path('logs/autoreply.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'autoreplyslack' => [
            'driver' => 'slack',
            'url' => env('AUTOREPLY_LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Bizappbot Autoreply Log',
            'emoji' => ':boom:',
            // 'level' => env('LOG_LEVEL', 'critical'),
        ],

        //userlog
        'usererror' => [
            'driver' => 'stack',
            'channels' => ['usererrorsingle', 'userslack'],
            'ignore_exceptions' => false,
        ],

        'usererrorsingle' => [
            'driver' => 'single',
            'path' => storage_path('logs/user.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'userslack' => [
            'driver' => 'slack',
            'url' => env('USER_LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Bizappbot User Log',
            'emoji' => ':boom:',
            // 'level' => env('LOG_LEVEL', 'critical'),
        ],

        'messagelooplog' => [
            'driver' => 'slack',
            'url' => env('MESSAGE_LOOP_LOG_WEBHOOK_URL'),
            'username' => 'Message Loop Log',
            'emoji' => ':boom:',
            // 'level' => env('LOG_LEVEL', 'critical'),
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => 14,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            // 'level' => env('LOG_LEVEL', 'critical'),
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => SyslogUdpHandler::class,
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
            ],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],
    ],

];
