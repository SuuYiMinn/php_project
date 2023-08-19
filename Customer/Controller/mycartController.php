<?php

    $cusId = $_SESSION["user_account"];

    $totalPrice = 0;
    include "../Model/model.php";

    $getuserCart_sql = $pdo-> prepare(
        "SELECT * FROM t_cart_detail LEFT JOIN
         t_cart ON t_cart_detail.cart_id = t_cart.id LEFT JOIN 
         m_products ON t_cart_detail.product_id = m_products.id WHERE t_cart.customer_id = :customerId"
    );

    $getuserCart_sql -> bindValue(":customerId", $cusId);
    $getuserCart_sql -> execute();
    $userCart_result = $getuserCart_sql->fetchAll(PDO::FETCH_ASSOC);

  

  
    

?>