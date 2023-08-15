<?php 



$cate_id = $_GET["category_id"];


include "../Model/model.php";

$sql = $pdo->prepare(
"SELECT * FROM m_sub_category WHERE category_id = :cateid"
);

$sql->bindValue(":cateid",$cate_id);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);


?>
