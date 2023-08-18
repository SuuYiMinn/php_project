<?php if (!isset($_GET["productid"])) {
    header("Location: ./errorshow.php");
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/menu.js"></script>
    <script src="./resources/js/detailslide.js" defer></script>
    <title>Document</title>
</head>

<body class="relative w-full">
    <!--navgation and header session start-->

    <?php include "./common/nav_without_search.php" ?>

    <?php include "../Controller/detailController.php" ?>

    <?php if ($review_result_all != null) { ?>
        <div class="mt-8 lg:w-1/3 w-11/12 mx-auto">
            <p class="lg:text-xl text-lg font-medium text-orange-500 my-5 text-center"> Product_Reviews</p>
            <!--customer reviews-->
            <?php foreach ($review_result_all as $all_review) { ?>


                <div class="w-10/12 mx-2 text-gray-500 my-4 ">
                <div class="flex ">
                    <div class ="w-10 h-10 rounded-full bg-black mx-1" >
                        <img src="../..<?php $all_review["c_profile"] ?>" alt="">
                    </div>
                    <div>
                        <p class="text-lg font-medium "><?= $all_review["c_name"] ?></p>
                    </div>

                </div>

                    <div class=" ml-8   text-orange-500">

                        <p class="text-base  ">
                            <?= $all_review["product_review"] ?>
                        </p>

                    </div>
                </div>
            <?php } ?>
           


        </div>
    <?php } ?>



</body>