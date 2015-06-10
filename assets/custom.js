(function($) {
	$(document).ready(function(){
		$(".btn-test").click(function(){
			$('.ui.modal').modal('show');
			console.log("Click !");
		});
	});
})(jQuery);