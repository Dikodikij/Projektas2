<?php
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_NAME","zinute");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error) {
    echo "Atsiprasome, bet svetaine susidure su problema.\n";
    echo 'Klaida' . $mysqli->connect_error . '\n';
    exit();
}
mysqli_query($mysqli, "INSERT INTO klientai (vardas, email, message, telephone) VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[message]', '$_POST[telephone]')");

/* $sql = "SELECT * FROM klientai";
$result = $mysqli->query($sql);
$array = $result->fetch_assoc();
var_dump($array);

$sql = "SELECT * FROM klientai";
$result = $mysqli->query($sql);
while ($array = $result->fetch_assoc()){
var_dump($array);
    };*/
?>