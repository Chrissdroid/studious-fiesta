<?php

namespace App\Utility;

function bddConnect(): \PDO
{
	$CRED = [
		'language' => 'mysql',
		'host' => 'localhost',
		'port' => 3306,
		'db' => 'franceamusee',
		'user' => 'AdminFranceamusee',
		'pass' => 'Admin'
	];


	try {
		return new \PDO("{$CRED['language']}:dbname={$CRED['db']};host={$CRED['host']};port={$CRED['port']};charset=UTF8", $CRED['user'], $CRED['pass']);
	} catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}
}
