<?php

namespace Vicente\Pdo\Controller;

use Vicente\Pdo\Infra\MessageFactory;

class MessageList
{

    public function index():void
    {
        $title = "Mensagens";
        $messages = MessageFactory::creatorMessages();
        require __DIR__ . '/../../view/messages/list.php';
    }
}