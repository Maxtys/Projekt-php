<?php

class UserController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function user()
    {
        $this->render('user');
    }
}