<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Pathsdata";

    $conn = mysqli_connect ($servername, $username, $password, $dbname);

        if (!$conn) {
            die ('Could not connect MySQL Server:' .mysql_error());
        }

        else {
            echo "<h1> Welcome to Paths Studio! </h1>";
        }

?>