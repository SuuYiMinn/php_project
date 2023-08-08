<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link rel="stylesheet" href="./resources/css/categoryProduct.css">
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/lib/jquery/jquery.js"></script>
    <script src="./resources/js/homepage.js" defer></script>
    <script src="./resources/js/menu.js" defer></script>
    <title>Home</title>
</head>

<body>

       <!--navgation and header session start-->

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


        <div class="flex py-1">
            <login class="mx-4">Login</login>
            <login>Sign Up</login>
        </div>
    </nav>
    <!--navigation bar end-->
    <!--menu bar start-->
    <div class="lg:inline hidden">
    <menu class="w-full flex justify-evenly py-2 border lg:visible invisible">
        <div class="w-[100px] h-[30px]">
            <img src="../resources/img/photo/Logo.png" alt="logo" class="pt-0">
        </div>

        <p>Home</p>
        <p>Shop</p>
        <p>About Us</p>
        <p>Contact Us</p>
        <p>Help</p>
        <searchBar class="relative">
            <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-48 border border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" />

            <ion-icon name="search" class="w-[17px] h-[17px] fill-[#FF9F29] absolute top-1 left-2"></ion-icon>
        </searchBar>
        <ion-icon name="notifications" class="w-[23px] h-[23px] fill-[#ff9f29]"></ion-icon>
        <ion-icon name="cart" class="w-[23px] h-[23px] fill-[#ff9f29]"></ion-icon>

    </menu>
    </div>
    <!--menu bar end-->
    <!--mobile menu bar start-->
    <div class="w-full flex justify-evenly py-2 lg:invisible sm:visible absolute top-0">
        <div class="w-[70px] h-[20px]">
            <img src="../resources/img/photo/logo.png" alt="logo" class="pt-0">
        </div>
        <searchBar class="relative">
            <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-48 border border-slate-300 rounded-md py-[2px] pl-8 pr-3 focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search" />

            <ion-icon name="search" class="w-[17px] h-[17px] fill-[#FF9F29] absolute top-1 left-2"></ion-icon>
        </searchBar>
        <ion-icon name="notifications" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon>
        <ion-icon name="cart" class="w-[20px] h-[20px] fill-[#ff9f29]"></ion-icon>
        <ion-icon name="menu-outline" class="w-[20px] h-[20px] text-[#ff9f29]" id="menu"></ion-icon>
    </div>

    <div class="w-28 h-36 bg-black opacity-70 float-right  text-white text-center flex flex-col justify-evenly absolute top-10 right-2 lg:invisible sm:visible" id="dropdown_menu">
        <p>About Us</p>
        <p>Brand</p>
        <p>User Profile</p>

    </div>
    <!--mobile menu bar end-->

      <!--navgation and header session end-->


    <div class="overflow-x-hidden mx-5 lg:mt-0 mt-5">
        <!-- hero session-->

        <div class="w-full lg:h-72 h-56 bg-green-700 mb-2">


        </div>
        <!-- cathegory-->
        <div class="h-40">
            <p class="text-xl font-medium mb-2 ">Cathegory</p>

            <div class="flex w-full h-32 overflow-x-auto">

                <?php include "../Controller/homeController.php"; ?>
                
                <?php foreach ($result as $category) { ?>
                    <a href="./categoryProduct.php?category_id=<?= $category["id"] ?>" 
                    class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative mt-1 cate_item" id="cate_<?= $category["id"] ?>">
                        <div class="w-12 h-12 rounded-full bg-black absolute top-1 left-6"></div>
                        <p class="text-center text-xs mt-14" name="catename"><?= $category["cat_name"]?></p>
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
    <?php include "./common/commonFooterMobile.php" ?>

</body>


</html>