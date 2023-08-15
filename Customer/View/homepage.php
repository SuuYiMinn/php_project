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

        <nav class="invisible lg:w-full lg:h-6 bg-[#FF9F29] flex justify-evenly text-white text-xs   lg:visible ">
            <div class="flex justify-between py-1">
                <phone class="flex mr-4">
                    <ion-icon name="call-outline" class="mx-2 py-[2px]"></ion-icon>
                    <p>09758895513</p>
                </phone>
                <message class="flex">
                    <ion-icon name="mail-open-outline" class="mx-2 py-[2px]"></ion-icon>
                    <a href="https://mail.google.com/mail/u/0/#inbox">godeal33@gmail.com</a>
            </div>
            </message>
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
    </div>
    <!--menu bar end-->
    <!--mobile menu bar start-->
    <div>
        <div class="lg:hidden inline sticky top-0 z-50 ">
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
        <!--mobile menu bar end-->

        <!--navgation and header session end-->




        <main class=" w-full lg:mt-0 mt-5" id="home_main_section">



            <!-- hero session-->

            <div class="lg:w-11/12 w-full flex justify-between overflow-x-hidden mx-auto relative  h-64 lg:h-80">
                <!-- category for desktop -->
                <div class="lg:w-1/6 h-full">

                    <div class="border-b-2 py-1 border-b-white lg:w-1/6 h-[13%] mb-2 bg-green-800 bg-opacity-20">
                        <p class="text-2xl  font-medium text-orange-500 text-center ">Category</p>
                    </div>
                    <div class="w-1/6 h-[87%] overflow-y-auto  bg-green-800 bg-opacity-20 lg:inline hidden">


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
                    <!-- second photo of hero section -->
                    <div class="w-full h-full relative hidden">
                        <img src="./resources/img/photo/phone.png" alt="" class="w-full h-full">
                        <div class="absolute left-2 top-10 bg-green-800 p-2 bg-opacity-20 rounded-lg">
                            <p class="text-orange-500 text-center text-4xl w-72 italic tracking-wide 
                    drop-shadow-xl shadow-green-700  font-serif"> Get applience for your home in reasonal price </p>
                        </div>
                    </div>
                    <!-- third photo of hero section -->
                    <div class="w-full h-full relative hidden">
                        <img src="./resources/img/photo/home_applience.jpg" alt="" class="w-full h-full">
                        <div class="absolute left-2 top-10 bg-green-800 p-2 bg-opacity-20 rounded-lg">
                            <p class="text-orange-500 text-center text-4xl w-72 italic tracking-wide 
                    drop-shadow-xl shadow-green-700  font-serif"> Get applience for your home in reasonal price </p>
                        </div>
                    </div>
                    <!-- forth photo of hero section -->
                    <div class="w-full h-full relative hidden">
                        <img src="./resources/img/photo/jpg" alt="" class="w-full h-full">
                        <div class="absolute left-2 top-10 bg-green-800 p-2 bg-opacity-20 rounded-lg">
                            <p class="text-orange-500 text-center text-4xl w-72 italic tracking-wide 
                    drop-shadow-xl shadow-green-700  font-serif"> Get applience for your home in reasonal price </p>
                        </div>
                    </div>

                </div>
            </div>

            <div id="dots"></div>





        </main>
        <!-- cathegory-->
        <div class="h-40 lg:hidden inline">
            <p class="text-xl font-medium mb-2 ">Cathegory</p>

            <div class="flex w-full h-32 overflow-x-auto">

                <?php include "../Controller/homeController.php"; ?>

                <?php foreach ($result as $category) { ?>
                    <a href="./categoryProduct.php?category_id=<?= $category["id"] ?>" class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative mt-1 cate_item" id="cate_<?= $category["id"] ?>">
                        <div class="w-12 h-12 rounded-full bg-black absolute top-1 left-6"></div>
                        <p class="text-center text-xs mt-14" name="catename"><?= $category["cat_name"] ?></p>
                    </a>
                <?php } ?>


            </div>


        </div>
        <!-- popular products -->
        <div class="w-full h-72 my-3">
            <p class="text-xl font-medium mb-4">Popular Products</p>
            <div class=" w-full h-60  flex justify-evenly">
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md  lg:inline hidden">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md lg:inline hidden">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md hidden lg:inline ">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>


            </div>

            <p class="float-right mt-1 text-orange-500 font-medium">See More..</p>
        </div>
        <!-- new arrivals -->
        <div class="w-full h-72 my-3">
            <p class="text-xl font-medium mb-4">New Arrivals</p>
            <div class=" w-full h-60  flex justify-evenly">
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md hidden  lg:inline ">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md lg:inline hidden">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md  lg:inline hidden">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>


            </div>
            <p class="float-right mt-1 text-orange-500 font-medium">See More..</p>
        </div>
        <!-- Just for you products-->
        <div class="w-full h-72 my-3">
            <p class="text-xl font-medium mb-4">Just for you</p>
            < <div class=" w-full h-60  flex justify-evenly">
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md  lg:inline hidden">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md lg:inline hidden">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>
                <!-- products card -->
                <div class="w-52 h-full bg-white drop-shadow-md  lg:inline hidden">
                    <!-- product image -->
                    <div class="w-full h-2/3 relative">
                    </div>
                    <!-- product information -->
                    <div class="flex justify-evenly h-1/3 bg-yellow-50">
                        <div>
                            <p class="font-medium text-center">Product Name</p>
                            <p class="text-xs text-center">Product Description</p>
                            <p class="text-orange-500 text-xs mt-3">20<span>%off</span></p>
                        </div>
                        <div>
                            <div class="flex mt-3 ml-3 text-orange-500">
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="w-3 h-3 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center text-orange-500">Ks <span>amount</span></p>
                            <p class="text-xs text-center line-through">Ks <span>amount</span></p>

                        </div>
                    </div>
                </div>


        </div>
        <p class="float-right mt-1 text-orange-500 font-medium">See More..</p>
    </div>

    </div>

    </div>

    <?php include "./common/commonFooter.php" ?>


</body>


</html>