<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../dist/output.css" rel="stylesheet" />
  <title>ShopProfile</title>
</head>

<body>
  <!-- nav -->
  <nav class="w-full h-[100px] bg-[#FFB355]"></nav>

  <!-- body -->
  <section class="p-5">
    <!-- shop name -->
    <div class="w-full flex justify-center">
      <!-- shop photo -->
      <div class="w-[120px]">
        <img class="w-full" src="./resources/img/photo/shopProfile.jpg" alt="" />
      </div>

      <div class="flex flex-col justify-around ml-10">
        <h1 class="font-medium text-[15px]">Yuzana Clothing</h1>
        <!-- followers -->

        <div class="flex justify-center items-center">
          <div class="w-[25px]">
            <img class="w-full" src="./resources/img/people.svg" alt="" />
          </div>
          <div class="text-[10px] font-medium">50 followers</div>
        </div>
        <!-- buttons -->

        <div class="flex flex-row justify-between">
          <button class="w-[60px] h-[20px] bg-[#17594A] text-white rounded-[5px] flex justify-center items-center text-[10px]">
            message
          </button>
          <button class="ml-3 w-[60px] h-[20px] text-[10px] bg-[#FF9F29] text-white rounded-[5px] flex justify-center items-center">
            follow
          </button>
        </div>
      </div>
    </div>
    <hr class="w-full border-[#FF9F29] my-5" />
    <!-- shop profile end -->
    <div class="flex justify-between flex-wrap">
      <!-- one product -->
      <div class="w-[180px] h-[250px] shadow-sm border-2">
        <div class="w-[180px]">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>
      </div>
      <!-- one product end -->
      <!-- one product -->
      <div class="w-[180px] h-[250px] shadow-sm border-2">
        <div class="w-[180px]">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>
      </div>
      <!-- one product end -->
      <!-- one product -->
      <div class="w-[180px] h-[250px] shadow-sm border-2">
        <div class="w-[180px]">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>
      </div>
      <!-- one product end -->
      <!-- one product -->
      <div class="w-[180px] h-[250px] shadow-sm border-2">
        <div class="w-[180px]">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>
      </div>
      <!-- one product end -->
      <!-- one product -->
      <div class="w-[180px] h-[250px] shadow-sm border-2">
        <div class="w-[180px]">
          <img class="w-full" src="./resources/img/photo/product.jpg" alt="" />
        </div>
      </div>
      <!-- one product end -->
    </div>
  </section>

  <?php include "../View/common/commonFooterMobile.php" ?>

</body>

</html>