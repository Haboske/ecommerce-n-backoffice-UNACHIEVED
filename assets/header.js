var nameRegex=/^[a-zA-Z']{2,}$/;
var emailRegex=/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var passwordRegex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!%*?&.]{8,}$/;
var passwordMediumRegex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

$(document).ready(function(){
    $('#connected').hide(0)
    $('#register_Form').hide(0);
    $('#connexion').hide(0);
    $('#register_success').hide(0);
    $('.link_account_t').click(function(){
        $('#connexion').show();
        $('#connexion_popup').show();
        $('#register_Form').hide(0);
        $('#login_Form').show(0);
        $('.popup_back').hide(0);


        $('#connexion_popup').css({"-webkit-animation":"slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both"})
        $('#connexion_popup').css({"animation":"slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both"})

        $('#login_Form h3').css({"-webkit-animation":"slide-in-right 1s ease-in-out both"});
        $('#login_Form h3').css({"animation":"slide-in-right 1s ease-in-out both"});

        $('#login_Email_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 100ms both"});
        $('#login_Email_Div').css({"animation":"slide-in-right 1s ease-in-out 100ms both"});

        $('#login_Pass_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 200ms both"});
        $('#login_Pass_Div').css({"animation":"slide-in-right 1s ease-in-out 200ms both"});

        $('#login_Submit').css({"-webkit-animation":"slide-in-right 1s ease-in-out 300ms both"});
        $('#login_Submit').css({"animation":"slide-in-right 1s ease-in-out 300ms both"});

        $('#fg_pass').css({"-webkit-animation":"slide-in-right 1s ease-in-out 400ms both"});
        $('#fg_pass').css({"animation":"slide-in-right 1s ease-in-out 400ms both"});

        $('#new_account').css({"-webkit-animation":"slide-in-right 1s ease-in-out 500ms both"});
        $('#new_account').css({"animation":"slide-in-right 1s ease-in-out 500ms both"});

        $('#connexion_popup').css({"height":"39rem"});
    })
    $('.popup_close').click(function(e){
        e.preventDefault();
        $('#connexion_popup').css({"-webkit-animation":"slide-out-top 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both"})
        $('#connexion_popup').css({"animation":"slide-out-top 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both"})

        setTimeout(function(){ $('#connexion').hide(0); },500);
        setTimeout(function(){ $('#login_Form').hide(0); },500);
    })
    
    
    //////////////////////////////////
    // ANIMATION FORMULAIRE DE LOGIN VERS FORMULAIRE D'ENREGISTREMENT (UI)
    //////////////////////////////////
    $('#new_account').click(function(){

        $('#login_Form h3').css({"-webkit-animation":"slide-out-left 1s ease-in-out both"});
        $('#login_Form h3').css({"animation":"slide-out-left 1s ease-in-out both"});

        $('#login_Email_Div').css({"-webkit-animation":"slide-out-left 1s ease-in-out 100ms both"});
        $('#login_Email_Div').css({"animation":"slide-out-left 1s ease-in-out 100ms both"});

        $('#login_Pass_Div').css({"-webkit-animation":"slide-out-left 1s ease-in-out 200ms both"});
        $('#login_Pass_Div').css({"animation":"slide-out-left 1s ease-in-out 200ms both"});

        $('#login_Submit').css({"-webkit-animation":"slide-out-left 1s ease-in-out 300ms both"});
        $('#login_Submit').css({"animation":"slide-out-left 1s ease-in-out 300ms both"});

        $('#fg_pass').css({"-webkit-animation":"slide-out-left 1s ease-in-out 400ms both"});
        $('#fg_pass').css({"animation":"slide-out-left 1s ease-in-out 400ms both"});

        $('#new_account').css({"-webkit-animation":"slide-out-left 1s ease-in-out 500ms both"});
        $('#new_account').css({"animation":"slide-out-left 1s ease-in-out 500ms both"});

        
        setTimeout(function(){ $('#login_Form').hide(0,function(){
             
            $('#register_Form').show(0);
            $('#register_FirstName_Div').show(0);
            $('#register_LastName_Div').show(0)
            $('#register_Radio').show(0);
            $('#register_Continue').show(0);
            $('#register_Form h3').show(0);
            $('.popup_back').show(0).addClass('back_Register_Name');
            
            $('#register_Email_Div').hide(0);
            $('#register_Pass_Div').hide(0);
            $('#register_Pass_Confirm_Div').hide(0);
            $('#register_RGPD_Div').hide(0);
            $('#register_Submit_Div').hide(0);
            $('#error_Register_Pass_Confirm').hide(0);
            $('#error_Register_Pass').hide(0);
            $('#error_Register_Email').hide(0);

        }); },900);
        
        $('#register_Form h3').css({"-webkit-animation":"slide-in-right 1s ease-in-out both"});
        $('#register_Form h3').css({"animation":"slide-in-right 1s ease-in-out both"});

        $('#register_FirstName_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 100ms both"});
        $('#register_FirstName_Div').css({"animation":"slide-in-right 1s ease-in-out 100ms both"});

        $('#register_LastName_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 200ms both"});
        $('#register_LastName_Div').css({"animation":"slide-in-right 1s ease-in-out 200ms both"});
        

        $('#register_Radio').css({"-webkit-animation":"slide-in-right 1s ease-in-out 300ms both"});
        $('#register_Radio').css({"animation":"slide-in-right 1s ease-in-out 300ms both"});

        $('#register_Continue').css({"-webkit-animation":"slide-in-right 1s ease-in-out 400ms both"});
        $('#register_Continue').css({"animation":"slide-in-right 1s ease-in-out 400ms both"});

        $('#connexion_popup').css({"animation":"popupbigger 1s ease-in-out 300ms both","height":"41rem"});
        
        $('.popup_back').css({"-webkit-animation":"slide-in-top 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both"})
        $('.popup_back').css({"animation":"slide-in-top 1s cubic-bezier(0.250, 0.460, 0.450, 0.940) both"})
    
        
    });

    $('.popup_back').click(function(){

        console.log("qsdq")

        if($(this).hasClass('back_Register_Name')){

            

            $('#register_Form h3').css({"-webkit-animation":"slide-out-right 1s ease-in-out both"});
            $('#register_Form h3').css({"animation":"slide-out-right 1s ease-in-out both"});
    
            $('#register_FirstName_Div').css({"-webkit-animation":"slide-out-right 1s ease-in-out 100ms both"});
            $('#register_FirstName_Div').css({"animation":"slide-out-right 1s ease-in-out 100ms both"});
    
            $('#register_LastName_Div').css({"-webkit-animation":"slide-out-right 1s ease-in-out 200ms both"});
            $('#register_LastName_Div').css({"animation":"slide-out-right 1s ease-in-out 200ms both"});
            
    
            $('#register_Radio').css({"-webkit-animation":"slide-out-right 1s ease-in-out 300ms both"});
            $('#register_Radio').css({"animation":"slide-out-right 1s ease-in-out 300ms both"});
    
            $('#register_Continue').css({"-webkit-animation":"slide-out-right 1s ease-in-out 400ms both"});
            $('#register_Continue').css({"animation":"slide-out-right 1s ease-in-out 400ms both"});
    
            $('#connexion_popup').css({"animation":"popupbigger 1s ease-out-out 300ms both","height":"41rem"});
            
            $('.popup_back').css({"-webkit-animation":"slide-out-top 1s ease-in-out both"})
            $('.popup_back').css({"animation":"slide-out-top 1s ease-in-out both"})
      
            
            
            setTimeout(function(){ $('#login_Form').hide(0,function(){

                $('#register_Form').hide(0);
                $('#register_FirstName_Div').hide(0);
                $('#register_LastName_Div').hide(0)
                $('#register_Radio').hide(0);
                $('#register_Continue').hide(0);
                $('#register_Form h3').hide(0);
                $('.popup_back').hide(0).removeClass('back_Register_Name');
                
                $('#login_Form').show(0);
                $('#login_Form h3').show(0);
                $('#login_Email_Div').show(0);
                $('#login_Pass_Div').show(0);
                $('#login_Submit').show(0);
                $('#fg_pass').show(0);
                $('#new_account').show(0);

            }); },900);
            
            $('#login_Form h3').css({"-webkit-animation":"slide-in-left 1s ease-in-out both"});
            $('#login_Form h3').css({"animation":"slide-in-left 1s ease-in-out both"});
    
            $('#login_Email_Div').css({"-webkit-animation":"slide-in-left 1s ease-in-out 100ms both"});
            $('#login_Email_Div').css({"animation":"slide-in-left 1s ease-in-out 100ms both"});
    
            $('#login_Pass_Div').css({"-webkit-animation":"slide-in-left 1s ease-in-out 200ms both"});
            $('#login_Pass_Div').css({"animation":"slide-in-left 1s ease-in-out 200ms both"});
    
            $('#login_Submit').css({"-webkit-animation":"slide-in-left 1s ease-in-out 300ms both"});
            $('#login_Submit').css({"animation":"slide-in-left 1s ease-in-out 300ms both"});
    
            $('#fg_pass').css({"-webkit-animation":"slide-in-left 1s ease-in-out 400ms both"});
            $('#fg_pass').css({"animation":"slide-in-left 1s ease-in-out 400ms both"});
    
            $('#new_account').css({"-webkit-animation":"slide-in-left 1s ease-in-out 500ms both"});
            $('#new_account').css({"animation":"slide-in-left 1s ease-in-out 500ms both"});
    
    
        }
        
        if($(this).hasClass('back_Register_Email')){
            
            $('#register_Email_Div').css({"-webkit-animation":"slide-out-right 1s ease-in-out both"});
            $('#register_Email_Div').css({"animation":"slide-out-right 1s ease-in-out both"});
        
            $('#register_Pass_Div').css({"-webkit-animation":"slide-out-right 1s ease-in-out 100ms both"});
            $('#register_Pass_Div').css({"animation":"slide-out-right 1s ease-in-out 100ms both"});
        
            $('#register_Pass_Confirm_Div').css({"-webkit-animation":"slide-out-right 1s ease-in-out 200ms both"});
            $('#register_Pass_Confirm_Div').css({"animation":"slide-out-right 1s ease-in-out 200ms both"});
        
            $('#register_RGPD_Div').css({"-webkit-animation":"slide-out-right 1s ease-in-out 300ms both"});
            $('#register_RGPD_Div').css({"animation":"slide-out-right 1s ease-in-out 300ms both"});
        
            
            setTimeout(function(){ $('#register_FirstName_Div').show(0); },900);
            setTimeout(function(){ $('#register_LastName_Div').show(0); },900);
            setTimeout(function(){ $('#register_Radio').show(0); },900);
            setTimeout(function(){ $('#register_Continue').show(0); },900);
            
            setTimeout(function(){ $('#register_Email_Div').hide(0); },900);
            setTimeout(function(){ $('#register_Pass_Div').hide(0); },900);
            setTimeout(function(){ $('#register_Pass_Confirm_Div').hide(0); },900);
            setTimeout(function(){ $('#register_RGPD_Div').hide(0); },900);
            // setTimeout(function(){ $('#register_Submit').show(0); },900);
    
            $('#register_FirstName_Div').css({"-webkit-animation":"slide-in-left 1s ease-in-out both"});
            $('#register_FirstName_Div').css({"animation":"slide-in-left 1s ease-in-out both"});
    
            $('#register_LastName_Div').css({"-webkit-animation":"slide-in-left 1s ease-in-out 100ms both"});
            $('#register_LastName_Div').css({"animation":"slide-in-left 1s ease-in-out 100ms both"});
            
    
            $('#register_Radio').css({"-webkit-animation":"slide-in-left 1s ease-in-out 200ms both"});
            $('#register_Radio').css({"animation":"slide-in-left 1s ease-in-out 200ms both"});
    
            $('#register_Continue').css({"-webkit-animation":"slide-in-left 1s ease-in-out 300ms both"});
            $('#register_Continue').css({"animation":"slide-in-left 1s ease-in-out 300ms both"});
    
            $('.popup_back').removeClass('back_Register_Email')
            $('.popup_back').addClass('back_Register_Name')
        }

        if($(this).hasClass('back_Register_Confirm')){

            $('#register_Submit_Div').css({"-webkit-animation":"slide-out-right 1s ease-in-out 100ms both"});
            $('#register_Submit_Div').css({"animation":"slide-out-right 1s ease-in-out 100ms both","margin-top":"auto"});
  
            setTimeout(function(){ $('#register_Submit_Div').hide(0); },900);

            setTimeout(function(){ $('#register_Email_Div').show(0); },900);
            setTimeout(function(){ $('#register_Pass_Div').show(0); },900);
            setTimeout(function(){ $('#register_Pass_Confirm_Div').show(0); },900);
            setTimeout(function(){ $('#register_RGPD_Div').show(0); },900);

            $('#register_Email_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out both"});
            $('#register_Email_Div').css({"animation":"slide-in-right 1s ease-in-out both"});
        
            $('#register_Pass_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 100ms both"});
            $('#register_Pass_Div').css({"animation":"slide-in-right 1s ease-in-out 100ms both"});
        
            $('#register_Pass_Confirm_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 200ms both"});
            $('#register_Pass_Confirm_Div').css({"animation":"slide-in-right 1s ease-in-out 200ms both"});
        
            $('#register_RGPD_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 300ms both"});
            $('#register_RGPD_Div').css({"animation":"slide-in-right 1s ease-in-out 300ms both"});
        
            $('.popup_back').removeClass('back_Register_Confirm').addClass('back_Register_Email')

        }


    });
    //////////////////////////////////
    // FIN ANIMATION FORMULAIRE DE LOGIN VERS FORMULAIRE D'ENREGISTREMENT (UI)
    //////////////////////////////////
    
    //////////////////////////////////
    // ANIMATION FORMULAIRE DE FORMULAIRE D'ENREGISTREMENT VERS FORMULAIRE D'ENREGISTREMENT 2 (UI)
    //////////////////////////////////

    $('#register_Continue').click(function(){
        if(nameRegex.test($("#register_Lastname").val())&&nameRegex.test($("#register_Firstname").val())){
            $('#register_FirstName_Div').css({"-webkit-animation":"slide-out-left 1s ease-in-out both"});
            $('#register_FirstName_Div').css({"animation":"slide-out-left 1s ease-in-out both"});
    
            $('#register_LastName_Div').css({"-webkit-animation":"slide-out-left 1s ease-in-out 100ms both"});
            $('#register_LastName_Div').css({"animation":"slide-out-left 1s ease-in-out 100ms both"});
            
    
            $('#register_Radio').css({"-webkit-animation":"slide-out-left 1s ease-in-out 200ms both"});
            $('#register_Radio').css({"animation":"slide-out-left 1s ease-in-out 200ms both"});
    
            $('#register_Continue').css({"-webkit-animation":"slide-out-left 1s ease-in-out 300ms both"});
            $('#register_Continue').css({"animation":"slide-out-left 1s ease-in-out 300ms both"});
    
            setTimeout(function(){ $('#register_FirstName_Div').hide(0); },900);
            setTimeout(function(){ $('#register_LastName_Div').hide(0); },900);
            setTimeout(function(){ $('#register_Radio').hide(0); },900);
            setTimeout(function(){ $('#register_Continue').hide(0); },900);
            
            setTimeout(function(){ $('#register_Email_Div').show(0); },900);
            setTimeout(function(){ $('#register_Pass_Div').show(0); },900);
            setTimeout(function(){ $('#register_Pass_Confirm_Div').show(0); },900);
            setTimeout(function(){ $('#register_RGPD_Div').show(0); },900);
            // setTimeout(function(){ $('#register_Submit').show(0); },900);
    
            $('#register_Email_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out both"});
            $('#register_Email_Div').css({"animation":"slide-in-right 1s ease-in-out both"});
        
            $('#register_Pass_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 100ms both"});
            $('#register_Pass_Div').css({"animation":"slide-in-right 1s ease-in-out 100ms both"});
        
            $('#register_Pass_Confirm_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 200ms both"});
            $('#register_Pass_Confirm_Div').css({"animation":"slide-in-right 1s ease-in-out 200ms both"});
        
            $('#register_RGPD_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 300ms both"});
            $('#register_RGPD_Div').css({"animation":"slide-in-right 1s ease-in-out 300ms both"});
        
            $('.popup_back').removeClass('back_Register_Name')
            $('.popup_back').addClass('back_Register_Email')
        }else{
            if(!nameRegex.test($("#register_Firstname").val())){
                $('#error_Register_Firstname').show(0);
            }
            if(!nameRegex.test($("#register_Lastname").val())){
                $('#error_Register_Lastname').show(0);
            }
        }
        
    })

    //////////////////////////////////
    // FIN ANIMATION FORMULAIRE DE FORMULAIRE D'ENREGISTREMENT VERS FORMULAIRE D'ENREGISTREMENT 2 (UI)
    //////////////////////////////////

    //////////////////////////////////
    // VERIFICATION DES FORMULAIRES EN FRONT (UX)
    //////////////////////////////////
    $('#login_Email').keyup(function () { 
        if(($("#login_Email").val()).includes("@")){
            if(emailRegex.test($("#login_Email").val())){
                $('#login_Email').css({"background-color":"rgb(195, 228, 178)"});
            }else{
                $('#login_Email').css({"background-color":"rgb(248, 248, 248)","transition":"ease 0.5s"});
            }
        }
    });
    $("#login_Eye").click(function(){
        if(!$(this).hasClass("eyeOpen")){
            $(this).addClass("eyeOpen");
            $(this).css({"background-image":"url(svg/eye.svg)"})
            $('#login_Pass').prop('type','text');
        }else{
            $(this).css({"background-image":"url(svg/eyeclosed.svg)"})
            $(this).removeClass("eyeOpen");
            $('#login_Pass').prop('type','password');
        }
    })

    

    $('#register_Lastname').keyup(function(){
        if(nameRegex.test($("#register_Lastname").val())){
            $('#register_Lastname').css({"background-color":"rgb(195, 228, 178)","transition":"ease 0.5s"});
            $('#error_Register_Lastname').css({"animation":"slide-out-left 1s ease-in-out 100ms both"});
            setTimeout(function(){ $('#error_Register_Lastname').slideUp(500); },500);
        }else{
            $('#register_Lastname').css({"background-color":"rgb(248, 248, 248)"});
        }
    });
    $('#register_Firstname').keyup(function(){
        if(nameRegex.test($("#register_Firstname").val())){
            $('#register_Firstname').css({"background-color":"rgb(195, 228, 178)","transition":"ease 0.5s"});
            $('#error_Register_Firstname').css({"animation":"slide-out-left 1s ease-in-out 100ms both"});
            setTimeout(function(){ $('#error_Register_Firstname').slideUp(500); },500);
        }else{
            $('#error_Register_Firstname').css({"animation":""});
            $('#register_Firstname').css({"background-color":"rgb(248, 248, 248)"});
        }
    });

    $('#register_Email').keyup(function(){
        if(emailRegex.test($('#register_Email').val())){
            $('#register_Email').css({"background-color":"rgb(195, 228, 178)","transition":"ease 0.5s"});
            $('#error_Register_Email').css({"animation":"slide-out-left 1s ease-in-out 100ms both"});
            setTimeout(function(){ $('#error_Register_Email').slideUp(500); },500);
        }else{
            $('#error_Register_Lastname').css({"animation":""});
            $('#register_Email').css({"background-color":"rgb(248, 248, 248)"});  
        }
    });
 
    $('#register_Password').keyup(function(){
        if(passwordRegex.test($('#register_Password').val())){
            $('#register_Password').css({"background-color":"rgb(195, 228, 178)","transition":"ease 0.5s"});
            $('#error_Register_Pass').css({"animation":"slide-out-left 1s ease-in-out 100ms both"});
            setTimeout(function(){ $('#error_Register_Pass').slideUp(500); },500);
        }else if(passwordMediumRegex.test($('#register_Password').val())){
            $('#register_Password').css({"background-color":"rgb(228, 192, 178)","transition":"ease 0.5s"});
            $('#error_Register_Pass').css({"animation":"slide-out-left 1s ease-in-out 100ms both"});
            setTimeout(function(){ $('#error_Register_Pass').slideUp(500); },500);
        }else{
            $('#register_Password').css({"background-color":"rgb(248, 248, 248)"});  
        }
        if(($('#register_Password').val())===($('#register_Password_Confirm').val())){
            $('#register_Password_Confirm').css({"background-color":"rgb(195, 228, 178)","transition":"ease 0.5s"});
            $('#error_Register_Pass_Confirm').css({"animation":"slide-out-left 1s ease-in-out 100ms both"});
            setTimeout(function(){ $('#error_Register_Pass_Confirm').slideUp(500); },500);
        }else{
            $('#register_Password_Confirm').css({"background-color":"rgb(228, 178, 178)","transition":"ease 0.5s"});
        }
    });
    $('#register_Password_Confirm').keyup(function(){
        if(($('#register_Password').val())===($('#register_Password_Confirm').val())){
            $('#register_Password_Confirm').css({"background-color":"rgb(195, 228, 178)","transition":"ease 0.5s"});
            $('#error_Register_Pass_Confirm').css({"animation":"slide-out-left 1s ease-in-out 100ms both"});
            setTimeout(function(){ $('#error_Register_Pass_Confirm').slideUp(500); },500);
        }else{
            $('#register_Password_Confirm').css({"background-color":"rgb(228, 178, 178)","transition":"ease 0.5s"});
        }
    });

    

    $('#RGPD').click(function(){
        if($('#RGPD').is(':checked')){
            $('#register_Form').css({"overflow":"hidden"});
            $('.popup_back').removeClass('back_Register_Email').addClass('back_Register_Confirm');
            if(emailRegex.test($('#register_Email').val())&&(passwordRegex.test($('#register_Password').val())||passwordMediumRegex.test($('#register_Password').val()))&&($('#register_Password').val())===($('#register_Password_Confirm').val())){
                console.log('mail confirmé');
                console.log('mdp confirmé');
                console.log('confimration mdp confirmé');

                $('#register_Email_Div').css({"-webkit-animation":"slide-out-left 1s ease-in-out both"});
                $('#register_Email_Div').css({"animation":"slide-out-left 1s ease-in-out both"});
               
                $('#register_Pass_Div').css({"-webkit-animation":"slide-out-left 1s ease-in-out 100ms both"});
                $('#register_Pass_Div').css({"animation":"slide-out-left 1s ease-in-out 100ms both"});
                
                $('#register_Pass_Confirm_Div').css({"-webkit-animation":"slide-out-left 1s ease-in-out 200ms both"});
                $('#register_Pass_Confirm_Div').css({"animation":"slide-out-left 1s ease-in-out 200ms both"});

                setTimeout(function(){$('#register_Email_Div').hide(0); },1200);
                setTimeout(function(){$('#register_Pass_Div').hide(0); },1200);
                setTimeout(function(){$('#register_Pass_Confirm_Div').hide(0); },1200);

                $('#register_RGPD_Div').css({"margin-top":"auto","transition":"ease 0.5s"})

                setTimeout(function(){$('#register_Form h3').show(0); },1200);
                setTimeout(function(){$('#register_Submit_Div').show(0); },1200);

                
                $('#register_Submit_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 100ms both"});
                $('#register_Submit_Div').css({"animation":"slide-in-right 1s ease-in-out 100ms both","margin-top":"auto"});
        
            }
            if(!emailRegex.test($('#register_Email').val())){
                console.log('mail pas bon');
                $('#RGPD').prop('checked',false);
                $('#error_Register_Email').show(0);
            }else{
                $('#error_Register_Email').hide(0);
            }
            if(!passwordRegex.test($('#register_Password').val())&&!passwordMediumRegex.test($('#register_Password').val())){
                console.log('mdp pas bon');
                $('#RGPD').prop('checked',false);
                $('#error_Register_Pass').show(0);
            }else{
                $('#error_Register_Pass').hide(0);
            }
            if(($('#register_Password').val())!==($('#register_Password_Confirm').val())){
                console.log('confirmation mdp pas bon');
                $('#RGPD').prop('checked',false);
                $('#error_Register_Pass_Confirm').show(0);
            }else{
                $('#error_Register_Pass_Confirm').hide(0);
            }
        }else{
            $('#register_RGPD_Div').css({"margin-top":"auto","transition":"ease 0.5s"})

            $('#register_Submit_Div').css({"-webkit-animation":"slide-out-right 1s ease-in-out 100ms both"});
            $('#register_Submit_Div').css({"animation":"slide-out-right 1s ease-in-out 100ms both","margin-top":"auto"});

            setTimeout(function(){$('#register_Submit_Div').hide(0); },1200);

            setTimeout(function(){$('#register_Email_Div').show(0); },1200);
            setTimeout(function(){$('#register_Pass_Div').show(0); },1200);
            setTimeout(function(){$('#register_Pass_Confirm_Div').show(0); },1200);

            $('#register_Email_Div').css({"-webkit-animation":"slide-in-left 1s ease-in-out both"});
            $('#register_Email_Div').css({"animation":"slide-in-left 1s ease-in-out both"});
           
            $('#register_Pass_Div').css({"-webkit-animation":"slide-in-left 1s ease-in-out 100ms both"});
            $('#register_Pass_Div').css({"animation":"slide-in-left 1s ease-in-out 100ms both"});
            
            $('#register_Pass_Confirm_Div').css({"-webkit-animation":"slide-in-left 1s ease-in-out 200ms both"});
            $('#register_Pass_Confirm_Div').css({"animation":"slide-in-left 1s ease-in-out 200ms both"});

            $('.popup_back').removeClass('back_Register_Confirm').addClass('back_Register_Email')

        }
    });

    $('#login_Form').submit(function(e){
        if(!emailRegex.test($("#login_Email").val())||(($("#login_Pass").val()).length<=7)){
            e.preventDefault(e);
        }
        location.reload();
    })
    $('#register_Form').submit(function(e){
        if(!nameRegex.test($("#register_Lastname").val())||!nameRegex.test($("#register_Firstname").val())||!emailRegex.test($('#register_Email').val())||!passwordRegex.test($('#register_Password').val())||($('#register_Password').val())!==($('#register_Password_Confirm').val())||!($('#RGPD').is(':checked')))
        {
            e.preventDefault(e);
        }
    });
    //////////////////////////////////
    // FIN DE VERIFICATION DES FORMULAIRES EN FRONT (UX)
    //////////////////////////////////

    //////////////////////////////////
    // VERIFICATION ET ALERTE DES UTILISATEURS DEJA EXISTANT (UX)
    //////////////////////////////////

    if($('erroruserexist').html()==="True"){

        $('#connexion_popup').show();
        // $('.popup').css({"-webkit-animation":"slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both"})
        // $('.popup').css({"animation":"slide-in-top 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both"})

        $('#login_Form').hide(0);
        $('#connexion').show();
        $('erroruserexist').hide(0);
        $('#register_Form').show();
        
        
        $('#register_Submit_Div').hide(0);
        $('#register_FirstName_Div').hide(0);
        $('#register_LastName_Div').hide(0);
        $('#register_Radio').hide(0);
        $('#register_Continue').hide(0);

        $('#register_Email_Div').show(0);
        $('#register_Pass_Div').show(0);
        $('#register_Pass_Confirm_Div').show(0);
        $('#register_RGPD_Div').show(0);
        $('#error_Register_Email_Exist').show(0);
        $('.popup_back').show(0).addClass('back_Register_Email');

        
        $('#connexion_popup').css({"height":"41rem"});

        $('#register_Email_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out both"});
        $('#register_Email_Div').css({"animation":"slide-in-right 0s ease-in-out both"});
        
        $('#register_Pass_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 100ms both"});
        $('#register_Pass_Div').css({"animation":"slide-in-right 0s ease-in-out 100ms both"});
        
        $('#register_Pass_Confirm_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 200ms both"});
        $('#register_Pass_Confirm_Div').css({"animation":"slide-in-right 0s ease-in-out 200ms both"});
        
        $('#register_RGPD_Div').css({"-webkit-animation":"slide-in-right 1s ease-in-out 300ms both"});
        $('#register_RGPD_Div').css({"animation":"slide-in-right 0s ease-in-out 300ms both"});
    }

    //////////////////////////////////
    // FIN VERIFICATION ET ALERTE DES UTILISATEURS DEJA EXISTANT (UX)
    //////////////////////////////////

    if($('usercreated').html()==="True"){

        $('usercreated').html('');

        $('#register_success').show();
        $('#register_success_popup').show();

        $('#register_success_popup').css({"-webkit-animation":"jello-horizontal 0.9s both"})
        $('#register_success_popup').css({"animation":"jello-horizontal 0.9s both"})

    }

    $('#understood').click(function(){
        $('#register_success_popup').css({"-webkit-animation":"slide-out-top 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both"})
        $('#register_success_popup').css({"animation":"slide-out-top 0.5s cubic-bezier(0.550, 0.085, 0.680, 0.530) both"})

        setTimeout(function(){ $('#register_success_popup').hide(0); },500);
        setTimeout(function(){ $('#register_success').hide(0); },500);

    });

    $('.link_account_connected').click(function(){
        $('#connected').show();
    });
});