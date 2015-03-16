<?php

/**
 * Created by PhpStorm.
 * User: Falza
 * Date: 12/03/2015
 * Time: 17.14
 */
class contactBean extends AbstractBean
{
    private $name;
    private $surname;
    private $mail;
    private $phone;
    private $fax;
    private $company;
    private $city;
    private $address;
    private $cap;
    private $message;
    private $valid;

    public function __construct()
    {
        $this->initBean();
    }

    /**
     * @return mixed
     */
    public function getSettings()
    {

        return $this->settings;
    }

    /**
     * @param mixed $settings
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;
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
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * @param mixed $cap
     */
    public function setCap($cap)
    {
        $this->cap = $cap;
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

    public function validate()
    {
        if (($this->name != "" && $this->name != "true") &&
            ($this->surname != "" && $this->surname != "true") &&
            ($this->company != "" && $this->company != "true") &&
            ($this->address != "" && $this->address != "true") &&
            ($this->city != "" && $this->city != "true") && $this->cap != "" && $this->mail != ""
        ) {
            if (is_numeric($this->cap) && filter_var($this->mail, FILTER_VALIDATE_EMAIL)) {
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