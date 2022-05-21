<?php

declare(strict_types=1);

namespace Mvc\Exceptions;

use Exception;

class ExceptionHandler extends Exception
{
    public function report()
    {
        echo 'Caught exception: ' . $this->getMessage() . '<br>' .
            'In file: ' . $this->getFile() . '<br>' .
            'In line: ' . $this->getLine() . '<br>' .
            'Trace: ' . $this->getTraceAsString();

    }
}
