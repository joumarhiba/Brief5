

<?php
 class Router{
    protected $controller = "HomeController";
    protected $action = "index";
    protected $params = [];
    public $url;
    public $routes = [];


    public function __construct()
    {   
       
        $this->prepareURL();
        $this->render();
    }
    

    private function prepareURL(){
        $url = $_SERVER['REQUEST_URI'];
        $url = ltrim($url,'/');
        $url = explode('/',$url);
        if(!empty($url)){
            // define the controller
            $this->controller = isset($url[0]) ? ucwords($url[0]).'Controller':"HomeController";
        
            
            // define the action
            $this->action = isset($url[1]) ? $url[1] :"index";
            
            unset($url[0],$url[1]);
            $this->params = !empty($url) ? array_values($url) : [];
            // var_dump($this->params);  
            
        }
    }

    private function render(){
        if(class_exists($this->controller)){
            $controller = new $this->controller; 
            if(method_exists($controller,$this->action))
            {
                call_user_func_array([$controller,$this->action],$this->params);

            }  else{
                echo "the method is ".$this->action." NOT exist";
            }
         }
        else{
            echo "<br>This controller ".$this->controller." NOT exist";
        }
    }
}


   