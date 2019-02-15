// event pada saat link diklik
$('.page-scroll').on('click', function(e) {
	let tujuan = $(this).attr('href');

	let elemenTujuan = $(tujuan);

	$('html, body').animate({
		scrollTop: elemenTujuan.offset().top - 80
	}, 1000, 'easeInOutCirc');

	e.preventDefault();
});

$(window).scroll(function(){
	var wScroll = $(this).scrollTop();

	if ( wScroll > $('.gambar').offset().top - 350) {
		$('.gambar').addClass('gambarMuncul');
		$('.deskripsi').addClass('deskripsiMuncul');
	}

	if ( wScroll > $('.informasi').offset().top - 350) {
		$('.judulTimeline').addClass('munculJudulTimeline');
		$('.gambarTimeline').addClass('munculGambarTimeline');
	}

	if ( wScroll > $('.informasi').offset().top - 100) {
		$('.hadiah').each(function(i) {
			setTimeout(function() {
				$('.hadiah').eq(i).addClass('munculHadiah');
			}, 300 * (i+1));
		});
	}
});