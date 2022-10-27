<?php

namespace menu\Routing;

use menu\Controller\ErrorController;
use menu\Controller\HomeController;
use menu\Routing\AbstractRouter;

class HomeRouter extends AbstractRouter
{

    public static function route(?string $action = null)
    {
        $errorController = new ErrorController();
        $controller = new HomeController();

        if(null === $action) {
            $errorController->error404($action);
        }

        switch ($action) {
            case 'index':
                $controller->index();
                break;
            default:
                $errorController->error404($action);
        }
        ;    }
}
