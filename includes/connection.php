
<?php

$username = "root";
$password = "root";
try {
    $db = new PDO('mysql:host=localhost;dbname=testing', $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
