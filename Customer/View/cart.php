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
  <script src="./resources/js/myCart.js?id=<?= time() ?>"></script>
  <title>Cart</title>
</head>

<body>

  <?php
  include "./common/nav_without_search.php";
  //include "../Controller/cartController.php";
  include "../Controller/mycartController.php";
  ?>



    <p class="text-orange-500 font-medium text-2xl text-center my-5">My Cart</p>
    <section class=" w-full h-[100vh] flex lg:flex-row flex-col justify-around">
      <!-- products -->
      <div class="lg:w-2/5 w-full lg:h-56 h-96 overflow-y-auto">


          <?php 
                  $subtotal = 0;
                  $shippingfees = 2500;
          
          foreach ($userCart_result as $cart_product) { 
            
            if (($cart_product["p_discount"]) != null) {

              $price = $cart_product["p_sell_price"] - ((($cart_product["p_discount"]) / 100)  * ($cart_product["p_sell_price"]));
          } else $price = $cart_product["p_sell_price"];
            
            $subtotal += $price;
            ?>


          
         
        <!-- one product -->
        <div class="w-11/12 lg:h-24 h-20 shadow-md flex justify-start items-center py-1 px-1 mx-auto relative product_cart">

          <input class="lg:w-4 lg:h-4 w-2 h-2 p_check" type="checkbox" />
          <div class=" lg:w-20 w-14 ml-2 h-20">
            <img class="w-full h-full" src="../..<?= $cart_product["p_photo_1"] ?>" alt="" />
          </div>

          <div class="lg:text-base absolute right-1 text-sm w-8/12">
            <div class="flex">
              <div>
                <p class="w-40 mb-1"><?= $cart_product["p_title"] ?></>
                <p> <?= $price ?> </p>
              </div>

              <div class="absolute right-1 bottom-0">
                <!-- delete -->
                <div>
                  <ion-icon name="trash-outline" class="ml-6 delete"></ion-icon>
                </div>
                <!-- quantity -->
                <div class="flex">
                  <p class="text-[#FF9F29]">Qty</p>
                  <div class="flex w-10 items-center lg:ml-2 ml-1">
                    <div class="w-3 mr-1">
                      <img class="w-full" src="./resources/img/baseline-plus.svg" alt="" />
                    </div>
                    <div class="mr-1" qty="<?= $i ?>">1</div>
                    <input name="qty" value="" type="text" class="hidden">
                    <div class="w-3 mr-1">
                      <img class="w-full" src="./resources/img/baseline-minus.svg" alt="" />
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
        <!-- one product end -->

        <?php } ?>



      </div>


      <!-- order -->
      <div class="lg:w-2/5 w-11/12 lg:h-2/3 shadow-md border-2  lg:px-16 px-8  lg:py-12 py-6 lg:mt-5 mt-2 mx-auto">
        <p class="lg:text-xl text-lg font-medium mb-10">Order Summary</p>

        <div class="flex justify-between mb-5 lg:text-base text-sm">
          <p>Subtotal <span class="text-orange-500"><?=count($userCart_result) ?></span> items</p>
          <p id="subtotal"><?=$subtotal ?></p>
        </div>

        <div class="flex justify-between mb-5 lg:text-base text-sm">
          <p>Shipping Fees</p>
          <p>Ks <span id="shippingFees">2250</span></p>
        </div>

        <div class="flex justify-around mb-8 lg:text-base text-sm">
          <p class="text-lg font-medium">Total</p>
          <p id="total" class="text-lg text-orange-500 font-medium"><?php echo($subtotal+$shippingfees) ?></p>
         
        </div>

        <button id="proceed" type="button" class="w-48 rounded-md bg-[#ff9f29] mx-auto">
          <p class="text-white text-center py-1">Proceed to Purchase</p>
        </button>

      </div>
    </section>
    <!-- body end -->
  

  <?php include "../View/common/commonFooter.php" ?>

</body>

</html>