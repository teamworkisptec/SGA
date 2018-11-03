<?php

class DbConnection {

    private static $instance = NULL;
    
    public static function getInstance() {

        if (!isset(self::$instance)) {
            try {
                self:: $instance = new PDO("mysql:host=localhost;dbname=sgu", "root", "");
                self:: $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }
        return self::$instance;
    }
}



// DEPARTAMENTO
//include 'crudDepartamento.php';
//$crudDep = new crudDepartamento();
//$crudDep->inserirDepartamento('d042', 'teste');

