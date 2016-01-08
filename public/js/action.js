$(function(){
    
    $('#signup').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'signup',
            type: 'POST',
            data: $('#signup').serialize(),
            success:function(data){
                alert(data);
            },
            error: function(data){
                alert("error");
            }
        });
    });
});
