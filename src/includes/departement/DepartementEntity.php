<?php

class Departement
{
    private $_id;
    private $_name;
    private $_number;
    private $_photo;

    public function __construct(array $data)
    {
        $this->set_id($data["ID"]);
        $this->set_nom($data["NOM"]);
        $this->set_number($data["NUMERO"]);
        $this->set_photo($data["PHOTO"]);
    }

    public function set_id(int $id)
    {
        if (!is_int($id)) {
            trigger_error("Un entier est demandé", E_USER_WARNING);
        }
        $this->_id = $id;
    }

    public function get_id(int $id)
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

    public function set_number(int $number)
    {
        if (!is_int($number)) {
            trigger_error("Un entier est demandé", E_USER_WARNING);
        }
        $this->_number = $number;
    }

    public function get_number()
    {
        return $this->_number;
    }

    public function get_photo()
    {
        return $this->_photo;
    }

    public function set_photo(string $photo)
    {
        if (!is_string($photo)) {
            trigger_error("Un string est demandeé", E_USER_WARNING);
        }
        $this->_photo = $photo;
    }
}
