<?php

require_once ('lib/Sql.php');

class MySql extends Sql
{
   private $db;

    public function __construct()
    {
        if (!$this->db = new \PDO('mysql:host='.HOST.';dbname='.DB, USER, PASSWORD))
        {
            throw new \Exception(' error DB ');
        }
    }

    public function query($data = [],$class = null)
    {
        $query =  parent::execute();
        $sth = $this->db->prepare($query);
        $result = $sth->execute($data);
        if (false === $result) {
            var_dump( $sth->errorInfo() );
            die;
        }
        if (null === $class) {
            return $sth->fetchAll();
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
    }

    public function execute($data = [])
    {
        $query =  parent::execute();
        $sth = $this->db->prepare($query);
        $result = $sth->execute();
        if (false === $result) {
            var_dump( $sth->errorInfo() );
            die;
        }
        return true;
    }

    public function executes($sql, array $data = [])
    {
        $sth = $this->db->prepare($sql);
        $result = $sth->execute($data);
        if (false === $result) {
            var_dump( $sth->errorInfo() );
            die;
        }
        return true;
    }
}



