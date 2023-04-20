$(function(){
    var pic1 = document.getElementById("pic1");
    var pic2 = document.getElementById("pic2");
    var pic3 = document.getElementById("pic3");

    $('#text1').click(function(){
        $('#text1').css('color','rgb(177, 176, 176)');
        pic1.style.display = "none";
    });

    $('#text2').click(function(){
        $('#text2').css('color','rgb(177, 176, 176)');
        pic2.style.display = "none";
    });
    
    $('#text3').click(function(){
        $('#text3').css('color','rgb(177, 176, 176)');
        pic3.style.display = "none";
    });

    $('#detail-button').click(function(){
        $('#text1').css('color','rgb(177, 176, 176)');
        $('#text2').css('color','rgb(177, 176, 176)');
        $('#text3').css('color','rgb(177, 176, 176)');
        pic1.style.display = "none";
        pic2.style.display = "none";
        pic3.style.display = "none";

        $('#detail-button').css('background-color','rgb(169,207,249)');
        $(this).css('background-color','rgb(122,146,203)')
    });

    // $('.top-buttons').click(function(){
    //     $('.top-buttons').css('background-color','rgb(169,207,249)');
    //     $(this).css('background-color','rgb(122,146,203)')
    // });
     
});