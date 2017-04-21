 // main script

var ajax = new XMLHttpRequest();
ajax.open("GET", "dist/svg-icons/icons.svg", true);
ajax.send();
ajax.onload = function(e) {
    var div = document.createElement("div");
    div.innerHTML = ajax.responseText;
    div.style.display = 'none';
    document.body.insertBefore(div, document.body.childNodes[0]);
}

$('.btn-menu-mobile').on('click', function(){
	$('body').toggleClass('menu-opened');
});

$('.select2').select2();
$('.datepicker').datepicker({
	format: 'dd/mm/yyyy',
	language: 'pt-BR'
});

$('.colorpicker-component').colorpicker();

$(".input-file").fileinput();

$('.tablesort').each(function(){
	new Tablesort(this);
});