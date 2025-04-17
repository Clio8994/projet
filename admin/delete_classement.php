<?php
include "../inc/key.php";
$id = $_POST['id'];
$sql = "DELETE FROM player WHERE id=$id";
if ($connexion->query($sql)){
    header("location:player.php");
} else {
    header("location:player.php");
}