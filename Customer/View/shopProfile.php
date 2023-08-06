<!DOCTYPE html>
<html>

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
  <title>ShopProfile</title>
</head>

<body>
  <?php include "./common/CommonNavigation.php" ?>
  <!-- shop profile -->
  <section class="flex">
    <!-- shop name -->
    <div class="w-[30%] h-[100vh] border-r-2 p-10">
      <!-- shop photo -->
      <div class="w-[300px] m-auto">
        <img class="w-full" src="../img/shopProfile.jpg" alt="" />
      </div>
      <br />
      <h1 class="m-auto font-bold w-fit text-[48px]">Yuzana Clothing</h1>
      <!-- followers -->
      <br />
      <div class="flex flex-row justify-center items-center">
        <div class="w-[50px]">
          <img class="w-full" src="../img/people.svg" alt="" />
        </div>
        <div class="text-[20px]">50 followers</div>
      </div>
      <!-- buttons -->
      <br />
      <div class="m-auto w-[300px] flex flex-row justify-between">
        <button class="w-[100px] h-[40px] bg-[#17594A] text-white rounded-[5px] flex justify-center items-center">
          message
        </button>
        <button class="w-[100px] h-[40px] bg-[#FF9F29] text-white rounded-[5px] flex justify-center items-center">
          follow
        </button>
      </div>
    </div>
    <!-- shop profile end -->

    <!-- products -->
    <div class="w-[70%] h-[100vh] p-10 flex flex-row justify-between">
      <!-- one product -->
      <div class="w-[180px] h-[250px] shadow-sm border-2">
        <div class="w-[180px]">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>
        <!-- one product end -->

        <div class="w-[180px] h-[250px] shadow-sm border-2">
          <div class="w-[180px]">
            <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
          </div>
        </div>

        <div class="w-[180px] h-[250px] shadow-sm border-2">
          <div class="w-[180px]">
            <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
          </div>
        </div>

        <div class="w-[180px] h-[250px] shadow-sm border-2">
          <div class="w-[180px]">
            <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
          </div>
        </div>

        <div class="w-[180px] h-[250px] shadow-sm border-2">
          <div class="w-[180px]">
            <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
          </div>
        </div>
      </div>
      <!-- products end -->
  </section>

  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>