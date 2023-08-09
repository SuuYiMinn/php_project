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

  <?php include "./common/nav_without_search.php" ?>
  <!-- body -->
  <section class="w-full flex text-center lg:flex-row flex-col justify-around my-10">
    <!-- profile -->
    <div class="lg:w-3/12 lg:mx-16 w-2/3 mx-auto">
      <p class="text-2xl mb-8">User Profile</p>

      <div class="w-44 h-32 mx-auto">
        <img class="w-full rounded-xl" src="./resources/img/photo/shopProfile.jpg" alt="User image" >
      </div>

      <p class="text-lg mt-5">Hla Hla Htun</p>

      <p class="text-lg text-[#FF9F29]">09758891190</p>

      <p class="text-lg">hal09@gmail.com</p>
    </div>

    <!-- other details -->

    <div class="lg:w-8/12 w-full lg:mt-0 mt-5">
      <!-- one list -->
      <div class="flex lg:w-8/12 w-11/12 mx-auto border-b-[1px] border-orange-400 relative">

        <ion-icon name="cart" class="scale-150"></ion-icon>

        <p class="text-xl ml-5">My orders</p>
        <ion-icon name="chevron-down-outline" class="absolute right-0 bottom-0 scaleX-150"></ion-icon>
      </div>

      <!-- one list end -->

      <!-- one list -->
      <div class="flex lg:w-8/12 w-11/12 mx-auto border-b-[1px] border-orange-400 relative my-16">

        <ion-icon name="gift-outline" class="scale-150"></ion-icon>

        <p class="text-xl ml-5">My Wishlist</p>
        <ion-icon name="chevron-down-outline" class="absolute right-0 bottom-0 scaleX-150"></ion-icon>
      </div>


      <!-- one list -->
      <div class="flex lg:w-8/12 w-11/12 mx-auto border-b-[1px] border-orange-400 relative">

        <ion-icon name="happy-outline" class="scale-150"></ion-icon>

        <p class="text-xl ml-5">My Review</p>
        <ion-icon name="chevron-down-outline" class="absolute right-0 bottom-0 scaleX-150"></ion-icon>
      </div>

    </div>

  </section>

  <?php include "../View/common/commonFooter.php" ?>
  <?php include "../View/common/commonFooterMobile.php" ?>
</body>

</html>