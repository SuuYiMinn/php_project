<?php

// echo("<pre>");
// print_r($_GET);
if ($_GET["id"] != null) {
   $product_id = $_GET["id"];
}

include "../Model/model.php";


$sql = $pdo->prepare(
    "SELECT * FROM m_regions WHERE del_flg = 0"
    );
    
// $sql->bindValue(":cateid",$cate_id);
        
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql2 = $pdo->prepare(
    "SELECT * FROM m_townships WHERE del_flg = 0"
    );
        
$sql2->execute();
        
$result_townships = $sql2->fetchAll(PDO::FETCH_ASSOC);


?>