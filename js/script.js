
let hamburgerIcon = document.querySelector('.hamburger-icon');
let linksMenu = document.querySelector('.links');
let icon = document.querySelector('.icon-container');
let parent = document.querySelector('.nav');


hamburgerIcon.addEventListener('click', () => {
  linksMenu.classList.toggle('show');
    icon.classList.toggle('show');


});
// if ($('.hamburger-icon').css('display') == 'none') {
//   linksMenu.classList.remove('show');
//   icon.classList.remove('show');
    
// }

window.addEventListener('resize', () => {
  if (window.innerWidth > 768) {
    linksMenu.classList.remove('show');
    icon.classList.remove('show');
  }
});
// window.addEventListener('resize', () => {
//   if (window.innerWidth <= 768) {
//     parent.innerhtml = `
//     <div class="hamburger-icon">
//     <i class="bi bi-list"></i>
//   </div>
//     `;
//     hamburgerIcon = document.querySelector('.hamburger-icon');
//     hamburgerIcon.addEventListener('click', () => {
//       linksMenu.classList.toggle('show');
//       icon.classList.toggle('show');
//     });
//   }
// });

// modal
$('.signup').click(function () {
  $('.modal').css({
    'display': 'flex'
  });
  // window.scrollTo(0, 0);
  // window.location.href='#';
});

$('.close-modal').click(function () {
  $('.modal').css({
    'display': 'none'
  });
});



  
if (window.location.href.includes('index.html')) {
    let width = $(document).innerWidth();
    if (width < 600) {
        setTimeout(() => {
            $('.modal').css({
                'display': 'flex'
            });
        }, 5000);
    }
}



// third
// let tabs= document.querySelectorAll('.tabs');
let menBtn= document.querySelector('.men');
let womenBtn= document.querySelector('.women');
let men= document.querySelectorAll('.men-card');
let women= document.querySelectorAll('.women-card');
// let tabContents = document.querySelectorAll('.tab-content');





$('.men-btn').click(function () {
  $('.men-btn').addClass('active');
  $('.women-btn').removeClass('active');
  $('.men-card').addClass('active');
  $('.women-card').removeClass('active');
  $('.men-card'.css({
    'transform': 'rotateY(45deg)'
  }));
});
$('.women-btn').click(function () {
  $('.women-btn').addClass('active');
  $('.men-btn').removeClass('active');
  $('.women-card').addClass('active');
  $('.men-card').removeClass('active');
});






// accordian


  $('.question').click(function () {
    let isActive = $(this).hasClass('active');
    $('.question').removeClass('active');
    $('.answer').removeClass('active').slideUp(400);
   if (!isActive) {
      $(this).addClass('active');
      $(this).next('.answer').addClass('active').slideDown(400);
    }
  });
//   $('.question').click(function () {
//     let $this = $(this);
//     let isActive = $this.hasClass('active');

//     $('.question').removeClass('active');
//     $('.answer').removeClass('active').stop(true, true).slideUp(200);

//     if (!isActive) {
//         $this.addClass('active');
//         $this.next('.answer').addClass('active').stop(true, true).slideDown(200);
//     }
// });





  // form

 $(document).ready(function () {
  // Username validation on blur
  $('.username').blur(function () {
    let username = $(this).val().trim();
    const usernamePattern = /^[A-Za-z ]{3,15}$/
;

    if (!usernamePattern.test(username)) {
      $('.username-error').text('Enter a valid username.');
    } else {
      $('.username-error').text('');
    }
  });

  // Email validation on blur
  $('.email').blur(function () {
    let email = $(this).val().trim();
    const emailPattern = /^[A-Za-z][^\s@]*@[^\s@]+\.[^\s@]+$/
;

    if (!emailPattern.test(email)) {
      $('.email-error').text('Enter a valid email address.');
    } else {
      $('.email-error').text('');
    }
  });

  // Message validation on blur
 $('.message').blur(function () {
  let message = $(this).val().trim();
  let pattern = /^[^<>+\-*{}()_^]+$/; // disallow < > + - * ^

  if (message === '') {
    $('.message-error').text('Message is required.');
  } else if (!pattern.test(message)) {
    $('.message-error').text('Message contains invalid characters.');
  } else if (message.length < 30) {
    $('.message-error').text('Message must be at least 30 characters.');
  } else {
    $('.message-error').text('');
  }
});


  
  $('#contactForm').submit(function (e) {
    e.preventDefault();

    let isValid = true;

    let username = $('.username').val().trim();
    let email = $('.email').val().trim();
    let message = $('.message').val().trim();

    // Re-run all field validations on submit
    const usernamePattern = /^[a-zA-Z][a-zA-Z_]{2,14}$/;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const messagePattern = /^[A-Za-z0-9!?@]+@[A-Za-z0-9!?@]+\.[A-Za-z]{2,}$/;


    if (!usernamePattern.test(username)) {
      $('.username-error').text('enter a valid username.');
      isValid = false;
      // alert('enter a valid username.');
    }

    if (!emailPattern.test(email)) {
      $('.email-error').text('Enter a valid email address.');
      isValid = false;
      // alert('Enter a valid email address.');
    }

    if (message === '') {
      $('.message-error').text('Message is required.');
      
      isValid = false;

      // alert('Message is required.');
    }

    if (isValid) {
      alert('Form submitted successfully!');
      $('.username, .email, .message').val('');
    } else {
      alert('Please fix the errors in the form.');
    }
  });
});












