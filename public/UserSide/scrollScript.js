const header = document.querySelector('.header');
    window.addEventListener(  'scroll', function() {
       var top = window.scrollY;
       console.log(top);
       if (top >= 50) {
          header.classList.add('active');
       } else {
          header.classList.remove('active');

       }
    });