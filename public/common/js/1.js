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



    $("#launch").click(function(){
        window.location.href = "/post"
    })
});
