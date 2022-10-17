<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>


<script>
	$(document).ready(function(){
	var altura = $('.menu').offset()>20;


	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura && $(window)  ){
			$('.menu').addClass('menu-cambioColor');

		} else {
			$('.menu').removeClass('menu-cambioColor');

		}
	});

});
</script>
