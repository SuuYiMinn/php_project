<?php 

$product_id = $_GET["productid"];


include "../Model/model.php";

$sql=$pdo->prepare(

    "SELECT * FROM m_products  WHERE id = :productid"
);

$sql->bindValue(":productid",$product_id);
$sql->execute();
$productDetail_result = $sql->fetchAll(PDO::FETCH_ASSOC);

$product_category = $productDetail_result[0]["p_category"];



$cateProductsql=$pdo->prepare(

    "SELECT * FROM m_products  WHERE p_category = :productcategory"
    );
    $cateProductsql->bindValue(":productcategory",$product_category);
    $cateProductsql->execute();
    $category_result = $cateProductsql->fetchAll(PDO::FETCH_ASSOC);



    $reviewsql=$pdo->prepare(

        "SELECT * FROM m_customers LEFT JOIN t_product_rating_detais 
        ON m_customers.id=t_product_rating_detais.customer_id 
        WHERE t_product_rating_detais.product_id = :product_id"
    );
    $reviewsql -> bindValue(":product_id",$product_id);
    $reviewsql -> execute();
    $review_result = $reviewsql->fetchAll(PDO::FETCH_ASSOC);



?>