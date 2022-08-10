<?php

namespace App\controllers;

use App\models\Home;
use Core\Render;


class HomeController
{
    public function indexAction()
    {
        $model = new Home();
        $userArr = $model->getUsers("https://user-transaction-fetch-api.herokuapp.com/user");

        $model->createList($userArr);

        Render::getView('home');
    }
}