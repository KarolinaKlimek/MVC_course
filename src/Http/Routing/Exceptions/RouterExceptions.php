<?php

namespace Mvc\Http\Routing\Exceptions;

use Mvc\Exceptions\ExceptionHandler;

class RouterExceptions extends ExceptionHandler
{
    public function reportNoRouteFound()
    {
        response()->plank($this->getMessage(),404);
    }
}
