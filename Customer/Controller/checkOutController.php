<?php
// print_r($_POST);

$product_id = $_POST["product"];
$name = $_POST["full_name"];
$region_id = $_POST["region"];

include "../Model/model.php";

$sql=$pdo->prepare(
    "SELECT * FROM m_products  WHERE id = :productid"
);

$sql->bindValue(":productid",$product_id);
$sql->execute();
$productDetail_result = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql2=$pdo->prepare(
    "SELECT * FROM m_customers  WHERE c_name = :name"
);

$sql2->bindValue(":name",$name);
$sql2->execute();
$result = $sql2->fetchAll(PDO::FETCH_ASSOC);

$sql3=$pdo->prepare(
    "SELECT * FROM m_regions  WHERE id = :region_id"
);

$sql3->bindValue(":region_id",$region_id);
$sql3->execute();
$region = $sql3->fetchAll(PDO::FETCH_ASSOC);

?>
