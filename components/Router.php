<?
class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }
    /* 
    returns request string
     */
    private function getURI()
    {
       //Получаем строку запроса
       if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'],'/');
        } 
    }

    public function run()
    {
        //Получаем строку запроса
       $uri = $this->getURI();

       //проверяем наличие такого запроса в routes.php

       foreach ($this->routes as $uriPattern => $path) {
          
            //сравниваем $uriPattern и $uri

        if (preg_match("~$uriPattern~", $uri)) {

             //получаем внутренний путь из внешнего согласно правилу
             $internalRoute = preg_replace("~$uriPattern~", $path, $uri);


            //определить какой контроллер и action и параметры
            $segments = explode('/', $internalRoute);
           
            $controllerName = array_shift($segments).'Controller';
            $controllerName = ucfirst($controllerName);

            $actionName = 'action'.ucfirst(array_shift($segments)); 

            $parameters = $segments;

           



            //подключить файл класса-контроллера
            $controllerFile = ROOT.'/controllers/' . 
            $controllerName . '.php';

            if (file_exists($controllerFile)) {
                include_once($controllerFile);
            }


            //Создать объект, вызвать метод (т.е action)
            $controllerObject = new $controllerName;


            $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
            if($result != null) {
                break;
            }

        }
       }

      
       

    }
}




?>