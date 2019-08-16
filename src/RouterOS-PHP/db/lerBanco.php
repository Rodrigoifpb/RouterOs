<?php
use Model\Host;

require('host.php');

$host = new Host();

$id = $_GET['valor'] ?? null;

$ip = $_POST['ip'];
$user = $_POST['user'];
$pass = $_POST['pass'];

switch($id){
    case 1:
        $host->create($ip, $user, $pass);
    break;

    case 2:
        $output = $host->readAll();
        echo json_encode($output);
    break;
}
// Create IFPB 
// $hostIFPBId = $host->create('192.168.0.28', 'admin', '');
// var_dump($hostIFPBId);

// Get or create IFPB
// $hostIFPB = $host->readOrCreate('192.168.0.28', 'admin', '');
// var_dump($hostIFPB);
// $readall = $host->readall();
// var_dump($readall);

// $read = $host->read('1');
// var_dump($read);
// // Create IFRN
// $hostIFRNId = $host->create('192.168.0.28', 'admin', '');
// var_dump($hostIFRNId);

// // Update IFRN
// $host->update($hostIFRNId, 'www.ifrn.edu.br', '200.137.2.131');
// $hostIFRN = $host->read($hostIFRNId);
// var_dump($hostIFRN);

// // Delete IFRN
// var_dump($host->remove($hostIFRNId));