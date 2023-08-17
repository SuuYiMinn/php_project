<?php
include "../Controller/addAddressController.php";
?>

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
  <script src="./resources/js/address.js"></script>
  <title>Add Address</title>
</head>

<body>
<<<<<<< HEAD
  <!--navgation and header session start-->

  <?php include "./common/nav_without_search.php" ?>

=======
  <?php include "./common/nav_without_search.php." ?>
  
>>>>>>> 354ea645f4cadbce3ea7a2809ee8dc34441b9480

  <!-- body -->
  <form action="./checkout.php" method="post">
    <input name="order_data" value="<?=htmlentities($datastring)?>" type="text" class="hidden">
    <section class="flex flex-col items-center justify-around">
      <p class="font-medium lg:text-3xl text-2xl text-[#F86F03] my-10">Add Shiping Address</p>

      <div class="mb-8">
        <p class="lg:text-lg text-base opacity-50  text-orange-500">Full Name</p>
        <input name="full_name" class="rounded-md ring-1 ring-gray-300 lg:text-lg text-base  lg:w-80 w-64 lg:h-10 h-8" type="text" value="<?=$customer_name?>" />
      </div>

      <div class="mb-8">
        <p class="lg:text-lg text-base opacity-50  text-orange-500"> Address</p>
        <?php if ($accountresult[0]["c_address"] != null) { ?>
          <input name="address" class="rounded-md ring-1 ring-gray-300 lg:text-lg text-base lg:w-80 w-64 lg:h-10 h-8" type="text" value="<?=$accountresult[0]["c_address"]?>" />
        <?php } else { ?>
                  <input name="address" class="rounded-md ring-1 ring-gray-300 lg:text-lg text-base lg:w-80 w-64 lg:h-10 h-8" type="text" />
        <?php } ?>
      </div>

      <div class="mb-8">
        <p class="lg:text-lg text-base opacity-50  text-orange-500">Region</p>
        <select id="region" name="region" class="rounded-md ring-1 ring-gray-300 lg:text-lg text-base lg:w-80 w-64 lg:h-10 h-8" type="text">
          <?php foreach ($result as $region) { ?>
            <option value="<?= $region["id"] ?>"><?= $region["name"] ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="mb-8">
        <p class="lg:text-lg text-base opacity-50  text-orange-500"> City</p>
        <select id="township" name="township" class="rounded-md ring-1 ring-gray-300 lg:text-lg text-base lg:w-80 w-64 lg:h-10 h-8" type="text">
          <!-- townships -->
        </select>
      </div>

      <div class="mb-8">
        <p class="lg:text-lg text-base opacity-50  text-orange-500">Phone number</p>
        <?php if ($accountresult[0]["c_phone"] != null) { ?>
        <input name="phone_number" class="rounded-md ring-1 ring-gray-300 lg:text-lg text-base lg:w-80 w-64 lg:h-10 h-8" type="text" value="<?=$accountresult[0]["c_phone"]?>" />
        <?php } else { ?>
          <input name="phone_number" class="rounded-md ring-1 ring-gray-300 lg:text-lg text-base lg:w-80 w-64 lg:h-10 h-8" type="text" />
        <?php } ?>
      </div>

      <div class="mt-14">
        <button type="button" onclick="history.go(-1);" class="lg:w-40 w-32 h-10 bg-[#263A29] rounded-[10px]">
          <p class="text-white text-lg">Cancel</p>
        </button>
        <button type="submit" class="lg:w-40 w-32 h-10 bg-[#F86F03] rounded-[10px] ml-10">
          <p class="text-white text-lg">Safe</p>
        </button>
      </div>
      <br><br>
    </section>
  </form>



  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>