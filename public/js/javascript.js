$(function(){

	$("#fname_error").hide();
    $("#lname_error").hide();
	$("#email_error").hide();
	$("password_error").hide();
	$("#confirm_error").hide();

	var fname_err=false;
	var lname_err=false;
	var email_err=false;
	var pass_err=false;
	var cpass_err=false;
	
	$("#fname").focusout(function(){
       check_fname();
	});
	$("#lname").focusout(function(){
       check_lname();
	});
	$("#email").focusout(function(){
		check_email();
       
	});
	$("#password").focusout(function(){
       check_password();
	});
	$("#password-confirm").focusout(function(){
       check_confirm_password();
	});

	function check_fname()
	{
		var fname_length = $("#fname").val().length;
		if(fname_length)<0){
	$("fname_error").html("Enter Your First Name")
	fname_err = true;

}
else{
	$("#fname_error").hide();
	}
}
	function check_lname()
	{
		var lname_length = $("#lname").val().length;
		if(lname_length)<5){
	$("lname_error").html("Enter Your Last Name")
	lname_err = true;

}
else{
	$("#lname_error").hide();
	}
}

});