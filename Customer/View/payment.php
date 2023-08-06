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
  <title>Payment</title>
</head>

<body>
  <?php include "./common/CommonNavigation.php" ?>
  <br />

  <!-- body -->
  <section class="w-full h-[100vh] flex flex-col justify-around items-center">
    <p class="font-medium text-[48px]">Choose Payment Method</p>

    <p class="text-[40px]">Cash on delivery</p>

    <p class="text-[40px]">OR</p>

    <div class="flex">
      <div class="w-[250px] mx-5">
        <img class="w-full" src="./resources/img/photo/product-2.jpg" alt="" />
      </div>
      <div class="w-[250px] mx-5">
        <img class="w-full" src="./resources/img/photo/product-2.jpg" alt="" />
      </div>
      <div class="w-[250px] mx-5">
        <img class="w-full" src="./resources/img/photo/product-2.jpg" alt="" />
      </div>
    </div>
    <br>

    <button class="w-[425px] h-[75px] bg-[#F86F03] rounded-[10px]">
      <p class="text-white text-[36px] font-semibold">order confirm</p>
    </button>
    <br>
  </section>

  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>