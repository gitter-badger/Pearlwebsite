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
                   alert(data);
               },
               error:function(data){
                   var err = data.responseJSON;
                   alert(data['responseText']);
               }
           });
       }
       
   });
 

});



