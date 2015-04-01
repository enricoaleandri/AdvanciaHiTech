<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enrico
 * Date: 10/06/14
 * Time: 0.17
 * To change this template use File | Settings | File Templates.
 */

class AjaxController extends  AbstractController
{

    private static $HOME_FORWARD = "home";
    public function __construct()
    {
        $this -> className = get_class($this);

        if($this->isAdminLogged(self::$LIVELLO_MOD))
        {
            $this->livelloPagina = self::$LIVELLO_ADM;
        }
        else
        {
            $this->livelloPagina = self::$LIVELLO_PUB;
        }
    }

    function  uploadcvAction (Request $request){

        if(!isset($_SESSION[$temp_dir_lavori]) || $_SESSION[$temp_dir_lavori] == "")
            $_SESSION[$temp_dir_lavori] = time();

        $options = array(
            'script_url' => $this->response->getProperty("full_url").'/ajax/uploadcv/',
            'upload_dir' => "/home/mhd/www.aleandrienrico.com/htdocs/temp/advancia/data/application/".$_SESSION[$temp_dir_lavori].'/',
            'upload_url' => $this->response->getProperty("full_url").'/data/application/'.$_SESSION[$temp_dir_lavori].'/',
            'accept_file_types' => '/\.(odt|docx?|pdf)$/i',
            'max_file_size' => 7000000
        );

        $error_messages = array(
            1 => initConfig::getInstance()->getLang() -> getValue("work.fileupload.maxfilesize"),
            2 => initConfig::getInstance()->getLang() -> getValue("work.fileupload.maxfilesizehtml"),
            3 => initConfig::getInstance()->getLang() -> getValue("work.fileupload.partiallyup"),
            4 => initConfig::getInstance()->getLang() -> getValue("work.fileupload.nofile"),
            6 => initConfig::getInstance()->getLang() -> getValue("work.fileupload.missingfolder"),
            7 => initConfig::getInstance()->getLang() -> getValue("work.fileupload.writeondisk"),
            8 => initConfig::getInstance()->getLang() -> getValue("work.fileupload.upstopped"),
            'post_max_size' => initConfig::getInstance()->getLang() -> getValue("work.fileupload.postmaxsize"),
            'max_file_size' => initConfig::getInstance()->getLang() -> getValue("work.fileupload.toobig"),
            'min_file_size' => initConfig::getInstance()->getLang() -> getValue("work.fileupload.toosmall"),
            'accept_file_types' => initConfig::getInstance()->getLang() -> getValue("work.fileupload.allowed"),
            'max_number_of_files' => initConfig::getInstance()->getLang() -> getValue("work.fileupload.maxnumb"),
            'max_width' => initConfig::getInstance()->getLang() -> getValue("work.fileupload.imagemaxwidth"),
            'min_width' => initConfig::getInstance()->getLang() -> getValue("work.fileupload.imageminwidth"),
            'max_height' => initConfig::getInstance()->getLang() -> getValue("work.fileupload.imagemaxheight"),
            'min_height' => initConfig::getInstance()->getLang() -> getValue("work.fileupload.imageminheight"),
            'abort' => initConfig::getInstance()->getLang() -> getValue("work.fileupload.aborted"),
            'image_resize' => initConfig::getInstance()->getLang() -> getValue("work.fileupload.resize")
        );

        $upload_handler = new HandlerUpload($options,true,$error_messages);

    }


    function  workwithusAction(Request $request){

        $form = new workwithusBean();
        $mailSender = new MailSender($this->properties);

        $name = $request->get("umbheadfld_Name");
        $surname = $request->get("umbheadfld_Surname");
        $mail = $request->get("umbheadfld_E-mail");
        $phone = $request->get("umbheadfld_phone");
        $title = $request->get("umbheadfld_title");
        $message= $request->get("umbheadfld_Message");
        $urlFile = $request->get("umbheadfld_File");
        $nameFile = $request->get("umbheadfld_Filename");
        Logger::log(Logger::$INFO, "[AjaxController] url file = ".$urlFile);

        $form -> setName($name);
        $form -> setSurname($surname);
        $form -> setMail($mail);
        $form -> setPhone($phone);
        $form -> setTitle($title);
        $form -> setMessage($message);
        $form -> setFileUrl($urlFile);
        $form -> setFileName($nameFile);

        if($form->validate()){
            $captcha=$request->get('g-recaptcha-response');
           //@$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdYlQMTAAAAAMdRILveYnei-Y7sF_9WXM5kPYvR&response=".$captcha);
            $headers = array("Accept" => "application/json");
            $body = array("secret" => $this->properties->getProperty("secret_recaptcha_key"), "response" => "$captcha");
            $resp = Unirest::get("https://www.google.com/recaptcha/api/siteverify", $headers, $body);
            $response = $resp ->raw_body;
            $settings = initConfig::getInstance()->getSettings();
            $mailSender->setMailto($settings["job_mail"]);
            $mailSender->setSubject("Advancia.it - candidatura web :: ".$name." ".$surname);
            $mailSender->setMailfrom("noreply@advancia.it");
            $mailSender->setTemplate($this->properties->getProperty("page_path") . "/" . $this->properties->getProperty("workwithus_mail"));
            $mailSender->setAttachments($urlFile);
            $mailSender->setCc("nothing");
            $mailSender->setMailfor("nothing");
            $mailSender->setMailfromname("Contattaci: Advancia Technology");
            $array = array();
            $array['name'] = $form->getName();
            $array['surname'] = $form->getSurname();
            $array['mail'] = $form->getMail();
            $array['phone'] = $form->getPhone();
            $array['title'] = $form->getTitle();
            $array['message'] = $form->getMessage();
            $array['file'] = $form->getFileUrl();
            $array['filename'] = $form->getFileName();
            $mailSender->setTemplateAttributes($array);
            if(!$captcha){
                Logger::log(Logger::$INFO, "[AjaxController] captcha response = ".$captcha);
                $this->response->addContent('{"result":false}');
            }else{
                Logger::log(Logger::$INFO, "[AjaxController] captcha response = ".$response.success);
                if($response.success==false){
                    Logger::log(Logger::$INFO, "[AjaxController] captcha = false");
                    $this->response->addContent('{"result":false}');
                }else{
                    Logger::log(Logger::$INFO, "[AjaxController] captcha = true");
                    if($mailSender->send()){
                        $this->response->addContent('{"result": true}');
                    }else{
                        Logger::log(Logger::$INFO, "[AjaxController] captcha = false mail");
                        $this->response->addContent('{"result":false}');
                    }
                }
            }
        }else {
            Logger::log(Logger::$INFO, "[AjaxController] captcha response non sono valido" );
            $this->response->addContent('{"result":false}');
        }
    }

