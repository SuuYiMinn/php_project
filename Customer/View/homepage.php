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
    <script src="./resources/js/menu.js"></script>
    <title>Home</title>
</head>

<body>
   
    <?php include "./common/CommonNavigation.php" ?>
    <div class="overflow-x-hidden mx-5">
        <!-- hero session-->

        <div class="w-full lg:h-72 sm:h-56 bg-orange-400 mb-2">


        </div>
        <!-- cathegory-->           
        <div class="wh-32 ">
            <p class="text-xl font-medium mb-2 ">Cathegory</p>

            <div class="flex w-full overflow-x-auto">
                <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative cate_item">
                    <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
                    <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

                </div>

                <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative cate_item">
                    <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
                    <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

                </div>
                <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative cate_item">
                    <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
                    <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

                </div>
                <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative cate_item">
                    <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
                    <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

                </div>
                <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative cate_item">
                    <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
                    <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

                </div>
                <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative cate_item">
                    <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
                    <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

                </div>
                <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative cate_item">
                    <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
                    <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

                </div>
                <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative cate_item">
                    <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
                    <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

                </div>
                <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative cate_item">
                    <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
                    <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

                </div>
                <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative cate_item">
                    <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
                    <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

                </div>
                <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative cate_item">
                    <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
                    <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

                </div>
                <div class="w-24 h-24 rounded-xl drop-shadow bg-gray-100 relative cate_item">
                    <div class="w-14 h-14 rounded-full bg-black absolute top-1 left-5"></div>
                    <p class="text-center text-xs absolute bottom-1">Health and Beauty</p>

                </div>
         
                
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
                <div class="w-52 h-full bg-white drop-shadow-md  lg:inline sm:hidden">
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
                <div class="w-52 h-full bg-white drop-shadow-md lg:inline sm:hidden">
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
                <div class="w-52 h-full bg-white drop-shadow-md  lg:inline sm:hidden">
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
                <div class="w-52 h-full bg-white drop-shadow-md  lg:inline sm:hidden">
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
                <div class="w-52 h-full bg-white drop-shadow-md lg:inline sm:hidden">
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
                <div class="w-52 h-full bg-white drop-shadow-md  lg:inline sm:hidden">
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
                <div class="w-52 h-full bg-white drop-shadow-md  lg:inline sm:hidden">
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
                <div class="w-52 h-full bg-white drop-shadow-md lg:inline sm:hidden">
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
                <div class="w-52 h-full bg-white drop-shadow-md  lg:inline sm:hidden">
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

</body>

</html>