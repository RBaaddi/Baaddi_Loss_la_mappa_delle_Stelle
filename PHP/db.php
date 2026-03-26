<?php
$conn = new mysqli("localhost", "root", "", "db_la_mappa_delle_stelle");
if ($conn->connect_error) die("Errore: " . $conn->connect_error);

?>