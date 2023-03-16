<?php 

namespace Daoo\Atividade03\models;

use Exception;
use PDO;

class ORM {
  protected $conn;   
  protected $table;  
  protected $columns; 
  protected $params;  
  protected $updated; 
  protected $values; 
  protected $filters;
  protected const FETCH = PDO::FETCH_ASSOC;

  public function __construct() {
    $this->conn = Connection::getConnection();
    $this->resetMappers();
  }

  private function resetMappers() {
    $this->filters = '1';
    $this->columns = '';
    $this->params = '';
    $this->updated = '';
    $this->values = [];
  }

  protected function mapColumns(iDAO $daoInterface) {
    if (count($this->values)) {
      $this->resetMappers();
    }

    if (isset($daoInterface)) {
      foreach ($daoInterface->getColumns() as $key => $value) {
        $this->params .= " :$key,";
        $this->columns .= " $key,";
        $this->values[":$key"] = is_bool($value) ? (int)$value : $value;
        $this->updated .= " `$key` = :$key,";
      }
      $this->params = substr($this->params, 0, strlen($this->params) - 1);
      $this->columns = substr($this->columns, 0, strlen($this->columns) - 1);
      $this->updated = substr($this->updated, 0, strlen($this->updated) - 1);
    }
  }

  protected function setFilters($arrayFilter) {
    $this->filters = '1';
    $this->values = [];
    foreach ($arrayFilter as $key => $value) {
      $this->filters .= " AND `$key` like :$key";
      $this->values[":$key"] = "%$value%";
    }
  }

  protected function select(array $columns=[]) {
    $selectedColumns = '';

    foreach ($columns as $column) {
      $selectedColumns .= ", $column";
    }

    if (!$columns) {
      $selectedColumns = "*";
    }

    $sql = "SELECT $selectedColumns FROM $this->table";
    $prepStmt = $this->conn->prepare($sql);

    if ($prepStmt->execute()) {
      $this->dumpQuery($prepStmt);
      return $prepStmt->fetchAll(self::FETCH);
    } else {
      throw new Exception("ORM, select!");
    }
  }

  protected function selectById($id) {
    $sql = "SELECT * FROM $this->table WHERE id_prod = :id";
    $prepStmt = $this->conn->prepare($sql);
    $prepStmt->bindValue(':id', $id);

    if ($prepStmt->execute()) {
      $this->dumpQuery($prepStmt);
      return $prepStmt->fetchAll(self::FETCH);
    } else {
      throw new Exception("ORM, selectById!");
    }
  }

  protected function dumpQuery($prepStatement) {
    ob_start();
    $prepStatement->debugDumpParams();
    error_log(ob_get_contents());
    ob_end_clean();
  }
}