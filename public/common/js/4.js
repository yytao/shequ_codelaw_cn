$(function(){

    $('.notice-line').click(function(){

        var data_id = $(this).attr('data-id')

        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.post('/notice/single', {
            data_id:data_id
        }, function(res){
            if(res.msg == 'success') {
                $('#new-notice-'+data_id).hide()
            }
        });
    });

    $('#notice-button').click(function(){

        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.post('/notice/clear', {

        }, function(res){
            if(res.msg == 'success') {
                $('.message-right').hide()
            }
        });
    });



});
