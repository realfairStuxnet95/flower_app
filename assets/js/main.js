$(document).ready(function(){
	var input=[];
	var loader=$("#preLoader");
	var redirectUrl="";
	$("#frm_add_review").submit(function(e){
		e.preventDefault();
		var comment=$("#comment").val();
		var author=$("#author").val();
		var email=$("#email").val();
		var flower=$("#flower").val();

		input[0]='add_review';
		input[1]=comment;
		input[2]=author;
		input[3]=email;
		input[4]=flower;
		serverRequest(input,true,loader,redirectUrl)
	});
});
function showLoader(loaderReference){
	loaderReference.show();
}
function hideLoader(loaderReference){
		loaderReference.hide();
}
function serverRequest(input,hasLoader,loaderReference,redirectUrl){
	var url="Dashboard/request_handler";
	if(hasLoader==true){
		showLoader(loaderReference);
	}
	$.post(url,{
		input:input
	},function(response){
		if(hasLoader){
			hideLoader(loaderReference);
		}
		if(response.match("200")){
			alert("Your Review have been sent successfully");
			location.reload();
		}else{
			alert(response);
		}
		
	});
}