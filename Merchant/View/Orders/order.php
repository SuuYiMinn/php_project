<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
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
    <link rel="stylesheet" href="../resources/css/order.css">

</head>

<body>
    <?php include "../Layout/nav.php"; ?>
    <!-- start of right side -->
    <div class="flex flex-row">
        <div class="z-50 fixed ml-[250px] bg-whiteText text-blueText text-md font-bold w-[430px]  px-8 rounded-xl flex flex-row items-center shadow-3xl">

            <div class="flex justify-center items-center">
                <!-- start of Date -->

                <form action="/action_page.php">

                    <input type="date" class="uppercase" id="birthday" name="birthday">

                </form>


                <!-- end of Date -->
                <!-- start of status -->
                <div class="relative inline-flex ml-[100px]">
                    <svg class="fill-orange w-3 h-3 absolute top-4 right-10 pointer-events-none" enable-background="new 0 0 48 48" height="48px" id="Layer_3" version="1.1" viewBox="0 0 48 48" width="48px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <polygon points="0,12.438 48,12.438 24,35.562 " />
                    </svg>
                    <select class="text-orange h-10 pl-5 pr-10 bg-whiteText hover:border-gray-400 focus:outline-none appearance-none">
                        <option>Status</option>
                        <option>Done</option>
                        <option>Not Done</option>
                    </select>
                </div>
                <!-- end of status -->

                <!-- start of search bar -->
                <!-- start of search bar -->
                <div class="relative w-[300px] ml-[300px]">
                    <input type="text" id="search" class="rounded-xl border-0 bg-search font-ABeeZee block p-2.5 text-center w-full text-md text-blueText" placeholder="Search..........." required>

                    <svg class="w-5 h-5 absolute text-inputBox top-[15px] left-[20px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                    <svg class="w-5 text-inputBox stroke-current h-5 absolute top-[15px] right-[20px]" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- <style type="text/css">
                            .st0 {
                                opacity: 0.2;
                                fill: none;
                                stroke: #D9D9D9;
                                stroke-width: 5.000000e-02;
                                stroke-miterlimit: 10;
                            }
                        </style> -->
                        <g id="grid_system" />
                        <g id="_icons">
                            <path d="M4,17h8.1c0.4,1.7,2,3,3.9,3s3.4-1.3,3.9-3H20c0.6,0,1-0.4,1-1s-0.4-1-1-1h-0.1c-0.4-1.7-2-3-3.9-3s-3.4,1.3-3.9,3H4   c-0.6,0-1,0.4-1,1S3.4,17,4,17z M16,14c1.1,0,2,0.9,2,2s-0.9,2-2,2s-2-0.9-2-2S14.9,14,16,14z" />
                            <path d="M4,9h0.1c0.4,1.7,2,3,3.9,3s3.4-1.3,3.9-3H20c0.6,0,1-0.4,1-1s-0.4-1-1-1h-8.1c-0.4-1.7-2-3-3.9-3S4.6,5.3,4.1,7H4   C3.4,7,3,7.4,3,8S3.4,9,4,9z M8,6c1.1,0,2,0.9,2,2s-0.9,2-2,2S6,9.1,6,8S6.9,6,8,6z" />
                        </g>
                    </svg>

                </div>
                <!-- end of search bar -->
                <!-- end of search bar -->
            </div>

        </div>



        <!-- ======================== -->

        <section class="z-30 ml-[200px] pt-12 pb-24">

            <div class="flex flex-row mb-14 ">
                <div class="w-2/3 mb-14 md:mb-0">
                    <div class="py-12 px-3 md:px-12 bg-whiteText text-blueText text-md rounded-3xl">
                        <span class="inline-block mb-3 text-blueText text-md font-bold">Order Id:</span>
                        <span class="font-bold">1</span>
                        <span class="float-right"><span class="inline-block font-bold">Total Price:</span>
                        <span class="font-bold">45600Ks</span></span>
                        <div class="">
                            <div class="relative flex flex-wrap items-center xl:justify-between -mx-4 mb-8 pb-8 border-b border-gray-200 border-opacity-40">
                                <div class="relative w-full md:w-auto px-3 mb-6 xl:mb-0">
                                    <a class="block mx-auto max-w-max" href="#">
                                        <img class="h-28 object-cover" src="../resources/img/product.jpg" alt="">
                                    </a>
                                </div>
                                <div class="w-full md:w-auto mb-6 xl:mb-0">
                                    <a class="block mb-5 text-md font-heading font-medium hover:underline" href="#">Apple iPhone 12 Pro (128GB)</a>
                                    <div class="flex flex-wrap">
                                        <p class="mr-4 text-sm font-medium">
                                            <span class="font-heading">Color:</span>
                                            <span class="ml-2 text-gray-400">Silver</span>
                                        </p>
                                        <p class="text-sm font-medium">
                                            <span>Memory storage:</span>
                                            <span class="ml-2 text-gray-400">128GB</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="w-full xl:w-auto px-4 mb-6 xl:mb-0 mt-6 xl:mt-0">
                                    <div class="flex items-center">
                                        <h4 class="mr-4 font-heading font-medium">Qty:</h4>
                                        <h4 class="">2</h4>

                                    </div>
                                </div>
                                <div class="w-full xl:w-auto px-4">
                                    <span class="text-md font-heading font-medium text-blue-500">
                                        <span class="text-sm">$</span>
                                        <span>544.90</span>
                                    </span>
                                </div>

                            </div>
                            <div class="relative flex flex-wrap items-center xl:justify-between -mx-4 mb-8 pb-8 border-b border-gray-200 border-opacity-40">
                                <div class="relative w-full md:w-auto px-3 mb-6 xl:mb-0">
                                    <a class="block mx-auto max-w-max" href="#">
                                        <img class="h-28 object-cover" src="../resources/img/product.jpg" alt="">
                                    </a>
                                </div>
                                <div class="w-full md:w-auto mb-6 xl:mb-0">
                                    <a class="block mb-5 text-md font-heading font-medium hover:underline" href="#">Apple iPhone 12 Pro (128GB)</a>
                                    <div class="flex flex-wrap">
                                        <p class="mr-4 text-sm font-medium">
                                            <span class="font-heading">Color:</span>
                                            <span class="ml-2 text-gray-400">Silver</span>
                                        </p>
                                        <p class="text-sm font-medium">
                                            <span>Memory storage:</span>
                                            <span class="ml-2 text-gray-400">128GB</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="w-full xl:w-auto px-4 mb-6 xl:mb-0 mt-6 xl:mt-0">
                                    <div class="flex items-center">
                                        <h4 class="mr-4 font-heading font-medium">Qty:</h4>
                                        <h4 class="">2</h4>

                                    </div>
                                </div>
                                <div class="w-full xl:w-auto px-4">
                                    <span class="text-md font-heading font-medium text-blue-500">
                                        <span class="text-sm">$</span>
                                        <span>544.90</span>
                                    </span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="mb-14 text-blueText text-md px-4 ml-5 mt-10">
                    <div class="flex flex-col justify-center">
                    <h2 class="mb-2 font-heading font-bold underline underline-offset-2 text-md">Customers</h2>
                    <div class="flex flex-row  py-1 mb-3 leading-8 bg-white bg-opacity-50 font-heading font-medium rounded-3xl">
                        <span class="w-36">Name:</span>
                        <span>Daw koeiosli</span>



                    </div>
                    <div class="flex flex-row py-1 mb-3 leading-8 bg-white bg-opacity-50 font-heading font-medium rounded-3xl">
                        <span class="w-36">Phone No:</span>
                        <span>1009385030</span>


                    </div>
                    <div class="flex flex-row py-1 mb-3 leading-8 bg-white bg-opacity-50 font-heading font-medium rounded-3xl">
                        <span class="w-36">Address:</span>
                        <span>No.12, oofiwligk, oowgowehslo</span>

                    </div>
                    <div class="flex flex-row py-1 mb-3 leading-8 bg-white bg-opacity-50 font-heading font-medium rounded-3xl">
                        <span class="w-36">Payment Method:</span>
                        <span>KBZ</span>

                    </div>
                    <a href="./invoice.php" class="inline-block w-full lg:w-auto py-1.5 px-10 text-md leading-6 text-whiteText font-medium tracking-tighter font-heading text-center bg-button hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 rounded-xl" >Inovice</a>
                        </div>
                </div>


            </div>

        </section>






    </div>