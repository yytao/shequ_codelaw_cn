$(function(){
    // $('.tag').click(function(){
    //     $('.tag').css('color','rgb(127,127,127)');
    //     $('.tag').css('text-decoration','none');
    //     $(this).css('color','black')
    //     $(this).css('text-decoration','underline 0.3vw');
    // });

    $('.top-buttons').click(function(){
        $('.top-buttons').css('background-color','rgb(169,207,249)');
        $(this).css('background-color','rgb(122,146,203)')
    });

    $('.like-btn').click(function(){

        var user_id = $('#user_id').val()
        var article_id = $(this).attr('data-id')
        var status = $(this).attr('data-status')
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.post('/article/star', {
            user_id:user_id,
            article_id:article_id,
            status:status
        }, function(res){
            if(res.msg == 'success') {
                if(res.status == 'add'){

                    $('#like-btn').attr('src','/common/pictures/1/like2.png');
                    $('#like-btn').attr('data-status', 'del')
                }else if(res.status == 'del'){
                    $('#like-btn').attr('src','/common/pictures/1/like.png');
                    $('#like-btn').attr('data-status', 'add')
                }
            } else {

            }
        });

    });


    $('.collect-btn').click(function(){
        
        var user_id = $('#user_id').val()
        var article_id = $(this).attr('data-id')
        var status = $(this).attr('data-status')
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.post('/article/collect', {
            user_id:user_id,
            article_id:article_id,
            status:status
        }, function(res){
            if(res.msg == 'success') {
                if(res.status == 'add'){

                    $('#collect-btn').attr('src','/common/pictures/1/collect2.png');
                    $('#collect-btn').attr('data-status', 'del')
                }else if(res.status == 'del'){
                    $('#collect-btn').attr('src','/common/pictures/1/collect.png');
                    $('#collect-btn').attr('data-status', 'add')
                }
            } else {

            }
        });









    });


    $("#launch").click(function(){
        window.location.href = "/post"
    })
});
