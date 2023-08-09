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
    <title>Account Verified</title>
</head>

<body>
    <?php include "../common/CommonNavigation.php" ?>

    <main class=" lg:flex w-full h-full justify-between px-20 ">
        <div class="lg:w-1/3 lg:ml-24 sm:w-4/5  mt-16 sm:mx-auto">
            <p class="text-orange-500 text-3xl font-semibold text-center">Your Account</p>
            <p class="text-orange-500 text-3xl font-semibold text-center">Has been Registered</p>

            <form action="../../Controller/finishSignUpController.php?verifiedcode=<?=$_GET["verifiedcode"]?>" method ="post" class= "mt-6" >

            <input type="text" name="username" class="ring-[1px] rounded-md ml-1">
            <input type="submit" value="Go Home page" class="py-[2px] px-2 bg-green-800 text-white rounded-md">
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