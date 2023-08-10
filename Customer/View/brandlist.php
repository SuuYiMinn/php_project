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
  <?php include "./common/nav_without_search.php" ?>
  

  <section class=" w-full h-screen overflow-y-auto">
    <div class="w-11/12 mx-auto flex h-full flex-wrap">
      <?php include "../Controller/brandlistController.php";

      foreach ($brand_result as $brand) { ?>
       
        <!--brand list -->

        <a  href="./brandProfile.php?brand_id=<?=$brand["id"]?>" class="w-1/5 h-20 border-b-[1px] border-b-orange-500 py-2 flex justify-evenly items-center mx-2 ">

          <div class="w-4/12"><img src="<?= $brand["brand_photo"] ?>" alt=""></div>
          <p class="font-medium text-2xl"><?= $brand["brand_name"] ?> </p>

        </a>

      <?php } ?>

    </div>



    </div>
    </div>

  </section>


  <?php include "../View/common/commonFooter.php" ?>
</body>

</html>