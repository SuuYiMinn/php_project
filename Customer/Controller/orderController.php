<?php

if (isset($_POST["invoice_data"])) {

    // echo ("<pre>");
    // print_r($_POST);

    $invoice_data = unserialize($_POST["invoice_data"]);
    // echo ("invoice_data");
    // print_r($invoice_data);

    $check_out_data = unserialize(($invoice_data["check_out_data"]));
    // echo ("check_out_data");
    // print_r($check_out_data);

    $order_data = unserialize($check_out_data["order_data"]);
    // echo ("order_data");
    // print_r($order_data);



    $product_ids_ar = json_decode($order_data["product_id"], true);
    // echo("product_ids_ar");
    // print_r($product_ids_ar);
    $qtys_ar = json_decode($order_data["qty"], true);
    // echo("qtys_ar");
    // print_r($qtys_ar);
    $amounts_ar = json_decode($order_data["amount"], true);
    // echo("amount_ar");
    // print_r($amounts_ar);
    $shippingFees = 2250;
    $subtotal = $order_data["total"] - $shippingFees;
    $product_ids = [];
    $qtys = [];
    $amounts = [];

    for ($i = 0; $i < count($product_ids_ar); $i++) {
        foreach ($product_ids_ar[$i] as $key => $value) {
            array_push($product_ids, $value);
        }
        foreach ($qtys_ar[$i] as $key => $value) {
            array_push($qtys, $value);
        }
        foreach ($amounts_ar[$i] as $key => $value) {
            array_push($amounts, $value);
        }
    }

    // print_r($product_ids);
    // print_r($qtys);
    // print_r($amounts);
    // for ($i=0; $i < 3; $i++) { 
    //     echo($product_ids[$i]);
    //     echo ("</br>");
    //     echo($qtys[$i]);
    //     echo ("</br>");
    //     echo($amounts[$i]);
    //     echo ("</br>");
    // }
    // $idstring = implode(",", $ids);
    // echo($idstring);

    $customer_id = $accountresult[0]["id"];
    $total_amt = $order_data["total"];
    $region = $check_out_data["region"];
    $township = 450;
    $payment = $_POST["COD"];

    // db connection
    include "../model/model.php";

    // data for t_order
    $sql1 = $pdo->prepare(
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

    $sql1->bindValue(":customer_id", $customer_id);
    $sql1->bindValue(":total_amt", $total_amt);
    $sql1->bindValue(":township", $township);
    $sql1->bindValue(":region", $region);
    $sql1->bindValue(":payment", $payment);
    $sql1->bindValue(":order_receive_date", date("Y-m-d"));
    $sql1->bindValue(":create_date", date("Y-m-d"));

    $sql1->execute();

    // for order id
    $sql2 = $pdo->prepare(
        "SELECT * FROM `t_order` ORDER BY `id` DESC LIMIT 1"
    );
    $sql2->execute();
    $order_result = $sql2->fetchAll(PDO::FETCH_ASSOC);
    // echo ($order_result[0]["id"]);

    // data for t_order_detail
    for ($i = 0; $i < count($product_ids); $i++) {

        $sql3 = $pdo->prepare(
            "INSERT INTO t_order_detail
                 ( 
                     order_id,
                     product_id,
                     qty,
                     amt,
                     create_date
                 )
                 VALUES 
                 (
                     :order_id,
                     :product_id,
                     :qty,
                     :amt,
                     :create_date
                 )
             "
        );

        $sql3->bindValue(":order_id", $order_result[0]["id"]);
        $sql3->bindValue(":product_id", $product_ids[$i]);
        $sql3->bindValue(":qty", $qtys[$i]);
        $sql3->bindValue(":amt", $amounts[$i]);
        $sql3->bindValue(":create_date", date("Y-m-d"));

        $sql3->execute();

        // delete items in cart
        $sql4 = $pdo->prepare(
            "UPDATE `t_cart_detail` SET `del_flg` = 1 WHERE `product_id` = :product_id"
        );
        $sql4->bindValue(":product_id", $product_ids[$i]);
        $sql4->execute();
    }
} else {
    header("Location: ../View/error/error.php");
}
