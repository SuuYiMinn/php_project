<?php
// echo ("<pre>");
// print_r($_POST);
// data for another page
$data = $_POST;
$datastring = serialize($data);
// 
$order_data = unserialize($_POST["order_data"]);
// echo("order_data");
// print_r($order_data);

$product_ids = json_decode($order_data["product_id"],true);
$qtys = json_decode($order_data["qty"],true);
$amounts = json_decode($order_data["amount"],true);
$p_titles = json_decode($order_data["p_title"],true);
$shippingFees = 2250;
$subtotal = $order_data["total"] - $shippingFees;
$ids = [];

// print_r($product_ids);
// print_r($qtys);
// print_r($amounts);
// print_r($p_titles);

$name = $_POST["full_name"];
$region_id = $_POST["region"];

include "../Model/model.php";


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
