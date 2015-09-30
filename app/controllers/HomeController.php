<?php

use Snipworks\BitCore\Request;
use Snipworks\BitCore\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        $name = Request::get('name');
        if (!$name) {
            $name = UserService::getUserName();
        }

        $this->view->set('name',  $name);
    }
}
