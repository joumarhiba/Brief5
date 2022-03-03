<?php

use FTP\Connection;

require_once './app/core/View.php';
require_once './app/models/Base.php';

class HomeController 
{
    public function index(){
    

        View::load("home");
    }
    
}
