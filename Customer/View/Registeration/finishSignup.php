<?php
session_start();
if (!isset($_SESSION["user_account"])) {
    header("Location: ./signup.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../resources/js/menu.js"></script>
    <title>Account Verified</title>
</head>

<body>
    <?php include "../common/registeration_nav.php" ?>

    <main class=" lg:flex w-full h-full justify-between px-20 ">
        <div class="lg:w-1/3 lg:ml-24 sm:w-4/5  mt-16 sm:mx-auto">
            <p class="text-orange-500 text-3xl font-semibold text-center">Your Account</p>
            <p class="text-orange-500 text-3xl font-semibold text-center">Has been Registered</p>

            <form action="../../Controller/finishSignUpController.php" method="post" class="mt-6 h-28 flex lg:flex-row flex-col justify-around items-center ">
                <div class="mb-4">
                    <p class="font-medium ">User Name</p>
                    <input type="text" name="username" class="h-8 ring-[1px] rounded-md mr-2 my-2">
                    <p class="text-xs text-orange-500">If you didn't add name your user email address will be remark as your user name</p>
                </div>

                <input type="submit" value="Go Home page" class=" h-8 py-[2px] px-2 bg-green-800 text-white rounded-md">

            </form>

        </div>




        <div class="w-3/5 lg:visible invisible ">
            <card class="">
                <img src="../resources/img/photo/illustation.jpg" alt="shopping">
            </card>

        </div>

    </main>



</body>

</html>