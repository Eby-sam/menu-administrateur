<?php

namespace menu\Routing;

use menu\Controller\AbstractController;
use menu\Controller\ErrorController;

abstract class AbstractRouter
{

    abstract public static function route(?string $action = null);



}
