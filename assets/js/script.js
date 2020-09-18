$(function(){

	var links = $('.menu a');

	$(window).scroll(function() {
		var topScroll = $(window).scrollTop();
		links.each(function(){
			var href = $(this).attr('href');
			var el = $(href);
			var posSection = el.offset().top;
			var hSection = el.height();

			if(posSection <= topScroll && (posSection + topScroll) > topScroll){
				links.removeClass('active');
				$(this).addClass('active');

			}else {
				$(this).removeClass('active');
			}
		});
	});

	const menuItems = document.querySelectorAll('.menu a[href^="#"]');

	function getScrollTopByHref(element) {
		const id = element.getAttribute('href');
		return document.querySelector(id).offsetTop;
	}

	function scrollToPosition(to) {
		smoothScrollTo(0, to);
	}

	function scrollToIdOnClick(event) {
		event.preventDefault();
		const to = getScrollTopByHref(event.currentTarget) - 80;
		scrollToPosition(to);
	}

	menuItems.forEach(item => {
		item.addEventListener('click', scrollToIdOnClick);
	});

	function smoothScrollTo(endX, endY, duration) {
		const startX = window.scrollX || window.pageXOffset;
		const startY = window.scrollY || window.pageYOffset;
		const distanceX = endX - startX;
		const distanceY = endY - startY;
		const startTime = new Date().getTime();

		duration = typeof duration !== 'undefined' ? duration : 400;

  // Easing function
  const easeInOutQuart = (time, from, distance, duration) => {
  	if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
  	return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
  };

  const timer = setInterval(() => {
  	const time = new Date().getTime() - startTime;
  	const newX = easeInOutQuart(time, startX, distanceX, duration);
  	const newY = easeInOutQuart(time, startY, distanceY, duration);
  	if (time >= duration) {
  		clearInterval(timer);
  	}
  	window.scroll(newX, newY);
  }, 1000 / 60); // 60 fps
};

});/*End*/