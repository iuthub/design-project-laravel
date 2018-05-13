$("#btn_toggler").click(function(){
	$("#dropdown_menu").toggle(500);
});
$(".dropdown").hover(function(){
	$("dropdown").child(".dropdown-menu").toggle();
})
