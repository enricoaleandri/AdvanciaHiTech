<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enrico
 * Date: 03/06/14
 * Time: 16.54
 * To change this template use File | Settings | File Templates.
 */
class Dispatcher
{
    public static function Run($querystring = '')
    {
        $uri = (isset($_SERVER['REQUEST_URI']))?$_SERVER['REQUEST_URI']: false;
        $query = (isset($_SERVER['QUERY_STRING']))? $_SERVER['QUERY_STRING']: '';

        Logger::log(Logger::$DEBUG, "queryString : $query SERVER QUERY STRING : ".$_SERVER['QUERY_STRING']."   REQUEST_URI : $uri");
        $url = str_replace($querystring,'',$uri);
        $url = str_replace($query,'',$url);
        $url = str_replace('\\', '/', $url);
        while(strrpos($url, "//") !== false)
        {
            $url = str_replace('//', '/', $url);
        }
        Logger::log(Logger::$DEBUG, "url : $url ");
        $isAdministration = false;
        if(substr($url,0, 6) == "/admin")
        {
            $isAdministration = true;
            $url = substr($url,6, strlen($url));
            Logger::log(Logger::$DEBUG, "Administration url : $url ");
        }
        $arr = explode('/',$url);
        array_shift($arr);



        $controllerName = count($arr) > 0 ?     (class_exists(ucfirst($arr[0]).'Controller') ? ucfirst(array_shift($arr)) : 'Collector') : 'Collector';

        $controllerClassName = $controllerName.'Controller';
        //All public methods have suffix "Action" -> myMethodAction
        //If there is no method named, use DefaultAction

        $actionFunctionName = count($arr) > 0 && method_exists($controllerClassName, ucfirst($arr[0]).'Action') ? ucfirst(array_shift($arr)) : 'default';


        Logger::log(Logger::$DEBUG,"controllerClassName : $controllerClassName   actionFunctionName : $actionFunctionName");
        $request = new Request();

        $request->setAction($actionFunctionName);
        $request->setController($controllerClassName);
        ////////////////////////////////////////////////////////////
        //Init the Controller
        $controller = new $controllerClassName();
        $controller->initializeAbstractController($isAdministration);
        $controller->initializeFramework();

        if($controller -> isActionAccessible())
        {
            Logger::log(Logger::$DEBUG, "Action accessible");
            $controller->$actionFunctionName($request);
        }
        else
        {
            if($isAdministration)
            {
                    Logger::log(Logger::$DEBUG, "Action NOT accessible _LOGIN, ADMIN!");
                    $controller->loginpageActionDefault($request);
            }
            else
            {
                Logger::log(Logger::$DEBUG, "Action NOT accessible, NOT ADMIN!");
                $controller->homeActionDefault($request);
            }
        }
        ////////////////////////////////////////////////////////////
        //If you adapt this code: Is up to you to extends your controller
        //from an internal controller which has the method Display();
        $controller->Display();

    }
}