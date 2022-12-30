<?php

namespace Lemurro\Api\App\RunAfter\Users;

use Lemurro\Api\Core\Abstracts\Action;
use Lemurro\Api\Core\Helpers\Response;

/**
 * После получения данных пользователя
 */
class Get extends Action
{
    /**
     * Выполним действие
     *
     * @param array $data Массив данных для ответа
     *
     * @return array
     *
     * @version 16.01.2019
     * @author  Дмитрий Щербаков <atomcms@ya.ru>
     */
    public function run($data)
    {
        return Response::data($data);
    }
}
