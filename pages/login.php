<?php

if (isset($_POST["email"]) && !empty($_POST["mdp"]) && isset($_POST["email"]) && !empty($_POST["mdp"])) {
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $sql = "SELECT * FROM admin WHERE email='$email'";
    include "../inc/key.php";
    $rqt = $connexion->query($sql);
    $admin  = $rqt->fetch();
    if ($admin && password_verify($mdp, $admin["mot_de_passe"])) {
        $_SESSION["admin_connecte"] = true;
        $_SESSION["admin_email"] = $admin["email"];
        header("Location: ../admin.php");
    } else {
        header("location:../admin/tournois.php");
    }

} else {
    header("location:connexion.php");
}
