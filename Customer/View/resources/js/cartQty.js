$(document).ready(function () {
  var add_products = $(".add");
  var remove_produts = $(".remove");
  var products_cart = $(".product_cart");

  console.log(add_products);
  console.log(remove_produts);
  console.log(products_cart);

  for (const products of products_cart) {
    for (let index = 0; index < products_cart.length; index++) {
      $(add_products[index]).click(function () {
        var product_id = $(products_cart[index]).attr("id");

        $ajax({
          url: "../Controller/plusQtyController.php",
          type: "POST",
          data: {
            cart_productId: product_id,
          },
          success: function () {},
          error: function () {},
        });
      });
    }
  }
});
