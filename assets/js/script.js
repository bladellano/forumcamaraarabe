$(function(){

	/* Adiciona class active */
	$('.menu a[href^="#"]').click(function(e) {
		e.preventDefault();
		$('.menu a[href^="#"]').parent().removeClass('active');
		$(this).parent().addClass('active');
	});

	/* Botão que surge no rodapé p/ levar até o topo.*/
	$(window).scroll(function (e) {
		if ($(this).scrollTop() > 4500) {
			$('.topo').fadeIn();
		} else {
			$('.topo').fadeOut();
		}
	});

	$('.topo').click(function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: 0
		}, 500)
	});

	const menuItems = document.querySelectorAll('.menu a[href^="#"],.navbar-nav li a[href^="#"]');

	function getScrollTopByHref(element) {
		const id = element.getAttribute('href');

		if(!$(id).length)/* Retorna ao index se não encontrar ids */
			return location.href = './'+id;

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