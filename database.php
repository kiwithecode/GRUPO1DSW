<?php
$B_CONNECTION = 'pgsql';
$DB_HOST = 'ec2-54-157-16-196.compute-1.amazonaws.com';
$DB_PORT = '5432';
$DB_DATABASE = 'dccd8krjqds0s1';
$DB_USERNAME = 'wwjjsijrrsycym';

$DB_PASSWORD = '17c15c4f3af1e0a8f3f9ea043c0110e32ebb5ee82480a00f1fa2514f78dfa0bf';




try {
  /* $conn = new PDO("pgsql :host=$$host; dbname=$database; port=$port; $username,$password,");*/
  $conn = new PDO("$B_CONNECTION:host=$DB_HOST;port=$DB_PORT;dbname=$DB_DATABASE", $DB_USERNAME, $DB_PASSWORD);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
