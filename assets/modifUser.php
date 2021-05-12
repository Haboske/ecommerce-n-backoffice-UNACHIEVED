<?php
    // echo "to modif ".$_GET['modU'];

    $theUser = $admin->getUserById($_GET['modU']);
    echo "<h3 class='modif_Title'>Modifier le client n°".$_GET['modU']."</h3>";
    echo "<form class='modif_User' method='get'>",
            "<input type='radio' name='modif_Id' value='".$_GET['modU']."' style='display:none' checked>",
            "<div class='input_Text'>",
                "<label>Nom</label>",
                "<input type='text' name='modif_Lastname' value='".$theUser[0]['user_Lastname']."'>",
            "</div>",

            "<div class='input_Text'>",
                "<label>Prénom</label>",
                "<input type='text' name='modif_Firstname' value='".$theUser[0]['user_Firstname']."'>",
            "</div>",

            "<div class='input_Email'>",
                "<label>Email</label>",
                "<input type='email' name='modif_Email' value='".$theUser[0]['user_Email']."'>",
            "</div>",

            "<div class='input_Radio'>",
                "<input type='radio' value='1' id='modif_Individual' name='modif_Type' "; 
                if($theUser[0]['user_Type']==="Particulier"){
                    echo "checked";
                }
                echo ">",
                "<label for='modif_Individual' class='radio_Label'>Particulier</label>",
            "</div>",
            "<div class='input_Radio'>",
                "<input type='radio' value='0' id='modif_Pro' name='modif_Type' ";
                if($theUser[0]['user_Type']==="Professionnel"){
                    echo "checked";
                }
                echo ">",
                "<label for='modif_Pro' class='radio_Label'>Professionnel</label>",

            "</div>",

            "<div style='display:none'>",
                "<input type='radio' value='2' id='modif_ADMIN' name='modif_Type' ";
                if($theUser[0]['user_Type']==="ADMIN"){
                    echo "checked";
                }
                echo ">",
            "</div>",

            "<input type='submit' name='modif_Confirm' class='modif_Confirm' value='Modifier'>",
            "<input type='submit' name='modif_Dismiss' class='modif_Dismiss' value='Annuler'>",

         "</form>";

         if(array_key_exists('modif_Confirm',$_POST)){

             echo "<h2>Les modifications on été enregistrés</h2>";

         }
?>