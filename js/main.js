jQuery(function($) {
  $('.desplazar').on('click', function(e) {
      e.preventDefault();
      var scrollTo = $(this).attr('href'); // retrieve the hash using .attr()

      if (scrollTo != null && scrollTo != '') {
          $('html, body').animate({
              scrollTop: $(scrollTo).offset().top
          }, 1500);
      }
  });
});



$(window).on('load', function() {
    // init Isotope
    var $grid = $('.grid').isotope({
        itemSelector: '.element-item',
        layoutMode: 'fitRows',
        getSortData: {
            name: '.name',
            symbol: '.symbol',
            number: '.number parseInt',
            category: '[data-category]',
            weight: function(itemElem) {
                var weight = $(itemElem).find('.weight').text();
                return parseFloat(weight.replace(/[\(\)]/g, ''));
            }
        }
    });

    // filter functions
    var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function() {
            var number = $(this).find('.number').text();
            return parseInt(number, 10) > 50;
        },
        // show if name ends with -ium
        ium: function() {
            var name = $(this).find('.name').text();
            return name.match(/ium$/);
        }
    };

    // bind filter button click
    $('#filters').on('click', 'a', function() {
        var filterValue = $(this).attr('data-filter');
        var idData = $(this).attr('data-id-button');

        console.log("Sección elegida es: ", idData)

        $('#filters .btn').removeClass('activo');
        $('#' + idData).addClass('activo');

        // use filterFn if matches value
        filterValue = filterFns[filterValue] || filterValue;
        $grid.isotope({
            filter: filterValue
        });
    });


    // change is-checked class on buttons
    $('.button-group').each(function(i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });


});
// =========================================================================================================
// ===========================		Configuración Slider Principal		====================================
// =========================================================================================================
// var mySwiper = new Swiper('.swiper-container', {
//     // Optional parameters
//     direction: 'horizontal',
//     loop: true,
//     // Navigation arrows
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
//     autoplay: {
//         delay: 4000,
//     },
// })




$('.main-carousel').flickity({
    // options
    cellAlign: 'left', 
    autoPlay: true, 
    pauseAutoPlayOnHover: true, 
    contain: true, 
    pageDots: false

  });


// =========================================================================================================
// ===========================		Funciones del menú		================================================
// =========================================================================================================
// $('.menu-button').on('click', function(event) {
//     event.preventDefault();
//     $('#menu').toggle("fast")
// });

// $('.dropdown .dropbtn').click(function(event) {
//     event.preventDefault();

//     var anchura = $(window).width();
//     console.log("Anchura es igual a: ", anchura);

//     if (anchura > 760) {
//         // console.log();
//         window.open($(this).attr('href'), '_self');
//     } else {
//         $(this).parent().find('.dropdown-content').toggle("slow", function() {
//             console.log("Toggle");
//         });
//     }

// });
// =========================================================================================================
// ===========================		Inicia la vista de la galería al dar click		========================
// =========================================================================================================
// var lightbox = new SimpleLightbox('.gallery div a', { /* options */ });


// =========================================================================================================
// ===========================		Colorea el menú activo en la barra superior		========================
// =========================================================================================================
// var path = window.location.pathname.replace('\/', '');
// $(".menu li a[href='" + path + "']").addClass('active');


// =========================================================================================================
// ===========================		Inicializa el zoom en las imagenes		================================
// =========================================================================================================
// $('#ex1').zoom({
//     'magnify': '2'
// });



// =========================================================================================================
// ===========================		Botón de subir		====================================================
// =========================================================================================================
// window.onscroll = scrollFunction;

// function scrollFunction() {
//     if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
//         document.getElementById("arriba").style.display = "block";
//     } else {
//         document.getElementById("arriba").style.display = "none";
//     }
// };

// function topFunction() {
//     document.body.scrollTop = 0; // For Chrome, Safari and Opera 
//     document.documentElement.scrollTop = 0; // For IE and Firefox
// };


// https://meet.google.com/qjm-ixgr-oyt