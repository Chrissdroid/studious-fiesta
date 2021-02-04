<?php

class Region
{
    private $_id;
    private $_name;
    private $_image;

    public function __construct(array $data)
    {
        $this->set_id($data["id"]);
        $this->set_name($data["name"]);
        $this->set_image($data["image"]);
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

    public function set_name(string $name)
    {
        if (!is_string($name)) {
            trigger_error("Un string est demandé", E_USER_WARNING);
        }
        $this->_name = $name;
    }

    public function get_name()
    {
        return $this->_name;
    }

    public function get_image()
    {
        return $this->_photo;
    }

    public function set_image(string $image)
    {
        if (!is_string($image)) {
            trigger_error("Un string est demandeé", E_USER_WARNING);
        }
        $this->_photo = $image;
    }
}

$data = [
    "id" => 0,
    "name" => "Nom region",
    "image" => "image",
];

$regionsModel = [];

for ($i = 0; $i < 15; $i++) {
    $data["id"] = $i;
    array_push($regionsModel, new Region($data));
}
