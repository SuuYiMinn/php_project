<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
</head>

<body>

    <?php include "../Layout/nav.php"; ?>
    <!-- start of right side -->
    <div class=" flex justify-center items-center ml-[300px]">
        <div class="px-10 py-10 shadow-3xl rounded-lg flex flex-col justify-center items-center">
            <img src="../resources/img/profile image.jpg" class="w-[100px] h-[100px]" />
            <div class="mt-5 mb-8">
                <span class="text-blueText font-bold text-lg font-RobotoSlab uppercase">BalarBalar</span>
                <span class="text-blueText font-bold text-md font-RobotoSlab pl-3"> Followed By</span>
                <span class="text-blueText text-md font-Tommorrow">1K</span>

            </div>
            <div class="flex flex-row space-x-32">
                <!-- start of left-side profile information -->
                <div class="space-y-8">
                    <!-- start of About  -->
                    <div class="bg-inputBox px-3 py-2 rounded-md text-blueText text-lg flex space-x-[280px]">
                        <div class="font-bold">About</div>


                        <svg class="fill-orange w-[20px] h-[20px]" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z" />
                        </svg>




                    </div>
                    <!-- end of About -->
                    <!-- name -->
                    <div class="flex flex-row">
                        <svg class="fill-orange w-[20px] h-[20px]" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="info" />
                            <g id="icons">
                                <g id="user">
                                    <ellipse cx="12" cy="8" rx="5" ry="6" />
                                    <path d="M21.8,19.1c-0.9-1.8-2.6-3.3-4.8-4.2c-0.6-0.2-1.3-0.2-1.8,0.1c-1,0.6-2,0.9-3.2,0.9s-2.2-0.3-3.2-0.9    C8.3,14.8,7.6,14.7,7,15c-2.2,0.9-3.9,2.4-4.8,4.2C1.5,20.5,2.6,22,4.1,22h15.8C21.4,22,22.5,20.5,21.8,19.1z" />
                                </g>
                            </g>
                        </svg>
                        <p class="ml-[10px] text-blueText text-lg font-RobotoSlab">U Khin Maung</p>
                    </div>
                    <!-- shop name -->
                    <div class="flex flex-row">
                        <svg class="fill-orange w-[20px] h-[20px]" data-name="Layer 1" id="Layer_1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <title />
                            <path d="M81.49,21.21V32.35a6.48,6.48,0,0,1-6.11,6.56,6.19,6.19,0,0,1-4.57-1.76,6.26,6.26,0,0,1-1.91-4.53,6.3,6.3,0,0,1-12.6,0,6.3,6.3,0,1,1-12.6,0,6.3,6.3,0,0,1-12.6,0,6.27,6.27,0,0,1-6.48,6.29,6.48,6.48,0,0,1-6.11-6.56V21.21A3.21,3.21,0,0,1,21.72,18H78.28A3.21,3.21,0,0,1,81.49,21.21ZM72.81,82a2.82,2.82,0,0,0,2.82-2.82V42.9h-.51a10.14,10.14,0,0,1-6.23-2.15,10.29,10.29,0,0,1-12.59,0,10.31,10.31,0,0,1-12.6,0,10.29,10.29,0,0,1-12.59,0,10.27,10.27,0,0,1-6.27,2.14h-.47V79.18A2.82,2.82,0,0,0,27.19,82H33.5V61.82H48.83V82Z" />
                        </svg>
                        <p class="ml-[10px] text-blueText text-lg font-RobotoSlab">BalarBalar</p>
                    </div>

                    <!-- join date -->
                    <div class="flex flex-row">
                        <svg class="fill-orange w-[20px] h-[20px]" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M448 384c-28.02 0-31.26-32-74.5-32-43.43 0-46.825 32-74.75 32-27.695 0-31.454-32-74.75-32-42.842 0-47.218 32-74.5 32-28.148 0-31.202-32-74.75-32-43.547 0-46.653 32-74.75 32v-80c0-26.5 21.5-48 48-48h16V112h64v144h64V112h64v144h64V112h64v144h16c26.5 0 48 21.5 48 48v80zm0 128H0v-96c43.356 0 46.767-32 74.75-32 27.951 0 31.253 32 74.75 32 42.843 0 47.217-32 74.5-32 28.148 0 31.201 32 74.75 32 43.357 0 46.767-32 74.75-32 27.488 0 31.252 32 74.5 32v96zM96 96c-17.75 0-32-14.25-32-32 0-31 32-23 32-64 12 0 32 29.5 32 56s-14.25 40-32 40zm128 0c-17.75 0-32-14.25-32-32 0-31 32-23 32-64 12 0 32 29.5 32 56s-14.25 40-32 40zm128 0c-17.75 0-32-14.25-32-32 0-31 32-23 32-64 12 0 32 29.5 32 56s-14.25 40-32 40z" />
                        </svg>
                        <p class="ml-[10px] text-blueText text-lg font-RobotoSlab">Join in June 26, 2021</p>
                    </div>
                    <!-- address -->
                    <div class="flex flex-row">
                        <svg class="fill-orange w-[20px] h-[20px]" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M192 0C85.97 0 0 85.97 0 192c0 77.41 26.97 99.03 172.3 309.7c9.531 13.77 29.91 13.77 39.44 0C357 291 384 269.4 384 192C384 85.97 298 0 192 0zM192 271.1c-44.13 0-80-35.88-80-80S147.9 111.1 192 111.1s80 35.88 80 80S236.1 271.1 192 271.1z" />
                        </svg>
                        <p class="ml-[10px] text-blueText text-lg font-RobotoSlab">2239,Hong kan Road, Margan</p>
                    </div>
                    <!-- email -->
                    <div class="flex flex-row">
                        <svg class="fill-orange w-[20px] h-[20px]" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="info" />
                            <g id="icons">
                                <path d="M20,3H4C1.8,3,0,4.8,0,7v10c0,2.2,1.8,4,4,4h16c2.2,0,4-1.8,4-4V7C24,4.8,22.2,3,20,3z M21.6,8.8l-7.9,5.3   c-0.5,0.3-1.1,0.5-1.7,0.5s-1.2-0.2-1.7-0.5L2.4,8.8C2,8.5,1.9,7.9,2.2,7.4C2.5,7,3.1,6.9,3.6,7.2l7.9,5.3c0.3,0.2,0.8,0.2,1.1,0   l7.9-5.3c0.5-0.3,1.1-0.2,1.4,0.3C22.1,7.9,22,8.5,21.6,8.8z" id="email" />
                            </g>
                        </svg>
                        <p class="ml-[10px] text-blueText text-lg font-RobotoSlab">suuyiminn@gmail.com</p>
                    </div>
                    <!-- ph no -->
                    <div class="flex flex-row">
                        <svg class="fill-orange w-[20px] h-[20px]" style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="info" />
                            <g id="icons">
                                <path d="M20,3H4C1.8,3,0,4.8,0,7v10c0,2.2,1.8,4,4,4h16c2.2,0,4-1.8,4-4V7C24,4.8,22.2,3,20,3z M21.6,8.8l-7.9,5.3   c-0.5,0.3-1.1,0.5-1.7,0.5s-1.2-0.2-1.7-0.5L2.4,8.8C2,8.5,1.9,7.9,2.2,7.4C2.5,7,3.1,6.9,3.6,7.2l7.9,5.3c0.3,0.2,0.8,0.2,1.1,0   l7.9-5.3c0.5-0.3,1.1-0.2,1.4,0.3C22.1,7.9,22,8.5,21.6,8.8z" id="email" />
                            </g>
                        </svg>
                        <p class="ml-[10px] text-blueText text-lg font-RobotoSlab">၀၉၉၄၄၁၃၈၅၈၀</p>
                    </div>
                </div>
                <!-- end of left-side profile information -->
                <!-- start of right-side profile information -->
                <div class="space-y-8">
                    <!-- start of About  -->
                    <div class="bg-inputBox px-3 py-2 rounded-md text-blueText text-lg flex space-x-[200px]">
                        <div class="font-bold">Payment Account</div>


                        <svg class="fill-orange w-[20px] h-[20px]" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z" />
                        </svg>




                    </div>
                    <!-- end of About -->
                    <!-- name -->
                    <div class="flex flex-col space-y-5">
                        <!-- KBZ -->
                        <div class="ml-[10px] text-blueText text-lg font-RobotoSlab">
                            <span>KBZ</span><span class="pr-3">:</span><span>12345678</span>
                            <a class="ml-[220px]">Edit</a>
                        </div>
                        <!-- Wave -->
                        <div class="ml-[10px] text-blueText text-lg font-RobotoSlab">
                            <span>Wave</span><span class="pr-3">:</span><span>12345678</span>
                            <a class="ml-[220px]">Edit</a>
                        </div>
                    </div>






                </div>
                <!-- end of right-side profile information -->
            </div>
        </div>

    </div>





    

</body>

</html>