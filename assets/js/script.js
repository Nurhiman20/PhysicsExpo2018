// event pada saat link diklik
$('.page-scroll').on('click', function(e) {
	let tujuan = $(this).attr('href');

	let elemenTujuan = $(tujuan);

	$('html, body').animate({
		scrollTop: elemenTujuan.offset().top - 80
	}, 1000, 'easeInOutCirc');

	e.preventDefault();
});