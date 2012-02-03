// function to process form response
function processForm(html) {
		$('#errorEcho').hide();
		if (html == '1') {
			window.location.href = "index.php";
		} else {
			$('#errorEcho').text(html).show('slow');
		}
}

$(document).ready(function() {
	console.log('test');
	$('#loginForm').submit(function(eve){
		eve.preventDefault();
		$.ajax({
			url: "index.php/account/process_login",
			type: "POST",
			dataType: "html",
			data: $('#loginForm').serialize(),
			beforeSend: function(){
				// ... add the ajax loading animation in the future
			},
		  	success: function(html) {
		    	processForm(html);
		 	}
		});
	});	
});


