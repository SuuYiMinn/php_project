<?php
session_start();
$productCat = $_SESSION["productCat"];
$productSubcat = $_SESSION["productSubcat"];
$productBrand = $_SESSION["productBrand"];
$product = $_SESSION["product"];
echo"<pre>";
print_r($productCat);
echo"</pre>";
echo"<pre>";
print_r($productSubcat);
echo"</pre>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details </title>
    <!-- tailwind -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <!-- <link href="../resources/lib/tailwind/output.css" rel="stylesheet"> -->
    <!-- css -->
    <link rel="stylesheet" href="../resources/css/style.css">
    <!-- chartjs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- chart script file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.0/apexcharts.min.js" integrity="sha512-bp/xZXR0Wn5q5TgPtz7EbgZlRrIU3tsqoROPe9sLwdY6Z+0p6XRzr7/JzqQUfTSD3rWanL6WUVW7peD4zSY/vQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../resources/js/main.js" defer></script>
    <script src="../resources/lib/jquery/jQuery v3.7.0.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="../resources/css/product.css">
</head>

<body>
    <?php include "../Layout/nav.php"; ?>
    <!-- start of right side -->

    <!-- title -->
    <div class="z-50 ml-36 flex flex-col justify-center items-center">
        <div class="text-blueText text-lg font-bold mb-3">Product Details</div>
        <div class="w-[500px] h-[2px] bg-orange shadow-3xl"></div>
    </div>
    <!-- end title -->

    <!-- start of product details -->
    <div class="z-30 mt-10 mb-10 ml-[300px]">
        <div class="flex flex-row space-x-10">
            <!-- <div><img src="../../../Storage/" /> -->
            <!-- <img src="../../../<?= $productCat[0]["p_photo_1"] ?>" class="w-full"> -->
            <!-- start of edit photo -->

            <div class="grid grid-cols-2 gap-4 w-[400px] h-[400px]">

                <div class="grid gap-4">
                    <div>
                        <label for="default_img1">
                            <img class="h-auto max-w-full rounded-lg" id="img1" src="
                                <?php if ($productCat[0]["p_photo_1"] == "/Storage/products/") { ?>
                                    ../resources/img/default_img1.jpg
                                <?php } else { ?>
                                    ../../../<?= $productCat[0]["p_photo_1"];
                                            }
                                                ?>
                                 " alt="">
                        </label>

                        <input type="file" name="default_img1" id="default_img1" accept=".png,.jpeg" class="hidden">
                    </div>
                    <div>
                        <label for="default_img2">
                            <img class="h-auto max-w-full rounded-lg" id="img2" src="
                                <?php if ($productCat[0]["p_photo_2"] == "/Storage/products/") { ?>
                                    ../resources/img/default_img2.jpg
                                <?php } else { ?>
                                    ../../../<?= $productCat[0]["p_photo_2"];
                                            }

                                                ?>" alt="">
                        </label>
                        <input type="file" name="default_img2" id="default_img2" accept=".png,.jpeg" class="hidden">
                    </div>

                </div>
                <div class="grid gap-4">

                    <div>
                        <label for="default_img3">
                            <img class="h-auto max-w-full rounded-lg" id="img3" src="
                                <?php if ($productCat[0]["p_photo_3"] == "/Storage/products/") { ?>
                                    ../resources/img/default_img3.jpg
                                <?php } else { ?>
                                    ../../../<?= $productCat[0]["p_photo_3"];
                                            }

                                                ?>" alt="">
                        </label>
                        <input type="file" name="default_img3" id="default_img3" accept=".png,.jpeg" class="hidden">
                    </div>

                    <div>
                        <label for="default_img4">
                            <img class="h-auto max-w-full rounded-lg" id="img4" src="
                                <?php if ($productCat[0]["p_photo_4"] == "/Storage/products/") { ?>
                                    ../resources/img/default_img4.jpg
                                <?php } else { ?>
                                    ../../../<?= $productCat[0]["p_photo_4"];
                                            }
                                                ?>
                                 " alt="">
                        </label>
                        <input type="file" name="default_img4" id="default_img4" accept=".jpg,.jpeg,.png" class="hidden">
                    </div>
                </div>
            </div>

            <!-- end of edit photo -->
            <div class="text-blueText text-md font-semibold space-y-3">
                <p><span class="w-44">Product Name:</span> <span class="ml-3"><?= $productCat[0]["p_title"] ?></span></p>
                <p><span class="w-32">Category:</span><span class="ml-3"><?= $productCat[0]["cat_name"] ?></span></p>
                <p><span class="w-32">Sub Category:</span><span class="ml-3"><?= $productSubcat[0]["sub_category_name"] ?></span></p>
                <p><span class="w-32">Brand:</span><span class="ml-3"><?= $productBrand[0]["brand_name"] ?></span></p>
                <p><span class="w-32">Stock:</span><span class="ml-3"><?= $productCat[0]["p_stock"] ?> items</span></p>
                <p><span class="w-32">Buy Price:</span><span class="ml-3"><?= $productCat[0]["p_buy_price"] ?>Ks</span></p>
                <p><span class="w-32">Sell Price:</span><span class="ml-3"><?= $productCat[0]["p_sell_price"] ?>Ks</span></p>
                <p><span class="w-32">Discount:</span><span class="ml-3"><?= $productCat[0]["p_discount"] ?>% Off</span></p>
                <p><span class="w-32">Details:</span><span class="ml-3"><?= $productCat[0]["p_detail"] ?></span></p>
                <p><span class="w-32">Description:</span><span class="ml-3"><?= $productCat[0]["p_des"] ?></span></p>
            </div>

            <!-- </div> -->

        </div>
        <!-- start of rating -->
        <div class="flex items-center mb-2 mt-3">
            <p class="text-blueText text-lg font-bold mr-5">Ratings</p>
            <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <svg class="w-4 h-4 text-inputBox mr-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            <p class="ml-2 text-lg text-blueText dark:text-white">4.95 out of 5</p>

        </div>
        <p class="text-md font-medium text-blueText dark:text-gray-400">1,745 global ratings</p>
        <div class="flex items-center mt-4">
            <a href="#" class="text-md font-medium text-blueText dark:text-blue-500 hover:underline">5 star</a>
            <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                <div class="h-5 bg-orange rounded" style="width: 70%"></div>
            </div>
            <span class="text-md font-medium text-blueText dark:text-gray-400">70%</span>
        </div>
        <div class="flex items-center mt-4">
            <a href="#" class="text-md font-medium text-blueText dark:text-blue-500 hover:underline">4 star</a>
            <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                <div class="h-5 bg-orange rounded" style="width: 17%"></div>
            </div>
            <span class="text-md font-medium text-blueText dark:text-gray-400">17%</span>
        </div>
        <div class="flex items-center mt-4">
            <a href="#" class="text-md font-medium text-blueText dark:text-blue-500 hover:underline">3 star</a>
            <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                <div class="h-5 bg-orange rounded" style="width: 8%"></div>
            </div>
            <span class="text-md font-medium text-blueText dark:text-gray-400">8%</span>
        </div>
        <div class="flex items-center mt-4">
            <a href="#" class="text-md font-medium text-blueText dark:text-blue-500 hover:underline">2 star</a>
            <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                <div class="h-5 bg-orange rounded" style="width: 4%"></div>
            </div>
            <span class="text-md font-medium text-blueText dark:text-gray-400">4%</span>
        </div>
        <div class="flex items-center mt-4">
            <a href="#" class="text-md font-medium text-blueText dark:text-blue-500 hover:underline">1 star</a>
            <div class="w-2/4 h-5 mx-4 bg-inputBox rounded dark:bg-gray-700">
                <div class="h-5 bg-orange rounded" style="width: 1%"></div>
            </div>
            <span class="text-md font-medium text-blueText dark:text-gray-400">1%</span>
        </div>
        <!-- end of rating -->
        <!-- start of reviews -->

        <article class="mt-5">
            <div class="text-lg font-bold text-blueText">Reviews</div>
            <div class="flex items-center mb-4 space-x-4">
                <img class="w-10 h-10 rounded-full" src="../resources/img/chatphoto.png" alt="">
                <div class="space-y-1 dark:text-white">
                    <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Joined on August 2014</time></p>
                </div>
            </div>
            <div class="flex items-center mb-1">
                <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-orange mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <svg class="w-4 h-4 text-inputBox dark:text-gray-500 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                </svg>
                <h3 class="ml-2 text-sm font-semibold text-gray-900 dark:text-white">Thinking to buy another one!</h3>
            </div>
            <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400">
                <p>Reviewed in the United Kingdom on <time datetime="2017-03-03 19:00">March 3, 2017</time></p>
            </footer>
            <p class="mb-2 text-greyText1 font-bold dark:text-gray-400">This is my third Invicta Pro Diver. They are just fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.</p>
            <p class="mb-3 text-greyText1 font-bold dark:text-gray-400">It is obviously not the same build quality as those very expensive watches. But that is like comparing a Citroën to a Ferrari. This watch was well under £100! An absolute bargain.</p>


        </article>


        <!-- end of reviews -->

        <div class="flex flex-row space-x-10 ml-[630px]">
            <div class="mt-6">
                <a href="../Products/product.php"><button class="text-orange font-bold rounded-lg w-32 py-1.5 border-2 border-orange  text-xl font-RobotoSlab shadow-sm hover:bg-orange hover:text-whiteText focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Cancel</button></a>
            </div>
            <div class="mt-6">
                <a href="../../Controller/editProductController.php?id=<?= $product[0]["id"] ?>"><button type="button" class="text-button font-bold rounded-lg w-32 py-1.5 border-2 border-button  hover:bg-button hover:text-whiteText text-xl font-RobotoSlab shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange">Edit</button></a>
            </div>
        </div>



    </div>
    <!-- end of product details -->



















    <!-- end of right side -->


    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <!-- <script src="../resources/js/main.js"></script> -->


</body>

</html>