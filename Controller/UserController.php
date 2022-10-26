<?php

namespace menu\Controller;

use menu\Model\Entity\User;
use menu\Model\Manager\UserManager;
class HomeController extends AbstractController
{
    /**
     * @return void
     */
    public function index()
    {
        $this->render('home/index',[

        ]);
    }

    /**
     * @return void
     */
    public function mention()
    {
        $this->render('home/mentions-legales');
    }

    /**
     * @return void
     */
    public function politique()
    {
        $this->render('home/politique');
    }
}