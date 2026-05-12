<?php
declare(strict_types=1);

namespace EntelisTeam\Lbaf\Exception;

use Exception;

/**
 * Базовый класс ошибки lbaf от которого наследуются остальные
 * @todo сделать abstract
 */
class CustomException extends Exception
{

    /**
     * @var mixed[] Дополнительные данные для логирования
     */
    public array $context = [];

    /**
     * @param string $message Сообщение об ошибке
     * @param int $httpCode Стандартный код ошибки. Используется как http код
     * @param int $customCode Расширенный код ошибки, используется в контроллерах API
     * @param LogLevelEnum $logLevel Уровень логирования
     * @param bool $isError Является ли этот Exception ошибкой
     */
    public function __construct(
        string              $message,
        int                 $httpCode = 400,
        protected int       $customCode = 0,
        public LogLevelEnum $logLevel = LogLevelEnum::Error,
        public bool         $isError = true,

    )
    {
        parent::__construct($message, $httpCode);

    }

    public function getCustomCode(): int
    {
        return $this->customCode;
    }
}
