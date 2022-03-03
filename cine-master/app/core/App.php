<?php 




class App 
{
    protected $controller = "HomeController";
    protected $action = "home";
    protected $params = [];
    
    
    
    
    public function __construct(){
        $this->prepareURL();
        $this->render();
    }
    
    private function prepareURL()
    {
        $get= $_SERVER['REQUEST_URI'];
        $path = ltrim($get, "/");
        $url = explode("/",$path) ;
        
        if(!empty($url)){
            $this->controller = !empty($url[0])? ucwords($url[0])."Controller":"HomeController";
            $this->action = !empty($url[1])? ucwords($url[1]):"index";
        }
        unset($url[0],$url[1]);

        $this->params = !empty($url) ? array_values($url):[];
    }

    private function render()
    {
        $files = "./app/Controllers/".$this->controller.".php";
        if(file_exists($files))
        {
            require_once "./app/Controllers/".$this->controller.".php";
            $controller = new $this->controller ;
        }
        else{
            echo "This controller : ".$this->controller." doesn't exist";
        }
        if(method_exists($controller,$this->action)){
            call_user_func_array([$controller,$this->action],$this->params);
        }else{
            echo "This method : ".$this->action." doesn't exist";
        }
    }


}


