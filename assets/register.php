    
    <?php
        require "assets/verif.php"
    ?>
    <form method="post" id="register_Form">
        <h3>Inscrivez vous !</h3>
        <div class="input_Div" id="register_FirstName_Div">
            <label>Prénom</label>
            <input type="text" name="register_Firstname" id="register_Firstname" placeholder="Jean" 
            <?php  
                if(isset($_POST['register_Firstname'])){
                    echo 'value="'.htmlspecialchars($_POST['register_Firstname']).'"';
                }
            ?> />
            <p class="error_Message" id="error_Register_Firstname">Les caractères spéciaux sont interdits et le champs doit comporter plus de 1 caractère</p>
        </div>

        <div class="input_Div" id="register_LastName_Div">
            <label>Nom</label>
            <input type="text" name="register_Lastname" id="register_Lastname" placeholder="DUPONT"
            <?php  
                if(isset($_POST['register_Lastname'])){
                    echo 'value="'.htmlspecialchars($_POST['register_Lastname']).'"';
                }
            ?> >
            <p class="error_Message" id="error_Register_Lastname">Les caractères spéciaux sont interdits et le champs doit comporter plus de 1 caractère</p>

        </div>
        
        <div class="radio_Div" id="register_Radio">
            <label>Je suis</label>
            <input type="radio" name="register_Individual" id="individual" value="1" 
            <?php 
                if(isset($_POST['register_Individual'])){
                    if($_POST['register_Individual']==1){
                        echo "checked";
                    }else if($user_Type!==0&&$user_Type!==1){
                        echo "checked";
                    }
                }
            ?> /> <label for="individual" class="radio_Label">Un particulier</label>
            <input type="radio" name="register_Individual" id="professional" value="0"
            <?php 
                if(isset($_POST['register_Individual'])){
                    if($_POST['register_Individual']==0){
                        echo "checked";
                    }
                } 
            ?> /> <label for="professional" class="radio_Label">Un professionnel</label>
        </div> 
        
        <span id="register_Continue">Continuer</span>

        <div class="input_Div" id="register_Email_Div">
            <label>Email</label>
            <input type="email" name="register_Email" id="register_Email" 
            <?php  
                if(isset($_POST['register_Email'])){
                    echo 'value="'.htmlspecialchars($_POST['register_Email']).'"';
                }
            ?> />
            <p class="error_Message" id="error_Register_Email">Veuillez renseigner une adresse email valide</p>
            <p class="error_Message" id="error_Register_Email_Exist">Cette adresse email est déjà utilisé</p>
        </div>
        
        <div class="input_Div" id="register_Pass_Div">
            
            <label>Mot de passe</label>
            <input type="password" name="register_Password" id="register_Password"/>
            <p class="error_Message" id="error_Register_Pass">Veuillez respecter le format de mots de passe indiqué</p>

        </div>
        
        <div class="input_Div" id="register_Pass_Confirm_Div">
        
            <label>Confirmez le mot de passe</label>
            <input type="password" name="register_Password_Confirm" id="register_Password_Confirm">
            <p class="error_Message" id="error_Register_Pass_Confirm">Le mots de passe ne correspond pas avec celui renseigné ci-dessus</p>

        </div>

        <div id="register_Submit_Div">
            <h4>Bienvenue parmis nos exceptionnel(le)s client(e)s !</h4>
            <input type="submit" name="register_Submit" id="register_Submit" value="Continuer">
        </div>

        <div id="register_RGPD_Div">
            <input type="checkbox" name="register_Rgpd" id="RGPD"  value="ok" >

            <label for="RGPD" class='checkbox_Label'>
            </label>
            <label for="RGPD" class=''>
                Je reconnais avoir pris connaissance des <a href="#">conditions d’utilisation</a> et y adhère totalement
            </label>
        </div>

        
        
    </form>
    <?php
        if(isset($_POST['register_Lastname'])&&isset($_POST['register_Firstname'])&&isset($_POST['register_Email'])&&isset($_POST['register_Password'])&&$_POST['register_Rgpd']==="ok"){
            $user_LastName=htmlspecialchars($_POST['register_Lastname']);
            $user_FirstName=htmlspecialchars($_POST['register_Firstname']);
            $user_Email=htmlspecialchars($_POST['register_Email']);
            $user_Password=htmlspecialchars($_POST['register_Password']);
            $user_Type=$_POST['register_Individual'];
            if($user_Type==1){
                $user_Type="Particulier";
            }else if($user_Type==0){
                $user_Type="Professionnel";
            }else{
                $user_Type="Inconnu";
            }
            
            $testa=$sqlconfig->prepare("SELECT * FROM Users WHERE user_Email = ? ");
            $testa->setFetchMode(PDO::FETCH_ASSOC);
            $testa->execute(array(
                strtolower($user_Email)
            ));
            $user_Verif = $testa->fetchAll();

            if(isset($user_Verif[0])){
                if($user_Verif[0]['user_Email']===htmlspecialchars($_POST['register_Email'])){
                    echo "<erroruserexist>True</erroruserexist>"; 
                }
            }elseif(!isset($user_Verif[0])){
                if(nameVerification($user_LastName)&&nameVerification($user_FirstName)&&mailVerification($user_Email)&&PassVerification($user_Password)){

                    if(isset($_POST['register_Rgpd'])&&$_POST['register_Rgpd']==='ok'){
                        
                        $to_Register=$sqlconfig->prepare("INSERT INTO Users (user_Lastname,user_Firstname,user_Email,user_Password,user_Type) VALUES (:nom,:prenom,:email,:password,:type)");
    
                        $to_Register->execute(array(
                            ":nom"=>strtoupper($user_LastName),
                            ":prenom"=>ucfirst($user_FirstName),
                            ":email"=>strtolower($user_Email),
                            ":password"=>password_hash($user_Password,PASSWORD_BCRYPT),
                            ":type"=>$user_Type
                        ));

                        unset($_POST);
                        echo "<usercreated>True</usercreated>";
                    } 

                }

            }
  
        }
    ?>