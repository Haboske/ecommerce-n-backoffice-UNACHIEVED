$(document).ready(function(){
        $('#leave').click(function(){
                $('#jqnav').addClass("navigation",)
                $('#jqnav').removeClass("phone_nav");
        }); 
        $('.link_category_type').click(function(){
                $('#jqnav').addClass("phone_nav");
                $('#jqnav').removeClass("navigation");
        });

        $('.banner').click(function(){
                if($('.banner #1').is(":visible")){
                        console.log('le click est bien détecté')
                        $('.banner #1').slideDown();
                        // $('.banner #1').animate({left:"100px"},5000);
                }
        })

        $(".live_vinyl button").click(function(){
                // console.log($(this).html());
                if($(".live_vinyl button").hasClass("onAnimationSvg")){
                        $(".live_vinyl .onAnimationSvg").children("audio").get(0).pause();
                }
                // $(".live_vinyl button.onAnimationSvg").children("audio").get(0).pause();
                if($(this).hasClass('onAnimationSvg')){
                        $(".live_vinyl button").removeClass('onAnimationSvg');
                        // $(this).children("audio").get(0).pause();
                }else{
                        
                        $(".live_vinyl button").removeClass('onAnimationSvg');

                        $(this).addClass('onAnimationSvg');
                
                        $(this).children("audio").get(0).play();
                }
        })
        
})