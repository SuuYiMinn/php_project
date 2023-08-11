<?php
// session_start();

include "../../Model/model.php";
$sql = $pdo->prepare(
    "SELECT * FROM m_merchants"

);

$sql->execute();

$merchant= $sql->fetchAll(PDO::FETCH_ASSOC);

// header("Location: ../View/Profile/editProfile.php");
?>