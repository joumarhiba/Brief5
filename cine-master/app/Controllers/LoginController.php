<?php 
require_once './app/core/View.php';

class LoginController 
{
    public function index(){
        View::load("login");
    }

    
    
}