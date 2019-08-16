<?php
session_start();
$login = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

if(authenticateFake($login, $password)){
  $_SESSION['auth'] = true;
  header('Location: ../selection.php');
} else {
  header('Location: login.php');
}

function authenticateFake($l, $p){
 return $l == 'admin' && $p == 'admin';
}

?>