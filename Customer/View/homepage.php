<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link rel="stylesheet" href="./resources/css/categoryProduct.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz@10..48&display=swap" rel="stylesheet">
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/homeSearch.js?id=<?= time() ?>" defer></script>
    <script src="./resources/js/menu.js" defer></script>
    <script src="./resources/js/herosection.js" defer></script>

    <title>Home</title>
</head>

<body class="relative">

    <!--navgation and header section start-->
    <div class="sticky top-0 z-50 ">

        <div class="lg:inline hidden">

            <nav class="lg:w-full lg:h-6 bg-[#FF9F29] flex justify-evenly text-white text-xs">
                <div class=" flex justify-between py-1">
                    <phone class="flex mr-4">
                        <ion-icon name="call-outline" class="mx-2 py-[2px]"></ion-icon>
                        <p>09758895513</p>
                    </phone>
                    <message class="flex">
                        <ion-icon name="mail-open-outline" class="mx-2 py-[2px]"></ion-icon>
                        <a href="https://mail.google.com/mail/u/0/#inbox">godeal33@gmail.com</a>

                    </message>
                    </div>
                    <?php
                    include "../Controller/accountController.php";

                    if ($accountresult != null) {

                        $customer_name = $accountresult[0]["c_name"];

                    ?>

                        <div>
                            <login class="py-1"><?= $customer_name ?></login>
                        </div> <?php } else { ?>

                        <div class="flex py-1">
                            <a href="./Registeration/login.php" class="mx-4">Login</a>
                            <a href="./Registeration/signup.php">Sign Up</a>
                        </div>

                    <?php } ?>
                
                 </nav>
        </div>
        <!--navigation bar end-->
        <!--menu bar start-->
        <div class="lg:inline hidden ">
            <menu class="w-full flex justify-evenly py-2 border lg:visible invisible  bg-white">
                <a href="./homepage.php" class="w-[100px] h-[30px]">
                    <img src="./resources/img/photo/Logo.png" alt="logo" class="pt-0">
                </a>

                <a href="./homepage.php">Home</a>
                <a href="./brandlist.php">Brand</a>
                <a href="./aboutUs.php">About Us</a>
                <a href="./aboutUs.php">Contact Us</a>
                <a href="./aboutUs.php">Help</a>
                <searchBar class="relative">
                    <input id="home_search" class="placeholder:italic placeholder:text-slate-400 block bg-white w-48 border border-orange-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-orange-500 focus:ring-orange-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" />

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

        <div class="lg:hidden inline ">
            <div class="w-full flex justify-evenly py-2 bg-white ">
                <div class="w-[70px] h-[20px]">
                    <img src="./resources/img/photo/logo.png" alt="logo" class="pt-0">
                </div>
                <searchBar class="relative">
                    <input id="home_search_mobile" class="placeholder:italic placeholder:text-slate-400 block
         bg-white w-48 border border-orange-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none
          focus:border-orange-500 focus:ring-orange-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" />


                    <ion-icon name="search" class="w-[17px] h-[17px] fill-[#FF9F29] absolute top-1 left-2"></ion-icon>
                </searchBar>
                <ion-icon name="notifications" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon>
                <!-- check user locked in or not to go cart page -->
                <?php if ($accountresult != null) { ?>
                    <a href="./cart.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon></a>

                <?php } else { ?>
                    <a href="./Registeration/signup.php"> <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon></a>
                <?php } ?>
                <!-- cart check done -->

                <!-- humbarger menu for mobile phone -->
                <ion-icon name="menu-outline" class="w-[20px] h-[20px] text-[#ff9f29]" id="home_menu"></ion-icon>
            </div>

            <div class="w-28 h-36 bg-black opacity-70 float-right  text-white text-center flex flex-col justify-evenly top-10 right-2 absolute lg:invisible visible " id="home_dropdown">
                <a href="./aboutUs.php">About Us</a>
                <a href="./brandlist.php">Brand</a>
                <?php if ($accountresult != null) { ?>
                    <a href="./userProfile.php"><?= $customer_name ?></a> <?php } else { ?>

                    <a href="./Registeration/signup.php">Sign Up </a>
                    <a href="./Registeration/login.php">Login</a> <?php } ?>

            </div>

        </div>
    </div>
    <!--mobile menu bar end-->

    <!--navgation and header session end-->




    <main class=" w-full mt-0 mb-5" id="home_main_section">



        <!-- hero session-->

        <div class="lg:w-11/12 w-full flex lg:flex-row flex-col justify-around overflow-x-hidden mx-auto relative mb-5 h-64 lg:h-80">
            <!-- category for desktop -->
            <div class="lg:w-[15%] lg:inline hidden">

                <div class="border-b-2 py-1 lg:w-full w-1/3 border-b-white  mb-2 bg-[#FF9F29] ">
                    <p class="text-2xl  font-medium text-white text-center  ">Category</p>
                </div>
                <div class="w-full h-[87%] overflow-y-auto ">


                    <?php include "../Controller/homeController.php" ?>
                    <?php foreach ($result as $category) { ?>

                        <a href="./categoryProduct.php?category_id=<?= $category["id"] ?>" class="w-full h-6 border-b-2 border-b-white text-orange-500">

                            <p class="text-center text-base font-medium py-1" name="catename"><?= $category["cat_name"] ?></p>
                        </a>

                    <?php } ?>

                </div>
            </div>

            <!-- Hero section images -->

            <div class="w-full lg:w-2/3 h-full relative flex overflow-x-hidden ">
                <!-- first photo of hero section -->
                <div class="w-full h-full relative inline">
                    <img src="./resources/img/photo/heroimg-6.jfif" alt="" class="w-full h-full hero_img">
                    <img src="./resources/img/photo/heroImg-2.jpg" alt="" class="w-full h-full  hero_img">
                    <img src="./resources/img/photo/heroImg-3.jpg" alt="" class="w-full h-full  hero_img">
                    <img src="./resources/img/photo/heroImg-1.webp" alt="" class="w-full h-full  hero_img">
                    <img src="./resources/img/photo/heroImg-5.jfif" alt="" class="w-full h-full  hero_img">


                </div>

                <div id="dots"></div>

            </div>
        </div>








        <!-- cathegory for mobile view-->
        <div class="h-32 lg:hidden inline  ml-2">
            <div class="flex w-full h-full">
                <p class="text-lg font-semibold mb-2 text-green-800 px-2 bg-orange-[#FF9F29] my-1">Cathegory</p>

                <div class="flex w-full overflow-x-auto">

                    <?php include "../Controller/homeController.php"; ?>

                    <?php foreach ($result as $category) { ?>
                        <a href="./categoryProduct.php?category_id=<?= $category["id"] ?>" class=" h-8 py-1 my-1 mx-1 rounded-lg drop-shadow bg-gray-100 cate_item" id="cate_<?= $category["id"] ?>">

                            <p class="text-center text-sm" name="catename"><?= $category["cat_name"] ?></p>
                        </a>
                    <?php } ?>


                </div>
            </div>


        </div>
        <!-- popular products -->
        <div class="w-full my-4">
            <?php include "../Controller/homeProduct_Controller.php" ?>
            <p class="text-2xl font-medium mb-4 text-orange-500 ml-6 drop-shadow-md shadow-green-800 text-center">Popular Products</p>
            <div class=" w-full flex flex-wrap justify-evenly">
                <!-- products card -->
                <?php foreach ($popular_result as $popular_product) {


                    $rating = $popular_product["product_rating"];
                    if (($popular_product["p_discount"]) != null) {

                        $price = $popular_product["p_sell_price"] - ((($popular_product["p_discount"]) / 100)  * ($popular_product["p_sell_price"]));
                    } else $price = $popular_product["p_sell_price"];
                ?>


                    <!-- products card -->
                    <a href="./detailpage.php?productid=<?= $popular_product["id"] ?>" class="lg:w-60 w-40 lg:h-60  h-40 bg-white drop-shadow-md mt-2" id="product_<?= $popular_product["id"] ?>">
                        <!-- product image -->
                        <div class="w-full lg:h-2/3 h-3/5 relative">
                            <img src="../..<?= $popular_product["p_photo_1"] ?>" alt="" class="w-full h-full">
                        </div>
                        <!-- product information -->
                        <div class="flex justify-evenly lg:h-1/3 h-2/5 bg-yellow-50">
                            <div>
                                <p class="text-center lg:text-[13px] font-semibold text-[11px]"><?= $popular_product["p_title"] ?></p>
                                <p class=" lg:block text-xs text-center hidden "><?= $popular_product["p_des"] ?></p>
                                <?php if (($popular_product["p_discount"]) != null) { ?> <p class="text-orange-500 lg:text-xs text-[9px] mt-2 ml-2"><?= $popular_product["p_discount"] ?><span>%off</span></p><?php } ?>
                            </div>
                            <div>
                                <div class="flex mt-1 ml-3 text-orange-500">
                                    <?php if ($popular_product["product_rating"] != null) {

                                        for ($i = 0; $i < $popular_product["product_rating"]; $i++) { ?>

                                            <ion-icon name="star" class="lg:w-3 w-2 lg:h-3 h-2 mr-[2px]"></ion-icon>
                                    <?php }
                                    } ?>

                                </div>
                                <p class=" text-center lg:text-[13px] text-[11px] font-semibold text-orange-500 mt-1 w-16 ml-1">Ks <?= $price ?></p>
                                <?php if (($popular_product["p_discount"]) != null) { ?>
                                    <p class="lg:text-xs text-center line-through text-[9px]">Ks <?= $popular_product["p_sell_price"] ?></p> <?php } ?>

                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <a href="./popularproduct.php" class="float-right mt-1 text-orange-500 text-sm lg:mr-10 mr-2 ">See More..</a>
        </div>



        <!-- new arrivals -->
        <div class="w-full my-4 ">
            <p class="text-xl font-medium mb-2 ml-5 text-orange-500">New Arrivals</p>
            <div class=" w-full  flex flex-wrap justify-evenly">
                <!-- products card -->
                <?php foreach ($newArrival_result as $newArrival_product) {



                    # code...
                    $rating = $newArrival_product["product_rating"];
                    if (($newArrival_product["p_discount"]) != null) {

                        $price = $newArrival_product["p_sell_price"] - ((($newArrival_product["p_discount"]) / 100)  * ($newArrival_product["p_sell_price"]));
                    } else $price = $newArrival_product["p_sell_price"];
                ?>


                    <!-- products card -->
                    <a href="./detailpage.php?productid=<?= $newArrival_product["id"] ?>" class="lg:w-60 w-36 lg:h-60  h-40 bg-white drop-shadow-md mt-2" id="product_<?= $newArrival_product["id"] ?>">
                        <!-- product image -->
                        <div class="w-full lg:h-2/3 h-2/3 relative">
                            <img src="../..<?= $newArrival_product["p_photo_1"] ?>" alt="" class="w-full h-full">
                        </div>
                        <!-- product information -->
                        <div class="flex justify-evenly lg:h-1/3 h-2/5 bg-yellow-50">
                            <div>
                                <p class="text-center lg:text-[13px] font-semibold text-[11px]"><?= $newArrival_product["p_title"] ?></p>
                                <p class=" lg:block text-xs text-center hidden "><?= $newArrival_product["p_des"] ?></p>
                                <?php if (($newArrival_product["p_discount"]) != null) { ?> <p class="text-orange-500 lg:text-xs text-[9px] mt-2 ml-2"><?= $newArrival_product["p_discount"] ?><span>%off</span></p><?php } ?>
                            </div>
                            <div>
                                <div class="flex mt-1 ml-3 text-orange-500">
                                    <?php if ($newArrival_product["product_rating"] != null) {

                                        for ($i = 0; $i < $newArrival_product["product_rating"]; $i++) { ?>

                                            <ion-icon name="star" class="lg:w-3 w-2 lg:h-3 h-2 mr-[2px]"></ion-icon>
                                    <?php }
                                    } ?>

                                </div>
                                <p class=" text-center lg:text-[13px] text-[11px] font-semibold text-orange-500 mt-1 w-16 ml-1">Ks <?= $price ?></p>
                                <?php if (($newArrival_product["p_discount"]) != null) { ?>
                                    <p class="lg:text-xs text-center line-through text-[9px]">Ks <?= $newArrival_product["p_sell_price"] ?></p> <?php } ?>

                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <a href="./newArrival.php" class="float-right mt-1 text-orange-500 text-sm lg:mr-10 mr-2 ">See More..</a>
        </div>
        <!-- Just for you products-->
        <div class="w-full mt-7">
            <p class="text-xl font-medium my-4 ml-4 text-orange-500">Just for you</p>
            <div class=" w-full flex flex-wrap justify-evenly">
                <!-- products card -->
                <?php foreach ($justForU_result as $justForU_product) {



                    # code...
                    $rating = $justForU_product["product_rating"];
                    if (($justForU_product["p_discount"]) != null) {

                        $price = $justForU_product["p_sell_price"] - ((($justForU_product["p_discount"]) / 100)  * ($justForU_product["p_sell_price"]));
                    } else $price = $justForU_product["p_sell_price"];
                ?>


                    <!-- products card -->
                    <a href="./detailpage.php?productid=<?= $justForU_product["id"] ?>" class="lg:w-60 w-40 lg:h-60  h-40 bg-white drop-shadow-md mt-2" id="product_<?= $justForU_product["id"] ?>">
                        <!-- product image -->
                        <div class="w-full lg:h-2/3 h-3/5 relative">
                            <img src="../..<?= $justForU_product["p_photo_1"] ?>" alt="" class="w-full h-full">
                        </div>
                        <!-- product information -->
                        <div class="flex justify-evenly lg:h-1/3 h-2/5 bg-yellow-50">
                            <div>
                                <p class="text-center lg:text-[13px] font-semibold text-[11px]"><?= $justForU_product["p_title"] ?></p>
                                <p class=" lg:block text-xs text-center hidden "><?= $justForU_product["p_des"] ?></p>
                                <?php if (($justForU_product["p_discount"]) != null) { ?> <p class="text-orange-500 lg:text-xs text-[9px] mt-2 ml-2"><?= $justForU_product["p_discount"] ?><span>%off</span></p><?php } ?>
                            </div>
                            <div>
                                <div class="flex mt-1 ml-3 text-orange-500">
                                    <?php if ($justForU_product["product_rating"] != null) {

                                        for ($i = 0; $i < $justForU_product["product_rating"]; $i++) { ?>

                                            <ion-icon name="star" class="lg:w-3 w-2 lg:h-3 h-2 mr-[2px]"></ion-icon>
                                    <?php }
                                    } ?>

                                </div>
                                <p class=" text-center lg:text-[13px] text-[11px] font-semibold text-orange-500 mt-1 w-16 ml-1">Ks <?= $price ?></p>
                                <?php if (($justForU_product["p_discount"]) != null) { ?>
                                    <p class="lg:text-xs text-center line-through text-[9px]">Ks <?= $justForU_product["p_sell_price"] ?></p> <?php } ?>

                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div> 
            <a href="./justforu.php" class="float-right mt-1 text-orange-500 text-sm lg:mr-10 mr-2">See More..</a>
        </div>

        </div>

        </div>
    </main>

    <?php include "./common/commonFooter.php" ?>


</body>


</html>