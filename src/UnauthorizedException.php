<?php
declare(strict_types=1);

namespace EntelisTeam\Lbaf\Exception;

class UnauthorizedException extends CustomException
{
    public function __construct(
        string $message = 'User must be authorized to use this method',
        int    $customCode = 0,
    )
    {
        parent::__construct(
            message: $message,
            httpCode: 401,
            customCode: $customCode,
            logLevel: LogLevelEnum::Notice,
            isError: false,
        );
    }
}
