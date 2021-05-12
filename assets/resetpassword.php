<?php
    require 'verif.php';
    require 'config.php';
    require 'PHPMailer/sendemail.php';

    function unknowForMoreSecurity($length = 10)
    {
        $chain = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $maxLength = strlen($chain);
        $unknownChain = '';
        for ($i = 0; $i < $length; $i++){
            $unknownChain .= $chain[rand(0, $maxLength - 1)];
        }
        return $unknownChain;
    }
?>

<form method="post" action="" style="display:flex;flex-direction:column;width:30vw;margin:30vh auto auto auto;">
    <label>Email du compte</label>
    <input type="email" placeholder="votre email" name="reset_Email">
    <input type="submit">
</form>

<?php
    if(isset($_POST["reset_Email"])){
        $reset_Email=$_POST["reset_Email"];

        $connect=$sqlconfig->prepare("SELECT * FROM Users WHERE user_Email = ? ");
        $connect->setFetchMode(PDO::FETCH_ASSOC);
        $connect->execute(array(
            $reset_Email
        ));
        $db_Connect = $connect->fetchAll();

        // print_r($db_Connect);
        if(isset($db_Connect[0]['user_Email'])){
            echo "le lien pour réinitialiser le mots de passe vient de vous être envoyé <br>";

            

            // ON ANNULE LE TOKEN ENCORE ACTIF (si existant)

            $user_New_Password_Token_Expiring=$sqlconfig->prepare("UPDATE users_pass_reset SET Pass_Reset_Expired=1 WHERE Pass_Reset_Expired = 0 AND user_Id = ?");
            $user_New_Password_Token_Expiring->execute(array(
                $db_Connect[0]['user_Id']
            ));

            // FIN DE ON ANNULE LE TOKEN ENCORE ACTIF (si existant)

            // VERIFICATION DE L'EXISTENCE D'UN TOKEN ENCORE ACTIF

            $user_New_Password_Token_Verif=$sqlconfig->prepare("SELECT * FROM users_pass_reset WHERE Pass_Reset_Expired = 0 AND user_Id = ? ");
            $user_New_Password_Token_Verif->setFetchMode(PDO::FETCH_ASSOC);
            $user_New_Password_Token_Verif->execute(array(
                $db_Connect[0]['user_Id']
            ));
            $user_New_Password_Token_Existing = $user_New_Password_Token_Verif->fetchAll();

            print_r($user_New_Password_Token_Existing);

            // FIN DE VERIFICATION DE L'EXISTENCE D'UN TOKEN ENCORE ACTIF

            // CREATION DU TOKEN PRIVE ET IMPOSSIBLE A DEVINER 

            $betwenn_All_The_Hashs=hash_algos();
            $the_Hash_Chosen=array_rand($betwenn_All_The_Hashs, 1);
            $reset_Token=hash($betwenn_All_The_Hashs[$the_Hash_Chosen],unknowForMoreSecurity(10));
            do{
                $reset_Token.=hash($betwenn_All_The_Hashs[$the_Hash_Chosen],unknowForMoreSecurity(10));
            }while((strlen($reset_Token))<50);
            $reset_Token=substr($reset_Token,0,50);

            // FIN DE CREATION DU TOKEN PRIVE ET IMPOSSIBLE A DEVINER 

            // ENVOIE DU TOKEN EN BASE DE DONNEE

            $user_New_Password=$sqlconfig->prepare("INSERT INTO users_pass_reset (user_Id,Pass_Reset_Token) VALUES (:user,:token)");
            $user_New_Password->execute(array(
                ":user"=>$db_Connect[0]['user_Id'],
                ":token"=>$reset_Token
            ));

            // D'ENVOIE DU TOKEN EN BASE DE DONNEE
            
            $link_to_reset="http://localhost/bp/assets/newpassword.php?id=".$db_Connect[0]['user_Id']."&token=".$reset_Token;
        
            
            
            $body="bonjour ".$db_Connect[0]['user_Firstname']." voici votre lien pour réinitialiser votre mots de passe : ".$link_to_reset."";

            echo $body;

            send_mail("brdelaitre@gmail.com","réinitialisation de votre mots de passe",$body);

        }else{
            echo "l'utilisateur n'éxiste pas";
        }
    }
?>
