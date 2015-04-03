<?php
/**
 * Created by PhpStorm.
 * User: Falza
 * Date: 03/04/2015
 * Time: 17.18
 */

class MailController extends AbstractController {

    private static $ADMIN_MAIL_FORWARD = "admin_mail";

    public function __construct()
    {
        $this->className = get_class($this);
        $this->livelloPagina = self::$LIVELLO_PUB;
    }

    public function  homeAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$ADMIN_MAIL_FORWARD);
        $this->includer->includePage(self::$ADMIN_MAIL_FORWARD);
    }

}