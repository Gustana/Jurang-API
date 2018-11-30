<?php
    class Connection{
        private $_host = "localhost";
        private $_user = "root";
        private $_pass = "gustana";
        private $_db = "db_warung";

        protected $connection;

        public function __construct(){
           if (!isset($this->connection)) {
               $this->connection = new mysqli($this->_host, $this->_user, $this->_pass, $this->_db);
               if (!$this->connection) {
                   echo 'Cant connect';
               }               
           }
           return $this->connection;
        }
                
    }
?>