var check = false;

function changeVal(el) {
  var qt = parseFloat(el.parent().children(".qt").html());
  var price = parseFloat(
    el.parent().children(".price").html().replace("R$", "").replace(",", ".")
  );
  var eq = Math.round(price * qt * 100) / 100;

  el.parent()
    .children(".full-price")
    .html(eq.toLocaleString("pt-BR", { style: "currency", currency: "BRL" }));

  changeTotal();
}

function changeTotal() {
  var price = 0;

  $(".full-price").each(function (index) {
    var priceValue = parseFloat(
      $(".full-price").eq(index).html().replace("R$", "").replace(",", ".")
    );
    price += priceValue;
  });

  price = Math.round(price * 100) / 100;

  var shipping = parseFloat(
    $(".shipping span").html().replace("R$", "").replace(",", ".")
  );
  var fullPrice = Math.round((price + shipping) * 100) / 100;

  if (price == 0) {
    fullPrice = 0;
  }

  $(".subtotal span").html(
    price.toLocaleString("pt-BR", { style: "currency", currency: "BRL" })
  );
  $(".total span").html(
    fullPrice.toLocaleString("pt-BR", { style: "currency", currency: "BRL" })
  );
}
function addToCart(productName, price, category) {
  // Aqui você pode adicionar o produto ao carrinho
  // Por exemplo, você pode usar o localStorage para armazenar os itens do carrinho

  // Exemplo de adição ao localStorage:
  var cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart.push({ name: productName, price: price, category: category });
  localStorage.setItem("cart", JSON.stringify(cart));

  // Depois de adicionar ao carrinho, você pode redirecionar o usuário para a página do carrinho
  window.location.href = "carrinho.html";
}

$(document).ready(function () {
  $(".remove").click(function () {
    var el = $(this);
    el.parent().parent().addClass("removed");
    window.setTimeout(function () {
      el.parent()
        .parent()
        .slideUp("fast", function () {
          el.parent().parent().remove();
          if ($(".product").length == 0) {
            if (check) {
              $("#cart").html(
                "<h1>The shop does not function, yet!</h1><p>If you liked my shopping cart, please take a second and heart this Pen on <a href='https://codepen.io/ziga-miklic/pen/xhpob'>CodePen</a>. Thank you!</p>"
              );
            } else {
              $("#cart").html("<h1>No products!</h1>");
            }
          }
          changeTotal();
        });
    }, 200);
  });

  $(".qt-plus").click(function () {
    $(this)
      .parent()
      .children(".qt")
      .html(parseInt($(this).parent().children(".qt").html()) + 1);

    $(this).parent().children(".full-price").addClass("added");

    var el = $(this);
    window.setTimeout(function () {
      el.parent().children(".full-price").removeClass("added");
      changeVal(el);
    }, 150);
  });

  $(".qt-minus").click(function () {
    child = $(this).parent().children(".qt");

    if (parseInt(child.html()) > 1) {
      child.html(parseInt(child.html()) - 1);
    }

    $(this).parent().children(".full-price").addClass("minused");

    var el = $(this);
    window.setTimeout(function () {
      el.parent().children(".full-price").removeClass("minused");
      changeVal(el);
    }, 150);
  });

  window.setTimeout(function () {
    $(".is-open").removeClass("is-open");
  }, 1200);

  $(".btn").click(function () {
    check = true;
    $(".remove").click();
  });
});
