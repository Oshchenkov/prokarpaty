(function($) {
	
	// $ Works! You can test it with next line if you like
    //console.log($);
    // console.log("Yo");


    $('#tur-ecs-filter-block-link > p >a').each(function() {
        if ($(this).attr('href') == location.href) $(this).addClass('active');
    });

    
    // Show all reviews
    $('.tur-ecs2-btn-view-otz').click(function() {
        $('.testimonial_group').fadeIn();
    });
    

     

})( jQuery );