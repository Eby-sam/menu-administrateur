<?php

namespace menu\Controller;

use menu\Model\Entity\User;
use menu\Model\Manager\UserManager;
class UserController extends AbstractController
{

    /**
     * @return mixed|void
     */
    public function index()
    {
        if (UserController::verifyUserConnect()) {
            $this->render('user/index', [
                'users_list' => UserManager::getAllUser()
            ]);
        } else {
            header('location: /index.php?c=home');
        }
    }
}