<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../dist/output.css" rel="stylesheet" />
  <title>User Profile</title>
</head>

<body>
  <!-- nav -->
  <nav class="w-full h-[100px] bg-[#FFB355]"></nav>
  <br />

  <!-- body -->
  <sectionv class="w-full h-[70vh] flex flex-col justify-around items-center">
    <!-- profile -->
    <div class="text-center">
      <p class="text-[20px]">User Profile</p>
      <br />
      <br />
      <div class="w-[100px] h-[100px] rounded-[50px]">
        <img class="w-full" src="./resources/img/photo/shopProfile.jpg" alt="" />
      </div>
      <br />
      <p class="text-[20px]">Hla Hla Htun</p>
      <br />
      <p class="text-[13px] text-[#FF9F29]">09758891190</p>
      <br />
      <p class="text-[13px]">hal09@gmail.com</p>
    </div>

    <!-- other details -->
    <div class="w-[370px]">
      <!-- one list -->
      <div class="flex w-full relative">
        <div class="w-[30px]">
          <img class="w-full" src="./resources/img/cart.svg" alt="" />
        </div>
        <p class="text-[15px] ml-5">My orders</p>
        <div class="w-[30px] absolute ml-[95%]">
          <img class="w-full" src="./resources/img/arrow-down.svg" alt="" />
        </div>
      </div>
      <hr class="border-[#FF9F29]" />
      <!-- one list end -->

      <!-- one list -->
      <div class="flex w-full relative">
        <div class="w-[30px]">
          <img class="w-full" src="./resources/img/hand-heart-bold.svg" alt="" />
        </div>
        <p class="text-[15px] ml-5">My whishlist</p>
        <div class="w-[30px] absolute ml-[95%]">
          <img class="w-full" src="./resources/img/arrow-down.svg" alt="" />
        </div>
      </div>
      <hr class="border-[#FF9F29]" />
      <!-- one list end -->

      <!-- one list -->
      <div class="flex w-full relative">
        <div class="w-[30px]">
          <img class="w-full" src="./resources/img/like-dislike.svg" alt="" />
        </div>
        <p class="text-[15px] ml-5">My reviews</p>
        <div class="w-[30px] absolute ml-[95%]">
          <img class="w-full" src="./resources/img/arrow-down.svg" alt="" />
        </div>
      </div>
      <hr class="border-[#FF9F29]" />
      <!-- one list end -->

      <!-- one list -->
      <div class="flex w-full relative">
        <div class="w-[30px]">
          <img class="w-full" src="./resources/img/store.svg" alt="" />
        </div>
        <p class="text-[15px] ml-5">Followed stores</p>
        <div class="w-[30px] absolute ml-[95%]">
          <img class="w-full" src="./resources/img/arrow-down.svg" alt="" />
        </div>
      </div>
      <hr class="border-[#FF9F29]" />
      <!-- one list end -->
    </div>
  </sectionv>

  <?php include "../View/common/commonFooterMobile.php" ?>
</body>

</html>