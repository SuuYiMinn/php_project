<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Reset Password</title>
</head>

<body>
    <?php include "../common/CommonNavigation.php" ?>


    <form action="../../Controller/resetpasswordController.php?resetverifiedcode=<?= $_GET["resetverifiedcode"]?>" method="post">
        <main class="lg:flex-row w-full justify-evenly">
            <div class="w-1/3 mt-16">
                <p class="text-2xl mx-auto my-10 w-64">Reset password</p>

                <div class="w-3/4 mx-auto my-4">
                    <p class="mb-2 w-72">Please Enter your new password below</p>
                    <p class="mb-1 text-[#ff9f29] text-xs w-80">Minimum 6 characters with numbers and letters</p>

                    <input type="password" name="new_password" placeholder="new password" class="px-4 w-64 mx-auto ring-1 rounded-md">

                </div>
                <div class="w-3/4 mx-auto my-4">
                    <input type="password" name="retype_password" placeholder="retype password" class="px-4 w-64 mx-auto ring-1 rounded-md">

                </div>

                <div class="w-3/4 mx-auto">
                    <input type="submit" value="Send" class="bg-[#ff9f29] rounded-md mx-4 my-4 px-20 py-1 text-white">
                </div>

            </div>



            <div>
                <card class=" lg:visible invisible">
                    <img src="../resources/img/photo/illustation.jpg" alt="shopping">
                </card>

            </div>

        </main>
    </form>
    <?php include "../common/commonFooter.php" ?>
    <?php include "../common/commonFooterMobile.php" ?>
</body>

</html>