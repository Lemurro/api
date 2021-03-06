<?php

/**
 * @author  Дмитрий Щербаков <atomcms@ya.ru>
 *
 * @version 04.11.2020
 */

namespace Lemurro\Api\App\Example;

use Lemurro\Api\Core\Abstracts\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * @package Lemurro\Api\App\Example
 */
class ControllerGet extends Controller
{
    /**
     * @author  Дмитрий Щербаков <atomcms@ya.ru>
     *
     * @version 04.11.2020
     */
    public function start(): Response
    {
        $this->checker->run([
            'auth' => '',
            'role' => [
                'page' => 'example',
                'access' => 'read',
            ],
        ]);

        $this->response->setData((new ActionGet($this->dic))->run(
            $this->request->attributes->get('id')
        ));

        return $this->response;
    }
}
