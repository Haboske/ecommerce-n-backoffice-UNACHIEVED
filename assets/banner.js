$(document).ready(function(){
    $('#right').on("click", function(){
        var position = $('.banner').position();
        if(position.left===0||position.left===Number("-"+($('.banner').width()))){
            $('.banner').animate({
                right: (Number(position.left)*(-1))+Number($('.banner').width())+"px",
                
            })
        }
    })
    $('#left').on("click", function(){
        var position = $('.banner').position();
        if(position.left===Number("-"+($('.banner').width()))||position.left===Number("-"+($('.banner').width()*2))){
            $('.banner').animate({
                right: (Number(position.left)*(-1))-Number($('.banner').width())+"px",
                
            })
        }
    })
});

