$(document).ready(function(){


  

    $('#obForm').submit(function(e){

        e.preventDefault();
        var formData = new FormData($(this)[0]);
        var url = $(this).attr('action');
        
        $.ajax({
            type:'POST',
            url:url,
            data:formData,
            cache:false,
            contentType:false,
            processData:false,
            success:function(data){
                console.log(data.success);
                $('#obForm')[0].reset();
            },
            error:function(data){
                console.log(data.error);
            }

        });

        


    });
});

