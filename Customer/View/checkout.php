<?php

include "../Controller/checkOutController.php";


?>

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
  <title>CheckOut</title>
</head>

<body class="overflow-x-hidden">
  <?php include "./common/CommonNavigation.php" ?>

  <div class="w-full">
    <!-- body -->
    <form action="./payment.php" method="post">
      <section class="flex lg:flex-row flex-col justify-around mt-4 ">
        <!-- deliver info -->
        <div class="lg:w-1/2 w-full  ml-8">
          <p class="lg:text-2xl text-xl font-medium  ml-6 mb-6"><?= $_POST["full_name"] ?></p>
          <input name="full_name" type="text" value="<?= $_POST["full_name"] ?>" class="hidden">


          <div class="flex">
            <ion-icon name="send" class="scale-150 -rotate-45"></ion-icon>
            <p class="lg:text-lg text-base opacity-[0.5] w-96 ml-3">
              <?= $_POST["address"] ?>,<?= $region[0]["name"] ?>
              <input name="address" type="text" value="<?= $_POST["address"] ?>" class="hidden">
              <input name="region" type="text" value="<?= $region[0]["id"] ?>" class="hidden">
            </p>
          </div>

          <div class="flex my-5">
            <ion-icon name="call" class="scale-150"></ion-icon>
            <p class="lg:text-lg text-base opacity-50 w-96 ml-3"><?= $_POST["phone_number"] ?></p>
            <input name="phone_number" type="text" value="<?= $_POST["phone_number"] ?>" class="hidden">
          </div>

          <div class="flex ">
            <ion-icon name="mail" class="scale-150"></ion-icon>
            <p class="text-lg opacity-50 w-96 ml-3">
              <?= $result[0]["c_email"] ?>
            </p>
          </div>



        </div>

        <!-- voucher -->
        <div class="lg:w-1/2 w-full">
          <!-- items -->
          <div class="w-11/12 p-4 shadow-lg mx-auto ">
            <!-- one item -->
            <div class="flex justify-around border-b-orange-500 border-b-2 py-2 ">
              <div class="w-20">
                <img class="w-full" src="./resources/img/photo/product-2.jpg" alt="" />
              </div>
              <div class="w-4/5 ml-10 flex justify-around flex-col">
                <p class="lg:text-lg text-sm"><?= $productDetail_result[0]["p_title"] ?></p>
                <p class="lg:text-lg text-sm"><?= $productDetail_result[0]["p_sell_price"] ?></p>
                <p class="lg:text-sm text-xs">
                  <span class="text-[#FF9F29]">Qty</span>
                <div class="flex justify-around w-[100px] items-center ml-3">
                  <div class="w-[15px]">
                    <img id="plus" class="w-full" src="./resources/img/baseline-plus.svg" alt="" />
                  </div>
                  <div id="qty">1</div>
                  <!-- <input name="qty" type="number" value="9000" class="hidden"> -->
                  <div class="w-[15px]">
                    <img id="minus" class="w-full" src="./resources/img/baseline-minus.svg" alt="" />
                  </div>
                </div>
                </p>
              </div>
              <!-- delete -->
              <div class="w-[20%] flex items-center">
                <div class="w-[30px]">
                  <ion-icon name="trash-outline" class="lg:scale-150 scale-100"></ion-icon>
                </div>
              </div>
            </div>
            <!-- one item end -->


            <!-- total -->
            <div class="text-orange-500 text-right mt-4">
              <span class="lg:text-base text-sm"> 3 item(s). </span>
              <span class="lg:text-base text-sm"> Subtotal: </span>
              <span class="lg:text-lg text-base"> Ks 9000 </span>
            </div>
          </div>
          <br />

          <!-- delivery fee -->
          <div class="w-11/12 p-4 shadow-lg flex mx-auto justify-around">
            <div>
              <p class="lg:text-xl text-lg mt-10">Delivery Fees</p>
            </div>
            <div>
              <p class="my-2">Ks 9000</p>
              <p class="text-orange-500">Ks 2500</p>
            </div>
          </div>

          <div class="flex mt-7 w-40 float-right lg:mr-14 mr-6 items-center ">
            <p class="font-semibold">Total :</p>
            <p class="lg:text-2xl text-xl text-[#FF9F29] font-semibold ml-3">Ks 11500</p>
            <input name="total" type="number" value="11500" class="hidden">
          </div>



          <div class="lg:w-48 w-36 py-3 rounded-lg bg-[#ff9f29] mx-auto text-center mt-24 mb-10">
            <button>
              <p class="text-white lg:text-xl text-l font-semibold">Place Order</p>
            </button>
          </div>
    </form>
  </div>
  </section>


  </div>

  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>