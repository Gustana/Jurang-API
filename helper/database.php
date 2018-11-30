<?php
    require_once '../../init/koneksi.php';

    class Database extends Connection{
        
        public function __construct(){
            parent::__construct();
        }

        public function encodeResponse($errorValue, $message){
            echo json_encode(array("error" => $errorValue, "message" => $message));
        }

        public function countData($result){
            $row_count = $result->num_rows;
            
            return $row_count;
        }

        public function sendData($query){
            $result = $this->connection->query($query);
            if ($result) {
                $this->encodeResponse("0", "Success");
            }else{
                $this->encodeResponse("1", "Failed");
            }
        }

        public function sendUniqueData($querySend, $querySelect){
            $result = $this->connection->query($querySelect);
            $row_count = $this->countData($result);
            if ($row_count == 0) {
                $this->sendData($querySend);                
            }else{
                $this->encodeResponse("1", "Email has been taken");
            }
        }

        public function getData($query, $errorMessage){
            $result = $this->connection->query($query);
            if (!$result) {
                return false;
            }

            $row_count = $this->countData($result);
            if ($row_count > 0) {
                $rows = array();
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            }else{
                $this->encodeResponse("1", $errorMessage);
                return false;
            }
        }
    }

?>