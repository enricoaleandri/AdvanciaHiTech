<?php
/**
 * Created by PhpStorm.
 * User: Falza
 * Date: 01/04/2015
 * Time: 14.18
 */

class NewsController extends AbstractController {

    private static $ADMIN_HOME_FORWARD = "admin_home";
    private static $ADMIN_SETTINGS_FORWARD = "admin_settings";

    public function  changeLangAction(Request $request){
        $lingua = $request->get("lingua");
        Logger::log(Logger::$INFO, "[NewsController] lingua = ".$lingua);
        switch($lingua){
            case "EN" : {initConfig::getInstance()->getLang($lingua); $this->response->addContent('{"result":true}');break;}
            case "IT" : {initConfig::getInstance()->getLang($lingua); $this->response->addContent('{"result":true}');break;}
        }
    }

    public function __construct()
    {
        $this->className = get_class($this);
        $this->livelloPagina = self::$LIVELLO_PUB;
    }

    public function homeAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$ADMIN_HOME_FORWARD);
        $this->includer->includePage(self::$ADMIN_HOME_FORWARD);
    }

    public function settingsAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$ADMIN_SETTINGS_FORWARD);
        $this->includer->includePage(self::$ADMIN_SETTINGS_FORWARD);
    }


}