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
        $req = $this->get_db()->prepare("SELECT musee.NOM, musee.DESCRIPTION, musee.VILLE, musee.PHOTO, musee.TELEPHONE, musee.CP, musee.SITE, musee.ADRESSE  FROM musee inner join departement d on musee.ID_departement = d.ID where ID_departement = :id");
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByRegion(int $id)
    {
        $req = $this->get_db()->prepare("select departement.NOM, departement.ID, departement.PHOTO from departement inner join region r on departement.ID_REGION = r.ID where r.ID = :id");
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}