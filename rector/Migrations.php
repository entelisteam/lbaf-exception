<?php

declare(strict_types=1);

namespace EntelisTeam\Lbaf\Exception\Rector;

use EntelisTeam\Lbaf\Exception\Rector\Migration\M20260512_0930_ExceptionSplit;

/**
 * Реестр Rector-миграций пакета entelisteam/php-dto-hydrator.
 */
final class Migrations
{
    /**
     * @return list<class-string>
     */
    public static function all(): array
    {
        return [
            M20260512_0930_ExceptionSplit::class,
        ];
    }
}
