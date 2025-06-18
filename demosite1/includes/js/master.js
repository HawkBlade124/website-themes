$(function(){
    // Carousel initialization with existence check
    const myCarouselElement = document.querySelector('#testimonialWrapper');
    if (myCarouselElement) {
        const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 700,
            touch: false
        });
    }

    // Menu item popup toggle
    $('.menuItem').on('click', function() {
        var $this = $(this);
        var targetId = $this.data('target');
        var isMobile = $this.closest('#menuWrapperMobile').length > 0;

        // Determine the scope of menu items and popups based on device
        var $allMenuItems = isMobile
            ? $('#menuWrapperMobile .menuItem')
            : $('#menuWrapper .menuItem');
        var $allPopups = isMobile
            ? $('#menuWrapperMobile .innerMenuWrapper')
            : $('#menuWrapper .menuPopup');
        var $popup = isMobile
            ? $this.siblings('.innerMenuWrapper')
            : $('#' + targetId);

        // Remove active class from all menu items and popups
        $allMenuItems.removeClass('active');
        $allPopups.removeClass('active');

        // Add active class to the clicked menu item and its corresponding popup
        $this.addClass('active');
        $popup.addClass('active');
    });

    // Mobile menu functionality
    $('.closeMobileMenu').click(function(){
        $('#mobileMenu').removeClass('show');
    });
    $('.openMobileMenu').click(function(){
        $('#mobileMenu').toggleClass('show');
    });
    $('#overlay').click(function(){
        $('#mobileMenu').removeClass('show');
    });
    $('.dropClick i').click(function(){
        $(this).parents('.mobileNavlistLink').children('.mobileDropDown').slideToggle();
    });
    $('.navlistLink').on('click', function() {
        const $dropdown = $(this).find('.dropdown');
        $('.dropdown').not($dropdown).hide(); // Hide other open dropdowns
        $dropdown.toggle(); // Toggle the clicked dropdown
    });
});