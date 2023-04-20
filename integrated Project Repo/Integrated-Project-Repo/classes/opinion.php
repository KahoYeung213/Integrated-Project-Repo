<?php
require_once './classes/db.php';

class Opinion {

    public $id;
    public $opinionHeader;
    public $opinionAuthor;
    public $opinionImage; 
    

    public function __construct($props = null) {
        if ($props != null) {
            $this->id             = $props["id"];
            $this->opinionHeader       = $props["opinionHeader"];
            $this->opinionAuthor       = $props["opinionAuthor"];
            $this->opinionImage       = $props["opinionImage"];

        }
    }


    public static function findAll($number){
        $stories = null;
        try{
            $db = new DB();
            $conn = $db->open();

            $sql = "SELECT * FROM opinions LIMIT $number";
            $stmt = $conn->prepare($sql);
            $status = $stmt->execute();

            if(!$status) {
                $error_info = $stmt->errorInfo();
                $message = 
                "SQLSTATE error code = " . $error_info[0] .
                "; error message = ".$error_info[2];
                throw new Exception($message);
            }
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            while ($row !== FALSE) {
                $opinion = new Opinion ($row);
                $opinions[] = $opinion;

                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            };
        }
        finally {
            if ($db !== null && $db->isOpen()) {
                $db->close();
            }
        }
        return $opinions;
    }


    public static function findBetween($number1,$number2){
        $stories = null;
        try{
            $db = new DB();
            $conn = $db->open();

            $sql = "SELECT * FROM opinions where id BETWEEN $number1  AND $number2";
            $stmt = $conn->prepare($sql);
            $status = $stmt->execute();

            if(!$status) {
                $error_info = $stmt->errorInfo();
                $message = 
                "SQLSTATE error code = " . $error_info[0] .
                "; error message = ".$error_info[2];
                throw new Exception($message);
            }
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            while ($row !== FALSE) {
                $opinion = new Opinion ($row);
                $opinions[] = $opinion;

                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            };
        }
        finally {
            if ($db !== null && $db->isOpen()) {
                $db->close();
            }
        }
        return $opinions;
    }
}

?>