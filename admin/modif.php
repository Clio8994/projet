<?php
include "../inc/key.php";

if (isset($_POST["nom"]) && !empty($_POST["nom"]) && isset($_POST["date"]) && !empty($_POST["date"]) && isset($_POST["lieu"]) && !empty($_POST["lieu"]) && isset($_POST["description"]) && !empty($_POST["description"]) && isset($_POST["id"]) && !empty($_POST["id"])) {
    
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $date = $_POST['date'];
    $lieu = $_POST['lieu'];
    $description = $_POST['description'];

    $sql = "UPDATE tournois SET nom = '$nom', date = '$date', lieu = '$lieu', description = '$description' WHERE id = $id";
    $connexion->query($sql);

    header("Location:tournois.php");
} else {
    header("location:tournois.php");
}
