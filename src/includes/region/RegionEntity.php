<?php

class Region
{
    private $_id;
    private $_name;
    private $_photo;

    public function __construct(array $data)
    {
        $this->set_id($data["ID"]);
        $this->set_nom($data["NOM"]);
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

// $data = [
//     "id" => 0,
//     "name" => "Nom region",
//     "photo" => "image",
// ];

// $regionsModel = [];

// for ($i = 0; $i < 15; $i++) {
//     $data["id"] = $i;
//     array_push($regionsModel, new Region($data));
// }
