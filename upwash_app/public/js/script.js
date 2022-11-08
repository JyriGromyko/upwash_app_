function createSlick(){  

	$(".slider").not('.slick-initialized').slick({
		centerMode: true,
	    autoplay: false,
	    dots: true,
	    infinite: false,
	
  		slidesToShow: 1,
	    responsive: [{ 
	        breakpoint: 768,
	        settings: {
	            dots: true,
	            arrows: false,
	            infinite: false,
	            slidesToShow: 1,
	            slidesToScroll: 1
	        } 
	    }]
	});	

}

createSlick();

//Will not throw error, even if called multiple times.
$(window).on( 'resize', createSlick );