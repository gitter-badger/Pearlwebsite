$(function(){
   
   /***********************/
    $('#signup').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: '/signup',
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
    $('#logout').click(function(){
       
        $.ajax({
            url: '/logout',
            type: 'POST',
            success: function(data){
                location.reload();
            },
            error  : function(data){
                
            }
        });
    });
    /**************************/
    $('#prof').click(function(){
        location.href = 'profile';
    });
    
    
    $('#cont-form').submit(function(e){
        e.preventDefault();
        alert("contact submitted");
    });
});
