<?php

    error_reporting(E_ALL);
    require_once('Db.php');

    class User extends Db{

        private $dbconn;

        public function __construct(){
            $this->dbconn = $this->connect();
        }

        public function create_account($fname, $lname, $email, $pwd, $confirmpwd){

            if($pwd == $confirmpwd){

                try{

                    #write the query.
                    $query = "INSERT INTO user (user_fname, user_lname, user_email, user_password) VALUES (?, ?, ?, ?)";

                    #prepare the query
                    $stmt = $this->dbconn->prepare($query);

                    #execute
                    $result = $stmt->execute([$fname, $lname, $email, $pwd]);
                    $_SESSION['userfeedback'] = "Account created successfully";
                    return $result;

                }catch(PDOException $e){
                    $_SESSION['errormessage'] = "An error occured:" . $e->getMessage();
                    return 0;
                }
                catch(Exception $e){
                    $_SESSION['errormessage'] = "An error occured:" . $e->getMessage();
                    return 0;
                }

            }else{

                $_SESSION['errormessage'] = "Password and Confirm Password must be the same";
                return 0;

            }
        }


    }

    $user1 = new User();
    // $user1->create_account("Ezra", "Ojo", "e@y.com", "1234", "1234");


?>