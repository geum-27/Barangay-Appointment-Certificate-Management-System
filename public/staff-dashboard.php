<?php
namespace Src\Config;

class DatabaseConnection {
    private static $instance = null;
    private $conn;
    
    // Private constructor prevents direct initialization from outside the class
    private function __construct() {
        $host = "localhost";
        $db   = "barangay_management_db";
        $user = "root";
        $pass = ""; // Default XAMPP / WAMP password baseline
        
        try {
            $this->conn = new \PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass, [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_PERSISTENT => false
            ]);
        } catch (\PDOException $e) {
            die("Database Connection Critical Failure: " . $e->getMessage());
        }
    }
    
    // The control gateway that returns our single connection instance
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }
    
    public function getConnection() {
        return $this->conn;
    }
}