<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROOT_PATH",dirname(__DIR__).DS);
define("APP",ROOT_PATH.'app'.DS);
define("CORE",APP.'core'.DS);
define("CONTROLLERS",APP.'controllers'.DS);
define("MODELS",APP.'models'.DS);
define("VIEWS",APP.'views'.DS);

require_once('app\core\router.php');


// require_once(CONFIG.'config.php');
//auload all classes
$modules = [ROOT_PATH,APP,CORE,VIEWS,CONTROLLERS,MODELS,];
set_include_path(get_include_path(). PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload');

new Router();