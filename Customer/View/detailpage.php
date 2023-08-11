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
    <!--navgation and header session start-->

    <?php include "./common/nav_without_search.php" ?>


    <div class="flex lg:flex-row flex-col lg:mx-5 mx-0 my-5 overflow-x-hidden">

        <?php include "../Controller/detailController.php";

        if (($productDetail_result[0]["p_discount"]) != null) {

            $price = ($productDetail_result[0]["p_sell_price"]) - ((($productDetail_result[0]["p_discount"]) / 100) * ($productDetail_result[0]["p_sell_price"]));
        } else {

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
                    <p class="text-orange-500 lg:text-lg text-sm font-bold">Ks <span><?= $price ?></span></p>
                    <!-- promotion  prices-->

                    <?php if (($productDetail_result[0]["p_discount"]) != null) { ?>
                        <p class="opacity-50 lg:text-lg text-sm"><span class="line-through">Ks </span>
                            <span class="line-through"><?= $productDetail_result[0]["p_sell_price"] ?></span>
                            <span class="text-orange-500"><?= $productDetail_result[0]["p_discount"] ?>%off</span>
                        </p>
                    <?php } ?>


                </div>

            </div>


        </div>
        <!-- product description-->
        <div class="lg:w-1/2 w-11/12 ml-2 ">
            <p class="lg:text-2xl text-sm mt-2 font-semibold"> <?= $productDetail_result[0]["p_title"] ?></p>
            <p class="lg:text-2xl text-sm font-semibold"><?= $productDetail_result[0]["p_des"] ?></p>
            <div class="w-full lg:h-32 h-20 mt-2 ring-1 overflow-y-auto">

                <p class="lg:text-[11px] text-[9px] p-2"><?= $productDetail_result[0]["p_detail"] ?></p>

            </div>
            <div class="flex justify-evenly mt-5">

                <button class="lg:w-1/3  w-2/5 h-8  bg-orange-500 rounded-md text-white">
                    <a id="atag" href="../View/addAddress.php?id=<?= $productDetail_result[0]["id"] ?>" method="get">Buy Now</a>
                </button>


                <button class="lg:w-1/3 w-2/5 h-8 bg-green-800 rounded-md text-white">Add to Cart</button>

            </div>
            <!--review sessions-->
            <div class="mt-5 w-full">
                <p class="lg:text-lg mb-2 text-sm">Reviews</p>
                <!--customer reviews-->
                <div class="lg:w-4/5 w-11/12 mx-2 text-gray-500">
                    <p class="lg:text-sm text-xs"><?= $review_result[0]["c_name"] ?></p>
                    <div class="flex mt-1  text-orange-500">
                        <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[2px]"></ion-icon>
                        <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[2px] "></ion-icon>
                        <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[2px] "></ion-icon>
                        <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[2px]"></ion-icon>
                        <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[2px]"></ion-icon>
                    </div>
                    <p class="lg:text-xs text-[9px] mt-2">
                        <?= $review_result[0]["product_review"] ?>
                    </p>

                </div>
            </div>


        </div>

    </div>
    <!--you may also like session-->
    <div class="lg:ml-10 ml-2 w-full">
        <p class=" lg:text-xl text-sm font-semibold mb-4">You may also like</p>

        <div class=" w-full flex overflow-x-auto">
            <?php foreach ($category_result as $products) {
                # code...

                $rating = $products["product_rating"];
                if (($products["p_discount"]) != null) {

                    $price = $products["p_sell_price"] - ((($products["p_discount"]) / 100)  * ($products["p_sell_price"]));
                } else $price = $products["p_sell_price"];
            ?>


                <a href="./detailpage.php?productid=<?= $products["id"] ?>" class="lg:h-60 h-40 lg:w-96 w-40 bg-white drop-shadow-md mt-2 ml-5" id="<?= $products["id"] ?>">
                    <!-- product image -->
                    <div class="w-full lg:h-2/3 h-3/5 relative bg-gray-200">
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
                                <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                                <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>

                            </div>
                            <p class=" text-center lg:text-[13px] text-[11px] font-semibold text-orange-500 mt-1 w-16 ml-1">Ks <span><?= $price ?></span></p>
                            <?php if (($products["p_discount"]) != null) { ?>
                                <p class="lg:text-xs text-center line-through text-[9px]">Ks <span><?= $products["p_sell_price"] ?></span></p> <?php } ?>

                        </div>
                    </div>
                </a>

            <?php } ?>
        </div>
    </div>
    <?php include "./common/commonFooter.php" ?>
    <?php include "./common/commonFooterMobile.php" ?>
</body>

</html>