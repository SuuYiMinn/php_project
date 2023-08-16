<?php

include"../Model/model.php";
 // just for you product f
$justforU_sql = $pdo->prepare(
    "SELECT * FROM m_products WHERE p_discount >= 1 AND del_flg = 0 LIMIT 5"
);

$justforU_sql -> execute();

$justForU_result = $justforU_sql->fetchAll(PDO::FETCH_ASSOC);

// just for you product end


// new arrival product start
$newArrival_sql = $pdo->prepare(

    "SELECT * FROM m_products WHERE del_flg = 0 ORDER BY create_date DESC LIMIT 5"
);
$newArrival_sql->execute();
$newArrival_result = $newArrival_sql->fetchAll(PDO::FETCH_ASSOC);


// new arrival end



?>