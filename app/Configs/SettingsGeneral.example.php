<?php

namespace Lemurro\Api\App\Configs;

/**
 * Основные параметры
 */
class SettingsGeneral
{
    /**
     * Имя проекта
     *
     * @var string
     */
    const APP_NAME = 'Lemurro';

    /**
     * Вид сервера
     *
     * @var string
     */
    public const SERVER_TYPE = self::SERVER_TYPE_DEV;

    /**
     * Вид сервера: разработка
     *
     * @var string
     */
    public const SERVER_TYPE_DEV = 'dev';

    /**
     * Вид сервера: тестовый
     *
     * @var string
     */
    public const SERVER_TYPE_STAGE = 'stage';

    /**
     * Вид сервера: боевой
     *
     * @var string
     */
    public const SERVER_TYPE_PROD = 'prod';
}
