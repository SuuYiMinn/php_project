<?php session_start() ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/lib/tailwind/output.css?id=<?=time()?>" rel="stylesheet">
    <link rel="stylesheet" href="./resources/lib/tailwind/input.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Sign Up</title>
</head>
<body>


<?php include "../common/CommonNavigation.php" ?>
<form action="../../Controller/signupController.php" method="post">
    <main class=" lg:flex w-full h-full justify-between px-20 " >
        <div class="w-1/3 mx-auto  mt-16 flex-col">
            <p class=" font-medium text-2xl w-80">Register your account</p>

            
            <div class="my-10" >
                <p class="mb-4 text-orange-500">Please sign up using email</p>
                <p class=" mb-1 text-xs text-blue-900">We will send verification link to your email</p>
            <input type="text" required name="email" placeholder="Enter your email" class="px-4 ring-1 rounded-md  require">
            <div class="w-64">
                <small class="float left text-red-700"><?php 
                if(isset($_SESSION["registerError"])){
                    $_SESSION["registerError"];

                }
                
                ?></small>
            </div>
            <input type="password" required name="password" placeholder="Enter password" class="px-4 ring-1 rounded-md my-5">
            
           
            </div>
        
            <div>
                <input type="submit" value="Register" class="bg-[#ff9f29] rounded-md text-center px-14 py-1 text-white">
            </div>    
              
        </div>


        <div class="w-3/5 lg:visible invisible ">
            <card class="">
               <img src="../resources/img/photo/illustation.jpg" alt="shopping"> 
            </card>

        </div>

    </main>
    </form>
</body>
</html>
<?php $_SESSION["registerError"] = "" ?>