<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enrico
 * Date: 03/06/14
 * Time: 17.16
 * To change this template use File | Settings | File Templates.
 */
class PublicController extends  AbstractController
{

    private static $HOME_FORWARD = "home";
    private static $ABOUT_FORWARD = "about";
    private static $CONTACT_FORWARD = "contact";
    private static $PORTFOLIO_FORWARD = "portfolio";
    private static $NEWS_FORWARD = "news";
    private static $ANDROID_FORWARD = "android";
    private static $WORKWITHUS_FORWARD = "workwithus";
    private static $CORSI_FORWARD = "corsi";
    private static $SOLUTIONS_FORWARD = "solutions";
    private static $OUTSOURCING_FORWARD = "outsourcing";
    private static $SYSTEMINT_FORWARD = "systemint";
    private static $TEAM_FORWARD = "team";
    private static $SOCIAL_FORWARD = "social";
    private static $OFFERTAFORMATIVA_FORWARD = "offertaformativa";
    private static $BI_FORWARD = "bi";
    private static $BIGDATA_FORWARD = "bigdata";

    public function __construct()
    {
        $this->className = get_class($this);
        $this->livelloPagina = self::$LIVELLO_PUB;
    }

    public function homeAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$HOME_FORWARD);
        $this->includer->includePage(self::$HOME_FORWARD);
    }
    public function aboutAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$ABOUT_FORWARD);
        $this->includer->includePage(self::$ABOUT_FORWARD);
    }
    public function contactAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$CONTACT_FORWARD);
        $this->includer->includePage(self::$CONTACT_FORWARD);
    }
    public function newsAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$NEWS_FORWARD);
        $this->includer->includePage(self::$NEWS_FORWARD);
    }

    public function bigDataAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$BIGDATA_FORWARD);
        $this->includer->includePage(self::$BIGDATA_FORWARD);
    }
    public function biAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$BI_FORWARD);
        $this->includer->includePage(self::$BI_FORWARD);
    }
    public function offertaformativaAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$OFFERTAFORMATIVA_FORWARD);
        $this->includer->includePage(self::$OFFERTAFORMATIVA_FORWARD);
    }
    public function socialAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$SOCIAL_FORWARD);
        $this->includer->includePage(self::$SOCIAL_FORWARD);
    }
    public function corsiAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$CORSI_FORWARD);
        $this->includer->includePage(self::$CORSI_FORWARD);
    }
    public function workwithusAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$WORKWITHUS_FORWARD);
        $this->includer->includePage(self::$WORKWITHUS_FORWARD);
    }
    public function androidAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$ANDROID_FORWARD);
        $this->includer->includePage(self::$ANDROID_FORWARD);
    }
    public function teamAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$TEAM_FORWARD);
        $this->includer->includePage(self::$TEAM_FORWARD);
    }
    public function solutionsAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$SOLUTIONS_FORWARD);
        $this->includer->includePage(self::$SOLUTIONS_FORWARD);
    }
    public function outsourcingAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$OUTSOURCING_FORWARD);
        $this->includer->includePage(self::$OUTSOURCING_FORWARD);
    }

    public function systemintAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$SYSTEMINT_FORWARD);
        $this->includer->includePage(self::$SYSTEMINT_FORWARD);
    }

    public function portfolioAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$PORTFOLIO_FORWARD);
        $lavoriDAO = new lavoriDAO($this->connection);

        $this -> response -> setProperty("lavori",$lavoriDAO->getAllLavori());

        $this->includer->includePage(self::$PORTFOLIO_FORWARD);
    }

}
