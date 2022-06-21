<?php

$server = 'ec2-54-157-16-196.compute-1.amazonaws.com';
$username = 'wwjjsijrrsycym';
$password = '17c15c4f3af1e0a8f3f9ea043c0110e32ebb5ee82480a00f1fa2514f78dfa0bf';
$database = 'dccd8krjqds0s1';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>