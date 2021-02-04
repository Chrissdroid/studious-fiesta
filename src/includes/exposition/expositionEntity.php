<?php

class Exposition
{
    private $_id;
    private $_photo;
    private $_nom;
    private $_adresse;
    private $_ville;
    private $_cp;
    private $_telephone;
    private $_email;
    private $_site;
    private $_description;
    private $_idDepartement;


    public function __construct(array $data)
    {
        $this->set_id($data["ID"]);
        $this->set_photo($data["PHOTO"]);
        $this->set_nom($data["NOM"]);
        $this->set_adresse($data["ADRESSE"]);
        $this->set_ville($data["VILLE"]);
        $this->set_cp($data["CP"]);
        $this->set_telephone($data["TELEPHONE"]);
        $this->set_email($data["EMAIL"]);
        $this->set_site($data["SITE"]);
        $this->set_description($data["DESCRIPTION"]);
        $this->set_idDepartement($data["ID_departement"]);
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

    public function set_photo(string $photo)
    {
        if (!is_string($photo)) {
            trigger_error("Un string est demandé", E_USER_WARNING);
        }
        $this->_photo = $photo;
    }

    public function get_photo()
    {
        return $this->_photo;
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

    public function set_adresse(string $adresse)
    {
        if (!is_string($adresse)) {
            trigger_error("Un string est demandé", E_USER_WARNING);
        }
        $this->_adresse = $adresse;
    }

    public function get_adresse()
    {
        return $this->_adresse;
    }

    public function set_ville(string $ville)
    {
        if (!is_string($ville)) {
            trigger_error("Un string est demandé", E_USER_WARNING);
        }
        $this->_ville = $ville;
    }

    public function get_ville()
    {
        return $this->_ville;
    }

    public function set_cp(string $cp)
    {
        if (!is_string($cp)) {
            trigger_error("Un string est demandé", E_USER_WARNING);
        }
        $this->_cp = $cp;
    }

    public function get_cp()
    {
        return $this->_cp;
    }

    public function set_telephone(string $telephone)
    {
        if (!is_string($telephone)) {
            trigger_error("Un string est demandé", E_USER_WARNING);
        }
        $this->_telephone = $telephone;
    }

    public function get_telephone()
    {
        return $this->_telephone;
    }

    public function set_email(string $email)
    {
        if (!is_string($email)) {
            trigger_error("Un string est demandé", E_USER_WARNING);
        }
        $this->_email = $email;
    }

    public function get_email()
    {
        return $this->_email;
    }

    public function set_site(string $site)
    {
        if (!is_string($site)) {
            trigger_error("Un string est demandé", E_USER_WARNING);
        }
        $this->_site = $site;
    }

    public function get_site()
    {
        return $this->_site;
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

    public function set_idDepartement(?int $idDepartement)
    {
        $this->_idDepartement = $idDepartement;
    }

    public function get_idDepartement()
    {
        return $this->_idDepartement;
    }
}