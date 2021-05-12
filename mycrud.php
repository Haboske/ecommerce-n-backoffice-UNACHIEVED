<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crud.css">
    <script type="text/javascript" src="assets/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="crud.js"></script>
    <title>Panneau de contrôle</title>
</head>
<header>
        
</header>
<body>
    <?php 
        require 'assets/config.php';
        require "classes/Admin.php";

        $admin = new Admin($sqlconfig);        
    ?>
    <?php echo "<h1>Bonjour ".$_SESSION['session_Firstname']."</h1>"; ?>
    
    <table>
        <thead>
            <tr>
                <th class="user_Id">Id</th>
                <th class="user_LastN">Nom</th>
                <th class="user_FirstN">Prénom</th>
                <th class="user_Email">Adresse Email</th>
                <th class="user_Type">Type</th>
                <th class="user_Add">
                    <form method="get">
                        <input type="submit" name="addU" value=" ">
                    </form>
                </th>
            </tr>
        </thead>
        <tbody>
        
        <?php
            $users = $admin->getUserList();

            foreach($users as $key){
                echo "<tr>",
                        "<td class='user_Id'>".$key['user_Id']."</td>",
                        "<td class='user_LastN'>".$key['user_Lastname']."</td>",
                        "<td class='user_FirstN'>".$key['user_Firstname']."</td>",
                        "<td class='user_Email'>".$key['user_Email']."</td>",
                        "<td class='user_Type'>".$key['user_Type']."</td>",
                        "<td class='button button_Modif'>".
                            "<form method='get'>".
                                "<input type='radio' name='modU' value='".$key['user_Id']."' style='display:none' checked>",
                                "<input type='submit' value=' '>"
                            ."</form>"
                        ."</td>",
                        "<td class='button button_More'>".
                            "<button></button>"
                        ."</td>".
                        "<td class='button button_Delete'>".
                            "<form method='get'>".
                                "<input type='radio' name='delU' value='".$key['user_Id']."' style='display:none' checked>",
                                "<input type='submit' value=' '>"
                            ."</form>"
                        ."</td>".
                        
                        

                    "</tr>";
            }  

            ?>
        </tbody>
    </table>
    <?php

        if(isset($_GET['delU'])){
            echo "<div class='crud_Popup'>",
                    "<div class='crud_Popup_Content'>";
                    include "assets/deleteUser.php";
            echo    "</div>",
                 "</div>";
        }
        if(isset($_GET['modU'])){
            echo "<div class='crud_Popup'>",
                    "<div class='crud_Popup_Content'>";
                    include "assets/modifUser.php";
            echo    "</div>",
                 "</div>";
        }

        if(isset($_GET['modif_Dismiss'])){
            header('Location:mycrud.php?modif_Confirmed=false');
        }


        if(isset($_GET['modif_Confirm'])){
            header('Location:mycrud.php?modif_Confirmed=true');
            if($_GET['modif_Confirm']==='Modifier'){
                if($_GET['modif_Type']==1){
                    $user_Type="Particulier";
                }else if($_GET['modif_Type']==0){
                    $user_Type="Professionnel";
                }else if($_GET['modif_Type']==2){
                    $user_Type="ADMIN";
                }else{
                    $user_Type="Inconnu";
                }
                $admin -> updateUser($_GET['modif_Id'],$_GET['modif_Lastname'],$_GET['modif_Firstname'],$_GET['modif_Email'],$user_Type);
            }
        }
        if(isset($_GET['modif_Confirmed'])){
            if($_GET['modif_Confirmed']==="true"){
                echo "<div class='crud_Popup' id='modif_Dismiss'>",
                        "<div class='crud_Popup_Content'>",
                            "<h3 style='color:rgb(89, 173, 81)'>Les informations du clients on été mise à jours.</h3>",
                        "</div>",
                    "</div>";
            }
            if($_GET['modif_Confirmed']==="false"){
                echo "<div class='crud_Popup' id='modif_Dismiss'>",
                        "<div class='crud_Popup_Content'>",
                            "<h3 style='color:rgb(189, 22, 22)'>Les modifications n'ont pas été enregistrés.</h3>",
                        "</div>",
                    "</div>";
            }
        }
        
        if(isset($_GET['']))

    ?>
</body>
</html>
