<?php

class Exposition
{
    private $_id;
    private $_nom;
    private $_date;
    private $_description;
    private $_idMusee;

    public function __construct(array $data)
    {
        $this->set_id($data["ID_musee"]);
        $this->set_nom($data["NOM"]);
        $this->set_date($data["DATE"]);
        $this->set_description($data["DESCRIPTION"]);
        $this->set_idMusee($data["ID_musee"]);
    }

    public function set_id(int $id)
    {
        if (!is_int($id)) {
            trigger_error("Un entier est demandé", E_USER_WARNING);
        }
        $this->_id = $id;
    }

    public function get_id()
    {
        return $this->_id;
    }

    public function set_nom(string $nom)
    {
        if (!is_string($nom)) {
            trigger_error("Un string est demandé", E_USER_WARNING);
        }
        $this->_nom = $nom;
    }

    public function get_nom()
    {
        return $this->_nom;
    }

    public function set_date(string $date)
    {
        if (!is_string($date)) {
            trigger_error("Un string est demandé", E_USER_WARNING);
        }
        $this->_date = $date;
    }

    public function get_date()
    {
        return $this->_date;
    }

    public function set_description(string $description)
    {
        if (!is_string($description)) {
            trigger_error("Un string est demandé", E_USER_WARNING);
        }
        $this->_description = $description;
    }

    public function get_description()
    {
        return $this->_description;
    }

    public function set_idMusee(int $idMusee)
    {
        if (!is_int($idMusee)) {
            trigger_error("Un string est demandé", E_USER_WARNING);
        }
        $this->_idMusee = $idMusee;
    }

    public function get_idMusee()
    {
        return $this->_idMusee;
    }
}