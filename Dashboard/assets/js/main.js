$(document).ready(function(){
	var preLoader=$("#preLoader");
	var innerLoader=$(".preLoader");
	var input=[];

	$("#sign_in").submit(function(e){
		e.preventDefault();
		var username=$("#username").val();
		var password=$("#password").val();

		input[0]='login_user';
		input[1]=username;
		input[2]=password;

		hideLoginError();
		serverRequest(input,true,preLoader,'home');
	});
	$("a.delete_flower").click(function(){
		var flower_id=$(this).attr("flower");
		if(confirm("Do you really want to delete this flower ?")){
			input[0]="delete_flower";
			input[1]=flower_id;
			serverRequest(input,false,preLoader,'?action=manage_flowers');
		}
	});
	$("a.add_photos").click(function(){
		var flower_id=$(this).attr("flower");
		var name=$(this).attr("name");
		$('#photoModal').modal('toggle');
		$("#flowLabel").html("Adding More for Flower: <span class='badge badge-danger'>"+name+"</span>");
		$("#flower_id").val(flower_id);
	});
	$("#frm_add_photos").submit(function(e){
		e.preventDefault();
        $.ajax({
            url:"upload_photos",
            method:"POST",
            data: new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            success:function(data)
            {
            	if(data.match("200")){
            		location.reload();
            	}else{
            		alert(data);
            	}
            }
        });
	});
	$("#upload_form").submit(function(e){
		e.preventDefault();
        $.ajax({
            url:"save_flower",
            method:"POST",
            data: new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            success:function(data)
            {
            	if(data.match("200")){
            		location.reload();
            	}else{
            		alert(data);
            	}
            }
        });
	});
});

function showLoader(loaderReference){
	loaderReference.show();
}
function hideLoader(loaderReference){
		loaderReference.hide();
}
function showLoginError(msg){
	$("#divErrors").show().html(msg);
	$("#preLoader").hide();
}
function hideLoginError(){
	$("#divErrors").hide();
}
function serverRequest(input,hasLoader,loaderReference,redirectUrl){
	var url="request_handler";
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
			window.location=redirectUrl;
		}else if(response.match("404")){
			showLoginError("<strong>Invalid credentials.</strong>Please check your Username and Password");
		}else if(response.match("403")){
			alert("<strong>System Error.</strong>Please contact your system Admin");
		}else{
			alert(response);
		}
	});
}