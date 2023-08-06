<?php 

$product_id = $_GET["productid"];


include "../Model/model.php";

$sql=$pdo->prepare(

    "SELECT * FROM m_products WHERE id = :productid"
);

$sql->bindValue(":productid",$product_id);
$sql->execute();
$productDetail_result = $sql->fetchAll(PDO::FETCH_ASSOC);

$product_category = $productDetail_result[0]["p_category"];

$dsql=$pdo->prepare(

    "SELECT * FROM m_products  WHERE p_category = :productcategory LIMIT 4"
);

$dsql->bindValue(":productcategory",$product_category);

$dsql->execute();

$category_result = $dsql->fetchAll(PDO::FETCH_ASSOC);



$reviewsql= $pdo->prepare(
    "SELECT*FROM t_product_rating_detais 
    LEFT JOIN m_customers ON m_customers.id = t_product_rating_detais.customer_id 
    WHERE t_product_rating_detais.product_id = :productid" 
);
$reviewsql->bindValue(":productid",$product_id);
$reviewsql->execute();
$review_result = $reviewsql->fetchAll(PDO::FETCH_ASSOC);


?>