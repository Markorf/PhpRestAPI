<?php
/**
 * Created by PhpStorm.
 * User: i5
 * Date: 8/10/2019
 * Time: 4:30 PM
 */

namespace MobileShop\DAL\Repositories\DbService\Implementation;

use PDO;
use PDOException;
use MobileShop\DAL\Repositories\DbService\Interfaces\IDbConnectionService;
use MobileShop\DAL\Repositories\DbService\Interfaces\IDbService;
use MobileShop\Shared\Configs\DbConstants;

class DbService implements IDbService
{
    private $_connectionService;
    private $_conn;
    private $_query;

    public function __construct(IDbConnectionService $connectionService)
    {
        if (empty($connectionService)) {
            throw new \InvalidArgumentException("Connection service cannot be empty");
        }
        $this->_connectionService = $connectionService;
        $this->createDbConnection();
    }

    public function __destruct()
    {
        $this->closeDbConnection();
    }

    public function query($sql) {
        $this->_query = $this->_conn->prepare($sql);
    }

    public function execute() {
        return $this->_query->execute() or die ("Something went wrong");
    }

    public function bind($param, $value, $type = null) {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->_query->bindValue($param, $value, $type);
    }

    public function getAllRows() {
        $this->execute();
        return $this->_query->fetchAll();
    }

    public function getSingleRow() {
        $this->execute();
        return $this->_query->fetch();
    }

    public function getRowCount() {
        $this->execute();
        return $this->_query->rowCount();
    }

    public function getColumnCount() {
        $this->execute();
        return $this->_query->columnCount();
    }

    private function createDbConnection()
    {
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ];
        try {
            $this->_conn = new PDO($this->_connectionService->getConnectionString(), DbConstants::USERNAME, DbConstants::PASSWORD, $options);
        } catch (PDOException $exception) {
            die("Connection failed: " . $exception->getMessage());
        }
    }

    private function closeDbConnection()
    {
        $this->_conn = null;
    }
}