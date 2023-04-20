<?php
require_once './classes/db.php';

class Story {

    public $id;
    public $heading;
    public $category_id;
    public $sub_heading; 
    public $article;
    public $pub_date;
    public $author;
    public $image_source;
    public $country;
    public $country_image;
    public $summary;

    public function __construct($props = null) {
        if ($props != null) {
            $this->id             = $props["id"];
            $this->author       = $props["author"];
            $this->heading       = $props["heading"];
            $this->sub_heading       = $props["sub_heading"];
            $this->article       = $props["article"];
            $this->summary       = $props["summary"];
            $this->pub_date    = $props["pub_date"];
            $this->category_id    = $props["category_id"];
            $this->image_source    = $props["image_source"];
            $this->country    = $props["country"];
            $this->country_image    = $props["country_image"];
        }
    }

  
    public function save() {
        // not yet written
    }

    public function delete() {
       // not yet written
    
    }

    // public static function findAll() {
    //     $stories = [];

    //     try {
    //         $db = new DB();
    //         $db->open();
    //         $conn = $db->getConnection();

    //         $sql = "SELECT * FROM stories";
    //         $stmt = $conn->prepare($sql);
    //         $status = $stmt->execute();

    //         if (!$status) {
    //             $error_info = $stmt->errorInfo();
    //             $message = "SQLSTATE error code = ".$error_info[0]."; error message = ".$error_info[2];
    //             throw new Exception("Database error executing database query: " . $message);
    //         }

    //         if ($stmt->rowCount() !== 0) {
    //             $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //             while ($row !== FALSE) {
    //                 $story = new Story($row);
    //                 $stories[] = $story;

    //                 $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //             }
    //         }
    //     }
    //     finally {
    //         if ($db !== null && $db->isOpen()) {
    //             $db->close();
    //         }
    //     }

    //     return $stories;
    // }

    public static function findAll($number){
        $stories = null;
        try{
            $db = new DB();
            $conn = $db->open();

            $sql = "SELECT * FROM stories";
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
                $story = new Story ($row);
                $stories[] = $story;

                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            };
        }
        finally {
            if ($db !== null && $db->isOpen()) {
                $db->close();
            }
        }
        return $stories;
    }


    public static function findByCategory($category_id,$number){
        $stories = [];
        try{
            $db = new DB();
            $conn = $db->open();

            $sql = "SELECT * FROM stories WHERE category_id = $category_id LIMIT $number";
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
                $story = new Story ($row);
                $stories[] = $story;

                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            };
        }
        finally {
            if ($db !== null && $db->isOpen()) {
                $db->close();
            }
        }
        return $stories;
    }


    public static function findById($id){
        $stories = [];
        try{
            $db = new DB();
            $conn = $db->open();

            $sql = "SELECT * FROM stories WHERE id = $id";
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
                $story = new Story ($row);
                $stories[] = $story;

                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            };
        }
        finally {
            if ($db !== null && $db->isOpen()) {
                $db->close();
            }
        }
        return $stories;
    }

}


   








?>