    function contactusAction (Request $request){

        $form = new contactBean();
        $mailSender = new MailSender($this->properties);

        $name = $request->get("umbheadfld_Name");
        $surname = $request->get("umbheadfld_Surname");
        $mail = $request->get("umbheadfld_E-mail");
        $phone = $request->get("umbheadfld_phone");
        $company = $request->get("umbheadfld_company");
        $fax = $request->get("umbheadfld_Fax");
        $cap = $request->get("umbheadfld_Cap");
        $city = $request->get("umbheadfld_City");
        $address= $request->get("umbheadfld_Address");
        $message= $request->get("umbheadfld_Message");

        $form -> setName($name);
        $form -> setSurname($surname);
        $form -> setMail($mail);
        $form -> setFax($fax);
        $form -> setCap($cap);
        $form -> setCity($city);
        $form -> setCompany($company);
        $form -> setPhone($phone);
        $form -> setAddress($address);
        $form -> setMessage($message);

        if($form->validate() ){

            $captcha=$request->get('g-recaptcha-response');
           // @$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdYlQMTAAAAAMdRILveYnei-Y7sF_9WXM5kPYvR&response=".$captcha);
            $headers = array("Accept" => "application/json");
            $body = array("secret" => $this->properties->getProperty("secret_recaptcha_key"), "response" => "$captcha");
            $resp = Unirest::get("https://www.google.com/recaptcha/api/siteverify", $headers, $body);
            $response = $resp ->raw_body;
            $settings = initConfig::getInstance()->getSettings();
            $mailSender->setMailto($settings["comunication_mail"]);
            $mailSender->setSubject("Advancia.it - contatto web :: ".$name." ".$surname);
            $mailSender->setCc("qualcuno@prova.com");
            $mailSender->setMailfrom("noreply@advancia.it");
            $mailSender->setTemplate($this->properties->getProperty("page_path") . "/" . $this->properties->getProperty("contact_mail"));
            $mailSender->setMailfor("nothing");
            $mailSender->setAttachments("nothing");
            $mailSender->setMailfromname("Contattaci: Advancia Technology");
            $array = array();
            $array['name'] = $form->getName();
            $array['surname'] = $form->getSurname();
            $array['mail'] = $form->getMail();
            $array['phone'] = $form->getPhone();
            $array['company'] = $form->getCompany();
            $array['fax'] = $form->getFax();
            $array['address'] = $form->getAddress();
            $array['cap'] = $form->getCap();
            $array['city'] = $form->getCity();
            $array['message'] = $form->getMessage();
            $mailSender->setTemplateAttributes($array);

            if(!$captcha){
                $this->response->addContent('{"result":false}');
            }else{
                Logger::log(Logger::$INFO, "[AjaxController] captcha response = ".$response.success);
                if($response.success==false){
                    Logger::log(Logger::$INFO, "[AjaxController] captcha = false");
                    $this->response->addContent('{"result":false}');
                }else{
                    Logger::log(Logger::$INFO, "[AjaxController] captcha = true");
                    if($mailSender->send()){
                        $this->response->addContent('{"result":true}');
                    }else{
                        Logger::log(Logger::$INFO, "[AjaxController] captcha = false mail");
                        $this->response->addContent('{"result":false}');
                    }
                }
            }
        }else {
            $this->response->addContent('{"result":false}');
        }
    }

    function adminAction (Request $request){
        //TODO
    }

}
