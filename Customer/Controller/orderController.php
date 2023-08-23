<?php

if((isset($_POST["kbzpay"]))||(isset($_POST["cod"]))){



session_start();

   $customer = $_SESSION["user_account"];
   
   $buytype = $_SESSION["buy_type"];
   $total = $_SESSION["subtotal"];

   include "../Model/model.php";

   // get address info in customer table

   $customer_sql = $pdo->prepare(
      "SELECT * FROM m_customers WHERE id = :customerId"
   );
   $customer_sql->bindValue(":customerId",$customer);
   $customer_sql->execute();
   $customer_result = $customer_sql->fetchAll(PDO::FETCH_ASSOC);

   $region = $customer_result[0]["c_region"];
   $township = $customer_result[0]["c_township"];
   $address = $customer_result[0]["c_address"];
   $phoneNumber = $customer_result[0]["c_phone"];
   $recievedDate = date("Y-m-d");


     // insert address info in order table

   $addOrder_sql = $pdo->prepare(
      "INSERT INTO t_order(
         customer_id,
         total_amt,
         township,
         region,
         order_receive_date



      ) VALUES(
         :customerId,
         :totalAmt,
         :township,
         :region,  
         :order_receive_date
      )"
   );

   $addOrder_sql->bindValue(":customerId",$customer);
   $addOrder_sql->bindValue(":totalAmt",$total);
   $addOrder_sql->bindValue(":township",$township);
   $addOrder_sql->bindValue(":region",$region);
   $addOrder_sql->bindValue(":order_receive_date",$recievedDate);
   $addOrder_sql->execute();
  
   $getOrder_id = $pdo->lastInsertId();

   
 

   

   // // if pay type is kpay
   if(isset($_POST["kbzpay"])){
      $kpay_num = $_POST["payNumber"];

     $addPay_sql=$pdo->prepare(

      "UPDATE t_order SET  payment = :paytype, payment_no = :paymentNum WHERE id = :orderId"
     );
     $addPay_sql->bindValue(":paytype","kbzpay");
     $addPay_sql->bindValue(":paymentNum",$kpay_num);
     $addPay_sql->bindValue(":orderId",$getOrder_id);
     $addPay_sql->execute();
   }

   // if pay type is cod
   if(isset($_POST["cod"])){


      $addPay2_sql=$pdo->prepare(

         "UPDATE t_order SET  payment = :paytype WHERE id = :orderId"
        );
        $addPay2_sql->bindValue(":paytype","cod");
        $addPay2_sql->bindValue(":orderId",$getOrder_id);
        $addPay2_sql->execute();

   }



   if($buytype==1){
      // insert product information in order detail table

      $product = $_SESSION["buy_product"]; 

      $get_pinfo_sql = $pdo->prepare(
         "SELECT * FROM m_products WHERE id = :productId" 
      );
      $get_pinfo_sql -> bindValue(":productId",$product);
      $get_pinfo_sql -> execute();
      $cart_product =  $get_pinfo_sql->fetchAll(PDO::FETCH_ASSOC);

      $discount = $cart_product[0]["p_discount"];
     

      if($discount != null){
         $product_price = $cart_product[0]["p_sell_price"];
         $p_sellprice = $product_price - (($product_price/100)*$discount);
      }else{
         $p_sellprice =  $cart_product[0]["p_sell_price"];
      }

    
      

      
      
   // insert into order detail table

   $orderdetail_sql=$pdo->prepare(
      "INSERT INTO t_order_detail(order_id,product_id,qty,amt) VALUES(:orderId,:productId,1,:subtotal)"
   );

   $orderdetail_sql->bindValue(":orderId",$getOrder_id);
   $orderdetail_sql->bindValue(":productId",$product);
   $orderdetail_sql->bindValue(":subtotal",$p_sellprice);
   $orderdetail_sql->execute();

  
    

   }
   if($buytype==2){

     $cart_id = $_SESSION["buy_cart"];

     $getCartInfo_sql = $pdo->prepare(
      "SELECT product_id,p_sell_price,p_discount FROM  m_products LEFT JOIN t_cart_detail ON t_cart_detail.product_id = m_products.id WHERE t_cart_detail.cart_id =:cartId"
     );
     $getCartInfo_sql->bindValue(":cartId",$cart_id);
     $getCartInfo_sql->execute();
     $cartInfo_result = $getCartInfo_sql->fetchAll(PDO::FETCH_ASSOC);

    
     

    

     foreach ($cartInfo_result as $cart_product) {

      $discount = $cart_product["p_discount"];
      if($discount != null){
         $product_price = $cart_product["p_sell_price"];
         $p_sellprice = $product_price - (($product_price/100)*$discount);
      }else{
         $p_sellprice =  $cart_product["p_sell_price"];
      }


      $orderCart_sql = $pdo->prepare(

         "INSERT INTO t_order_detail(order_id,product_id,qty,amt) VALUES(:orderId,:productId,1,:subtotal)"
   
        );
        $orderCart_sql->bindValue(":orderId",$getOrder_id);
        $orderCart_sql->bindValue(":productId",$cart_product["product_id"]);
        $orderCart_sql->bindValue(":subtotal",$p_sellprice);
        $orderCart_sql->execute();

     }

   
   


   }


   header("Location: ../View/thankyou.php");

}else {
         header("Location: ../View/errorshow.php");
}
?>