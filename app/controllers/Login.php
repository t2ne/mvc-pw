<?php

use app\core\Controller;

class Login extends Controller
{
    public function index()
    {
        $this->view('login');
    }
}