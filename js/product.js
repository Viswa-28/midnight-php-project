let hamburgerIcon = document.querySelector('.hamburger-icon');
let linksMenu = document.querySelector('.links');
let icon = document.querySelector('.icon-container');
let parent = document.querySelector('.nav');

hamburgerIcon.addEventListener("click", () => {
  linksMenu.classList.toggle("show");
  icon.classList.toggle("show");
});

$(".signup").click(function () {
  $(".modal").css({
    display: "flex",
  });
});

$(".close-modal").click(function () {
  $(".modal").css({
    display: "none",
  });
});

// let width = $(document).innerWidth();
// if (width < 600) {
//   setTimeout(() => {
//     $(".modal").css({
//       display: "flex",
//     });
//   }, 5000);
// }

$(".size").click(function () {
  $(".size").removeClass("active");
  $(this).addClass("active");
});

// count

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
  });

  $(".bi-dash").click(function () {
    if (upDate > 1) {
      upDate--;
      updateCountDisplay();
    }
  });
  // updateCountDisplay();

