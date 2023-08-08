$(document).ready(function () {

var category = $(".cate_item");


for (const sub_category of category) {
   $(sub_category).click(function () {


   
    $.ajax({
      url: "../Controller/filterSub_cateController.php",
      type : "POST",
      data:{ 
         subcate_id :  $(this).attr("id") 
      },
      success:  function (res) {
        $(".filter_sub_category").empty();

         let filter_sub_category = JSON.parse(res);
         console.log(filter_sub_category);
        

         for (const subCate_product of filter_sub_category) {

            if((subCate_product["p_discount"])!=null){

                var price =subCate_product["p_sell_price"] - (((subCate_product["p_discount"])/100 )  * (subCate_product["p_sell_price"]) ) ;
             }else price = subCate_product["p_sell_price"];

            

        if(1=1){
            var x ='<p class="lg:text-xs text-center line-through text-[9px]">Ks <span> ${subCate_product["p_sell_price"]}</span></p> <?php } ?>'
        }

            $(".filter_sub_category").append(
               ` <a href="./detailpage.php?productid=${subCate_product["id"]}" class="lg:w-60 w-40 h-full bg-white drop-shadow-md mt-2" id ="${subCate_product["id"]}">
               <!-- product image -->
               <div class="w-full lg:h-2/3 h-3/5 relative">
               </div>
               <!-- product information -->
               <div class="flex justify-evenly lg:h-1/3 h-2/5 bg-yellow-50">
                   <div>
                       <p class="text-center lg:text-[13px] font-semibold text-[11px]">${subCate_product["p_title"]}</p>
                       <p class=" lg:block text-xs text-center hidden ">${subCate_product["p_des"]}</p>
                   
                   </div>
                   <div>
                       <div class="flex mt-1 ml-3 text-orange-500">
                           <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                           <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                           <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                           <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
                           <ion-icon name="star-outline" class="lg:w-3 lg:h-3 w-2 h-2 mr-[1px]"></ion-icon>
   
                       </div>
                       <p class=" text-center lg:text-[13px] text-[11px] font-semibold text-orange-500 mt-1 w-16 ml-1">Ks <span>${price}</span></p>
                       <?php if((${subCate_product["p_discount"]})!=null){?>
                        <?php if((${subCate_product["p_discount"]})!=null){?> <p class="text-orange-500 lg:text-xs text-[9px] mt-2 ml-2">${subCate_product["p_discount"]}<span>%off</span></p><?php }?>
   
                   </div>
               </div>
           </a>`             
               )
            
         }


        
         
      },
      error: function (error) {

         console.log(error);
         
      }
    })


   
    
   });
    
}



});


function ChooseCategory( ) {
    
}


