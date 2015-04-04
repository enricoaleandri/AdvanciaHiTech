<?php
/**
 * Created by PhpStorm.
 * User: Falza
 * Date: 01/04/2015
 * Time: 14.18
 */

class NewsController extends AbstractController {

    private static $ADMIN_HOME_FORWARD = "admin_home";

    public function __construct()
    {
        $this->className = get_class($this);
        $this-> isAdminAction = true;
    }

    public function homeAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$ADMIN_HOME_FORWARD);
        $this->includer->includePage(self::$ADMIN_HOME_FORWARD);
    }


}