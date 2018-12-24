<?php
/**
 * Изменение
 *
 * @version 24.12.2018
 * @author  Дмитрий Щербаков <atomcms@ya.ru>
 */

namespace Lemurro\Api\App\Example;

use Lemurro\Api\Core\Abstracts\Action;
use Lemurro\Api\Core\Helpers\Response;

/**
 * Class ActionSave
 *
 * @package Lemurro\Api\App\Example
 */
class ActionSave extends Action
{
    /**
     * Выполним действие
     *
     * @param integer $id   ИД записи
     * @param array   $data Массив данных
     *
     * @return array
     *
     * @version 24.12.2018
     * @author  Дмитрий Щербаков <atomcms@ya.ru>
     */
    public function run($id, $data)
    {
        $record = (new OneRecord($this->dic))->get($id);

        if (is_object($record)) {
            $record->name = $data['name'];
            $record->updated_at = $this->dic['datetimenow'];
            $record->save();
            if (is_object($record) && isset($record->id)) {
                $this->dic['datachangelog']->insert('example', 'update', $record->id, $data);

                return Response::data([
                    'id' => $record->id,
                ]);
            } else {
                return Response::error(
                    '500 Internal Server Error',
                    'danger',
                    'Произошла ошибка при изменении записи, попробуйте ещё раз'
                );
            }
        } else {
            return Response::error(
                '404 Not Found',
                'info',
                'Запись не найдена'
            );
        }
    }
}
