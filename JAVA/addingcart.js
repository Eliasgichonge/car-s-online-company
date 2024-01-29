const categories = [
  ...new Set(
    product.map((item) => {
      return item;
    })
  ),
];
let i = 0;
document.getElementById("root").innerHTML = categories
  .map((item) => {
    var { image, title, price } = item;
    return (
      `<div class='box'>
            <div class='img-box'>
            <img class='images' src=${image}></img>
            </div>
            <div class='bottom'>
            <p>${title}</p>
            <h2>Tshs. ${price}.00</h2>` +
      "<button onclick='addtocart(" +
      i++ +
      ")'>Add to cart</button>" +
      `</div>
            </div>`
    );
  })
  .join("");

var cart = [];

function addtocart(a) {
  cart.push({ ...categories[a] });
  displaycart();
}

function delElement(a) {
  cart.splice(a, 1);
  displaycart();
}

function displaycart(a) {
  let j = 0,
    total = 0;
  document.getElementById("count").innerHTML = cart.length;
  if (cart.length == 0) {
    document.getElementById("cartItem").innerHTML = "your cart is empty";
    document.getElementById("total").innerHTML = "Tshs. " + 0 + ".00";
  } else {
    document.getElementById("cartItem").innerHTML = cart
      .map((items) => {
        var { image, title, price } = items;
        total += price;
        document.getElementById("total").innerHTML = "Tshs. " + total + ".00";
        return (
          `
                    <div class='cart-item'>
                    <div class='row-img'>
                    <img class='rowimg' src= ${image}></img>
                    </div>
                    <div class='right'>
                    <p>${title}</p>
                    <h2>Tshs. ${price}.00</h2>` +
          "<button class='fa-solid fa-trash' onclick='delElement(" +
          j++ +
          ")'>remove</button>"
        );
      })
      .join("");
  }
}
