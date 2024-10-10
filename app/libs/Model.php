<?php

namespace Sena\libs;

class model {
    protected $db;
    protected $connection;

    public function __construct()
    {
        //Creamos una nueva instancia de una nueva conexion
        $this->db = new Database();
        $this->connection = $this->db->getConnection();
    }

    /**
     * Metodo para seleccionar todos los registros de una tabla en la base de datos
     * 
     * @param string $table Nombre de la tabla
     * @return array
     */

    public function select($table = "")
    {
        $stm = $this->connection->prepare("SELECT * FROM $table");
        $stm->execute();
        return $stm->fetchAll();
    }
/**
 *  Metodo para seleccionar todos los registros de una tabla en la base de datos
 * 
 */
    public function getByID($table = "", $id){
        $stm = $this->connection->prepare("SELECT * fROM $table WHERE id = :id");
        $stm->bindValue(":id", $id);
        $stm->execute();
        return $stm->fetch();
    }
}