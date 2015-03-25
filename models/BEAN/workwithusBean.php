<?php
/**
 * Created by PhpStorm.
 * User: Falza
 * Date: 19/03/2015
 * Time: 12.47
 */

class workwithusBean {
    private $name;
    private $surname;
    private $mail;
    private $phone;
    private $title;
    private $message;
    private $fileName;
    private $fileUrl;
    private $fileSize;
    private $fileType;

    function __construct(){

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return mixed
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * @param mixed $fileSize
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }

    /**
     * @return mixed
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * @param mixed $fileType
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
    }

    /**
     * @return mixed
     */
    public function getFileUrl()
    {
        return $this->fileUrl;
    }

    /**
     * @param mixed $fileUrl
     */
    public function setFileUrl($fileUrl)
    {
        $this->fileUrl = $fileUrl;
    }
    


    public function  getFile(){
        $array = array("name"=>$this->fileName,"size"=>$this->fileSize,"type"=>$this->fileType);
        return $array;
    }

    public function validate()
    {
        if (($this->name != "" && $this->name != "true" && strlen($this->name)<=50) &&
            ($this->surname != "" && $this->surname != "true" && strlen($this->surname)<=50) &&
            ($this->title != "" && $this->title != "true" && strlen($this->title)<=150)
            && $this->mail != "" && strlen($this->message)<=1500
        ) {
            if (filter_var($this->mail, FILTER_VALIDATE_EMAIL) && strlen($this->mail)<=150) {
                Logger::log(Logger::$INFO, "[AjaxController] sendemail valid  = E' valido");
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


}