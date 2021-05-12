<?php
    session_start();
    require 'verif.php';
    require 'config.php';

    $_SESSION['id']=$_GET['id'];
    $_SESSION['token']=$_GET['token'];

    // echo $_SESSION['id']."      ".$_GET['token'];
?>

    <form method="post" >
        <label>Nouveau mots de passe</label>
        <input type="password" name="new_Password">
        <label>Confirmer le nouveau mots de passe</label>
        <input type="password" name="confirm_Password">
        <input type="submit">
    </form>

    <?php
    $Token_Verif=$sqlconfig->prepare("SELECT * FROM users_pass_reset WHERE Pass_Reset_Token = ? AND user_Id = ? ");
    $Token_Verif->setFetchMode(PDO::FETCH_ASSOC);
    $Token_Verif->execute(array(
        $_GET['token'],
        $_GET['id']
    ));
    $Token_Existing = $Token_Verif->fetchAll();

    print_r($Token_Existing);
    if(isset($_POST['new_Password'])&&isset($_POST['confirm_Password'])){
        $password=$_POST['new_Password'];
        $confirmed=$_POST['confirm_Password'];
        if(PassVerification($password)&&$password===$confirmed){
            

            

            if($Token_Existing[0]['Pass_Reset_Expired']==='0'){
                $user_New_Password=$sqlconfig->prepare("UPDATE users SET user_Password = ? WHERE user_Id = ?");
                $user_New_Password->execute(array(
                    password_hash($password,PASSWORD_BCRYPT),
                    $_GET['id']
                ));
    
                $set_Token_Invalid=$sqlconfig->prepare("UPDATE users_pass_reset SET Pass_Reset_Expired=1 WHERE user_Id = ?");
                $set_Token_Invalid->execute(array(
                    $_GET['id']
                ));
                echo "votre mots de passe a été réinitialisé avec succès <br>";
            }else{
                echo "votre token a expiré";
            }
        }
        if(!PassVerification($password)){
            echo "Le nouveau mots de passe n'est pas assez sécurisé <br>";
            // header("location:newpassword.php?id=".$_SESSION['id']."&token=".$_SESSION['token']);
        }
        if($password!==$confirmed){
            echo "attention la confirmation de mots de passe n'est pas identique <br>";
            
        }
    }else{
        echo "veuillez correctement remplir les deux champs <br>";
    }
?>
