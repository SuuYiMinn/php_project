<?php 

$product_id = $_GET["productid"];


include "../Model/model.php";

$sql=$pdo->prepare(

    "SELECT * FROM m_products  WHERE id = :productid"
);

$sql->bindValue(":productid",$product_id);
$sql->execute();
$productDetail_result = $sql->fetchAll(PDO::FETCH_ASSOC);
?>