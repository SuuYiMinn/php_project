<?php

include"../Model/model.php";
 // just for you product f
$justforU_all_sql = $pdo->prepare(
    "SELECT * FROM m_products WHERE p_discount >= 1 AND del_flg = 0 "

);
$justforU_all_sql->execute();
$justForU_all_result = $justforU_all_sql->fetchAll(PDO::FETCH_ASSOC);

$popular_all_sql = $pdo->prepare(
    "SELECT * FROM m_products WHERE product_rating >= 4 "
);

$popular_all_sql -> execute();

$popular_all_result = $popular_all_sql->fetchAll(PDO::FETCH_ASSOC);

// just for you product end


// new arrival product start
$newArrival_all_sql = $pdo->prepare(

    "SELECT * FROM m_products WHERE del_flg = 0 ORDER BY create_date DESC "
);
$newArrival_all_sql->execute();
$newArrival_all_result = $newArrival_all_sql->fetchAll(PDO::FETCH_ASSOC);


// new arrival end



?>