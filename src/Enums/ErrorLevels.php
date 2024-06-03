<?php

namespace BugBlazer\Enums;

enum ErrorLevels: string
{
    case ERROR = 'error';
    case WARNING = 'warning';
    case INFO = 'info';

    public static function values(): array
    {
        return [
            self::ERROR->value => 'Error',
            self::WARNING->value => 'Warning',
            self::INFO->value => 'Info',
        ];
    }

    public static function keys(): array
    {
        return array_keys(self::values());
    }
}
