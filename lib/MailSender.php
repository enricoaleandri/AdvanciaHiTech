<?php
/**
 * Created by PhpStorm.
 * User: Falza
 * Date: 13/03/2015
 * Time: 17.24
 */

class MailSender {
    private $idemail;
    private $cc;
    private $subject;
    private $mailto;
    private $mailfor;
    private $body;
    private $mailfrom;
    private $mailfromname;
    private $template;
    private $templateAttributes;
    private $attachments;
    private $properties;

    function __construct($properties){
    $this->properties=$properties;
    }

    /**
     * @return mixed
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param mixed $cc
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getMailto()
    {
        return $this->mailto;
    }

    /**
     * @param mixed $mailto
     */
    public function setMailto($mailto)
    {
        $this->mailto = $mailto;
    }

    /**
     * @return mixed
     */
    public function getMailfor()
    {
        return $this->mailfor;
    }

    /**
     * @param mixed $mailfor
     */
    public function setMailfor($mailfor)
    {
        $this->mailfor = $mailfor;
    }

    /**
     * @return mixed
     */
    public function getMailfrom()
    {
        return $this->mailfrom;
    }

    /**
     * @param mixed $mailfrom
     */
    public function setMailfrom($mailfrom)
    {
        $this->mailfrom = $mailfrom;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getMailfromname()
    {
        return $this->mailfromname;
    }

    /**
     * @param mixed $mailfromname
     */
    public function setMailfromname($mailfromname)
    {
        $this->mailfromname = $mailfromname;
    }

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param mixed $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * @return mixed
     */
    public function getTemplateAttributes()
    {
        return $this->templateAttributes;
    }

    /**
     * @param mixed $templateAttributes
     */
    public function setTemplateAttributes($templateAttributes)
    {
        $this->templateAttributes = $templateAttributes;
    }

    /**
     * @return mixed
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param mixed $attachments
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
    }

    /**
     * @return mixed
     */
    public function getIdemail()
    {
        return $this->idemail;
    }

    /**
     * @param mixed $idemail
     */
    public function setIdemail($idemail)
    {
        $this->idemail = $idemail;
    }



    public function  send(){

        $header = "From: ".$this->mailfrom ;
        $header .= " Cc: ".$this->cc;
        $header .= " MIME-Version: 1.0";
        $header .= " Content-type: text/html";

        $file="";
        if (file_exists($this->template)) {
            $file = file_get_contents($this->template, FILE_USE_INCLUDE_PATH);
            Logger::log(Logger::$INFO, "Template per mail trovato : $this->template");
        } else{
            Logger::log(Logger::$ERROR, "Template per mail di notifica non trovato. ");
        }

        $keys = array_keys($this->templateAttributes);
        foreach($keys as $key){
            $file = str_replace("[".$key."]", $this->templateAttributes[$key], $file);
        }

        $this->body=$file;
        $mailDao = new mailDAO();
        $mailDao -> insertMail($this);

        if(!$this->properties->isSetted("svil")) {
            if($this->body != "" && mail($this->mailto, $this->subject, $this->body, $header)) {
                Logger::log(Logger::$INFO, "Mail inviata correttamente a : " . $this->mailto);
                return true;
            }else {
                return false;
                Logger::log(Logger::$INFO, "Mail non inviata: " . $this->mailto);
            }
        } else {
            Logger::log(Logger::$INFO, "(SVIL - SIMULAZIONE ) Mail inviata correttamente a : ".$this->mailto);
            return true;
      }
    }

}