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
  <title>Add Address</title>
</head>

<body>
  <?php include "./common/CommonNavigation.php" ?>
  <br />

  <!-- body -->
  <section class="flex flex-col items-center justify-around">
    <p class="font-medium text-[48px] text-[#F86F03]">Add Shiping Address</p>
    <br />
    <div>
      <p class="text-[32px] opacity-[0.5]">Full Name</p>
      <input class="w-[445px] h-[75px] rounded-[10px] border-[2px] text-[32px]" type="text" />
    </div>
    <br />
    <div>
      <p class="text-[32px] opacity-[0.5]">Address</p>
      <input class="w-[445px] h-[75px] rounded-[10px] border-[2px] text-[32px]" type="text" />
    </div>
    <br />
    <div>
      <p class="text-[32px] opacity-[0.5]">Region</p>
      <input class="w-[445px] h-[75px] rounded-[10px] border-[2px] text-[32px]" type="text" />
    </div>
    <br />
    <div>
      <p class="text-[32px] opacity-[0.5]">City</p>
      <input class="w-[445px] h-[75px] rounded-[10px] border-[2px] text-[32px]" type="text" />
    </div>
    <br />
    <div>
      <p class="text-[32px] opacity-[0.5]">Phone number</p>
      <input class="w-[445px] h-[75px] rounded-[10px] border-[2px] text-[32px]" type="text" />
    </div>
    <br />
    <div>
      <button class="w-[345px] h-[75px] bg-[#263A29] rounded-[10px]">
        <p class="text-white text-[36px]">Cancel</p>
      </button>
      <button class="w-[345px] h-[75px] bg-[#F86F03] rounded-[10px] ml-10">
        <p class="text-white text-[36px]">Safe</p>
      </button>
    </div>
  </section>
  <br />

  <!-- review -->
  <div class="flex p-10">
    <div class="w-[100px] h-[100px] rounded-[50%] overflow-hidden mr-5">
      <img class="w-full h-full" src="./resources/img/photo/shopProfile.jpg" alt="" />
    </div>

    <div>
      <p class="text-[20px]">Richa Sharma</p>
      <p class="text-[20px] opacity-[0.5]">
        Oily yet dehydrated skin is something I have been struggling with when
        I switched to oil free moisturizers. Lately I am trying out different
        permutations and combinations to tackle the same.
      </p>
      <br />

      <div class="w-[200px] flex justify-around">
        <div class="w-[30px]">
          <img class="w-full" src="../img/like.svg" alt="" />
        </div>
        <div class="w-[30px]">
          <img class="w-full" src="../img/dislike.svg" alt="" />
        </div>
        <p class="font-semibold text-[20px] opacity-[0.5]">Reply</p>
      </div>
    </div>
  </div>
  <hr class="mx-10" />
  <!-- review end -->
  <!-- review -->
  <div class="flex p-10">
    <div class="w-[100px] h-[100px] rounded-[50%] overflow-hidden mr-5">
      <img class="w-full h-full" src="./resources/img/photo/shopProfile.jpg" alt="" />
    </div>

    <div>
      <p class="text-[20px]">Richa Sharma</p>
      <p class="text-[20px] opacity-[0.5]">
        Oily yet dehydrated skin is something I have been struggling with when
        I switched to oil free moisturizers. Lately I am trying out different
        permutations and combinations to tackle the same.
      </p>
      <br />

      <div class="w-[200px] flex justify-around">
        <div class="w-[30px]">
          <img class="w-full" src="../img/like.svg" alt="" />
        </div>
        <div class="w-[30px]">
          <img class="w-full" src="../img/dislike.svg" alt="" />
        </div>
        <p class="font-semibold text-[20px] opacity-[0.5]">Reply</p>
      </div>
    </div>
  </div>
  <hr class="mx-10" />
  <!-- review end -->
  <!-- noti -->
  <div class="flex p-10">
    <div class="w-[100px] h-[100px] rounded-[50%] overflow-hidden mr-5">
      <img class="w-full h-full" src="./resources/img/photo/shopProfile.jpg" alt="" />
    </div>

    <div>
      <p class="text-[24px] text-[#FF9F29]">Yuzana Clothing</p>
      <p class="text-[20px] opacity-[0.5]">
        Oily yet dehydrated skin is something I have been struggling with when
        I switched to oil free moisturizers. Lately I am trying out different
        permutations and combinations to tackle the same.
      </p>
    </div>
  </div>
  <hr class="mx-10" />
  <!-- noti end -->
  <!-- noti -->
  <div class="flex p-10">
    <div class="w-[100px] h-[100px] rounded-[50%] overflow-hidden mr-5">
      <img class="w-full h-full" src="./resources/img/photo/shopProfile.jpg" alt="" />
    </div>

    <div>
      <p class="text-[24px] text-[#FF9F29]">Yuzana Clothing</p>
      <p class="text-[20px] opacity-[0.5]">
        Oily yet dehydrated skin is something I have been struggling with when
        I switched to oil free moisturizers. Lately I am trying out different
        permutations and combinations to tackle the same.
      </p>
    </div>
  </div>
  <hr class="mx-10" />
  <!-- noti end -->

  <br />
  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>