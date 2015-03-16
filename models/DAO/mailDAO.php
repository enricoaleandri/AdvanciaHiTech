<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enrico
 * Date: 16/03/14
 * Time: 21.05
 * To change this template use File | Settings | File Templates.
 */

class mailDAO extends AbstractDAO
{

    private $getAllMails = "SELECT * FROM ! ";
    private $insertMail = "INSERT INTO ! (subject, mail_to, mail_for, cc, mail_from, mail_from_name, body, template, template_attribute, attachments) VALUES (!, !, !, !, !, !, !, !, !, !)";


    function __construct()
    {
        $this ->initDAO(__CLASS__);
        $this->tableName = "at_mail";
    }


    function getAllMails()
    {
        if($this->connection->getReady())
        {

            $sql = new QueryBuilder($this -> getAllMails);

            $sql -> setTable($this -> tableName);

            Logger::log(Logger::$INFO," Query sto recuperando tutte le e-mail :".$sql->toQuery());
            $query = $this->connection->query($sql->toQuery());

            if($query !== false)
            {
                $num_results = $query->num_rows;
                if($num_results)
                {
                    return $query;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }

        }
        else
        {
            return false;
        }
    }

    function insertMail($emailBean)
    {
        if($this->connection->getReady())
        {

            $sql = new QueryBuilder($this -> insertMail);

            $sql -> setTable($this -> tableName);
            $sql -> setString($emailBean->getSubject());
            $sql -> setString($emailBean->getMailto());
            $sql -> setString($emailBean->getMailfor());
            $sql -> setString($emailBean->getCc());
            $sql -> setString($emailBean->getMailfrom());
            $sql -> setString($emailBean->getMailfromname());
            $sql -> setString(str_replace('"',"'",$emailBean->getBody()));
            $sql -> setString($emailBean->getTemplate());
            $sql -> setString(str_replace('"',"'",serialize($emailBean->getTemplateAttributes())));
            $sql -> setString($emailBean->getAttachments());

            try
            {
                $this->connection->autocommit(false);
                Logger::log(Logger::$INFO," Query sto per inserire una mail : ".$sql->toQuery());
                $query = $this->connection->query($sql->toQuery());

                if($query !== false)
                {
                    $id_query  = $this->connection->query("SELECT LAST_INSERT_ID() as ID");

                    $row = $id_query->fetch_assoc();
                    $id  = $row['ID'];
                    Logger::log(Logger::$DEBUG," Memorizzo l'id che è stato generato :  ".$id);
                    $emailBean -> setIdEmail($id);
                    $this->connection->autocommit(true);
                    $this->connection->commit();
                    return $emailBean;
                }
                else
                {
                   Logger::log(Logger::$ERROR,"Attenzione errore in esecuzione query : ".$this->connection->error);
                    $this->connection->rollback();
                    $this->connection->autocommit(true);
                    return false;
                }
            }
            catch (Exception $e)
            {
                $this->connection->rollBack();
                $this->connection->autocommit(true);
                Logger::log(Logger::$ERROR,"Errore in esecuzione query : " . $e->getMessage());
                return false;
            }
        }
        else
        {
            Logger::log(Logger::$ERROR,"Connection false");
            return false;
        }
    }
}


?>