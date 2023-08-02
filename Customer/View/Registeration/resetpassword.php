<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <link href="../resources/lib/tailwind/output.css?id=<?=time()?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Reset Password</title>
</head>
<body>
<?php include "../common/CommonNavigation.php" ?>
    <main class=" flex-col lg:flex-row w-full h-full justify-evenly" >

    <form action="../../Controller/resetpasswordController.php" method="post">
        <div class="w-1/3 mt-16 mx-auto">
            <p class="text-2xl mx-auto my-10 w-64">Reset password</p>

            <div class="w-3/4 mx-auto my-4">
                <p class="mb-2 w-72">Please Enter your new password below</p>
                <p class="mb-1 text-[#ff9f29] text-xs w-80">Minimum 6 characters with numbers and letters</p>
                
            <input type="password" name="new password" placeholder="new password" class="px-4 w-64 mx-auto ring-1 rounded-md">
           
            </div>
            <div class="w-3/4 mx-auto my-4">
            <input type="password" name="retype password" placeholder="retype password" class="px-4 w-64 mx-auto ring-1 rounded-md">
           
            </div>
             
            <div class="w-3/4 mx-auto">
                <input type="submit" value="Send" class="bg-[#ff9f29] rounded-md mx-4 my-4 px-20 py-1 text-white">
            </div>    
              
        </div>
        </form>


        <div>
            <card class="visible">
               <img src="../resources/img/photo/illustation.jpg" alt="shopping"> 
            </card>

        </div>

    </main>
</body>
</html>