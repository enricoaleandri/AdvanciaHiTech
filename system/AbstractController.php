<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enrico
 * Date: 05/06/14
 * Time: 23.10
 * To change this template use File | Settings | File Templates.
 */
class AbstractController extends AbstractTinaFramework implements ControllerInterface
{
    protected $className;


    private static $LOGIN_PAGE_FORWARD = "login";
    private static $HOME_FORWARD = "home";
    private static $ADMIN_HOME_FORWARD = "admin_home";

    public function initializeAbstractController($isAdministration)
    {
        $this -> isAdministration = $isAdministration;

    }

    public function Display()
    {
        echo $this->response->render();
    }

    public function loginpageActionDefault(Request $request)
    {
        global $response;
        Logger::log(Logger::$DEBUG,"ABSTRACT-CONTROLLER : Class : $this->className -  host : loginpageActionDefault");
        $response->setProperty("url",Utils::getURLPathAdmin());
        $response->setProperty("host",Utils::getHostAdmin());

        $ammiController = new AmministrazioneController();
        $ammiController->setContext($this);
        $ammiController->loginpageAction($request);
    }

    public function homeActionDefault(Request $request)
    {

        global $response;
        Logger::log(Logger::$DEBUG,"ABSTRACT-CONTROLLER : Class : $this->className -  host : homeActionDefault");
        $response->setProperty("url",Utils::getURLPath());
        $response->setProperty("host",Utils::getHost());
        $this->includer->includePage(self::$HOME_FORWARD);
    }

    public function adminHomeActionDefault(Request $request)
    {

        global $response;

        Logger::log(Logger::$DEBUG,"ABSTRACT-CONTROLLER :  Class : $this->className -  host : adminHomeActionDefault");
        $response->setProperty("url",Utils::getURLPathAdmin());
        $response->setProperty("host",Utils::getHostAdmin());
        $newsController = new NewsController();
        $newsController->setContext($this);
        $newsController->homeAction($request);
    }
    public function defaultAction(Request $request)
    {
    }

    public function isActionAccessible()
    {
        if($this->isAdminAction)
        {

            if($this -> isAdminLogged())
                return true; // è un'action di aministrazione, sono loggato, se siamo su path admin/ ritorna true altrimento false
            else
                return false;// è un'action di amministrazione ma lutente non è loggato ritorno comunque false
        }
        else
        {
            return true; // non è un'action di amminsitrazione, se sono nel path admin/ ritorna false altriment  true
        }
    }
    //
    public function __call( $functionName, $args)
    {
        $functionName.="Action";
        // Pre callback
        $time_start = microtime(true);
        $result = call_user_func_array( array( $this, $functionName), $args);
        // Post callback
        $time_end =microtime(true);

        $time = $time_end - $time_start;
        Logger::log(Logger::$PROFILING,"Class : $this->className  Function : $functionName - execution time : $time s");
        return $result;
    }

    public function IsAdminAction()
    {
        return $this->isAdminAction;
    }

    public function setContext($controller)
    {

        global $response;
        $this->isAdminAction = $controller -> IsAdminAction();
        $this->properties = $controller -> getProperties();
        $this->includer = $controller -> getIncluder();
        $this->connection = $controller -> getConnection();
        $this->isAdministration = $controller -> IsAdministration();
        $this->response = $response;

    }
}
