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
  <title>CheckOut</title>
</head>

<body>
  <?php include "./common/CommonNavigation.php" ?>
  <br />

  <!-- body -->
  <section class="flex justify-around">
    <!-- deliver info -->
    <div class="w-[650px]">
      <p class="text-[36px] font-medium ml-12">Hla Hla Tun</p>
      <br />
      <br />

      <div class="flex">
        <div class="w-[40px]">
          <img class="w-full" src="./resources/img/send.svg" alt="" />
        </div>

        <p class="text-[28px] opacity-[0.5] w-[620px] ml-3">
          between 39th st and 40th st , between 80th st and 81th st. Chan Aye
          Tharzan Township, Mandalay.
        </p>
      </div>
      <br /><br />

      <div class="flex">
        <div class="w-[40px]">
          <img class="w-full" src="./resources/img/phone-linear.svg" alt="" />
        </div>

        <p class="text-[28px] opacity-[0.5] w-[620px] ml-3">09758896655</p>
      </div>
      <br /><br />

      <div class="flex">
        <div class="w-[50px]">
          <img class="w-full" src="./resources/img/mail (1).svg" alt="" />
        </div>

        <p class="text-[28px] opacity-[0.5] w-[620px] ml-3">
          hla009@gmail.com
        </p>
      </div>
      <br /><br /><br /><br /><br />

      <div class="flex">
        <p class="font-semibold mt-[36px]">Total :</p>
        <p class="text-[48px] text-[#FF9F29] font-semibold ml-3">Ks 11500</p>
      </div>
    </div>

    <!-- voucher -->
    <div>
      <!-- items -->
      <div class="w-[600px] h-[500px] shadow-lg p-5">
        <!-- one item -->
        <div class="flex justify-around">
          <div class="w-[120px]">
            <img class="w-full" src="./resources/img/photo/product-2.jpg" alt="" />
          </div>
          <div class="w-[70%] ml-10 flex justify-around flex-col">
            <p class="text-[20px]">Olay Moisturizing cream</p>
            <p class="text-[18px]">Ks 25000</p>
            <p>
              <span class="text-[#FF9F29] text-[18px]">Qty</span>
              <span class="text-[18px]">2</span>
            </p>
          </div>
          <!-- delete -->
          <div class="w-[20%] flex items-center">
            <div class="w-[30px]">
              <img class="w-full" src="./resources/img/delete.svg" alt="" />
            </div>
          </div>
        </div>
        <!-- one item end -->

        <hr class="my-3 border-[#FF9F29]" />

        <!-- one item -->
        <div class="flex justify-around">
          <div class="w-[120px]">
            <img class="w-full" src="./resources/img/photo/product-2.jpg" alt="" />
          </div>
          <div class="w-[70%] ml-10 flex justify-around flex-col">
            <p class="text-[20px]">Olay Moisturizing cream</p>
            <p class="text-[18px]">Ks 25000</p>
            <p>
              <span class="text-[#FF9F29] text-[18px]">Qty</span>
              <span class="text-[18px]">2</span>
            </p>
          </div>
          <!-- delete -->
          <div class="w-[20%] flex items-center">
            <div class="w-[30px]">
              <img class="w-full" src="./resources/img/delete.svg" alt="" />
            </div>
          </div>
        </div>
        <!-- one item end -->

        <hr class="my-3 border-[#FF9F29]" />

        <!-- one item -->
        <div class="flex justify-around">
          <div class="w-[120px]">
            <img class="w-full" src="./resources/img/photo/product-2.jpg" alt="" />
          </div>
          <div class="w-[70%] ml-10 flex justify-around flex-col">
            <p class="text-[20px]">Olay Moisturizing cream</p>
            <p class="text-[18px]">Ks 25000</p>
            <p>
              <span class="text-[#FF9F29] text-[18px]">Qty</span>
              <span class="text-[18px]">2</span>
            </p>
          </div>
          <!-- delete -->
          <div class="w-[20%] flex items-center">
            <div class="w-[30px]">
              <img class="w-full" src="./resources/img/delete.svg" alt="" />
            </div>
          </div>
        </div>
        <!-- one item end -->

        <hr class="my-3 border-[#FF9F29]" />

        <!-- total -->
        <div class="text-[#FF9F29] text-right">
          <span class="text-[16px]"> 3 item(s). </span>
          <span class="text-[16px]"> Subtotal: </span>
          <span class="text-[20px]"> Ks 9000 </span>
        </div>
      </div>
      <br />

      <!-- delivery fee -->
      <div class="w-[600px] h-[100px] shadow-lg flex justify-around">
        <div>
          <p class="text-[20px] mt-[50%]">Delivery Fees</p>
        </div>
        <div class="h-full flex flex-col justify-around">
          <p>Ks 9000</p>
          <p>Ks 2500</p>
        </div>
      </div>
      <br />
    </div>
  </section>
  <br />

  <button class="w-[300px] h-[90px] rounded-[10px] bg-[#FF9F29] ml-[35%]">
    <p class="text-white text-[48px] font-semibold">Place Order</p>
  </button>

  <br />
  <br />

  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>