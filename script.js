
$(document).ready(function(){
        $('#leave').click(function(){
                $('#jqnav').addClass("navigation",)
                $('#jqnav').removeClass("phone_nav");
        }); 
        $('.link_category_type').click(function(){
                $('#jqnav').addClass("phone_nav");
                $('#jqnav').removeClass("navigation");
        });
})