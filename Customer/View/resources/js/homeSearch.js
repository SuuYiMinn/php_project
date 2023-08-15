$(document).ready(function () {
  $("#home_search").keyup(function () {
    product_search($(this).val());
  
  });
  $("#home_search_mobile").keyup(function () {
    product_search($(this).val());
  });

  function product_search(search) {

    console.log("hello");
    $.ajax({
      url: "../Controller/homeSearchController.php",
      type: "POST",
      data: {
        SearchText: search,
      },
      success: function (res) {

        console.log(res);
        $("#home_main_section").empty();
        $("#home_main_section").removeClass("overflow-x-hidden");
        $("#home_main_section").addClass("flex");
        $("#home_main_section").addClass("flex-wrap");
        $("#home_main_section").addClass("h-full");

        let search_products = JSON.parse(res);

        for (const search_product of search_products) {
          var discount = "";
          var normal_price = "";

          if (search_product["p_discount"] != null) {
            discount = `<p class="text-orange-500 lg:text-xs text-[9px] mt-2 ml-2">${search_product["p_discount"]}%off</p>`;
            normal_price = `<p class="lg:text-xs text-center line-through text-[9px]">${search_product["p_sell_price"]}</p>`;

            var price =
              search_product["p_sell_price"] -
              (search_product["p_discount"] / 100) *
                search_product["p_sell_price"];
          } else price = search_product["p_sell_price"];

          $("#home_main_section").append(
            ` <a href="./detailpage.php?productid=${search_product["id"]}" class="lg:w-60 w-40 lg:h-60 h-40 bg-white drop-shadow-md mt-2" id ="${search_product["id"]}">
                      <!-- product image -->
                      <div class="w-full lg:h-2/3 h-3/5 relative">
                      </div>
                      <!-- product information -->
                      <div class="flex justify-evenly lg:h-1/3 h-2/5 bg-yellow-50">
                          <div>
                              <p class="text-center lg:text-[13px] font-semibold text-[11px]">${search_product["p_title"]}</p>
                              <p class=" lg:block text-xs text-center hidden ">${search_product["p_des"]}</p>
                              ${discount}
                          
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
                              ${normal_price}
                               
          
                          </div>
                      </div>
                  </a>`
          );
        }
      },
      error: function (error) {
        console.log(error);
      },
    });
  }
});
