<?php
    function connectMYSQL() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        try {
            $conn = new PDO("mysql:host=localhost;dbname=du_an_1","root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    

    function getData($sql, $fetchType) {
        try {
            $conn = connectMYSQL();
            $statement = $conn->prepare($sql);
            $statement->execute();
        }
        catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }

        switch($fetchType) {
            case "FETCH_ALL":
                return $statement->fetchAll();
            case "FETCH_ONE":
                return $statement->fetch();
            default:
                return true;
        }
    }
?>