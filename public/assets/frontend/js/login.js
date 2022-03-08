$(document).ready(function(){
	
$(document).on('change','#email', function(){
	var email = $("#email").val();
	if(email != ""){
		$("#email_error").text('');
	}		
});	
$(document).on('change','#upassword', function(){
	var upassword = $("#upassword").val();
	if(upassword != ""){
		$("#password_error").text('');
	}		
});

$(document).on('change','#firstname', function(){
	var fname = $("#firstname").val();
	if(fname != ""){
		$("#firstname_error").text('');
	}		
});
$(document).on('change','#lastname', function(){
	var lname = $("#lastname").val();
	if(lname != ""){
		$("#lastname_error").text('');
	}		
});
$(document).on('change','#email', function(){
	var email = $("#email").val();
	if(email != ""){
		$("#email_error").text('');
	}		
});
$(document).on('change','#mobile', function(){
	var mobile = $("#mobile").val();
	if(mobile != ""){
		$("#mobile_error").text('');
	}		
});
$(document).on('change','#upassword', function(){
	var upassword = $("#upassword").val();
	if(upassword != ""){
		$("#password_error").text('');
	}		
});

});