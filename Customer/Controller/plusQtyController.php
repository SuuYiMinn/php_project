<?php 
session_start();

$product_id =$_POST["cart_productId"];
$customer = $_POST["user_account"];

include "../Model/model.php";

$getCart = $pdo->prepare(
    "SELECT id FROM t_cart WHERE customer_id = :customerId "
);
$getCart->bindValue(":customerId",$customer);
$getCart->execute();

$Cart_result = $getCart->fetchAll(PDO::FETCH_ASSOC);

$cart_id = $Cart_result[0]["id"];

$getproduct = $pdo->prepare(
    "SELECT product_qty FROM t_cart_detail WHERE cart_id = :cartId AND product_id = :productId "
);
$getproduct->bindValue(":cartId",$cart_id);
$getproduct->bindValue(":productId",$product_id);

$getproduct->execute();
$product_qty_result = $getproduct->fetchAll(PDO::FETCH_ASSOC);

$product_quantity = $product_qty_result[0]["product_qty"];

$product_quantity++;



?>