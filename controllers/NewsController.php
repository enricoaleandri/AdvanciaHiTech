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
    private static $ADMIN_MAIL_FORWARD = "admin_mail";
    private static $ADMIN_CONFIGURATION_FORWARD = "admin_configuration";
    private static $ADMIN_ACCOUNT_FORWARD = "admin_account";

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

    public function mailAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$ADMIN_MAIL_FORWARD);
        $this->includer->includePage(self::$ADMIN_MAIL_FORWARD);
    }

    public function configurationAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$ADMIN_CONFIGURATION_FORWARD);
        $this->includer->includePage(self::$ADMIN_CONFIGURATION_FORWARD);
    }

    public function accountAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$ADMIN_ACCOUNT_FORWARD);
        $this->includer->includePage(self::$ADMIN_ACCOUNT_FORWARD);
    }


}