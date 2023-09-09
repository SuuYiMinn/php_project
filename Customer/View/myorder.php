<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />

  <title>My Order</title>
</head>

<body>


    <?php include "./common/nav_without_search.php" ?>
    <?php include "../Controller/myorderController.php"?>

  <!-- body -->


<p class="text-2xl my-8 text-orange-500 text-center font-medium">My orders</p>
  
<div class="relative overflow-x-auto">
    <table class="w-11/12 lg:w-4/5 text-sm text-left text-gray-500 dark:text-gray-400 mx-auto">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="lg:px-6 px-2 py-1 lg:py-3">
                  No
                </th>
                <th scope="col" class="lg:px-6 px-2 py-1 lg:py-3">
                    Total Amount
                </th>
                <th scope="col" class="lg:px-6 px-2 py-1 lg:py-3">
                   Date
                </th>
                <th scope="col" class="lg:px-6 px-2 py-1 lg:py-3">
                   
                </th>
                
            </tr>
        </thead>
        <tbody>
            <?php $count = 0;
            foreach ($_get_user_order_result as $userOrder) {
                $count++; ?>
               
        
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 order">
                <th scope="row" class="lg:px-6 px-2 py-1 lg:py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <?=$count ?>
                </th>
                <td class="lg:px-6 px-2 py-1 lg:py-3">
                  <?=$userOrder["total_amt"] ?> Ks
                </td>
                <td class="lg:px-6 px-2 py-1 lg:py-3">
                    <?=$userOrder["order_receive_date"] ?>
                </td>
                <td scope="col" class="lg:px-6 px-2 py-1 lg:py-3">
                   <a href="./myorder_detail.php?order_id=<?=$userOrder["id"]?>">View Detail</a>
                </td>
            </tr>
            <?php  } ?>
          
        </tbody>
    </table>
</div>

  </div>
   
   

    
  </body>
  </html>