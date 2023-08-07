<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../dist/output.css" rel="stylesheet" />
  <title>CheckOut</title>
</head>

<body>
  <!-- nav -->
  <nav class="w-full h-[100px] bg-[#FFB355]"></nav>

  <!-- body -->
  <section class="p-5">
    <!-- deliver info -->
    <div>
      <p class="text-[20px] font-medium ml-12">Hla Hla Tun</p>
      <br />

      <div class="flex">
        <div class="w-[25px]">
          <img class="w-full" src="./resources/img/send.svg" alt="" />
        </div>

        <p class="text-[16px] opacity-[0.5] w-[250px] ml-3">
          between 39th st and 40th st , between 80th st and 81th st. Chan Aye
          Tharzan Township, Mandalay.
        </p>
      </div>
      <br />

      <div class="flex">
        <div class="w-[25px]">
          <img class="w-full" src="./resources/img/phone-linear.svg" alt="" />
        </div>

        <p class="text-[16px] opacity-[0.5] ml-3">09758896655</p>
      </div>
      <br />

      <div class="flex">
        <div class="w-[25px]">
          <img class="w-full" src="./resources/img/mail (1).svg" alt="" />
        </div>

        <p class="text-[16px] opacity-[0.5] ml-3">hla009@gmail.com</p>
      </div>
      <br /><br />

      <!-- items -->
      <div class="w-[350px] shadow-lg p-5">
        <!-- one item -->
        <div class="flex justify-around">
          <div class="w-[70px]">
            <img class="w-full" src="../img/product-2.jpg" alt="" />
          </div>
          <div class="w-[70%] ml-10 flex justify-around flex-col">
            <p class="text-[15px]">Olay Moisturizing cream</p>
            <p class="text-[12px]">Ks 25000</p>
            <p>
              <span class="text-[#FF9F29] text-[12px]">Qty</span>
              <span class="text-[12px]">2</span>
            </p>
          </div>
          <!-- delete -->
          <div class="w-[20%] flex items-center">
            <div class="w-[15px]">
              <img class="w-full" src="./resources/img/delete.svg" alt="" />
            </div>
          </div>
        </div>
        <hr class="my-3 border-[#FF9F29]" />
        <!-- one item end -->
        <!-- one item -->
        <div class="flex justify-around">
          <div class="w-[70px]">
            <img class="w-full" src="./resources/img/photo/product-2.jpg" alt="" />
          </div>
          <div class="w-[70%] ml-10 flex justify-around flex-col">
            <p class="text-[15px]">Olay Moisturizing cream</p>
            <p class="text-[12px]">Ks 25000</p>
            <p>
              <span class="text-[#FF9F29] text-[12px]">Qty</span>
              <span class="text-[12px]">2</span>
            </p>
          </div>
          <!-- delete -->
          <div class="w-[20%] flex items-center">
            <div class="w-[15px]">
              <img class="w-full" src="./resources/img/delete.svg" alt="" />
            </div>
          </div>
        </div>
        <hr class="my-3 border-[#FF9F29]" />
        <!-- one item end -->
        <!-- one item -->
        <div class="flex justify-around">
          <div class="w-[70px]">
            <img class="w-full" src="./resources/img/photo/product-2.jpg" alt="" />
          </div>
          <div class="w-[70%] ml-10 flex justify-around flex-col">
            <p class="text-[15px]">Olay Moisturizing cream</p>
            <p class="text-[12px]">Ks 25000</p>
            <p>
              <span class="text-[#FF9F29] text-[12px]">Qty</span>
              <span class="text-[12px]">2</span>
            </p>
          </div>
          <!-- delete -->
          <div class="w-[20%] flex items-center">
            <div class="w-[15px]">
              <img class="w-full" src="./resources/img/delete.svg" alt="" />
            </div>
          </div>
        </div>
        <hr class="my-3 border-[#FF9F29]" />
        <!-- one item end -->

        <!-- total -->
        <div class="text-[#FF9F29] text-right">
          <span class="text-[16px]"> 3 item(s). </span>
          <span class="text-[16px]"> Subtotal: </span>
          <span class="text-[20px]"> Ks 9000 </span>
        </div>
      </div>
      <br />

      <!-- delivery fee -->
      <div class="w-[350px] h-[70px] shadow-lg flex justify-around">
        <div>
          <p class="text-[15px] mt-[50%]">Delivery Fees</p>
        </div>
        <div class="h-full flex flex-col justify-around">
          <p>Ks 9000</p>
          <p>Ks 2500</p>
        </div>
      </div>

      <div class="flex mt-3">
        <p class="font-semibold mt-[8px] text-[12px]">Total :</p>
        <p class="text-[20px] text-[#FF9F29] font-semibold ml-3">Ks 11500</p>
      </div>
    </div>

    <button class="w-[150px] h-[40px] rounded-[10px] bg-[#FF9F29] ml-[25%] mt-5">
      <p class="text-white text-[18px] font-semibold">Place Order</p>
    </button>
  </section>
  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>