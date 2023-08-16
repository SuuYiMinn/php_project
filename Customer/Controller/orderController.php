<?php

if (isset($_POST["address"])) {

    // print_r($_POST);
    $name = $_POST["full_name"];
    $total_amt = $_POST["total"];
    $region = $_POST["region"];
    $township = 450;
    $payment = $_POST["COD"];

    // db connection
    include "../model/model.php";

    $sql2 = $pdo->prepare(
        "SELECT * FROM m_customers  WHERE c_name = :name"
    );

    $sql2->bindValue(":name", $name);
    $sql2->execute();
    $result = $sql2->fetchAll(PDO::FETCH_ASSOC);

    $customer_id = $result[0]["id"];

    $sql = $pdo->prepare(
        "INSERT INTO t_order
         ( 
             customer_id,
             total_amt,
             township,
             region,
             payment,
             order_receive_date,
             create_date
         )
         VALUES 
         (
             :customer_id,
             :total_amt,
             :township,
             :region,
             :payment,
             :order_receive_date,
             :create_date
         )
     "
    );

    $sql->bindValue(":customer_id", $customer_id);
    $sql->bindValue(":total_amt", $total_amt);
    $sql->bindValue(":township", $township);
    $sql->bindValue(":region", $region);
    $sql->bindValue(":payment", $payment);
    $sql->bindValue(":order_receive_date", date("Y-m-d"));
    $sql->bindValue(":create_date", date("Y-m-d"));

    $sql->execute();
} else {
    header("Location: ../View/error/error.php");
}
