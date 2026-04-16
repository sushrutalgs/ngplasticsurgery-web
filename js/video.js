document.querySelectorAll( ".video-cover" ).forEach( cover => {
    cover.addEventListener( "click", function () {
        let wrapper = this.parentElement;
        let iframe = wrapper.querySelector( "iframe" );

        // ✅ Move data-src → src
        iframe.src = iframe.getAttribute( "data-src" );

        // Show video
        iframe.classList.remove( "d-none" );

        // Remove cover
        this.remove();
    } );
} );