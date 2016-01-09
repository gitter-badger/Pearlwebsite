$(document).ready(function(){
  
  //alert("action here");
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
                       // alert(data);
                        $('#wq').val('');
                        $('#bq').val('');

                            $('#we-danger').html("");
                            $('#be-danger').html("");
                            location.reload();
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



