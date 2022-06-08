

jQuery(function($) {
    // Hides the CT Listing Slider on the Listing page when the custom slider is used.
    $('img.custom-slider-image').each(function () {
        var src = $(this).attr('src');
        if (!src) {
            //$(this).page-icon.addClass('hide');
            $("#listings-five-gallery").addClass('show-this');
        } else {
            $("#listings-five-gallery").addClass('hide-this');
        }
    });

    $("#listings-five-gallery").addClass('hide-this');

})


window.onload = function() {
	document.getElementById('listing-map-heading').className = 'info-toggle-open';
	document.getElementById('listing-prop-features').className = 'info-toggle-open';
};

 


