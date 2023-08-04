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

    
    <div class="flex lg:flex-row flex-col lg:mx-5 mx-0 my-5 overflow-x-hidden">

     <?php include"../Controller/detailController.php";

     if(($productDetail_result[0]["p_discount"])!=null){

        $price = ($productDetail_result[0]["p_sell_price"])-((($productDetail_result[0]["p_discount"])/100)*($productDetail_result[0]["p_sell_price"]));

     }else{

        $price = ($productDetail_result[0]["p_sell_price"]);

     }

          
            ?>
        <!--detail products-->
        <div class="lg:mx-10 mx-4">
            <!--detail products image session-->
            <div class="lg:w-96 lg:h-80 w-full h-52 bg-gray-200">

            </div>
            <div class="flex justify-between lg:mt-4 mt-2">
                <div>
                    <div class="flex text-orange-500">
                        <ion-icon name="heart-outline" class="lg:w-7 w-4 lg:h-7 h-4 mr-1"></ion-icon>
                        <ion-icon name="card-outline" class="lg:w-7 w-4 lg:h-7 h-4 mr-1"></ion-icon>
                        <ion-icon name="chatbubble-ellipses-outline" class="lg:w-6 w-4 lg:h-6 h-4 mr-1"></ion-icon>
                    </div>
                    <div class="flex mt-3  text-orange-500">
                        <ion-icon name="star-outline" class="lg:w-5 w-3 lg:h-5 h-3 mr-[2px]"></ion-icon>
                        <ion-icon name="star-outline" class="lg:w-5 w-3 lg:h-5 h-3 mr-[2px]"></ion-icon>
                        <ion-icon name="star-outline" class="lg:w-5 w-3 lg:h-5 h-3 mr-[2px]"></ion-icon>
                        <ion-icon name="star-outline" class="lg:w-5 w-3 lg:h-5 h-3 mr-[2px]"></ion-icon>
                        <ion-icon name="star-outline" class="lg:w-5 w-3 lg:h-5 h-3 mr-[2px]"></ion-icon>

                    </div>

                </div>

                <!-- product prices-->
                <div>
                    <p class="text-orange-500 lg:text-lg text-sm font-bold">Ks <span><?=$price?></span></p>
                    <!-- promotion  prices-->

                  <?php  if(($productDetail_result[0]["p_discount"])!= null){ ?>
                    <p class="opacity-50 lg:text-lg text-sm"><span class="line-through">Ks </span>
                        <span class="line-through"><?= $productDetail_result[0]["p_sell_price"]?></span>
                        <span class="text-orange-500"><?= $productDetail_result[0]["p_discount"] ?>%off</span>
                    </p>
                    <?php } ?>


                </div>

            </div>


        </div>
        <!-- product description-->
        <div class="lg:w-1/2 w-11/12 ml-2 ">
            <p class="lg:text-2xl text-sm mt-2 font-semibold"> <?= $productDetail_result[0]["p_title"]?></p>
            <p class="lg:text-2xl text-sm font-semibold"><?= $productDetail_result[0]["p_des"]?></p>
            <div class="w-full lg:h-32 h-20 mt-2 ring-1 overflow-y-auto">

            <p class="lg:text-[11px] text-[9px] p-2"><?= $productDetail_result[0]["p_detail"]?></p>

            </div>
            <div class="flex justify-evenly mt-5">
                <button class="lg:w-1/3  w-2/5 h-8  bg-orange-500 rounded-md text-white">Buy Now</button>
                <button class="lg:w-1/3 w-2/5 h-8 bg-green-800 rounded-md text-white">Add to Cart</button>
            </div>
            <!--review sessions-->
            <div class="mt-5 w-full">
                <p class="lg:text-lg mb-2 text-sm">Reviews</p>
                <!--customer reviews-->
                    <div class="lg:w-4/5 w-11/12 mx-2 text-gray-500">
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
    <!--you may also like session-->
    <div class="ml-10">
        <p class="text-xl">You may also like</p>
        <?php include "./common/commonProductlist.php" ?>
    </div>

</body>

</html>