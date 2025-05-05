$(function(){
    const myCarouselElement = document.querySelector('#testimonialWrapper')

    const carousel = new bootstrap.Carousel(myCarouselElement, {
    interval: 4000,
    touch: false
    })
    //functionality for the menu popup section
    $('.menuItem').click(function() {
        // Get the target popup ID from the data-target attribute
        var targetPopup = '#' + $(this).data('target');
        
        // Hide all popups first
        $('.menuPopup').removeClass('active');
        
        // Toggle the active class on the targeted popup
        $(targetPopup).toggleClass('active');
    });

    // mobile menu functionality
    $('.hamburgerMenu .fa-times').click(function(){
        $('#mobileMenu').removeClass('show')
    })
    $('.hamburgerMenu .fa-bars').click(function(){
		$('#mobileMenu').toggleClass('show')
	})

})