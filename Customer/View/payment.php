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

  <?php include "./common/nav_without_search.php" ?>


  <!-- body -->

  <section class="w-full h-screen flex flex-col justify-around items-center">
    <p class="font-medium text-2xl mt-10">Choose Payment Method</p>

      <form action="../Controller/orderController.php" method="post">
    <input type="submit" name ="cod" value="Cash On Delivery" class="text-lg my-10">
    </form>
    <p class="text-lg">OR</p>

    <a href="./payAcc.php" class="lg:w-56 lg:my-10 my-6 w-40">
      <img class="w-full" src="./resources/img/photo/kpay.png" alt="" />
    </a>
   
  </section>
  </form>

  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>