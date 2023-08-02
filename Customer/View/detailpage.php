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
    <title>Document</title>
</head>

<body>
    <?php
    include "./common/CommonNavigation.php"
    ?>
    <div class="flex lg:flex-row sm:flex-col lg:mx-28 sm:mx-10 my-5 overflow-x-hidden">
        <!--detail products-->
        <div class="mx-10">
            <!--detail products image session-->
            <div class="w-96 h-80 bg-gray-200">

            </div>
            <div class="flex justify-between mt-4">
                <div>
                    <div class="flex text-orange-500">
                        <ion-icon name="heart-outline" class="w-7 h-7 mr-2"></ion-icon>
                        <ion-icon name="card-outline" class="w-7 h-7 mr-2"></ion-icon>
                        <ion-icon name="chatbubble-ellipses-outline" class="w-6 h-6 mr-1"></ion-icon>
                    </div>
                    <div class="flex mt-3  text-orange-500">
                        <ion-icon name="star-outline" class="w-5 h-5 mr-[2px]"></ion-icon>
                        <ion-icon name="star-outline" class="w-5 h-5 mr-[2px]"></ion-icon>
                        <ion-icon name="star-outline" class="w-5 h-5 mr-[2px]"></ion-icon>
                        <ion-icon name="star-outline" class="w-5 h-5 mr-[2px]"></ion-icon>
                        <ion-icon name="star-outline" class="w-5 h-5 mr-[2px]"></ion-icon>

                    </div>

                </div>

                <!-- product prices-->
                <div>
                    <p class="text-orange-500 text-lg ">Ks <span>Amount</span></p>
                    <!-- promotion  prices-->
                    <p class="opacity-50"><span class="line-through">Ks </span>
                        <span class="line-through">Amount</span>
                        <span class="text-orange-500"> 20%off</span>
                    </p>


                </div>

            </div>


        </div>
        <!-- product description-->
        <div class="w-1/2">
            <p class="text-2xl font-medium my-2"> lenovo V14 Gen3 IAP</p>
            <p>i5, 1235U, 8GB, SSD512GB </p>
            <div class="w-full h-32 mt-2 ring-1">

            </div>
            <div class="flex justify-evenly mt-5">
                <button class="w-1/3 h-8 bg-orange-500 rounded-md text-white">Buy Now</button>
                <button class="w-1/3 h-8 bg-green-800 rounded-md text-white">Add to Cart</button>
            </div>
            <!--review sessions-->
            <div class="mt-5 w-full">
                <p class="text-lg mb-2">Reviews</p>
                <!--customer reviews-->
                <div class="flex text-gray-500">
                    <!-- customer photo-->
                    <div class="w-8 h-8 mr-4 rounded-full bg-gray-600 ">
                    </div>
                    <div class="w-4/5">
                        <p class="text-sm">Customer Name</p>
                        <div class="flex mt-1  text-orange-500">
                            <ion-icon name="star-outline" class="w-3 h-3 mr-[2px]"></ion-icon>
                            <ion-icon name="star-outline" class="w-3 h-3 mr-[2px]"></ion-icon>
                            <ion-icon name="star-outline" class="w-3 h-3 mr-[2px]"></ion-icon>
                            <ion-icon name="star-outline" class="w-3 h-3 mr-[2px]"></ion-icon>
                            <ion-icon name="star-outline" class="w-3 h-3 mr-[2px]"></ion-icon>
                        </div>
                        <p class="text-xs mt-2">Lorem ipsum, dolor sit amet consectetur adipisicingiam ut amet expedita 
                        Lorem ipsum, dolor sit amet consectetur adipisicingiam ut amet expedita
                        </p>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--you may also like session-->
    <div class="ml-10">
        <p class="text-xl">You may also like</p>
        <?php include "./common/commonProductlist.php" ?>
    </div>

</body>

</html>