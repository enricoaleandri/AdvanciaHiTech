<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enrico
 * Date: 08/06/14
 * Time: 20.14
 * To change this template use File | Settings | File Templates.
 */
abstract class AbstractTinaFramework
{

    protected $user = null;
    protected $isAdministration;
    protected $isAdminAction;

    public static $LIVELLO_ADM = 1;
    public static $LIVELLO_MOD = 2;
    public static $LIVELLO_PUB = 3;

    public static $licence_person = "";
    public static $advertiseMessage = "";
    public static $user_var_name = "admin_logged";
    public static $user_var_name_id = "id_admin_logged";
    public static $user_var_livello = "livello_admin_logged";

    protected $properties;
    protected $connection;
    protected $includer;

    protected $response;
    protected $request;

    public function initializeFramework()
    {

        // Pre callback
        $time_start = microtime(true);
        global $errorMessage,$message, $response, $classi;

        if(isset($_SESSION[self::$user_var_name]))
        {
            $user = $_SESSION[self::$user_var_name];
        }
        else
        {
            $user = null;
        }

        $config = initConfig::getInstance()->getConfig();
        $config->setProperty("isAdministration", $this->isAdministration);
        $this->properties = $config;
        $this->connection = initConfig::getInstance()->getConnect();
        $this->includer = initConfig::getInstance() -> getIncluder();


        global $response;
        $response = new Response();
        $base_path = $this->properties->getProperty("base_path")."/";
        $response -> setProperty("base_path", $base_path);

        $response -> setProperty("full_url", $this->get_full_url());


        $response -> setProperty("page_path", $this->properties->getProperty("page_path"));

        Logger::log(Logger::$DEBUG,"InvokedClass : $this->className - base_path : $base_path ");


        // here environment properties to render the page
        if($this->isAdministration)
        {
            $response->setProperty("url",Utils::getURLPathAdmin());
            $response->setProperty("host",Utils::getHostAdmin());
        }
        else
        {
            $response->setProperty("host",Utils::getHost());
            $response->setProperty("url",Utils::getURLPath());
        }



        $this->response = $response;
        //to here

        $lang = function($string){ global $language; return $language -> getValue($string);};
        // Post callback

    }

    function get_full_url() {
        $https = !empty($_SERVER['HTTPS']) && strcasecmp($_SERVER['HTTPS'], 'on') === 0 ||
            !empty($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
                strcasecmp($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') === 0;
        return
            ($https ? 'https://' : 'http://').
            (!empty($_SERVER['REMOTE_USER']) ? $_SERVER['REMOTE_USER'].'@' : '').
            (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ($_SERVER['SERVER_NAME'].
            ($https && $_SERVER['SERVER_PORT'] === 443 ||
            $_SERVER['SERVER_PORT'] === 80 ? '' : ':'.$_SERVER['SERVER_PORT']))).
            substr($_SERVER['SCRIPT_NAME'],0, strrpos($_SERVER['SCRIPT_NAME'], '/'));
    }

    /**
     * Set of function to manage the login of Admin!
     *
     * @return bool valore booleano,<p> <b> true </b> se l'utente è loggato e autorizzato ad accedere</p>
     *                              <p> <b>false</b> se l'utente non è loggato o autorizzato ad accedere </p>
     */
    public function isAdminLogged()
    {
        Logger::log(Logger::$DEBUG,self::$user_var_livello." :  ".$_SESSION[self::$user_var_livello]."  user_var_name : ".$_SESSION[self::$user_var_name]);
        if(isset($_SESSION[self::$user_var_name]) &&
            strlen($_SESSION[self::$user_var_name]) > 0 &&
            isset($_SESSION[self::$user_var_livello]))
        {
            return true;
        }
        else
        {

            return false; // lutente
        }
    }


    protected function AdminLogout()
    {
        session_unset();
        session_destroy();
    }
    protected function AdminLogin($user, $pass)
    {
        $DAO = new adminDAO($this -> connection);
        $row = $DAO -> getAdminByUser($user);

        if($row)
        {
            if($row['password'] == md5($pass))
            {
                $_SESSION[self::$user_var_name] = $row['username'];
                $_SESSION[self::$user_var_name_id] = $row['id_admin'];
                $_SESSION[self::$user_var_livello] = $row['livello'];

                $this->user=$_SESSION[self::$user_var_name];
                Logger::log(Logger::$INFO," Utente Connesso($this->user)! Ip : ".$_SERVER['REMOTE_ADDR']);
                return true;
            }
            else
            {
                Logger::log(Logger::$INFO,"Password errata :$pass ");
                return false;
            }

        }
        else
        {
            Logger::log(Logger::$INFO,"Utente errato :$user ");
            return false;
        }
    }
    public function getUserVarLivello()
    {
        return $this->user_var_livello;
    }

    public function getUserVarName()
    {
        return $this->user_var_name;
    }

    public function getUserVarNameId()
    {
        return $this->user_var_name_id;
    }

    public function getProperties()
    {
        return $this->properties;
    }
    public function getIncluder()
    {
        return $this->includer;
    }
    public function getConnection()
    {
        return $this->connection;
    }
    public function IsAdministration()
    {
        return $this->isAdministration;
    }
}
