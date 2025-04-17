<?php
include "../inc/key.php";

if (!empty($_POST['nom']) && !empty($_POST['date']) && !empty($_POST['lieu'])) {
    $nom = $_POST['nom'];
    $date = $_POST['date'];
    $lieu = $_POST['lieu'];
    $description = $_POST['description'];

    $sql = "INSERT INTO tournois (nom, date, lieu, description)
            VALUES ('$nom', '$date', '$lieu', '$description')";
    $connexion->query($sql);

    // Redirection après ajout
    header("Location:tournois.php"); // ou une autre page
} else {
    header("location:tournois.php");
}
