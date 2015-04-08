<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enrico
 * Date: 18/10/14
 * To change this template use File | Settings | File Templates.
 */
class SettingsController extends  AbstractController
{

    private static $ADMIN_HOME_FORWARD = "admin_settings";
    private static $ADMIN_CONFIGURATION_FORWARD = "admin_configuration";
    private static $ADMIN_ACCOUNT_FORWARD = "admin_account";

    public function __construct()
    {
        $this->className = get_class($this);
        $this-> isAdminAction = true;

    }


    public function configurationAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$ADMIN_CONFIGURATION_FORWARD);

        $settingsDAO = new settingsDAO($this->connection);
        $this -> response -> setProperty("settings",initConfig::getInstance()->getSettings());
        $this->includer->includePage(self::$ADMIN_CONFIGURATION_FORWARD);
    }

    public function accountAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$ADMIN_ACCOUNT_FORWARD);

        $adminDAO = new adminDAO($this->connection);
        $this -> response -> setProperty("admins",$adminDAO -> getAllAdmin());
        $this->includer->includePage(self::$ADMIN_ACCOUNT_FORWARD);
    }

    public function settingsAction(Request $request)
    {
        $this->response->setProperty("selectedPage", self::$ADMIN_HOME_FORWARD);
        $this->includer->includePage(self::$ADMIN_HOME_FORWARD);
    }
    public function homeAction(Request $request)
    {
        $settingsDAO = new settingsDAO($this->connection);
        $this -> response -> setProperty("settings",initConfig::getInstance()->getSettings());
        $this->includer->includePage(self::$ADMIN_HOME_FORWARD);
    }


    public function updateAction(Request $request)
    {
        Logger::log(Logger::$DEBUG, "update [SettingsController] ");
        /* if($request ->is_set('values') && $request->is_set('keys'))
        {*/
            $path ="";
            $adminDAO = new adminDAO($this->connection);
            $settingsDAO = new settingsDAO($this->connection);

            $this -> response -> setProperty("admins",$adminDAO -> getAllAdmin());
            $this -> response -> setProperty("settings",initConfig::getInstance()->getSettings());

            $settings = initConfig::getInstance()->getSettings();

            $keys = array(
                "comunication_mail",
                "job_mail",
                "comunication_number",
                "fb_link_page",
                "twitter_link_page",
                "meta_tag",
                "google_analytics_javascript"
            );

            $values = array(
                $request->get($keys[0]),
                $request->get($keys[1]),
                $request->get($keys[2]),
                $request->get($keys[3]),
                $request->get($keys[4]),
                $request->get($keys[5]),
                $request->get($keys[6])
            );

            for($i = 0; $i < count($keys); $i++)
            {

                if($keys[$i] == "show_logo" && $values[$i] == "true")
                {

                    $immagine = $_FILES['file_logo'];
                    if($immagine != null && $immagine["size"]!=0)
                    {


                        //controllo che nell'upload non ci siano errori
                        if($immagine['error'] == 0)
                        {
                            $nomeFile = strtolower($immagine['name']);
                            $milliseconds = round(microtime(true) * 1000);

                            $flagExtention = false;
                            $ext = substr($nomeFile,$this->backwardStrpos($nomeFile,".",0)+1, strlen($nomeFile));
                            $extArray = explode(",", $settings['file_allowed_ext']);


                            if(array_search($ext, $extArray) === false)
                            {
                                $errorMessage = "Logo con estensione .".$ext." non consentito";
                                $this -> response -> setError("errorMessage", $errorMessage);
                                $this->response->addContent('{"result":false}');
                                break;
                            }

                            $tempFile = $this -> ridimensionaFile($immagine['tmp_name'],$ext,700);

                            copy($tempFile, "./../images/loghi/".$milliseconds.".".$ext);
                            unlink($tempFile);
                            $path = "images/loghi/".$milliseconds.".".$ext;
                            Logger::log(Logger::$DEBUG,"Logo caricate con successo!");
                        }
                        else
                        {
                            Logger::log(Logger::$ERROR,"Errore caricamento del logo");
                            $errorMessage = "Errore caricamento del logo ";

                            $this -> response -> setError("errorMessage", $errorMessage);
                            $this->response->addContent('{"result":false}');
                            break;

                        }

                        if($path== null || strlen($path)==0)
                        {
                            Logger::log(Logger::$ERROR,"Errore caricamento del logo");
                            $errorMessage = "Errore caricamento del logo ";
                            $this -> response -> setError("errorMessage", $errorMessage);
                            $this->response->addContent('{"result":false}');
                            break;
                        }

                    }
                }
            }
            for($i = 0; $i < count($values); $i++)
            {
                //$values[$i] = $values[$i];

            }
            for($i = 0; $i < count($keys); $i++)
            {
                if($keys[$i] == "logo_path" && $path != "")
                {
                    $values[$i] = $path;
                }
                if(!$settingsDAO -> updateSettings($keys[$i], $values[$i]))
                {
                    $errorMessage = "Problema con l'update del campo : ".$keys[$i]." con valore :".$values[$i];
                    $this -> response -> setError("errorMessage", $errorMessage);
                    $this->response->addContent('{"result":false}');
                    break;
                }
            }

            initConfig::getInstance()->updateSettings();
            $this -> response -> setProperty("settings",initConfig::getInstance()->getSettings());
            $message = "Salvataggio Effettuato!";
            $this -> response -> setProperty("message", $message);
            $this->response->addContent('{"result":true}');
        /*}
        else
       {
            $errorMessage = "Parametri mancanti!";
            $this -> response -> setError("errorMessage", $errorMessage);
            $this->response->addContent('{"result":false}');
        }*/
    }

    public function adduserAction(Request $request)
    {
        if($request ->is_set('password') && $request->is_set('username') && $request->is_set('repassword') )
        {
            $username = $request->get('username');
            $password = $request->get('password');
            $repassword = $request->get('repassword');
            if(strlen($username) < 3 || strlen($password) < 3 || strlen($repassword) < 3)
            {
                $errorMessage = "Parametri troppo corti controllare!";
                $this -> response -> setError("errorMessage", $errorMessage);
                $this->response->addContent('{"result":false}');
            }
            else
            {
                $adminDAO = new adminDAO($this->connection);
                $resulSet = $adminDAO->getAdminByUser($username);
                if($resulSet)
                {
                    $errorMessage = "Utente esistente!";
                    $this -> response -> setError("errorMessage", $errorMessage);
                    $this->response->addContent('{"result":false}');
                }
                else
                {

                    if($password != $repassword)
                    {
                        $errorMessage = "Le password non combaciano!";
                        $this -> response -> setError("errorMessage", $errorMessage);
                        $this->response->addContent('{"result":false}');
                    }
                    else
                    {
                        if($adminDAO -> insertAdmin($username,md5($password)))
                        {
                            $message = "Utente Aggiunto!";
                            $this -> response -> setProperty("message", $message);
                            $this->response->addContent('{"result":true}');
                        }
                        else
                        {
                            $errorMessage = "Impossibile inserire l'utente!";
                            $this -> response -> setError("errorMessage", $errorMessage);
                            $this->response->addContent('{"result":false}');
                        }
                    }
                }
            }

        }
        else
        {
            $errorMessage = " Parametri mancanti per l'inserimento di un utenti";
            $this -> response -> setError("errorMessage", $errorMessage);
            $this->response->addContent('{"result":false}');
        }
    }



    public function changepasswordAction(Request $request)
    {

        if($request ->is_set('password') && $request->is_set('username') && $request->is_set('repassword'))
        {
            $username = $request->get('username');
            $password = $request->get('password');
            $repassword = $request->get('repassword');
            if(strlen($username) < 3 || strlen($password) < 3 || strlen($repassword) < 3)
            {
                $errorMessage = "Parametri troppo corti controllare!";
                $this -> response -> setError("errorMessage", $errorMessage);
                $this->response->addContent('{"result":false}');
            }
            else
            {
                $adminDAO = new adminDAO(initConfig::getInstance()->getConnect());
                $resulSet = $adminDAO->getAdminByUser($username);

                if(!$resulSet)
                {
                    $errorMessage = "Utente inesistente!";
                    $this -> response -> setError("errorMessage", $errorMessage);
                    $this->response->addContent('{"result":false}');
                }
                else
                {

                    if($password != $repassword)
                    {
                        $errorMessage = "Le password non combaciano!";
                        $this -> response -> setError("errorMessage", $errorMessage);
                        $this->response->addContent('{"result":false}');
                    }
                    else
                    {
                        if($adminDAO -> updateAdmin($username,md5($password)))
                        {
                            $message = "Utente Aggiornato!";
                            $this -> response -> setProperty("message", $message);
                            $this->response->addContent('{"result":true}');
                        }
                        else
                        {
                            $errorMessage = "Impossibile aggiornare utente!";
                            $this -> response -> setError("errorMessage", $errorMessage);
                            $this->response->addContent('{"result":false}');
                        }
                    }
                }
            }
        }
        else
        {
            $errorMessage = " Parametri mancanti per la modifica della password!";
            $this -> response -> setError("errorMessage", $errorMessage);
            $this->response->addContent('{"result":false}');
        }
    }

    public function deleteuserAction(Request $request){
        Logger::log(Logger::$DEBUG, "deleteUser [SettingsController] ".$request->toString());
        $username = $request->get('username');
        if($request->is_set('username')) {
            $username = $request->get('username');
            Logger::log(Logger::$DEBUG, "deleteUser [SettingsController] username=".$username);
            if($username){
                $adminDAO = new adminDAO(initConfig::getInstance()->getConnect());
                $resulSet = $adminDAO->deleteUser($username);
                $message = "Utente eliminato correttamente!";
                $this -> response -> setProperty("message", $message);
                $this->response->addContent('{"result":true}');
            }else{
                $errorMessage = " Selezionare un utente e riprovare";
                $this -> response -> setError("errorMessage", $errorMessage);
                $this->response->addContent('{"result":false}');
            }
        }else{
            $errorMessage = "Nessun utente selezionato";
            $this -> response -> setError("errorMessage", $errorMessage);
            $this->response->addContent('{"result":false}');
        }
    }
}
