$(function(){
    $("a[click-action='return']").click(function (){
        window.history.back()
    })


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

                    $('#like-btn'+article_id).attr('src','/common/pictures/1/like2.png');
                    $('#like-btn'+article_id).attr('data-status', 'del')
                }else if(res.status == 'del'){
                    $('#like-btn'+article_id).attr('src','/common/pictures/1/like.png');
                    $('#like-btn'+article_id).attr('data-status', 'add')
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

                    $('#collect-btn'+article_id).attr('src','/common/pictures/1/collect2.png');
                    $('#collect-btn'+article_id).attr('data-status', 'del')
                }else if(res.status == 'del'){

                    $('#collect-btn'+article_id).attr('src','/common/pictures/1/collect.png');
                    $('#collect-btn'+article_id).attr('data-status', 'add')
                }
            } else {

            }
        });
    });

    $('#mask').click(function(){
        $(this).css('display', 'none')
        $('#comment-form').css('display', 'none')
    });

});
