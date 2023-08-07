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
  <title>User Profile</title>
</head>

<body>
  <!-- nav -->
  <nav class="w-full h-[100px] bg-[#FFB355]"></nav>
  <br />

  <!-- body -->
  <sectionv class="w-full h-[100vh] flex justify-around items-center">
    <!-- profile -->
    <div class="text-center">
      <p class="text-[48px]">User Profile</p>
      <br />
      <br />
      <div class="w-[360px] h-[360px] rounded-[50px]">
        <img class="w-full" src="./resources/img/photo/shopProfile.jpg" alt="" />
      </div>
      <br />
      <p class="text-[40px]">Hla Hla Htun</p>
      <br />
      <p class="text-[32px] text-[#FF9F29]">09758891190</p>
      <br />
      <p class="text-[32px]">hal09@gmail.com</p>
    </div>

    <!-- other details -->
    <div class="w-[900px]">
      <!-- one list -->
      <div class="flex w-full relative">
        <div class="w-[60px]">
          <img class="w-full" src="./resources/img/cart.svg" alt="" />
        </div>
        <p class="text-[32px] ml-5">My orders</p>
        <div class="w-[50px] absolute ml-[95%]">
          <img class="w-full" src="./resources/img/arrow-down.svg" alt="" />
        </div>
      </div>
      <hr class="border-[#FF9F29]" />
      <!-- one list end -->

      <!-- one list -->
      <div class="flex w-full relative">
        <div class="w-[60px]">
          <img class="w-full" src="./resources/img/hand-heart-bold.svg" alt="" />
        </div>
        <p class="text-[32px] ml-5">My whishlist</p>
        <div class="w-[50px] absolute ml-[95%]">
          <img class="w-full" src="./resources/img/arrow-down.svg" alt="" />
        </div>
      </div>
      <hr class="border-[#FF9F29]" />
      <!-- one list end -->

      <!-- one list -->
      <div class="flex w-full relative">
        <div class="w-[60px]">
          <img class="w-full" src="./resources/img/like-dislike.svg" alt="" />
        </div>
        <p class="text-[32px] ml-5">My reviews</p>
        <div class="w-[50px] absolute ml-[95%]">
          <img class="w-full" src="./resources/img/arrow-down.svg" alt="" />
        </div>
      </div>
      <hr class="border-[#FF9F29]" />
      <!-- one list end -->

      <!-- one list -->
      <div class="flex w-full relative">
        <div class="w-[60px]">
          <img class="w-full" src="./resources/img/store.svg" alt="" />
        </div>
        <p class="text-[32px] ml-5">Followed stores</p>
        <div class="w-[50px] absolute ml-[95%]">
          <img class="w-full" src="./resources/img/arrow-down.svg" alt="" />
        </div>
      </div>
      <hr class="border-[#FF9F29]" />
      <!-- one list end -->
    </div>
  </sectionv>

  <br />
  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>