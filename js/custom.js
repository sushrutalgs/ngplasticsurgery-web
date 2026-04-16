document.addEventListener( "DOMContentLoaded", function () {
    if ( window.innerWidth >= 992 ) {
        document.querySelectorAll( '.nav-item.megamenu' ).forEach( function ( item ) {
            item.addEventListener( 'mouseenter', function () {
                this.classList.add( 'show' );
                this.querySelector( '.dropdown-menu' ).classList.add( 'show' );
            } );
            item.addEventListener( 'mouseleave', function () {
                this.classList.remove( 'show' );
                this.querySelector( '.dropdown-menu' ).classList.remove( 'show' );
            } );
        } );
    }
} );



// mobile header js 
document.addEventListener( "DOMContentLoaded", function () {
    // Handle top-level main dropdowns (Surgical Procedure + icon)
    const mainToggleIcons = document.querySelectorAll( ".mobile-main-drop .toggle-icon" );

    mainToggleIcons.forEach( icon => {
        icon.addEventListener( "click", function ( e ) {
            e.preventDefault();
            e.stopPropagation();

            const parent = this.closest( ".mobile-main-drop" );

            // Close other open top-level dropdowns
            document.querySelectorAll( ".mobile-main-drop.open" ).forEach( drop => {
                if ( drop !== parent ) {
                    drop.classList.remove( "open" );
                }
            } );

            // Toggle current dropdown
            parent.classList.toggle( "open" );
        } );
    } );

    // Handle nested dropdowns (Body Treatment, Breast Treatment etc.)
    const nestedToggleIcons = document.querySelectorAll( ".mobile-dropdown .toggle-box" );

    nestedToggleIcons.forEach( icon => {
        icon.addEventListener( "click", function ( e ) {
            e.preventDefault();
            e.stopPropagation();

            const parent = this.closest( ".mobile-dropdown" );

            // Toggle only current nested dropdown
            parent.classList.toggle( "open" );
        } );
    } );
} );



// banner js //

var swiper = new Swiper( ".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    autoplay: {
        delay: 3000,
    },
} );

// testimonail start
var swiper = new Swiper( ".mySwiper1", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 3000,
    },
    loop: true,
} );



var swiper = new Swiper( ".logoswiper", {
    loop: true, // Make it loop infinitely

    autoplay: {
        delay: 2000, 
        disableOnInteraction: false, 
    },

    slidesPerView: 5,
    centeredSlides: false,
    grabCursor: true,


    // pagination: {
    //     el: ".swiper-pagination",
    //     dynamicBullets: true,
    // },
    breakpoints: {
        320: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 5,
        },
    }

} );

var swiper = new Swiper( ".gallery", {
    loop: true, // Make it loop infinitely

    autoplay: {
        delay: 2000, 
        disableOnInteraction: false, 
    },

    slidesPerView: 3,
    spaceBetween: 30,
    centeredSlides: false,
    grabCursor: true,


    // pagination: {
    //     el: ".swiper-pagination",
    //     dynamicBullets: true,
    // },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 3,
        },
    }

} );


// gallery 
$( "[data-fancybox='gallery']" ).fancybox( {
    loop: true,        // loop images
    buttons: [ "zoom", "slideShow", "thumbs", "close" ], // toolbar
    animationEffect: "zoom-in-out"
} );


$( document ).ready( function () {
    $( ".main-tab ul li" ).on( "click", function () {
        // Active Tab Style
        $( ".main-tab ul li" ).removeClass( "active" );
        $( this ).addClass( "active" );

        let tab = $( this ).data( "tab" );

        // Animate Hide All
        $( ".tab-item" ).fadeOut( 300, function () {
            $( this ).addClass( "d-none" );
        } );

        // Animate Show Selected
        setTimeout( function () {
            $( ".tab-item." + tab ).removeClass( "d-none" ).hide().fadeIn( 400 );
        }, 300 );
    } );

    // Initialize Fancybox
    Fancybox.bind( "[data-fancybox='gallery']", {
        Thumbs: false,
        Toolbar: {
            display: [ "close" ]
        },
        dragToClose: true
    } );
} );



