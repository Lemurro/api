<?php

namespace Lemurro\Api\App\Configs;

/**
 * Параметры SMS
 */
class SettingsSMS
{
    /**
     * API-ключ от аккаунта в sms.ru
     *
     * @var string
     */
    const SMSRU_API_ID = 'api_id';

    /**
     * Отправитель (можно оставить пустым, если не нужен)
     *
     * @var string
     */
    const SMSRU_SENDER = 'SenderName';
}
