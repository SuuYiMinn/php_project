<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./resources/css/categoryProduct.css">
  <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
  <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="./resources/lib/jquery/jquery.js"></script>
  <script src="./resources/js/checkout.js"></script>
  <script src="./resources/js/Qty.js"></script>
  <title>CheckOut</title>
</head>

<body class="overflow-x-hidden">
  <?php include "./common/nav_without_search.php" ?>


  <?php

  include "../Controller/checkOutController.php";


  ?>

  <div class="w-full">
    <!-- body -->


    <section class="flex lg:flex-row flex-col justify-around mt-4 ">
      <!-- deliver info -->
      <div class="lg:w-1/2 w-full  ml-8">
        <p class="lg:text-2xl text-xl font-medium  ml-6 mb-6"><?= $userInfo_result[0]["c_name"] ?></p>

        <div class="flex">
          <ion-icon name="send" class="scale-150 -rotate-45"></ion-icon>
          <p class="lg:text-lg text-base opacity-[0.5] w-96 ml-3">
            <?= $userInfo_result[0]["c_address"] ?>, <?= $userInfo_result[0]["township"] ?>, <?= $userInfo_result[0]["region"] ?>
          </p>
        </div>

        <div class="flex my-5">
          <ion-icon name="call" class="scale-150"></ion-icon>
          <p class="lg:text-lg text-base opacity-50 w-96 ml-3"><?= $userInfo_result[0]["c_phone"] ?></p>
        </div>

        <div class="flex ">
          <ion-icon name="mail" class="scale-150"></ion-icon>
          <p class="text-lg opacity-50 w-96 ml-3">
            <?= $userInfo_result[0]["c_email"] ?>
          </p>
        </div>
      </div>

      <!-- voucher -->
      <div class="lg:w-1/2 w-full">
        <!-- items -->
        <div class="w-11/12 p-4 shadow-lg mx-auto ">
          <!-- one item -->
          <?php

          $subtotal = 0;
          $shippingfees = 2500;

          foreach ($buyproducts_result as $buyproduct) {

            if (($buyproduct["p_discount"]) != null) {

              $price = $buyproduct["p_sell_price"] - ((($buyproduct["p_discount"]) / 100)  * ($buyproduct["p_sell_price"]));
            } else $price = $buyproduct["p_sell_price"];
              $subtotal += $price;
          ?>
            <div class="flex justify-around border-b-orange-500 border-b-2 py-2 ">
              <div class="w-20">
                <img class="w-full" src="../..<?=$buyproduct["p_photo_1"]?>" alt="" />
              </div>
              <div class="w-4/5 ml-10 flex justify-around flex-col">
                <p class="lg:text-lg text-sm"><?= $buyproduct["p_title"] ?></p>
                <p class="lg:text-lg text-sm">Ks <?= $price ?></p>
                <p class="lg:text-sm text-xs">
                <div class="flex items-center w-28 justify-evenly float-right">
                <p>Qty</p>
               
                <p class="qty">1</p>
             
            </div>
                </p>
              </div>
              <!-- delete -->
              <div class="w-[20%] flex items-center">
                <div del="<?= $i ?>" class="w-[30px]">
                  <ion-icon name="trash-outline" class="lg:scale-150 scale-100"></ion-icon>
                </div>
              </div>
            </div>

            <!-- one item end -->
          <?php } ?>

          <!-- total -->
          <div class="text-orange-500 text-right mt-4">
            <span class="lg:text-base text-sm"> <?= count($buyproducts_result) ?> item(s). </span>
            <span class="lg:text-base text-sm"> Subtotal: </span>
            <span class="lg:text-lg text-base"> Ks <?= $subtotal ?> </span>
          </div>
        </div>
        <br />

        <!-- delivery fee -->
        <div class="w-11/12 p-4 shadow-lg flex mx-auto justify-around">
          <div>
            <p class="lg:text-xl text-lg mt-10">Delivery Fees</p>
          </div>
          <div>
            <p class="my-2">Ks <?= $subtotal?> </p>
            <p class="text-orange-500">Ks <?= $shippingfees ?></p>
          </div>
        </div>

        <div class="flex mt-7 w-56 float-right lg:mr-14 mr-6 items-center ">
          <p class="font-semibold">Total:</p>
          <p class="lg:text-2xl text-xl text-[#FF9F29] font-semibold ml-3">Ks <?=$shippingfees + $subtotal?></p>
        </div>
        <?php $_SESSION["subtotal"]= ($shippingfees + $subtotal) ?>
        <div class="lg:w-48 w-36 py-3 rounded-lg bg-[#ff9f29] mx-auto text-center mt-24 mb-10">
          <button>
            <a  href="./payment.php" class="text-white lg:text-xl text-l font-semibold">Place Order</a>
          </button>
        </div>

      </div>
    </section>


  </div>

  <?php include "../View/common/commonFooter.php" ?>


  <?php

 
   ?>

</body>

</html>