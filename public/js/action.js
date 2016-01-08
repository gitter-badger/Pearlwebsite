/*$('#SignIn').submit(function(){
		
			$.ajax({
				url : 'login',
				type: 'POST',
				data: {
				name:  $('#we').val(),
				pass: $('#be').val()
				},
				success:function(data){
                                    alert(name , pass);
                                    
                                    $('#we').val('');
                                    $('#be').val('');
                                            
					$('#we-danger').html("");
                                        $('#be-danger').html("");
					
					
				},
				error: function(data){
					var error = data.responseJSON;
						
						if(error.hasOwnProperty('name'))
						{    
							$('#we-danger').html("Enter user name ");
						}else{
							$('#we-danger').html("");
						}

						if (error.hasOwnProperty('pass'))
						{
							$('#be-danger').html("Enter passowrd");
						}else{
							$('#be-danger').html("");
						}

				}
			});
	
		return false;
	});*/
$(document).ready(function(){
  
  
   $('#SignIn').submit(function()
   { 
                    
                    $.ajax({
				url : 'login',
				type: 'POST',
				data: {
				name:  $('#wq').val(),
				pass: $('#bq').val()
				},
				success:function(data){
                                    //alert(name , pass);
                                    alert(data);
                                    $('#wq').val('');
                                    $('#bq').val('');
                                            
					$('#we-danger').html("");
                                        $('#be-danger').html("");
				},
				error: function(data){
					var error = data.responseJSON;
						
						if(error.hasOwnProperty('name'))
						{    
							$('#we-danger').html("Enter user name ");
						}else{
							$('#we-danger').html("");
						}

						if (error.hasOwnProperty('pass'))
						{
							$('#be-danger').html("Enter passowrd");
						}else{
							$('#be-danger').html("");
						}

				}
                            });
   return false;
});

});



