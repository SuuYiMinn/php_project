<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="../resources/lib/tailwind/output.css?id=<?=time()?>" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>forget Password</title>
</head>
<body>
    <?php include "../common/CommonNavigation.php" ?>
    <main class=" lg:flex w-full h-full justify-between px-20 " >
        <div class="lg:w-1/3 lg:ml-24 sm:w-4/5  mt-16 sm:mx-auto">
            <p class="  text-2xl ml-24">Reset password</p>

            <div class="my-10 w-3/4 mx-auto" >
                <p class="mb-4">Please enter your email</p>
                
            <input type="text" name="email" placeholder="Enter your email" class="w-64 px-4 ring-1 rounded-md">
            <p class=" mt-1 text-xs text-blue-900">In order to identify your identity we have sent a one time code to your email</p>
            <div class="w-64 mt-2">
                <p class="font-bold text-sm text-[#ff9f29] float-right">send code</p>
            </div>
            
           
            </div>
            <div class="w-3/4 mx-auto">
                <p class="my-2">Code</p>
            <input type="password" name="password" placeholder="Enter your code" class="px-4 w-64 mx-auto ring-1 rounded-md">
           
            </div>
             <div class="flex mt-4 mb-8 w-80  justify-between text-xs">
                <p class="sm:ml-12 lg:ml-4">don't recieve the code?</p>
                <p class="font-bold text-sm text-[#ff9f29] float-right">resend code</p>
                
            </div>
            <div class="w-3/4 mx-auto">
                <input type="button" value="Send" class="bg-[#ff9f29] rounded-md mx-4 my-4 px-20 py-1 text-white">
            </div>    
              
        </div>


        <div class="w-3/5 lg:visible sm:invisible ">
            <card class="">
               <img src="../photo/shopping illustation.jpg" alt="shopping"> 
            </card>

        </div>

    </main>
</body>
</html>