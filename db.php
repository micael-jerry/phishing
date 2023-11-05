<?php 
    function getDatabaseConnexion() {
        try {
            $username = "<username>";
            $password = "<password>";
            $servername = "<servername>";
            $dbname = "<dbname>";

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
        try {
            $con = getDatabaseConnexion();
            $request = "INSERT INTO identifier (email_or_phone_number, password) VALUES ('$emailOrPhoneNumber', '$password')";
            $con->exec($request);
        } catch (PDOException $e) {
            echo $sql . "<br/>" . $e->getMessage();
        }
    }

    function getIdentifierById($id) {
        $con = getDatabaseConnexion();
        $request = "SELECT * FROM identifier WHERE id = '$id'";
        $stmt = $con->query($request);
        $row = $stmt->fetchAll();
        if (!empty($row)) {
            return $row[0];
        }
    }

    function getNewIdentifier() {
        $identifier['id'] = "";
        $identifier['email_or_phone_number'] = "";
        $identifier['password'] = "";
    }
?>