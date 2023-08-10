<?php

if($_GET != NULL){

    $brand_id = $_GET("brand_id");



include "../Model/model.php";

 $sql = $pdo->prepare(

    "SELECT * FROM m_brand LEFT JOIN m_products  ON m_brand.id = m_products.p_brand  WHERE p_brand = :brandId"

 );

 $sql->bindValue(":brandId",$brand_id);
 $sql->execute();

 $brand_products = $sql->fetchAll(PDO::FETCH_ASSOC);

} else {

    header("Location: ./brandlist.php");
}

   

?>