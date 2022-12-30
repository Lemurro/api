<?php

namespace Lemurro\Api\App\Configs;

/**
 * Параметры справочников
 */
class SettingsGuides
{
    /**
     * Связка конечных точек маршрута справочников и их namespaces для запуска
     *
     * Пример:
     *   конечная точка: example (используется в пути: /guide/example)
     *        namespace: Example (полный путь до каталога классов: /app/Guide/Example/)
     *
     * @var array
     */
    const CLASSES = [
        'example' => 'Example',
    ];
}
