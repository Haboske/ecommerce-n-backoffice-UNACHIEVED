<?php
    if(isset($_GET['addU'])){
        echo "<h3>Ajouter un nouvel utilisateur</h3>",
        echo "<form>",

                "<div>",
                    "<label>Nom</label>"
                    "<input type='text' name='addU_Lastname'>",
                "</div>",

                "<div>",
                    "<label>Prénom</label>"
                    "<input type='text' name='addU_Lastname'>",
                "</div>"
             
             "</form>"
    }
?>