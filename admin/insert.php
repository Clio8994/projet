<?php
include "../inc/key.php";

if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['date']) && !empty($_POST['date']) && isset($_POST['lieu']) && !empty($_POST['lieu'])) {
    
    $nom = $_POST['nom'];
    $date = $_POST['date'];
    $lieu = $_POST['lieu'];
    $description = $_POST['description'];

    $sql = "INSERT INTO tournois (nom, date, lieu, description)
            VALUES ('$nom', '$date', '$lieu', '$description')";
    $connexion->query($sql);

    header("Location:tournois.php");
} else {
    header("location:tournois.php");
}
