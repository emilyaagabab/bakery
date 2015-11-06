<?php
namespace config;

class dbcon extends \PDO
{
    public $connection;
    private static $instance;
	
    private $DB_HOST = "localhost";
    private $DB_NAME = "redux";
    private $DB_USER = "twinwqpl_georgek";
    private $DB_PASSWORD = "SS3Tz=HCTwTa";
    private $PARENT_ID = 2843;

    public function __construct()
    {
        try {
            $this->connection = new \PDO('mysql:host=' . $this->DB_HOST . ';dbname=' . $this->DB_NAME, $this->DB_USER, $this->DB_PASSWORD);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }

    public function getCodesFromDb()
    {
        $result = "";
        try {
            $stmt = $this->connection->prepare("SELECT CODE FROM `products` GROUP BY CODE ");
            $stmt->execute();
            $pageRow = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);

            if ($stmt->rowCount() > 0) {

                $result = json_encode($pageRow);

            }
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }

        return $result;
    }

    public function getAllFromDb()
    {
        $result = "";
        $code = 'UNIT';
        try {
            $stmt = $this->connection->prepare("SELECT softwareid, name FROM `products` WHERE code= :code and userid= :userid ORDER BY name");
            $stmt->bindParam(':code', $code, \PDO::PARAM_STR);
            $stmt->bindParam(':userid', $this->PARENT_ID, \PDO::PARAM_INT);
            $stmt->execute();
            $getAll = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            if ($stmt->rowCount() > 0) {
                $result = $getAll;
            }
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }

        return $result;
    }


} 