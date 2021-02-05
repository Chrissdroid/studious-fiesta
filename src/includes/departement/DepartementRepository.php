<?php

class DepartementRepository 
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
        $req = $this->get_db()->prepare("SELECT * FROM departement");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMusee(int $id)
    {
        $req = $this->get_db()->prepare("SELECT musee.NOM FROM musee inner join departement d on musee.ID_departement = d.ID where ID_departement = :id");
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}