<?php

require_once(__DIR__.'./db/config.php');

try {
  $schema = file_get_contents('./db/schema.sql');
  $connection = new PDO(DB.":host=".DBHOST, DBUSER, DBPWD);
  $connection->exec($schema);
  echo "Database installed!";
  // header('Location: home.php');;
} catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}
