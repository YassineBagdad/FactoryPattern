<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 21/12/2016
 * Time: 22:09
 */
interface IDB {
    /**
     * Connecte l'objet à la base de données
     */
    public function connect ($connectionString, $username, $password);
    /**
     * Exécute une requête à la base de données
     */
    public function doQuery ($queryString);
//.... suivent d'autres méthodes inutiles dans l'exemple
}
