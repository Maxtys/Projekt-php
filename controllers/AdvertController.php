<?php

require_once 'AppController.php';

require_once __DIR__.'/../model/Advert.php';
require_once __DIR__.'/../model/AdvertMapper.php';

class AdvertController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function advert()
    {
        $this->render('advert');
    }
    public function addAdvert()
    {
        $this->render('addAdvert');
    }
    public function myAdvert()
    {
        $this->render('myAdvert');
    }
    public function addAdvertConfirm()
    {
        $this->render('addAdvertConfirm');
    }

}