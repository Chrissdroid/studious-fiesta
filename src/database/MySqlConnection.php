<?php
require_once 'config.php';
class MySqlConnection
{
    /** @var PDO */
    private $_db;

    public function __construct()
    {
        $this->set_db();
    }

    public function get_db()
    {
        return $this->_db;
    }

    private function set_db()
    {
        try {
            $pdo =  new PDO(DB_CONNEXION, DB_USERNAME, DB_PASSWORD);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->_db = $pdo;
        } catch (PDOException $exception) {
            return $exception;
        }
    }
}
