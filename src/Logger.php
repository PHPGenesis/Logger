<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Logger;

use PHPGenesis\Common\Composer\Providers\Laravel;
use PHPGenesis\Logger\Loggers\LaravelLogger;
use PHPGenesis\Logger\Loggers\MonoLogger;

class Logger implements ILogger
{
    public static function debug(string $message, ?array $context = []): void
    {
        if (Laravel::installed('support')) {
            LaravelLogger::debug($message, $context);
        } else {
            MonoLogger::debug($message, $context);
        }
    }

    public static function info(string $message, ?array $context = []): void
    {
        if (Laravel::installed('support')) {
            LaravelLogger::info($message, $context);
        } else {
            MonoLogger::info($message, $context);
        }
    }

    public static function notice(string $message, ?array $context = []): void
    {
        if (Laravel::installed('support')) {
            LaravelLogger::notice($message, $context);
        } else {
            MonoLogger::notice($message, $context);
        }
    }

    public static function warning(string $message, ?array $context = []): void
    {
        if (Laravel::installed('support')) {
            LaravelLogger::warning($message, $context);
        } else {
            MonoLogger::warning($message, $context);
        }
    }

    public static function error(string $message, ?array $context = []): void
    {
        if (Laravel::installed('support')) {
            LaravelLogger::error($message, $context);
        } else {
            MonoLogger::error($message, $context);
        }
    }

    public static function critical(string $message, ?array $context = []): void
    {
        if (Laravel::installed('support')) {
            LaravelLogger::critical($message, $context);
        } else {
            MonoLogger::critical($message, $context);
        }
    }

    public static function alert(string $message, ?array $context = []): void
    {
        if (Laravel::installed('support')) {
            LaravelLogger::alert($message, $context);
        } else {
            MonoLogger::alert($message, $context);
        }
    }

    public static function emergency(string $message, ?array $context = []): void
    {
        if (Laravel::installed('support')) {
            LaravelLogger::emergency($message, $context);
        } else {
            MonoLogger::emergency($message, $context);
        }
    }

    public static function shareContext(array $context): void
    {
        if (Laravel::installed('support')) {
            LaravelLogger::shareContext($context);
        } else {
            MonoLogger::shareContext($context);
        }
    }

    public static function withContext(array $context): void
    {
        if (Laravel::installed('support')) {
            LaravelLogger::withContext($context);
        } else {
            MonoLogger::withContext($context);
        }
    }
}
