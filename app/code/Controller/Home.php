<?php

namespace Controller;

use Core\AbstractController;
use Model\Ad;

class Home extends AbstractController
{
    public function index()
    {
        $this->data['populars'] = Ad::getPopularAds(5);
        $this->data['latest'] = Ad::getLatest(5);
        $this->render('parts/home');
    }
}