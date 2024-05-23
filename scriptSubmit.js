$(document).ready(function(){

	$('#formsubmit').click(function(){
		$.post("submitForm.php", 
			{derj: $('#derj').val()}, 
			function(data){
				
				$('#getDerj').html(data);
			}
		);
		
	});

});