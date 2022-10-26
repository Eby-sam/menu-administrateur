<?php

namespace menu\Controller;

use menu\Model\Entity\Role;
use menu\Model\Entity\User;
use menu\Model\Manager\RoleManager;

abstract class AbstractController
{
    /**
     * @return mixed
     */
    abstract public function index();


    /**
     * @param string $template
     * @param array $data
     * @return void
     * render function for hmtl page
     */
    public function render(string $template, array $data = [])
    {
        // speeds up the loading of the page and allows the placement of a header
        ob_start();
        require __DIR__ . '/../View/' . $template . '.html.php';
        // reads the current contents of the output buffer then clears it
        $html = ob_get_clean();
        require __DIR__ . '/../View/base.html.php';
        exit;
    }

}