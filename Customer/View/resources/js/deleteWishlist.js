$(document).ready(function () {
    var deleteWishlist = $(".delete_wishlist");
    var wishlistProducts =$("wishlist_products")

    for (let index = 0; index < deleteWishlist.length; index++) {
      $(deleteWishlist[index]).click(function () {
        
        let product_id = $[wishlistProducts].attr("id");

        $.ajax({
            url: "../Controller/homeSearchController.php",
            type: "POST",
            data: {
              ProductId: product_id,
            },
            success: function (res) {
              
      
              
            },
            error: function () {},
          });

      })
        
    }
})