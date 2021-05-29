
$(window),on('load', function() {

	$('.kiri').addClass('kirimuncul')
});	



$(window),scroll(function() {
	var wScroll =$(this).scrollTop();

	$('jumbotron img').css({
		'transform' : 'translate(0px, '+wScroll/4 +'%)'


});
	if (wScroll > $('biayapendaftaran').offset().top -250) {
      $('.biayapendaftaran .galery').each(function(i){
      		setTimeout(function(){
            $('.biayapendaftaran .galery').eq(i).addClass('muncul');
      		}, 300 * (i + 1));


      	});
       



	}
	

	// body...
});




