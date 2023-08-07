<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/lib/jquery/jquery.js"></script>
    <script src="../resources/js/menu.js"></script>

    <title>Footer</title>
</head>

<body>
    <!-- footer -->
    <footer class="lg:visible invisible">
        <!-- closing line -->
        <div class="w-full h-[130px] bg-[#FF9F29] flex justify-around">
            <div class="flex flex-row items-center">
                <div class="w-[80px] h-[80px] rounded-[50%] bg-[#CC3636] flex justify-center items-center">
                    <div class="w-[50px]">
                        <img class="w-full" src="../resources/img/headphone-line.svg" alt="" />
                    </div>
                </div>
                <p class="text-[36px] ml-[20px]">Chat with us</p>
            </div>
            <div class="flex flex-row items-center">
                <div class="w-[80px] h-[80px] rounded-[50%] bg-[#CC3636] flex justify-center items-center">
                    <div class="w-[50px]">
                        <img class="w-full" src="../resources/img/phone.svg" alt="" />
                    </div>
                </div>
                <p class="text-[36px] ml-[20px]">Call us</p>
            </div>
            <div class="flex flex-row items-center">
                <div class="w-[80px] h-[80px] rounded-[50%] bg-[#CC3636] flex justify-center items-center">
                    <div class="w-[50px]">
                        <img class="w-full" src="../resources/img/mail.svg" alt="" />
                    </div>
                </div>
                <p class="text-[36px] ml-[20px]">Write to us</p>
            </div>
        </div>
        <!-- closing line end -->

        <!-- texts -->
        <div class="mt-10 w-full flex justify-around">
            <!-- help center -->
            <div>
                <p class="text-[24px]">Help Center</p>
                <div>
                    <p class="mt-2">FAQ</p>
                    <p class="mt-2">Terms & Condition</p>
                    <p class="mt-2">Privacy Policy</p>
                </div>
            </div>
            <!-- corporation -->
            <div>
                <p class="text-[24px]">Corporation</p>
                <div>
                    <p class="mt-2">Contact us</p>
                    <p class="mt-2">About us</p>
                </div>
            </div>
            <!-- follow us -->
            <div>
                <p class="text-[24px]">Follow us</p>
                <div>
                    <div class="w-[50px]">
                        <img class="w-full" src="../resources/img/facebook (1).svg" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- copy rights -->
        <br />
        <p class="m-auto text-[24px] w-fit opacity-[50%]">
            Copyright © 2023 GoDeal Online Store. All Rights Reserved.
        </p>
        <br />
    </footer>
    <!-- footer end -->

</body>

</html>