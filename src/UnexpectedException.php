<?php
declare(strict_types=1);

namespace EntelisTeam\Lbaf\Exception;

class UnexpectedException extends CustomException
{
    public function __construct(
        string $message = 'Unexpected Error',
        int    $customCode = 0,
    )
    {
        parent::__construct(
            message: $message,
            httpCode: 500,
            customCode: $customCode,
            logLevel: LogLevelEnum::Critical,
        );
    }
}
