<?php

declare(strict_types=1);

namespace EntelisTeam\Lbaf\Exception\Rector\Migration;

use Rector\Configuration\RectorConfigBuilder;
use Rector\Renaming\Rector\Name\RenameClassRector;

/**
 * Миграция для downstream-проектов: переход с Lbaf-овских namespace'ов на отдельный пакет
 */
final class Migration_20260512_0930_ExceptionSplit
{
    /**
     * Применяет правила миграции к существующему конфигуратору.
     */
    public static function apply(RectorConfigBuilder $config): RectorConfigBuilder
    {
        return $config
            ->withConfiguredRule(RenameClassRector::class, [
                'Lbaf\Exception\BadRequestException' => 'EntelisTeam\Lbaf\Exception\BadRequestException',
                'Lbaf\Exception\ControllerExceptionWrapper' => 'EntelisTeam\Lbaf\Exception\ControllerExceptionWrapper',
                'Lbaf\Exception\CustomException' => 'EntelisTeam\Lbaf\Exception\CustomException',
                'Lbaf\Exception\InnerServiceException' => 'EntelisTeam\Lbaf\Exception\InnerServiceException',
                'Lbaf\Exception\UnauthorizedException' => 'EntelisTeam\Lbaf\Exception\UnauthorizedException',
                'Lbaf\Exception\UnexpectedException' => 'EntelisTeam\Lbaf\Exception\UnexpectedException',

                'Lbaf\Logger\LogLevelEnum' => 'EntelisTeam\Lbaf\Exception\LogLevelEnum',

             ])

            //импортируем короткие имена через use вместо FQN, удаляем устаревшие use на Lbaf-овские классы
            ->withImportNames(importNames: true, importDocBlockNames: true, importShortClasses: false, removeUnusedImports: true);
    }


}
