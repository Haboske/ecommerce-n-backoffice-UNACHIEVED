<?php
    session_start();
    require "assets/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'assets/head.php' ?>
    <title>Document</title>
    <link rel="stylesheet" href="store.css">
    <script type="text/javascript" src="store.js"></script>
</head>
<body>
    <?php require 'assets/header.php' ?>
    
    <main>
        <aside>
            
            <h3>Tous les produits</h3>
            <div class="div_Cat">
                <label class="label_Cat">Spéciales</label>
                <div class="checkbox_Div">
                    <input type="checkbox" id="top_Sells"/><label for="top_Sells" class="checkbox_Label">Top des ventes</label>
                </div>
                <div class="checkbox_Div">
                    <input type="checkbox" id="new_Sells"/><label for="new_Sells" class="checkbox_Label">Nouveautés</label>
                </div>
                
                <div class="checkbox_Div">
                    <input type="checkbox" id="offer_Sells"/><label for="offer_Sells" class="checkbox_Label">Offres Limités</label>
                </div>
                
                <div class="checkbox_Div">
                    <input type="checkbox" id="occasion_Sells"/><label for="occasion_Sells" class="checkbox_Label">Occasions</label>
                </div>
            </div>
            
            <div class="div_Cat">
                <label class="label_Cat">Catégories</label>
                <select id="category">

                </select>
            </div>
            
            <div class="div_Cat">
                <label class="label_Cat">Année de sortie</label>
                <p>Entre</p>
                <select id="year_Lower">

                </select>
                <p>Et</p>
                <select id="year_Higher">
                    
                </select>
            </div>
            
            <div class="div_Cat">
                <label class="label_Cat">Nombre de tours</label>
                <div>
                    <input type="radio" id="all_Circle" name="circle" checked/><label for="all_Circle" class="radio_Label">Tout</label>
                </div>

                <div>
                    <input type="radio" id="tt_Circle" name="circle"/><label for="tt_Circle" class="radio_Label">33 Tours</label>
                </div>
                
                <div>
                    <input type="radio" id="fv_Circle" name="circle"/><label for="fv_Circle" class="radio_Label">45 Tours</label>
                </div>
            </div>
            
            <div class="div_Cat">
                <label class="label_Cat">Prix TTC</label>
                <p>Entre</p>
                <input type="number" id="price_Lower">
                <p>Et</p>
                <input type="number" id="price_Higher">
            </div>
            
            <div class="div_Cat">
                <label class="label_Cat">Disponibilité</label>
                <div class="checkbox_Div">
                    <input type="checkbox" id="disponibility_All" checked/><label for="disponibility_All" class="checkbox_Label">Tout</label>
                </div>

                <div class="checkbox_Div">
                    <input type="checkbox" id="disponibility_Yes"/><label for="disponibility_Yes" class="checkbox_Label">Disponible</label>
                </div>
                
                <div class="checkbox_Div">
                    <input type="checkbox" id="disponibility_Delay"/><label for="disponibility_Delay" class="checkbox_Label">Avec délais</label>
                </div>
                
                <div class="checkbox_Div">
                    <input type="checkbox" id="disponibility_No"/><label for="disponibility_No" class="checkbox_Label">Indisponible</label>
                </div>
            </div>
            
            
        </aside>
        <section id="articles">

        </section>
    </main>
</body>
</html>