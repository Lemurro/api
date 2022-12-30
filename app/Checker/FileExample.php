<?php

namespace Lemurro\Api\App\Checker;

use Lemurro\Api\Core\Helpers\File\FileChecker;

/**
 * Проверка прав доступа к файлу для раздела Example
 */
class FileExample extends FileChecker
{
    /**
     * Проверка прав доступа
     *
     * @param string $container_id ИД контейнера
     *
     * @return boolean
     */
    public function check($container_id)
    {
        $checker_checks = [
            'role' => [
                'page'   => 'example',
                'access' => 'read',
            ],
        ];
        $checker_result = $this->dic['checker']->run($checker_checks);
        if (is_array($checker_result) && count($checker_result) == 0) {
            return true;
        } else {
            return false;
        }
    }
}
