<?php
class viewController{
    public function index(){
        echo "je suis la homepage";
    }

    public function show(int $id){
echo 'je suis post '.$id;
    }
}