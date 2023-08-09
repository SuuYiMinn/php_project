<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>forget Password</title>
</head>

<body>
    <?php include "../common/CommonNavigation.php" ?>
    <main class=" lg:flex w-full h-full justify-between">

    <form action="../../Controller/forgotpasswordController.php" method="post">
        <div class="lg:w-1/3 w-4/5 my-10 mx-auto">
            <p class="text-2xl text-center w-60">Reset password</p>

            <div class="mt-20 w-3/4 mx-auto">
                <p class="mb-2 w-60  text-orange-500">Please enter your email</p>
                <p class="mb-1 text-xs text-blue-900 w-60">In order to identify your identity we have sent a one time code to your email</p>

                <input type="text" name="email" placeholder="Enter your email" class="w-54 ring-1 rounded-md mx-auto">
                

            </div>

            <div class="mt-8 w-56 mx-auto">
                <input type="submit" value="Send Code" class="bg-[#ff9f29] rounded-md text-center my-4 px-16 py-1 text-white">
            </div>

        </div>
        </form>

        <div class="w-3/5 lg:visible invisible ">
            <card class="">
                <img src="../resources/img/photo/illustation.jpg" alt="shopping">
            </card>

        </div>

    </main>
    <?php include "../common/commonFooter.php" ?>
    <?php include "../common/commonFooterMobile.php" ?>
</body>

</html>

<?php 
$_SESSION["forgotPasswordError"] = "";
?>