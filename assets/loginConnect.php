<?php
        session_start();
        require 'verif.php';
        require 'config.php';

        if(isset($_POST['login_Email'])&&isset($_POST['login_Pass'])){
            
            $useremail=htmlspecialchars($_POST["login_Email"]);
            $password=htmlspecialchars($_POST["login_Pass"]);
            $userip=$_SERVER['REMOTE_ADDR'];

            if(mailVerification($useremail)){

                echo "<h3> Connexion réussie ! </h3>";

                $sqlconfig=$sqlconfig->prepare("INSERT INTO Connexions (connexion_Login,connexion_Ip) VALUES (:username,:userip)");

                $sqlconfig->execute(array(
                    ":username"=>$useremail,
                    ":userip"=>$userip
                ));

            }
            $user_Connect_Mail=strtolower(htmlspecialchars($_POST["login_Email"]));
            $user_Connect_Pass=htmlspecialchars($_POST["login_Pass"]);

            // echo $user_Connect_Mail."<br>";
            // echo $dbname;

            $sqlconfig = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8",$username);
            $connect=$sqlconfig->prepare("SELECT * FROM Users WHERE user_Email = ? ");
            $connect->setFetchMode(PDO::FETCH_ASSOC);
            $connect->execute(array(
                $user_Connect_Mail
            ));
            $db_Connect = $connect->fetchAll();

            // print_r($db_Connect);
        
            $db_Pass=$db_Connect[0]['user_Password'];

            if(password_verify($user_Connect_Pass,$db_Pass)){
                $_SESSION['session_Mail']=$user_Connect_Mail;
                $_SESSION['session_Firstname']=$db_Connect[0]['user_Firstname'];
                if($db_Connect[0]['isAdmin']==='1'){
                    header("Location:../mycrud.php");
                }else{
                    header("Location:../store.php");
                }
            }
        }

    ?>