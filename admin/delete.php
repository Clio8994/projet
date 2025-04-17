<?php

include "../inc/key.php";
$id = $_POST['id'];
$sql = "DELETE FROM tournois WHERE id=$id";
if ($connexion->query($sql)){
    header("location:tournois.php");
} else {
    header("location:tournois.php");
}

?>