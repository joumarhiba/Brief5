<?php




class View
{
    static function load($view_name, $view_data=[])
    {
        
        $file = "./app/Views/".$view_name.".php";
        if(file_exists($file)){
            extract($view_data);
            ob_start();
                require_once($file);
            ob_end_flush();
        }
    }
}

?>