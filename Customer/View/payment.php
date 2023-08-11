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
  <script src="./resources/js/payment.js"></script>
  <title>Payment</title>
</head>

<body>
  <?php include "./common/CommonNavigation.php" ?>
  <br />

  <!-- body -->
  <form action="./thankyou.php" method="post">
    <section class="w-full h-screen flex flex-col justify-around items-center">
      <input name="full_name" type="text" value="<?= $_POST["full_name"] ?>" class="hidden">
      <input name="address" type="text" value="<?= $_POST["address"] ?>" class="hidden">
      <input name="region" type="text" value="<?= $_POST["region"] ?>" class="hidden">
      <input name="phone_number" type="text" value="<?= $_POST["phone_number"] ?>" class="hidden">
      <input name="total" type="number" value="11500" class="hidden">
      <p class="font-medium text-2xl mt-10">Choose Payment Method</p>

      <label for="COD">
        <p id="CODlabel" class="text-lg my-10">Cash on delivery</p>
      </label>
      <input type="checkbox" name="COD" id="COD" value="0" class="hidden" >


      <p class="text-lg">OR</p>

      <div class="lg:w-56 lg:my-10 my-6 w-40">
        <img class="w-full" src="./resources/img/photo/kpay.png" alt="" />
      </div>


      <button class="bg-orange-500 rounded-md">
        <p class=" px-10 py-1 text-white text-lg font-semibold">order confirm</p>
      </button>
      <br>
    </section>
  </form>

  <?php include "../View/common/commonFooter.php" ?>
  <?php include "../View/common/commonFooterMobile.php" ?>
</body>

</html>