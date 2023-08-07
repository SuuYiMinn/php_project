<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../dist/output.css" rel="stylesheet" />
  <title>Payment</title>
</head>

<body>
  <!-- nav -->
  <nav class="w-full h-[100px] bg-[#FFB355]"></nav>
  <br />

  <!-- body -->
  <section class="w-full h-[100vh] flex flex-col justify-around items-center">
    <p class="font-medium text-[32px]">Choose Payment Method</p>

    <p class="text-[24px]">Cash on delivery</p>

    <p class="text-[20px]">OR</p>

    <div class="flex">
      <div class="w-[100px] mx-5">
        <img class="w-full" src="./resources/img/photo/product-2.jpg" alt="" />
      </div>
      <div class="w-[100px] mx-5">
        <img class="w-full" src="./resources/img/photo/product-2.jpg" alt="" />
      </div>
      <div class="w-[100px] mx-5">
        <img class="w-full" src="./resources/img/photo/product-2.jpg" alt="" />
      </div>
    </div>
    <br>

    <button class="w-[280px] h-[55px] bg-[#F86F03] rounded-[10px]">
      <p class="text-white text-[24px] font-semibold">order confirm</p>
    </button>
    <br>
  </section>

  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>