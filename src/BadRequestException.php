<?php
declare(strict_types=1);

namespace EntelisTeam\Lbaf\Exception;


/**
 * Любой плохой запрос пользователя
 *  - не переданы обязательные параметры
 *  - переданные параметры не валидны
 *  -
 */
class BadRequestException extends CustomException
{
    public function __construct(
        string $message = 'Something went wrong',
        int    $customCode = 0,
        array  $context = []
    )
    {
        parent::__construct(
            message: $message,
            httpCode: 400,
            customCode: $customCode,
            logLevel: LogLevelEnum::Notice,
            isError: false,
        );
        $this->context = $context;
    }
}
