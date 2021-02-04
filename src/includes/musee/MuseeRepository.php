<?php

class MuseeRepository 
{
    private $_db;
    
    public function __construct($db)
    {
        $this->_db = $db;
    }

    protected function get_db()
    {
        return $this->_db;
    }

    public function selectAll():Array
	{
        $req = $this->get_db()->prepare("SELECT * FROM musee");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectById(int $id):Array
	{
        $req = $this->get_db()->prepare("SELECT * FROM musee WHERE id = :id");
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        return $req->fetch();
    }
}