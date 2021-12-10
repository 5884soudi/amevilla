$(function(){
    $('.btn_box').on('mouseover',function(){
        // $('.border')
    });

    $('.hamburger').on('click',function(){
        $(this).toggleClass('on');
        if($('.hamburger').hasClass('on')) {
            $('.sp-menu').addClass('fadeIn');
        }else{
            $('.sp-menu').removeClass('fadeIn');
        }
    });


});