$(function(){
   
   /***********************/
    $('#signup').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'signup',
            type: 'POST',
            data: $('#signup').serialize(),
            success:function(data){
                /*********************/
                $('#userdanger').html('');
                $('#emaildanger').html('');
                $('#genderdanger').html('');
                $('#phonedanger').html('');
                $('#passworddanger').html('');
                $('#confirmdanger').html('');
                /********************/
                $('input[name="username"]').val('');
                $('input[name="email"]').val('');
                $('input[name="phone"]').val('');
                $('input[name="password"]').val('');
                $('input[name="confirmpassword"]').val('');
                /*********************/
                // page should reload here
                location.reload();
            },
            error: function(data){
                var err = data.responseJSON;
                
               // alert(JSON.stringify(err));
                
                /********************/
                if(err.hasOwnProperty('username'))
                {
                   $('#userdanger').html(err['username']);
                }else{
                    $('#userdanger').html('');
                }

                /********************/
                if(err.hasOwnProperty('email'))
                {
                   
                    $('#emaildanger').html(err['email']);
                }else{
                    $('#emaildanger').html('');
                }
                /*****************/
                 if(err.hasOwnProperty('gender'))
                {
                    $('#genderdanger').html(err['gender']);
                }else{
                    $('#genderdanger').html('');
                }
                /****************/
                 if(err.hasOwnProperty('phone'))
                {
                    $('#phonedanger').html(err['phone']);
                }else{
                    $('#phonedanger').html('');
                }
                /****************/
                if(err.hasOwnProperty('password'))
                {
                    $('#passworddanger').html(err['password']);
                }else{
                    $('#passworddanger').html('');
                }
                /******************/
                if(err.hasOwnProperty('confirmpassword'))
                {
                    if( err['confirmpassword'] == "The confirmpassword field is required.")
                    {
                        $('#confirmdanger').html('confirm password is required');
                    }else
                    {
                        $('#confirmdanger').html("The password and confirm password must match");
                    }
                }else{
                    $('#confirmdanger').html('');
                }
                /*****************/
            }
        });
        
        
        
    });
});
