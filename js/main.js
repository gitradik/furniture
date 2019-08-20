$('.telegram').submit(function (e) {
    e.preventDefault();
    const orderLoader = document.getElementById('pageLoaderId');
    orderLoader.classList.remove('d-none');
    $.ajax({
        type: 'POST',
        url: '/ovitta/wp-content/themes/furniture/api-telegram.php',
        data: $(this).serialize()
    }).done(() => {
        window.location = '/';
        setTimeout(() => orderLoader.classList.add('d-none'), 0);
    });
});

function onClickFormModal(title, idTitle, location, idLocation) {
    document.getElementById(idTitle).innerText = title;
    document.getElementById(idLocation).value = location;
}

$(".smooth-anchor").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    } // End if
});

const handleClick = (e) => {
    const hamList = document.getElementById('hamListId');
    const ham = document.getElementById('mainNavBarToggleId');
    const childrensHamMenu = [...hamList.childNodes];
    if (childrensHamMenu.includes(e.target) || childrensHamMenu.includes(e.target)) {
        return;
    }
    if (hamList.classList.contains('show')) {
        ham.click();
    }
};

document.addEventListener('mousedown', handleClick, false);

$(".slider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    prevArrow: '<button class="arrow-slider prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="arrow-slider next-arrow"><i class="fas fa-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            }
        }
    ],
});

$(".video-slider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    arrows: false,
});

$(".list-slider").slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<button class="arrow-slider prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="arrow-slider next-arrow"><i class="fas fa-chevron-right"></i></button>',
});

AOS.init();