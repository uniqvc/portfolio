// main script

'use strict';

var UNIQ = {};
UNIQ.ui = {};


UNIQ.ui.scrollHeader = (function() {
	var body = $('body');
	var lastScrollPos = 0;

	function _scrollHandler() {
		var scrollPos = $(this).scrollTop();

		if(_isScrollUp(lastScrollPos, scrollPos)) {
			body.removeClass('header-hidden');

			$('[data-header-white]').each(function(){

				if(_isOnScreen($(this))) {
					body.addClass('header-white');
					return false;
				}

				body.removeClass('header-white');

			})


		} else {

			if(scrollPos > 50) {
				body.addClass('header-hidden');
			} else {
				body.removeClass('header-hidden');
			}

		}

		lastScrollPos = scrollPos;

	}

	function _isScrollUp(lastPos, currentPos){
		return lastPos > currentPos;
	}

	function _isOnScreen(element){
		var viewport = {};
		viewport.top = $(window).scrollTop();
		viewport.bottom = viewport.top + $(window).height();
		var bounds = {};
		bounds.top = element.offset().top;
		bounds.bottom = bounds.top + element.outerHeight();
		return ((bounds.top <= viewport.bottom) && (bounds.bottom >= viewport.top));
	};

	function init() {
		console.log();
		$(window).on('scroll', _scrollHandler);
	};

	return {
		init: init
	};

}());

UNIQ.ui.contact = (function() {

	$("#formContato").on("submit",function(){
		$('#formContato button').attr('disabled',true);
		$.ajax({
			url : 'contact.php'
			, data : $(this).serialize()
			, type : 'POST'
			, success : function(data)
			{
				swal({
				  title: "Enviado"
				  , text: "Obrigado por enviar sua mensagem!"
				  , type: "success"
				}, function(){
					location.href = location.href;
				});
			}
		});
		return false;
	});

});

UNIQ.ui.scrollTo = (function() {
	var elements = $('[data-scrollto]');

	function _clickHandler(event) {
		var id = $(this).attr('href');
		var scroll = $(id).offset().top;

		$('html,body').animate({
        	scrollTop: scroll
        }, 650, 'easeOutExpo');

        $('body').removeClass('menu-opened');

        event.preventDefault();

	}

	function init() {
		elements.on('click', _clickHandler);
	};

	return {
		init: init
	};
}());

UNIQ.ui.scrollHeader.init();
UNIQ.ui.scrollTo.init();
UNIQ.ui.contact.init();

// $('.scroll-to').on('click', function(e) {
// 	var id = $(this).attr('data-id');
// 	var listaMenu = $('.lista-menu');
// 	var scroll = $(window).width() < 890 ? $(id).offset().top : $(id).offset().top - 50;
// 	var menuMobile = $('.nav-toggle-input');

// 	menuMobile.prop('checked', false);

// 	listaMenu.children('li').removeClass('ativo');

// 	$('html,body').animate({
//         scrollTop: scroll //- 50
//     }, 650);

// 	$(this).addClass('ativo');

// 	e.preventDefault();

// });



