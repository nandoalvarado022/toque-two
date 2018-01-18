$(document).ready(function(){
	if ($("#search-block-form").length != 0) {
		$("#search-block-form").submit(function(e){
			e.preventDefault();			
			window.location="http://toquesports.com/search/node/"+$("#search-block-form #edit-keys").val();;			
		})
		
	}
})