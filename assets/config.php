<?php

    $servername='localhost';
    $username='root';
    $dbname='bateau_pirate_bdd';

    try{
        $sqlconfig = new PDO("mysql:host=$servername;charset=utf8",$username);
        $sqlconfig -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // On créer la BDD en local vu que je souvent de pc ou pour le correcteur
        $sql = "CREATE DATABASE IF NOT EXISTS bateau_pirate_bdd";
        $sqlconfig -> exec($sql);

        // Puis on se connecte à celle-ci une fois créée ou déjà éxistante
        $sqlconfig = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8",$username);
        $sqlconfig -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

        $sql_Connexions = "CREATE TABLE IF NOT EXISTS `Connexions`(
        `connexion_Id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `connexion_Login` VARCHAR (80) NOT NULL,
        `connexion_Datetime` TIMESTAMP NOT NULL default CURRENT_TIMESTAMP,
        `connexion_Ip` VARCHAR (20) NOT NULL
        )";
        $sqlconfig -> exec($sql_Connexions);

        $sql_Register = "CREATE TABLE IF NOT EXISTS `Users`(
        `user_Id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `user_Lastname` VARCHAR (80) NOT NULL,
        `user_Firstname` VARCHAR (80) NOT NULL,
        `user_Email` VARCHAR (80) NOT NULL UNIQUE,
        `user_Password` VARCHAR (70) NOT NULL,
        `user_Type` VARCHAR (13) NOT NULL,
        `isAdmin` TINYINT(1) NOT NULL DEFAULT '0'
        )";
        $sqlconfig -> exec($sql_Register);

        $adminVerif=$sqlconfig->prepare("SELECT * FROM Users WHERE user_Email = 'admin@localhost.bp' ");
        $adminVerif->setFetchMode(PDO::FETCH_ASSOC);
        $adminVerif->execute(array());
        $db_adminVerif = $adminVerif->fetchAll();

        if(empty($db_adminVerif)){
            $createAdmin=$sqlconfig->prepare("INSERT INTO Users (user_Lastname,user_Firstname,user_Email,user_Password,user_Type,isAdmin) VALUES (:nom,:prenom,:email,:password,:type,:admin)");
    
            $createAdmin->execute(array(
                ":nom"=>"admin",
                ":prenom"=>"admin",
                ":email"=>"admin@localhost.bp",
                ":password"=>password_hash("adminCRUD",PASSWORD_BCRYPT),
                ":type"=>"ADMIN",
                ":admin"=>1
            ));
        }
        
        
        $sql_User_Pass_Reset = "CREATE TABLE IF NOT EXISTS `Users_Pass_Reset` (
        `Pass_Reset_Id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `user_Id` BIGINT UNSIGNED NOT NULL,
        `Pass_Reset_Token` VARCHAR (70) NOT NULL UNIQUE,
        `Pass_Reset_Datetime` TIMESTAMP NOT NULL default CURRENT_TIMESTAMP,
        `Pass_Reset_Expired` TINYINT (1) NOT NULL DEFAULT '0'
        )";

        $sqlconfig -> exec($sql_User_Pass_Reset);

    } 
    catch(PDOException $e){
        echo "Erreur :" . $e->getMessage();
    }

?>