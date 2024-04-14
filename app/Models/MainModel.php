<?php
namespace App\Models;
use PDO;

require_once __DIR__ . '/../../vendor/autoload.php';
class UserModel
{

    public $pdo;
    public function __construct(){
        $host = "db";
        $user = "root";
        $password = "12345";
        $dbname = "shop_db";
        $charset = "utf8";
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

        $this->pdo = new PDO($dsn, $user, $password);
    }

    public function query($sql)
    {
        $stmt=$this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function __destruct() {
        $pdo = NULL;
    }
}

