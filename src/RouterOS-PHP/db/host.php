<?php
namespace Model;

use Database\Database;
use \PDO;

require_once __DIR__."/database.php";

class Host extends Database {

  public function create($ip, $user, $pass) {
    $sql = "INSERT INTO routers(ip, user, pass) VALUES ('${ip}', '${user}', '${pass}');";
    try {
      $this->connection->exec($sql);
      return $this->connection->lastInsertId();
    } catch(PDOExecption $e) { 
      $this->connection->rollback(); 
      print "Error!: " . $e->getMessage(); 
      return null;
    } 
  }

  public function read($id) {
    $sql = "SELECT * FROM routers WHERE id = ${id}";
    $pdoStm = $this->connection->query($sql);
    return $pdoStm ? $pdoStm->fetch(PDO::FETCH_ASSOC) : null;
  }

  public function readByIp($ip) {
    $sql = "SELECT * FROM routers WHERE ip='${ip}'";
    $pdoStm = $this->connection->query($sql);
    return $pdoStm ? $pdoStm->fetch(PDO::FETCH_ASSOC) : null;
  }

  public function readAll() {
    $sql = "SELECT * FROM routers";
    $pdoStm = $this->connection->query($sql);
    return $pdoStm ? $pdoStm->fetchAll(PDO::FETCH_ASSOC) : null;
  }

  public function readOrCreate($ip, $user, $pass) {
    $result = $this->readByIp($ip);

    if ($result) {
      return $result;
    } else {
      return $this->create($ip, $user, $pass);
    }
  }
  
  public function update($id, $ip, $user, $pass) {
    $sql = "UPDATE routers
            SET ip='${ip}', user='${user}', pass='${pass}'
            WHERE id=${id}";
    try {
      return $this->connection->exec($sql);
    } catch(PDOExecption $e) { 
      $this->connection->rollback(); 
      print "Error!: " . $e->getMessage(); 
    }
  }
  
  public function remove($id) {
    $sql = "DELETE FROM routers WHERE id=${id}";
    try {
      return $this->connection->exec($sql);
    } catch(PDOExecption $e) { 
      $this->connection->rollback(); 
      print "Error!: " . $e->getMessage(); 
    }
  }

}
