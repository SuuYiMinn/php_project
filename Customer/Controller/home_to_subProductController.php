<?php 

$cate_id = $_GET["category_id"];


include "../Model/model.php";

$sql = $pdo->prepare(
"SELECT * FROM m_products WHERE p_category = :cateid"
);

$sql->bindValue(":cateid",$cate_id);

$sql->execute();

$productresult = $sql->fetchAll(PDO::FETCH_ASSOC);



?>