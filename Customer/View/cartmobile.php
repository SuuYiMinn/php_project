<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../dist/output.css" rel="stylesheet" />
  <title>Cart</title>
</head>

<body>
  <!-- nav -->
  <nav class="h-[100px] bg-[#FFB355]"></nav>
  <br />
  <!-- body -->
  <section class="h-[100vh] flex flex-col items-center">
    <p class="text-[24px] font-medium text-[#FF9F29]">My Order</p>
    <br />
    <!-- products -->
    <div>
      <!-- one product -->
      <div class="w-[360px] h-[70px] shadow-lg flex justify-around items-center relative p-5 mb-3">
        <input class="w-[16px] h-[16px]" type="checkbox" />
        <div class="w-[60px] ml-2">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>
        <div class="w-[70%] flex ml-3">
          <div>
            <div>
              <p class="text-[15px]">Olay Moisturizing cream</p>
            </div>
            <br />
            <div class="ml-2 text-[15px]">Ks 25000</div>
          </div>
          <div class="absolute right-12 bottom-0 flex">
            <p class="text-[#FF9F29] text-[12px]">Qty</p>
            <div class="flex justify-around w-[75px] items-center ml-[10px]">
              <div class="w-[10px]">
                <img class="w-full" src="./resources/img/baseline-plus.svg" alt="" />
              </div>
              <div class="text-[12px]">1</div>
              <div class="w-[10px]">
                <img class="w-full" src="./resources/img/baseline-minus.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
        <!-- delete -->
        <div class="w-[10%]">
          <div class="w-[15px]">
            <img class="w-full" src="./resources/img/delete.svg" alt="" />
          </div>
        </div>
      </div>
      <!-- one product end -->
      <!-- one product -->
      <div class="w-[360px] h-[70px] shadow-lg flex justify-around items-center relative p-5 mb-3">
        <input class="w-[16px] h-[16px]" type="checkbox" />
        <div class="w-[60px] ml-2">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>
        <div class="w-[70%] flex ml-3">
          <div>
            <div>
              <p class="text-[15px]">Olay Moisturizing cream</p>
            </div>
            <br />
            <div class="ml-2 text-[15px]">Ks 25000</div>
          </div>
          <div class="absolute right-12 bottom-0 flex">
            <p class="text-[#FF9F29] text-[12px]">Qty</p>
            <div class="flex justify-around w-[75px] items-center ml-[10px]">
              <div class="w-[10px]">
                <img class="w-full" src="./resources/img/baseline-plus.svg" alt="" />
              </div>
              <div class="text-[12px]">1</div>
              <div class="w-[10px]">
                <img class="w-full" src="./resources/img/baseline-minus.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
        <!-- delete -->
        <div class="w-[10%]">
          <div class="w-[15px]">
            <img class="w-full" src="./resources/img/delete.svg" alt="" />
          </div>
        </div>
      </div>
      <!-- one product end -->

      <!-- check out -->
      <div class="flex justify-center mt-20">
        <button class="w-[260px] h-[45px] bg-[#F86F03] rounded-[10px]">
          <p class="text-[20px] text-white font-medium">Check Out</p>
        </button>
      </div>
    </div>
  </section>

  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>