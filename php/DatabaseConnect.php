<?php
    class DatabaseConnect{
        private $dbUsername;
        private $dbPassword;
        private $dbConnect;
        private $dbHost;
        private $dbName;

        function __construct(){
            
            $path = "./xml/dbInformation.xml";
            $xml  = simplexml_load_file($path);

            $this->dbUsername = $xml->dbUsername;
            $this->dbPassword = $xml->dbPassword;
            $this->dbHost     = $xml->dbHost;
            $this->dbName     = $xml->dbName;
        }

        public function getConnection(){
            try{
                $this->dbConnect = new PDO("mysql:dbname=$this->dbName;host=$this->dbHost", $this->dbUsername, $this->dbPassword);
            } catch(Exception $ex){
                echo "Error message: ".$ex->getMessage();
                echo " \nError code: ".$ex->getCode();
            }
        }

        public function closeConnection(){
            $this->dbConnect = NULL;
        }
    }