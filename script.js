
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
})