$(function(){


    $('.top-buttons').click(function(){
        $('.top-buttons').css('background-color','rgb(169,207,249)');
        $(this).css('background-color','rgb(122,146,203)')
    });

    $('.like-tubiao').click(function(){
        if($(this).attr('src')=='./pictures/1/like.png')
            $(this).attr('src','./pictures/1/like2.png');
        else if($(this).attr('src')=='./pictures/1/like2.png')
            $(this).attr('src','./pictures/1/like.png');
    });
    $('.collect-tubiao').click(function(){
        if($(this).attr('src')=='./pictures/1/collect.png')
            $(this).attr('src','./pictures/1/collect2.png');
        else if($(this).attr('src')=='./pictures/1/collect2.png')
            $(this).attr('src','./pictures/1/collect.png');
    });
});
