<?php

include "../Controller/orderController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />

  <title>ThankYou</title>
</head>

<body>
  <?php include "./common/CommonNavigation.php" ?>
  <br />

  <!-- body -->
  <section class="w-full h-[70vh] flex flex-col items-center justify-around">
    <p class="text-[64px] max-sm:text-[32px] text-[#F86F03]">Thank You</p>
    <p class="text-[64px] max-sm:text-[32px] font-['Pacifico']">
      For shopping with us
    </p>
    <a href="./homepage.php">
      <button class="w-[480px] h-[130px] max-sm:w-[175px] max-sm:h-[40px] rounded-[10px] bg-[#1A4D2E]">
        <p class="text-white text-[48px] max-sm:text-[20px] font-semibold">
          Shop more
        </p>
      </button>
    </a>
  </section>
  <br />

  <?php include "../View/common/commonFooter.php" ?>
  </div>
</body>

</html>