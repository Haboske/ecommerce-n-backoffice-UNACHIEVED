<header>
    <img src="svg/logo_1.svg">
    <nav>
        <a href="store.php" class="link_market_t">Boutique
            <div id="link_market"></div>
        </a>
        <a href="#" <?php 
                      if(isset($_SESSION['session_Mail'])){
                        echo "
                              class='link_account_connected'>".$_SESSION['session_Firstname']."
                              <div id='link_account' class='user_Account'></div>";
                      }else{
                        echo "
                              class='link_account_t'>Se connecter
                              <div id='link_account'></div>";
                      }
                    ?>
        </a> <!-- LA BALISE SE FERME AVEC LE PHP CI-DESSUS -->
        <a href="#" class="link_cart_t">Mon Panier
            <div id="link_cart"></div>
        </a>
    </nav>
    <form>
        <label for="vinyl-search">Recherchez un vinyle</label>
        <input type="search" id="vinyl-search" name="vinyl-search" placeholder="rechercher par titre&#47;artiste&#47;album...">
        <button type="submit" id=test>
            <div></div>
        </button>
    </form>
    <nav id="jqnav" class="navigation">
      
      <input type="button" id="leave">
      <span class="link_category_type">
        <h4>Tous les produits </h4><span>&gt;</span>
      </span>
      <span class="link_category">
        <a href='#'>top ventes </a>
      </span>
      <span class="link_category">
        <a href='#'>nouveaut&eacute;s</a>
      </span>
      <span class="link_category">
        <a href='#'>offres limit&eacute;s</a>
      </span>
      <span class="link_category">
        <a href='#'>occasions</a>
      </span>
      <span class="link_category">
        <a href='#test'>mat&eacute;riels&#47;accessoires</a>
      </span>
      <span class="link_category_type">
        <h4>cat&eacute;gories</h4>
      </span>
      <span class="link_category">
        <a href='#'>pop&#47;rock&#47;m&eacute;tal</a>
      </span>
      <span class="link_category">
        <a href='#'>vari&eacute;t&eacute;s françaises</a>
      </span>
      <span class="link_category">
        <a href='#'>rap</a>
      </span>
      <span class="link_category">
        <a href='#'>musiques de films</a>
      </span>
      <span class="link_category">
        <a href='#'>raggae&#47;raggaeton</a>
      </span>
      <span class="link_category">
        <a href='#'>classique</a>
      </span>
      <span class="link_category">
        <a href='#'>country</a>
      </span>
      <span class="link_category">
        <a href='#'>electro</a>
      </span>
      <span class="link_category">
        <a href='#'>jazz</a>
      </span>
      <span class="link_category">
        <a href='#'>sixties-rock'n'roll</a>
      </span>
      
    </nav>
      <div class="right"></div>
</header>
<section id="connexion">
  <div class='popup' id="connexion_popup">
    <div class="popup_button">
      <button class="popup_back"></button>
      <button class="popup_close"></button>
    </div>
    
    <?php 
          include 'assets/login.php';
          include 'assets/register.php';
    ?>
  </div>
</section>
<section id="register_success">
  <div class="popup" id="register_success_popup">
    <h3>Merci de nous avoir rejoins !
      <br>Vous verrez, vous ne serez pas déçu(e)s 😃
    </h3>
    <p>Maintenant, il ne vous reste plus qu'à vagabonder dans cette grande jungle de vinyle pour trouver votre arbre... euh votre vinyle !</p>
    <button id="understood">C'est compris !</button>
  </div>
</section>
<section id="connected">
  <div class="popup" id="connect_popup">
    <form method="post" action="assets/deconnect.php">
      <input type="submit" value="deconnexion" name="deconnexion">
    </form>
  </div>
</section>

