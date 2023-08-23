<?php if (!isset($_GET["category_id"])) {
    header("Location: ./errorshow.php");
} ?>




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
    <script src="./resources/js/category.js?id=<?= time() ?>" defer></script>
    <script src="./resources/js/menu.js?id=<?= time() ?>" defer></script>

    <title>CategoryProducts</title>
</head>

<body class="relative">
    <!--navgation and header session start-->


    <navigation class="sticky z-50 top-0">

        <nav class=" invisible lg:w-full lg:h-6 bg-[#FF9F29] flex justify-evenly text-white text-xs  lg:visible ">
            <div class="flex justify-between py-1">
                <phone class="flex mr-4">
                    <ion-icon name="call-outline" class="mx-2 py-[2px]"></ion-icon>
                    <p>09758895513</p>
                </phone>
                <message class="flex">
                    <ion-icon name="mail-open-outline" class="mx-2 py-[2px]"></ion-icon>
                    <p>godeal33@gmail.com</p>
            </div>
            </message>

            <!-- checking user is logined or not-->
            <?php
            include "../Controller/accountController.php";

            if ($accountresult != null) {

                $customer_name = $accountresult[0]["c_name"];

            ?>

                <div>
                    <login class="py-1"><?= $customer_name ?></login>
                </div> <?php } else { ?>

                <div class="flex py-1">
                    <login class="mx-4">Login</login>
                    <login>Sign Up</login>
                </div>

            <?php } ?>

            <!-- checking user is logined or not finish-->
        </nav>
        <!--navigation bar end-->
        <!--menu bar start-->
        <div class="lg:inline hidden">
            <menu class="w-full flex justify-evenly py-2 border lg:visible invisible bg-white"  >
                <a href="./homepage.php" class="w-[100px] h-[30px]">
                    <img src="./resources/img/photo/Logo.png" alt="logo" class="pt-0">
                </a>

                <a href="./homepage.php">Home</a>
                <a href="./brandlist.php">Brand</a>
                <a href="./aboutUs.php">About Us</a>
                <a href="./aboutUs.php">Contact Us</a>
                <a href="./aboutUs.php">Help</a>

                <searchBar class="relative">
                    <input class="placeholder:italic placeholder:text-slate-400 block
                 bg-white w-48 border border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-sky-500
                  focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" id="cate_search"  />

                    <ion-icon name="search" class="w-[17px] h-[17px] fill-[#FF9F29] absolute top-1 left-2"></ion-icon>
                </searchBar>
                <ion-icon name="notifications" class="w-[23px] h-[23px] fill-[#ff9f29]"></ion-icon>
                <?php if ($accountresult != null) { ?>
                    <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon></a>

                <?php } else { ?>
                    <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon></a>
                <?php } ?>
            </menu>
        </div>
        <!--menu bar end-->
        <!--mobile menu bar start-->
        <div class="w-full flex justify-evenly py-2 lg:invisible sm:visible absolute top-0 bg-white">
            <div class="w-[70px] h-[20px]">
                <img src="./resources/img/photo/logo.png" alt="logo" class="pt-0">
            </div>
            <searchBar class="relative">
                <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-48 border border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none
                 focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" id="cate_search_mobile" />

                <ion-icon name="search" class="w-[17px] h-[17px] fill-[#FF9F29] absolute top-1 left-2"></ion-icon>
            </searchBar>
            <ion-icon name="notifications" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon>
            <?php if ($accountresult != null) { ?>
                <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon></a>

            <?php } else { ?>
                <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon></a>
            <?php } ?>
            <ion-icon name="menu-outline" class="w-[20px] h-[20px] text-[#ff9f29]" id="cate_menu"></ion-icon>
        </div>
        <div class="w-28 h-36 bg-black opacity-100 float-right  text-white text-center flex flex-col justify-evenly absolute top-10 right-2 lg:invisible sm:visible" id="cate_dropdown">
            <a href="./aboutUs.php">About Us</a>
            <a href="./brandlist.php">Brand</a>
            <?php if ($accountresult != null) { ?>
                <a href="./userProfile.php"><?= $customer_name ?></a> <?php } else { ?>

                <a href="./Registeration/signup.php">Sign Up </a>
                <a href="./Registeration/login.php">Login</a> <?php } ?>

        </div>


        <!--mobile menu bar end-->
    </navigation>

    <!--navgation and header session end-->



    <!-- cathegory-->
    <div class="flex  ml-2 mb-2 mt-2  py-2 overflow-x-auto w-full">

        <?php include "../Controller/home_to_subController.php" ?>


        <?php foreach ($result as $sub_category) { ?>

            <div class="w-18 py-2 rounded-xl drop-shadow bg-gray-100 relative mt-1 cate_item" id="<?= $sub_category["id"] ?>">
                <p class="text-center text-base font-medium" name="catename"><?= $sub_category["sub_category_name"] ?></p>
            </div>
        <?php } ?>
    </div>
    <div class="w-full">
        <div class="lg:w-11/12 w-full  flex justify-evenly flex-wrap mx-auto filter_sub_category mb-4">

            <?php
            include "../Controller/home_to_subProductController.php";

            foreach ($productresult as $products) {
                # code...
                $rating = $products["product_rating"];
                if (($products["p_discount"]) != null) {

                    $price = $products["p_sell_price"] - ((($products["p_discount"]) / 100)  * ($products["p_sell_price"]));
                } else $price = $products["p_sell_price"];
            ?>


                <!-- products card -->
                <a href="./detailpage.php?productid=<?= $products["id"] ?>" class="lg:w-56 w-40 lg:h-64 h-48 bg-white drop-shadow-md mt-2" id="product_<?= $products["id"] ?>">
                    <!-- product image -->
                    <div class="w-full lg:h-2/3 h-3/5 relative">
                        <img src="../..<?= $products["p_photo_1"] ?>" alt="" class="w-full h-full">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly lg:h-1/3 h-2/5 bg-yellow-50">
                        <div>
                            <p class="text-center lg:text-[13px] font-semibold text-[11px]"><?= $products["p_title"] ?></p>
                            <p class=" lg:block text-xs text-center hidden "><?= $products["p_des"] ?></p>
                            <?php if (($products["p_discount"]) != null) { ?> <p class="text-orange-500 lg:text-xs text-[9px] mt-2 ml-2"><?= $products["p_discount"] ?><span>%off</span></p><?php } ?>
                        </div>
                        <div>
                            <div class="flex mt-1 ml-3 text-orange-500">
                                <?php if ($products["product_rating"] != null) {

                                    for ($i = 0; $i < $products["product_rating"]; $i++) { ?>

                                        <ion-icon name="star" class="lg:w-3 w-2 lg:h-3 h-2 mr-[2px]"></ion-icon>
                                <?php }
                                } ?>

                            </div>
                            <p class=" text-center lg:text-[13px] text-[11px] font-semibold text-orange-500 mt-1 w-16 ml-1">Ks <?= $price ?></p>
                            <?php if (($products["p_discount"]) != null) { ?>
                                <p class="lg:text-xs text-center line-through text-[9px]">Ks <?= $products["p_sell_price"] ?></p> <?php } ?>

                        </div>
                    </div>
                </a>
            <?php } ?>


        </div>
    </div>

    <!-- pagentation -->

    <ul class="flex justify-center mb-8">
        <li class="ml-1 border-1 border-orange-500  
        <?php if($page <= 1 ) { echo "disabled";}?>">

        <a href="?page=<?= $page-1?>& category_id=<?= $cate_id ?> ">previous</a></li>

        <?php  for ($i=1; $i <= $page_list ; $i++) { ?>
                <li  class="ml-1 border-1 border-orange-500"> <a href="?page=<?= $i ?>& category_id=<?= $cate_id ?> "><?= $i ?></a></li>
                
<?php } ?>
        <li class="ml-1 border-1 border-orange-500 
        <?php if($page >= $page_list ) { echo "disabled";}?> ">

        <a href="?page=<?= $page-1?>& category_id=<?= $cate_id ?> ">next</a></li>
    </ul>

    <?php include "./common/commonFooter.php" ?>



</body>

</html>