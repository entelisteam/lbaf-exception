<?php
declare(strict_types=1);

namespace EntelisTeam\Lbaf\Exception;

/**
 * Ошибка из внешнего сервиса.
 */
class InnerServiceException extends CustomException
{
    public function __construct(
        string $message,
        int    $httpCode,
        int    $customCode = 0,
    )
    {
        parent::__construct(
            message: $message,
            httpCode: $httpCode,
            customCode: $customCode,
            logLevel: LogLevelEnum::Notice,
            isError: true,
        );
    }
}
