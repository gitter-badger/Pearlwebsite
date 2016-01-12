$(document).ready(function(){
  
  //alert("action here");
   $('#SignIn').submit(function()
   {            
        $.ajax({

                    url : 'login',
                    type: 'POST',
                    data: {
                    name:  $('#wq').val(),
                    pass: $('#bq').val(),
                    ks:$('#kk').is(":checked")
                    },
                    success:function(data){
                        //alert(name , pass);
                        //alert(data)
                        if(data == 0){
                        $('#wq').val('');
                        $('#bq').val('');

                            $('#we-danger').html("");
                            $('#be-danger').html("");
                          //location.reload();
                           $('#signin-faild').html("Sign falied user name or password not found")
                       }
                       else if(data==1)
                       {
                            $('#wq').val('');
                        $('#bq').val('');

                            $('#we-danger').html("");
                            $('#be-danger').html("");
                           location.reload();
                       }  
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


 $('#reservation').submit(function()
   { 
                    
        $.ajax({
                    url : 'serve',
                    type: 'POST',
                    data: {
                    oneval:  $('#v1').val(),
                    twoval:  $('#v2').val(),
                    threeval: $('#v3').val(),
                    rday:$('#sel1').val(),
                    rmonth:$('#sell').val(),
                    cday:$('#sel2').val(),
                    cmonth:$('#mdc').val()
                    },
                    
                    success:function(data){
                      // alert(name , pass);
                      alert(data);
                        $('#v1').val('0');
                        $('#v2').val('0');
                        $('#v3').val('0');
                        
                            $('#we').html("");
                            
                            location.href= "reserve";
                    },
                    error: function(data){
                        
                           $('#we').html("Fill one of them , or enter numbers , or you may be forget to make check in and check out");
                         

                                    

                    }
                });
   return false;
});

    $('#reservatio').submit(function()
      {               
       $.ajax({
           url : 'serve',
           type: 'POST',
           data: {
           oneval:  $('#v1').val(),
           twoval:  $('#v2').val(),
           threeval: $('#v3').val()
           },
           success:function(data){
             // alert(name , pass);
             //alert(data);
               $('#v1').val('0');
               $('#v2').val('0');
               $('#v3').val('0');
               $('#we').html("");
               location.href= "reserve";
           },
           error: function(data){
               $('#we').css({"color":"red"});
               $('#we').html("Enter number of rooms");
           }
       });
      return false;
   });
   
   $('#chechAv').click(function(){
       var sroom = $('#v1').val();
       var droom = $('#v2').val();
       var troom = $('#v3').val();
       
       var dcheckin = $("#rday").val();
       var mcheckin = $('#sell').val();
       var dcheckout = $('#sel1').val();
       var mchechout = $('#mdc').val();
       
       
       if(sroom == 0 && droom == 0 && troom == 0)
       {
           $('#we').css({"color":"red"});
           $('#we').html("Enter number of rooms");
       }else
       {
           $('#we').html("");
           $.ajax({
               url: 'checkAvailability',
               type: 'POST',
               data:{
                   single : sroom,
                   double : droom,
                   tripple: troom,
                   
                   dayin : dcheckin,
                   monthin: mcheckin,
                   dayout : dcheckout,
                   monthout: mchechout
               },
               success:function(data){
                   //alert(data);
                   if(data == 1)
                   {
                      $('#we').css({"color":"green"});
                      $('#we').html("Available"); 
                   }else
                   {
                      $('#we').css({"color":"red"});
                      $('#we').html("Not Available"); 
                   }
                   
               },
               error:function(data){
                   var err = data.responseJSON;
                   alert(data['responseText']);
               }
           });
       }
       
   });

 


    
    $('#uppe').submit(function()
   { 
       
       $.ajax({
                    url : 'upph',
                    type: 'POST',
                    data: {
                    fo1:  $('#newphone').val(),
                    fo2: $('#conphone').val(),
                    em1: $('#newemail').val(),
                    em2: $('#conemail').val()
                    
                    },
                    success:function(data){
                        //alert(name , pass);
                        
                        $('#newphone').val('');
                        $('#conphone').val('');
                        $('#newemail').val('');
                        $('#conemail').val('');

                            $('#pp').html("");
                            $('#cc').html("");
                             $('#gg').html("");
                            $('#ee').html("");
                            $('#ng').html(data);
                            //location.reload();
                    },
                    error: function(data){
                         
                            var error = data.responseJSON;

                                    if(error.hasOwnProperty('fo1'))
                                    {    
                                        
                                            $('#pp').html("Enter Correct phone number ");
                                    }else{
                                            $('#pp').html("");
                                    }

                                    if (error.hasOwnProperty('fo2'))
                                    {
                                            $('#cc').html("phone miss match");
                                    }else{
                                            $('#cc').html("");
                                    }
                                     if (error.hasOwnProperty('em1'))
                                    {
                                            $('#gg').html("Enter Correct email EX: xxxx@xxx.xxx");
                                    }else{
                                            $('#gg').html("");
                                    }
                                     if (error.hasOwnProperty('em2'))
                                    {
                                            $('#ee').html("email miss match");
                                    }else{
                                            $('#ee').html("");
                                    }

                    }
                });
                    
       
            
                  
   return false;
});


$('#uppas').submit(function()
   { 
                    
        $.ajax({
                    url : 'uppaw',
                    type: 'POST',
                    data: {
                        nepas:$('#newpass').val(),
                        copas:$('#conpass').val(),
                    },
                    
                    success:function(data){
                      // alert(name , pass);
                     
                        $('#newpass').val('');
                        $('#conpass').val('');
                       
                        
                            $('#ww').html("");
                             $('#aa').html("");
                             $('#ns').html(data);
                            //location.href= "reserve";
                    },
                    error: function(data){
                        
                        var error = data.responseJSON;
                            if(error.hasOwnProperty('nepas'))
                                    {    
                                        
                                            $('#ww').html("Enter password please");
                                    }else{
                                            $('#ww').html("");
                                    }

                                    if (error.hasOwnProperty('copas'))
                                    {
                                            $('#aa').html("password miss match");
                                    }else{
                                            $('#aa').html("");
                                    }

                                    

                    }
                });
   return false;
});

$('#uppas').submit(function()
   { 
                    
        $.ajax({
                    url : 'uppaw',
                    type: 'POST',
                    data: {
                        nepas:$('#newpass').val(),
                        copas:$('#conpass').val(),
                    },
                    
                    success:function(data){
                      // alert(name , pass);
                     
                        $('#newpass').val('');
                        $('#conpass').val('');
                       
                        
                            $('#ww').html("");
                             $('#aa').html("");
                             $('#ns').html(data);
                            //location.href= "reserve";
                    },
                    error: function(data){
                        
                        var error = data.responseJSON;
                            if(error.hasOwnProperty('nepas'))
                                    {    
                                        
                                            $('#ww').html("Enter password please");
                                    }else{
                                            $('#ww').html("");
                                    }

                                    if (error.hasOwnProperty('copas'))
                                    {
                                            $('#aa').html("password miss match");
                                    }else{
                                            $('#aa').html("");
                                    }

                                    

                    }
                });
   return false;
});
$('#uppas').submit(function()
   { 
                    
        $.ajax({
                    url : 'uppaw',
                    type: 'POST',
                    data: {
                        nepas:$('#newpass').val(),
                        copas:$('#conpass').val(),
                    },
                    
                    success:function(data){
                      // alert(name , pass);
                     
                        $('#newpass').val('');
                        $('#conpass').val('');
                       
                        
                            $('#ww').html("");
                             $('#aa').html("");
                             $('#ns').html(data);
                            //location.href= "reserve";
                    },
                    error: function(data){
                        
                        var error = data.responseJSON;
                            if(error.hasOwnProperty('nepas'))
                                    {    
                                        
                                            $('#ww').html("Enter password please");
                                    }else{
                                            $('#ww').html("");
                                    }

                                    if (error.hasOwnProperty('copas'))
                                    {
                                            $('#aa').html("password miss match");
                                    }else{
                                            $('#aa').html("");
                                    }

                                    

                    }
                });
   return false;
});

$('#ad').submit(function()
   { 
                    
        $.ajax({
                    url : 'add',
                    type: 'POST',
                    data: {
                        sw:$('#sel1').val(),
                        num:$('#ads').val(),
                    },
                    
                    success:function(data){
                      // alert(name , pass);
                     
                        $('#ads').val('');
                       
                             
                            //location.href= "reserve";
                             location.reload();
                    },
                    error: function(data){
                        
                         var error = data.responseJSON;
                            if(error.hasOwnProperty('nepas'))
                                    {    
                                        
                                            $('#ee').html("Enter password please");
                                    }else{
                                            $('#ee').html("");
                                    }

                    }
                });
   return false;
});

$('#del').submit(function()
   { 
       
                    
        $.ajax({
                    url : 'dele',
                    type: 'POST',
                    data: {
                        fw:$('#sel2').val(),
                        nums:$('#ade').val(),
                    },
                    
                    success:function(data){
                      // alert(name , pass);
                     
                        $('#ade').val('');
                       
                             
                            //location.href= "reserve";
                          location.reload();
                    },
                    error: function(data){
                       
                        var error = data.responseJSON;
                            if(error.hasOwnProperty('nums'))
                                    {    
                                        
                                            $('#vv').html("Enter Numbers please");
                                    }else{
                                            $('#vv').html("");
                                    }

                                   

                                    

                    }
                });
   return false;
});




$('#admin-addon').submit(function(e){
       
        $.ajax({
            url: 'mang',
            type: 'POST',
            data: $('#admin-addon').serialize(),
            success:function(data){
                /*********************/
                alert(data)
                $('#userdanger').html('');
                $('#emaildanger').html('');
                $('#genderdanger').html('');
                $('#phonedanger').html('');
                $('#passworddanger').html('');
                $('#confirmdanger').html('');
                $('#subsucc').html(data);
                /********************/
                $('input[name="username"]').val('');
                $('input[name="email"]').val('');
                $('input[name="phone"]').val('');
                $('input[name="password"]').val('');
                $('input[name="confirmpassword"]').val('');
                
                /*********************/
                // page should reload here
                //location.reload();
            },
            error: function(data){
                var err = data.responseJSON;
                /********************/
                
                if(err.hasOwnProperty('username'))
                {
                    
                   $('#user').html(err['username']);
                }else{
                    $('#user').html('');
                }

                /********************/
                if(err.hasOwnProperty('email'))
                {
                   
                    $('#email').html(err['email']);
                }else{
                    $('#email').html('');
                }
                /*****************/
                 if(err.hasOwnProperty('gender'))
                {
                    $('#gender').html(err['gender']);
                }else{
                    $('#gender').html('');
                }
                /****************/
                 if(err.hasOwnProperty('phone'))
                {
                    $('#phone').html(err['phone']);
                }else{
                    $('#phone').html('');
                }
                /****************/
                if(err.hasOwnProperty('password'))
                {
                    $('#password').html(err['password']);
                }else{
                    $('#password').html('');
                }
                /******************/
                if(err.hasOwnProperty('confirmpassword'))
                {
                    if( err['confirmpassword'] == "The confirmpassword field is required.")
                    {
                        $('#confirm').html('confirm password is required');
                    }else
                    {
                        $('#confirm').html("The password and confirm password must match");
                    }
                } 
                /*****************/
            }
        });
        return false;
    });
});



