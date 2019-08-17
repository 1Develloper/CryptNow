<?php

Class conection {
    public static $instance;

    public static function getConn() {
        
        if(!isset(self::$instance)):
            self::$instance = new \ PDO('mysql:host=localhost;db_name=crudpdo','root','');
        endif;

        return self::$instance;
    }
}