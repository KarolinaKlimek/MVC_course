<?php

declare(strict_types=1);

namespace Mvc\Messages;

use Mvc\Messages\Exceptions\MessageException;

class Messages
{
    private string $lang;

    private array $messages;

    public function __construct()
    {
        $this->lang = config('app.lang');
        $json = file_get_contents(__DIR__ . '/../../resources/Messages/' . $this->lang . '.json');
        $this->messages = json_decode($json, true);
    }

    public function get(string $message, array $params = [])
    {
        try {
            if(isset($this->messages[$message])) {
                $tempMessage = $this->messages[$message];

                foreach ($params as $key => $param)
                    $tempMessage = str_replace(":" . $key , $param, $tempMessage);

                return $tempMessage;
            }

            throw new MessageException($message . 'message not found.');
        } catch (MessageException $exception) {
            exit($exception->report());
        }
    }
}
