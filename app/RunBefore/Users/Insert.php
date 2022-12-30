<?php

namespace Lemurro\Api\App\RunBefore\Users;

use Lemurro\Api\Core\Abstracts\Action;

/**
 * Перед добавлением пользователя
 */
class Insert extends Action
{
    /**
     * Выполним действие
     *
     * @param array $data Массив данных
     *
     * @return array
     *
     * @version 19.04.2018
     * @author  Дмитрий Щербаков <atomcms@ya.ru>
     */
    public function run($data)
    {
        return $data;
    }
}
