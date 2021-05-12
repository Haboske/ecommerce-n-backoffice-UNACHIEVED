<?php
    if(isset($_GET['delU'])){
        
        $theUser = $admin->getUserById($_GET['delU']);

        // print_r($theUser[0]);

        echo "<h3>Êtes vous sûr de vouloir supprimer <br> ".$theUser[0]['user_Firstname']." ".$theUser[0]['user_Lastname']." ?</h3>";
        echo "<form method='post'>",
             "<input type='submit' name='delete_Confirm' class='delete_Confirm' value='Supprimer'>",
             "<input type='submit' name='delete_Dismiss' class='delete_Dismiss' value='Annuler'>",
             "</form>";

             if(array_key_exists('delete_Confirm',$_POST)){

                 $admin -> deleteUserById((int)$_GET['delU']);
                 header('Location:mycrud.php?');

             }else if(array_key_exists('delete_Dismiss',$_POST)){

                 header('Location:mycrud.php?');

             }
    }
?>