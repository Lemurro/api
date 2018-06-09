<?php
/**
 * Перед изменением пользователя
 *
 * @version 19.04.2018
 * @author  Дмитрий Щербаков <atomcms@ya.ru>
 */

namespace Lemurro\Api\App\RunBefore\Users;

use Lemurro\Api\Core\Abstracts\Action;

/**
 * Class Save
 *
 * @package Lemurro\Api\App\RunBefore\Users
 */
class Save extends Action
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
