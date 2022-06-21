<?php

$host = 'ec2-54-157-16-196.compute-1.amazonaws.com';
$database = 'dccd8krjqds0s1';
$username = 'wwjjsijrrsycym';
$port = '5432'; 
$password = '17c15c4f3af1e0a8f3f9ea043c0110e32ebb5ee82480a00f1fa2514f78dfa0bf';
;

try {
  $conn = new PDO("psql :host=$$host; dbname=$database; user=$username; pass=$password port=$port");
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
