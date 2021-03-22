<?php


namespace Vicente\Pdo\Infra;

use Vicente\Pdo\Model\Danger;
use Vicente\Pdo\Model\Success;
use Vicente\Pdo\Model\Warning;

class MessageFactory
{
    public static function creatorMessages(): array
    {
        $messages = [];
        $messages[] = new Success("Uma simples mensagem de sucesso!");
        $messages[] = new Warning("Uma simples mensagem de aviso!");
        $messages[] = new Danger("Uma simples mensagem de perigo!");
        return $messages;
    }
}