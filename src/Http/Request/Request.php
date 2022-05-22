<?php

namespace Mvc\Http\Request;

use Mvc\Http\Request\Exceptions\RequestExceptions;

class Request
{
    private string $method;

    private array $allowedMethods = [
      'GET',
      'POST'
    ];

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->verifyMethod();
    }

    private function verifyMethod()
    {
        try {
            if(!in_array($this->method, $this->allowedMethods))
                throw new RequestExceptions('Method ' . $this->method . ' is not allowed');
        } catch (RequestExceptions $exception) {
            exit($exception->report());
        }
    }

    public function get(string $key)
    {
        if(isset($_GET[$key]))
            return $_GET[$key];

        return null;
    }

    /**
     * Returns get array.
     *
     * @return array
     */
    public function getAll()
    {
        return $_GET;
    }

    public function post(string $key)
    {
        if($this->method == 'POST' && isset($_POST[$key]))
            return filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);

        return null;
    }

    public function postAll()
    {
        if($this->method == 'POST') {
            $body = [];
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
            return $body;
        }
        return null;
    }
}
