<?php

namespace menu\Routing;

use menu\Controller\AbstractController;
use menu\Controller\ErrorController;

abstract class AbstractRouter
{

    abstract public static function route(?string $action = null);

    /**
     * @param AbstractController $controller
     * @param string $method
     * @param array $params
     * @return void
     */
    public static function routeParameters(AbstractController $controller, string $method, array $params): void
    {
        $ags =[];
        foreach ($params as $param => $type)   {
            if(!isset($_GET[$param])) {
                (new ErrorController())->error404($param);
                return;
            }

            $arg = self::secure($_GET[$param]);
            settype($arg, $type);
            $args[] = $arg;
        }

        $controller->$method(...$args);

    }

    /**
     * @param string|null $param
     * @return string|null
     */
    public static function secure(?string $param): ?string
    {
        if(null === $param) {
            return null;
        }

        $param = strip_tags($param);
        $param =  trim($param);
        return strtolower($param);
    }

}
