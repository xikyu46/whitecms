
$(document).ready(function(){$(".alert").addClass("in").fadeOut(4500);

/* swap open/close side menu icons */
$('[data-toggle=collapse]').click(function(){
  	// toggle icon
  	$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
});
});
var base_url =  $("meta[name=base_url]").attr('content'); 


var formGeneral = function(formID,url){
	if(formID !== undefined){
		$(document).ready(function(){
			$(formID).validate({
				onkeyup: false,
				errorPlacement: function(error, element){
					$(element).closest(".controls").append(error); 
				},
				submitHandler: function() {
					if(url != undefined){
						var form_action = url;  
					}else{
						var form_action = $(formID).attr("action");  
					}
					var form_method = $(formID).attr("method");
					var form_result1 = $(formID).attr("result1");
					var form_result2 = $(formID).attr("result2");
					var form_result3 = $(formID).attr("result3");
					var skipMessage = $(formID).attr("skipMessage");
					var confirmation = $(formID).attr("confirm");
					
					var options = { 
						type : form_method,
						url:form_action, 
						dataType:'json',
						success: function(data){
							if(data.resultCode == 1000){
								if(skipMessage === undefined){
									bootbox.alert(data.resultMsg,function(){
										
											if(form_result1 !== undefined){
												// execute function on success
												eval(form_result1);
											}
											if(form_result2 !== undefined){
												// execute function on success
												eval(form_result2);
											}
											if(form_result3 !== undefined){
												// execute function on success
												eval(form_result3);
											}
											// check internal action
// 											resultData = data.resultData;
											if(data.resultData){
												if(data.resultData.actionResult1){
	// 											if(resultData.hasOwnProperty('actionResult1')){
													eval(data.resultData.actionResult1);
												}
												
												if(data.resultData.openUrl){
													window.location.href=data.resultData.openUrl;
												}
											}
										
									});
								}else{
									
										if(form_result1 !== undefined){
											// execute function on success
											eval(form_result1);
										}
										if(form_result2 !== undefined){
											// execute function on success
											eval(form_result2);
										}
										if(form_result3 !== undefined){
											// execute function on success
											eval(form_result3);
										}
										
										if(data.resultData){
											if(data.resultData.actionResult1){
												eval(data.resultData.actionResult1);
											}
											
											if(data.resultData.openUrl){
												window.location.href=data.resultData.openUrl;
											}
										}
									
								}
							}else{
								bootbox.alert(data.resultMsg);
							}
						}
					};
					if(confirmation !== undefined){
						bootbox.confirm(confirmation,function(result){
							if(result === true){
								$(formID).ajaxSubmit(options);
							}
						});
					}else{
						$(formID).ajaxSubmit(options);
					}
					return false;
				}
			});	
		});
	}
}
