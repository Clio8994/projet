<?php
include "../inc/key.php";
if (isset($_POST["nom"]) && !empty($_POST["nom"]) && isset($_POST["prenom"]) && !empty($_POST["prenom"]) && isset($_POST["score_total"]) && !empty($_POST["score_total"])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $score = $_POST['score_total'];

    $sql = "UPDATE joueur SET nom='$nom', prenom='$prenom', score_total=$score WHERE id=$id";

    $connexion->query($sql);
    header("Location: classement.php");
} else {
    header("Location: classement.php");
}
