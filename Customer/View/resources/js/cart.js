$(document).ready(function () {

  temp_total = [];
  product_id_ar = [];
  amount_ar = [];
  qty_ar = [];
  p_title_ar = [];
  total = 0;;
  shippingfees = Number($("#shippingFees").html());
  grand_total(total, shippingfees);

  for (let index = 0; index < $productDetail_result.length; index++) {
    qty = Number($(`[qty=${index}]`).html());

    sell_price = $productDetail_result[index][0]["p_sell_price"];
    item_total = sell_price * qty;

    $(`[item_total = ${index}]`).html(item_total);
    if ($(`#${index}`).is(":checked")) {
      sub_total(item_total);
    }
  }

  $(`input[ added ]`).click(function () {
    item_count = Number($("#item_count").html());
    id = $(this).attr("added");
    item_total = Number($(`[item_total = ${id}]`).html());

    if ($(`#${id}`).is(":checked")) {
      sub_total(item_total);
      item_count += 1;
      $("#item_count").html(item_count);

    } else {
      remove_item(item_total);
      item_count -= 1;
      $("#item_count").html(item_count);

    }
  });

  // quantity plus
  $(`[ plus ]`).click(function () {
    id = $(this).attr("plus");
    sell_price = $productDetail_result[id][0]["p_sell_price"];
    qty = Number($(`[qty=${id}]`).html());
    qty = qty + 1;

    $(`[qty=${id}]`).html(qty + "");
    find_total(sell_price, qty, id);
  });

  // quantity minus
  $(`[ minus ]`).click(function () {
    id = $(this).attr("minus");
    qty = Number($(`[qty=${id}]`).html());
    if (qty != 1) {
      qty = qty - 1;
      $(`[ qty = ${id}]`).html(qty);
      sell_price = $productDetail_result[id][0]["p_sell_price"];

      find_total(sell_price, qty, id);
    }
  });

  // remove
  $(`[ del ]`).click(function () {
    id = $(this).attr("del");
    $(`div[ item_no = ${id}]`).remove();
  });

  // total of each items
  function find_total(sell_price, qty, id) {
    pre_item_total = Number($(`[item_total = ${id}]`).html());
    item_total = sell_price * qty;
    $(`[item_total = ${id}]`).html(item_total);
    temp_total.push(item_total);
    if ($(`#${id}`).is(":checked")) {
      total = total - pre_item_total;
      sub_total(item_total);
    }
  }

  // sub total
  function sub_total(item_total) {
    total = total + item_total;
    $("#subtotal").html(`Ks ${total}`);
    grand_total(total, shippingfees);
  }

  function remove_item(item_total) {
    total = total - item_total;
    $("#subtotal").html(`Ks ${total}`);
    grand_total(total, shippingfees);
  }

  // grand total
  function grand_total(total, shippingfees) {
    grandtotal = total + shippingfees;
    $("#total").html(grandtotal);
    $(`[name = total]`).attr(`value`, grandtotal);
    // console.log($(`[name = total]`).attr("value"));
  }

  // carrying data
  $("#proceed").click(function (event) {
    event.preventDefault();
    for (let index = 0; index < $productDetail_result.length; index++) {
      if ($(`#${index}`).is(":checked")) {
        // carry product id
        product_id_ar.push({
          [`item_no_${index}`]: $productDetail_result[index][0]["id"],
        });
        id_string = JSON.stringify(product_id_ar);
        $(`[name = product_id]`).attr(`value`, id_string);

        // carry qty
        qty = Number($(`[qty=${index}]`).html());
        qty_ar.push({ [`item_no_${index}`]: qty });
        qty_string = JSON.stringify(qty_ar);
        $(`[name = qty]`).attr(`value`, qty_string);

        // carry amount
        item_total = Number($(`[item_total = ${index}]`).html());
        amount_ar.push({ [`item_no_${index}`]: item_total });
        amt_string = JSON.stringify(amount_ar);
        $(`[name = amount]`).attr(`value`, amt_string);

        // carry title
        p_title = $(`[p_title = ${index}]`).html();
        p_title_ar.push({ [`item_no_${index}`]: p_title });
        p_title_string = JSON.stringify(p_title_ar);
        $(`[name = p_title]`).attr(`value`, p_title_string);

      }
    }
    $("#target").trigger("submit");
  });
});
