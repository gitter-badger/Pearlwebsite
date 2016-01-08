$('#SignIn').click(function(){
		
			$.ajax({
				url : 'login',
				type: 'POST',
				data: {
				name:  $('#name').val(),
				pass: $('#pass').val()
				},
				success:function(data){
					$('#name').val('');
					$('#pass').val('');

					$('#name-danger').html("");
                                        $('#pass-danger').html("");
					
					
				},
				error: function(data){
					var error = data.responseJSON;
						
						if(error.hasOwnProperty('name'))
						{
							$('#name-danger').html("Enter user name ");
						}else{
							$('#name-danger').html("");
						}

						if (error.hasOwnProperty('pass'))
						{
							$('#phone-danger').html("Enter passowrd");
						}else{
							$('#phone-danger').html("");
						}

				}
			});
	
		return false;
	});