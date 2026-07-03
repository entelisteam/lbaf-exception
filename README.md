# entelisteam/lbaf-exception

Исключения фреймворка LBAF.

## Установка

```bash
composer require entelisteam/lbaf-exception
```

## Версионирование

Все пакеты LBAF следуют [SemVer](https://semver.org):

- **Major (`1.x` → `2.0`)** — слом обратной совместимости публичного API. Каждое такое изменение сопровождается Rector-миграцией (см. [lbaf-rector](https://github.com/entelisteam/lbaf-rector)). Обновляется только вручную: поднять constraint в `composer.json` и выполнить `composer update`.
- **Minor (`1.2` → `1.3`)** — новая функциональность, обратная совместимость сохранена.
- **Patch (`1.2.0` → `1.2.1`)** — исправления без изменения публичного API.

Правило: **если изменение требует Rector-миграции — это major**, иначе minor или patch.

Зависимости на пакеты LBAF указываются через caret (`"entelisteam/lbaf-*": "^1.2"`): minor и patch подтягиваются обычным `composer update`, major автоматически не устанавливается. После обновления Rector-миграции применяются автоматически (хук `post-update-cmd`); если хук не настроен — выполните `composer rector:fix`.
