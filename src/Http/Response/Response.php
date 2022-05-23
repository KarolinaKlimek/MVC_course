<?php

declare(strict_types=1);

namespace Mvc\Http\Response;

use Mvc\Http\Response\Exceptions\ResponseExceptions;
use Mvc\Providers\TwigServiceProvider;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class Response
{
    /**
     * Array of response code messages.
     * @var array
     */
    private array $httpCodes = [
        100 => 'Continue',
        101 => 'Switching Protocols',
        102 => 'Processing',
        103 => 'Checkpoint',
        200 => 'OK',
        201 => 'Created',
        202 => 'Accepted',
        203 => 'Non-Authoritative Information',
        204 => 'No Content',
        205 => 'Reset Content',
        206 => 'Partial Content',
        207 => 'Multi-Status',
        300 => 'Multiple Choices',
        301 => 'Moved Permanently',
        302 => 'Found',
        303 => 'See Other',
        304 => 'Not Modified',
        305 => 'Use Proxy',
        306 => 'Switch Proxy',
        307 => 'Temporary Redirect',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        402 => 'Payment Required',
        403 => 'Forbidden',
        404 => 'Not Found',
        405 => 'Method Not Allowed',
        406 => 'Not Acceptable',
        407 => 'Proxy Authentication Required',
        408 => 'Request Timeout',
        409 => 'Conflict',
        410 => 'Gone',
        411 => 'Length Required',
        412 => 'Precondition Failed',
        413 => 'Request Entity Too Large',
        414 => 'Request-URI Too Long',
        415 => 'Unsupported Media Type',
        416 => 'Requested Range Not Satisfiable',
        417 => 'Expectation Failed',
        418 => 'I\'m a teapot',
        422 => 'Unprocessable Entity',
        423 => 'Locked',
        424 => 'Failed Dependency',
        425 => 'Unordered Collection',
        426 => 'Upgrade Required',
        449 => 'Retry With',
        450 => 'Blocked by Windows Parental Controls',
        500 => 'Internal Server Error',
        501 => 'Not Implemented',
        502 => 'Bad Gateway',
        503 => 'Service Unavailable',
        504 => 'Gateway Timeout',
        505 => 'HTTP Version Not Supported',
        506 => 'Variant Also Negotiates',
        507 => 'Insufficient Storage',
        509 => 'Bandwidth Limit Exceeded',
        510 => 'Not Extended'
    ];

    public function json(array $content, int $code = 200, array $headers = [])
    {
        $this->setHeaderHttpStatusMessage($code);
        $this->setHeaders($headers);
        echo json_encode($content);
    }

    public function plank(string $content, int $code = 200, array $headers = [])
    {
        $this->setHeaderHttpStatusMessage($code);
        $this->setHeaders($headers);
        echo $content;
    }

    public function view(string $name, array $data = [], int $code = 200, array $headers = [])
    {
        $twig = new TwigServiceProvider(config('twig'));
        $view = $twig->provide();

        $this->setHeaderHttpStatusMessage($code);
        $this->setHeaders($headers);

        try {
            echo $view->render($name, $data);
        } catch (LoaderError $e) {
            exit($e->getMessage());
        } catch (RuntimeError $e) {
            exit($e->getMessage());
        } catch (SyntaxError $e) {
            exit($e->getMessage());
        }
    }

    public function redirect(string $url)
    {
        header('Location: ' . $url);
        exit();
    }

    private function setHeaderHttpStatusMessage($code)
    {
        //header("HTTP/1.1 " , $code, $this->getHttpStatusMessage($code));
        header("HTTP/1.1 200 OK");
    }

    private function setHeaders(array $headers)
    {
        foreach ($headers as $header)
            header($header);
    }

    /**
     * Gets http code message from httpCodes array.
     *
     */
    private function getHttpStatusMessage(int $code)
    {
        try {
            if(isset($this->httpCodes[$code]))
                return $this->httpCodes[$code];

            throw new ResponseExceptions('Invalid HTTP status code.');
        } catch (ResponseExceptions $exception) {
            exit($exception->report());
        }
    }
}
