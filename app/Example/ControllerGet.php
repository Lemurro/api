<?php

namespace Lemurro\Api\App\Example;

use Lemurro\Api\Core\Abstracts\Controller;

/**
 * Получение
 */
class ControllerGet extends Controller
{
    public function start()
    {
        $checker_checks = [
            'auth' => '',
            'role' => [
                'page' => 'example',
                'access' => 'read',
            ],
        ];
        $checker_result = $this->dic['checker']->run($checker_checks);
        if (is_array($checker_result) && count($checker_result) == 0) {
            $this->response->setData(
                (new ActionGet($this->dic))->run(
                    (int) $this->request->attributes->get('id')
                )
            );
        } else {
            $this->response->setData($checker_result);
        }

        $this->response->send();
    }
}
