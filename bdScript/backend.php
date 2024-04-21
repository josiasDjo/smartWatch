<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $bdd = new PDO ("mysql:host=$servername;dbname=smartwatch", $username, $password);
        $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connexion réussie";
    }
    catch (PDOException $e) {
        echo "Erreur : " .$e -> getMessage();
    }

    // $sql = "SELECT * FROM admintabe";
    // $req = $bdd -> query($sql);

    // while($row = $req -> fetch()) {
    //     echo $row['nom'] . $row['prenom'] . '<br>';
    // }
?>