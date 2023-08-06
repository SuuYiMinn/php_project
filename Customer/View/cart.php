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
  <script src="./resources/js/menu.js"></script>
  <title>Cart</title>
</head>

<body>
  <?php include "./common/CommonNavigation.php" ?>
  <section class="h-[100vh] flex justify-around">
    <!-- products -->
    <div>
      <!-- one product -->
      <div class="w-[600px] h-[130px] shadow-lg flex justify-around items-center p-5">
        <input class="w-[25px] h-[25px]" type="checkbox" />
        <div class="w-[120px] ml-3">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>
        <div class="w-[70%] flex ml-5">
          <div>
            <div>
              <p>Olay Moisturizing cream</p>
            </div>
            <br />
            <div class="ml-3">Ks 25000</div>
          </div>
          <div class="relative">
            <div class="absolute bottom-0 ml-3 flex">
              <p class="text-[#FF9F29]">Qty</p>
              <div class="flex justify-around w-[100px] items-center ml-3">
                <div class="w-[15px]">
                  <img class="w-full" src="./resources/img/baseline-plus.svg" alt="" />
                </div>
                <div>1</div>
                <div class="w-[15px]">
                  <img class="w-full" src="./resources/img/baseline-minus.svg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- delete -->
        <div class="w-[10%]">
          <div class="w-[35px]">
            <img class="w-full" src="./resources/img/delete.svg" alt="" />
          </div>
        </div>
      </div>
      <!-- one product end -->
      <!-- one product -->
      <div class="w-[600px] h-[130px] shadow-lg flex justify-around items-center p-5">
        <input class="w-[25px] h-[25px]" type="checkbox" />
        <div class="w-[120px] ml-3">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>
        <div class="w-[70%] flex ml-5">
          <div>
            <div>
              <p>Olay Moisturizing cream</p>
            </div>
            <br />
            <div class="ml-3">Ks 25000</div>
          </div>
          <div class="relative">
            <div class="absolute bottom-0 ml-3 flex">
              <p class="text-[#FF9F29]">Qty</p>
              <div class="flex justify-around w-[100px] items-center ml-3">
                <div class="w-[15px]">
                  <img class="w-full" src="./resources/img/baseline-plus.svg" alt="" />
                </div>
                <div>1</div>
                <div class="w-[15px]">
                  <img class="w-full" src="./resources/img/baseline-minus.svg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- delete -->
        <div class="w-[10%]">
          <div class="w-[35px]">
            <img class="w-full" src="./resources/img/delete.svg" alt="" />
          </div>
        </div>
      </div>
      <!-- one product end -->

    </div>

    <!-- order -->
    <div class="w-[580px] h-[480px] shadow-md border-2 px-[70px] py-[50px] mt-5">
      <p class="text-[36px]">Order Summary</p>
      <br /><br />
      <div class="flex justify-between">
        <p>Subtotal ( 2 items)</p>
        <p>Ks 19550</p>
      </div>
      <br />
      <div class="flex justify-between">
        <p>Shipping Fees</p>
        <p>Ks 2250</p>
      </div>
      <br />
      <div class="flex justify-around">
        <p class="text-[32px]">Total</p>
        <p class="text-[36px] text-[#F86F03]">22500</p>
      </div>
      <br />
      <button class="w-[420px] h-[75px] rounded-[10px] bg-[#F86F03] ml-5">
        <p class="text-[32px] text-white">Proceed to Purchase</p>
      </button>
    </div>
  </section>
  <!-- body end -->

  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>