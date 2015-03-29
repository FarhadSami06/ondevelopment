$(function youtube() {
if ($(window).width() < 600) {
   		$(".youtube").YouTubeModal({autoplay:0, width: 350, height: 263});
}
else {
   $(".youtube").YouTubeModal({autoplay:0, width: 600, height: 450});
}
	});

