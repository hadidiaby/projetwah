<?php 
    class connect extends PDO {
            const HOST="localhost";
            const DB="spa2";
            const USER="root";
            const PWD="";

            public function __construct(){
                try{
                parent::__construct("mysql:dbname=".self::DB.";host=".self::HOST,self::USER,self::PWD);
                echo "DONE";
            }
                catch(PDOException $e){
                    echo $e->getMessage()." ".$e->getLine();
                }
            }
    }
?>