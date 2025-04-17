<?php
include "../inc/key.php";

if (isset($_POST["nom"]) && !empty($_POST["nom"]) && isset($_POST["prenom"]) && !empty($_POST["prenom"]) && isset($_POST["age"]) && !empty($_POST["age"]) && isset($_POST["pseudo"]) && !empty($_POST["pseudo"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["mdp"]) && !empty($_POST["mdp"])) {

    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]); 
    $age = htmlspecialchars($_POST["age"]);
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $email = htmlspecialchars($_POST["email"]);
    $mdp = htmlspecialchars($_POST["mdp"]);

    $sql = "INSERT INTO joueur (nom, prenom, age, pseudo, email, mdp, score_total) VALUES ('$nom', '$prenom', $age, '$pseudo', '$email', '$mdp', 0)";
    $connexion->query($sql);

    header("Location:../index.php");
} else {
    header("location:../index.php");
}
