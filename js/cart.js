// navbar
let hamburgerIcon = document.querySelector('.hamburger-icon');
let linksMenu = document.querySelector('.links');
let icon = document.querySelector('.icon-container');
let parent = document.querySelector('.nav');

hamburgerIcon.addEventListener("click", () => {
  linksMenu.classList.toggle("show");
  icon.classList.toggle("show");
});
$('.signup').click(function () {
  $('.modal').css({
    'display': 'flex'
  });
});

$('.close-modal').click(function () {
  $('.modal').css({
    'display': 'none'
  });
});





$(".promo button").click(function () {
  const promoCode = $(".promo input").val().trim();
  //   alert(promoCode);

  if (promoCode === "First500") {
    $(".Discount").addClass("active");

    //    ubDatePrice();
    let total = parseInt($(".total-amount").text().slice(3));
    let discount = 500;
    total = total - discount;
    $(".total-val").text(`Rs. ${total}`);
  } else {
    $(".discount").css("display", "none");
  }
});

let upDate = parseInt($(".count p").text());

function updateCountDisplay() {
  $(".count p").text(upDate);
  if (upDate <= 1) {
    $(".bi-dash").addClass("disable");
  } else {
    $(".bi-dash").removeClass("disable");
  }
}

$(".bi-plus").click(function () {
  upDate++;
  updateCountDisplay();
  $(".total-amount").text(`Rs. ${upDate * 2000}`);
  $(".Subtotal").text(`Rs. ${upDate * 2000}`);
  $(".total-val").text(`Rs. ${upDate * 2000}`);
});

$(".bi-dash").click(function () {
  if (upDate > 1) {
    upDate--;
    updateCountDisplay();
    $(".total-amount").text(`Rs. ${upDate * 2000}`);
    $(".Subtotal").text(`Rs. ${upDate * 2000}`);
    $(".total-val").text(`Rs. ${upDate * 2000}`);
  }
});

// Initialize variables

// function ubDatePrice() {
//     const total = subtotal - discount;
//   $('.total-val').text(Rs. ${total});
// }
$(".bi-trash").click(function () {
 
 
 
  $(".total-amount").text(`Rs. 0`);
  $(".Subtotal").text(`Rs. 0`);
  $(".total-val").text(`Rs. 0`);
  $(".count p").text(0);
  upDate = 0;
  updateCountDisplay();
});

$(".checkout-btn").click(function () {
  $(".cart").css({
    display: "none",
  }); 
  $(".checkout").css({
    display: "flex",
  });
}); 