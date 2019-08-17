<?php
require_once 'conection.php';


Class Coin {

    public function buscarDados() 
    {
        $res = array();
        $sql = 'SELECT * FROM coin';
        $cmd = conection::getConn()->prepare($sql);
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        $cmd->execute();
        return $res;
    }
  
}