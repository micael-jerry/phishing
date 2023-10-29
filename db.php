<?php 
    function getDatabaseConnexion() {
        try {
            $username = "<username>";
            $password = "<password>";
            $servername = "localhost";
            $dbname = "phishing";

            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            print "Error !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function getAllIdentifier() {
        $con = getDatabaseConnexion();
        $request = "SELECT * FROM identifier";
        $rows = $con->query($request);
        return $rows;
    }

    function createIdentifier($emailOrPhoneNumber, $password) {

    }
?>