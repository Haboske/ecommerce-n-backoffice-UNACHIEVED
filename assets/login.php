
    
    <form method="post" id="login_Form" action="assets/loginConnect.php">
        
        <h3>Connectez-vous.</h3>

        <div id="login_Email_Div">
            <label>Email</label>
            <input type="text" name="login_Email" id='login_Email' placeholder="votre email 📧">
            <p class="error_Message" id="error_Email">Veuillez entrer une adresse email</p>
        </div>

        <div id="login_Pass_Div">
            <label>Mot de passe</label>
            <div id="pass">
                <input type="password" name="login_Pass" id='login_Pass' placeholder="à l'abris des regars 👀">
                <span id="login_Eye"></span>
            </div>

        </div>
        <div id="login_Submit_Div">
            <input type="submit" name="login_Submit" value="Se connecter" id="login_Submit">
            <span id="fg_pass"><a href="assets/resetpassword.php">Mots de passe oublié ?</a></span>
            <span id="new_account">Je n'ai pas encore de compte !</span>
            
        </div>
        
    </form>
    