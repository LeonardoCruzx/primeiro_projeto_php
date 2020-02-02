<?php
    class Connection{
        
        static function create_connection(){
            $MYSQL_HOST = 'localhost';
            $MYSQL_USER = 'root';
            $MYSQL_PASSWORD =  '' ;
            $MYSQL_DB_NAME = 'teste_1';
            try{
                $PDO = new PDO( 'mysql:host=' . $MYSQL_HOST . ';dbname=' . $MYSQL_DB_NAME, $MYSQL_USER, $MYSQL_PASSWORD );
                return $PDO;
            }catch ( PDOException $e ){
                echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
            }
        }

        
        
    }

?>