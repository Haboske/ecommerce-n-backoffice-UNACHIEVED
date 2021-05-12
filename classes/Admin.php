<?php
    class Admin {

        private $servername='localhost';
        private $username='root';
        private $dbname='bateau_pirate_bdd';
        private $sqlconfig;

        public function __construct($sql){
            $this -> sqlconfig = $sql;
        }

        public function getUserList(){
            $getUsers=  $this -> sqlconfig->prepare("SELECT * FROM Users ORDER BY user_Id");
            $getUsers->setFetchMode(PDO::FETCH_ASSOC);
            $getUsers->execute(array());
            $db_all_Users = $getUsers->fetchAll();

            return $db_all_Users;
        }

        public function getUserById($user_Id){
            $getUser=  $this -> sqlconfig->prepare("SELECT * FROM Users WHERE user_Id = ?");
            $getUser->setFetchMode(PDO::FETCH_ASSOC);
            $getUser->execute(array(
                $user_Id
            ));
            $User = $getUser->fetchAll();

            return $User;
        }

        public function deleteUserById($user_Id){
            $deleteUser=  $this -> sqlconfig ->prepare("DELETE FROM Users WHERE user_Id = ?");
            $deleteUser->execute(array(
                $user_Id
            ));
        }

        public function updateUser($user_Id,$user_Lastname,$user_Firstname,$user_Email,$user_Type){
            $updateUser = $this -> sqlconfig -> prepare("UPDATE Users SET user_Lastname=?, user_Firstname=?, user_Email=?, user_Type=? WHERE user_Id = ".$user_Id." ");
            $updateUser -> execute(array(
                $user_Lastname,
                $user_Firstname,
                $user_Email,
                $user_Type,
            ));
        }

    }   
?>