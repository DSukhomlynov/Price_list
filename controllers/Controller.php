<?php

include_once ROOT . '/models/Price.php';

class Controller
{
    public function actionIndex()
    {
        $data = Price::getData();

        require_once(ROOT . '/views/view.php');

        return true;
    }
}