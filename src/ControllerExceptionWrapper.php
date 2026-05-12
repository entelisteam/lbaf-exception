<?php
declare(strict_types=1);

namespace EntelisTeam\Lbaf\Exception;

use Exception;
use Throwable;

/**
 * Служебный Exception: используется для обертки исключений возникающих внутри вызова контроллера
 */
class ControllerExceptionWrapper extends Exception
{
    function __construct(
        public Throwable $originalException,
        public string     $controller,
        public string     $action,
        public array      $context = [],
    )
    {

    }

}