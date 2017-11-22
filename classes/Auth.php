<?php

/**
 * This class handles authentication, including session handling,
 *  user levels logging in and logging out.
 *
 * @author Chinoms
 */
class Auth {
/**
    function session() {
        session_start();
        if (!isset($_SESSION['validuser'])) {
            echo "You are logged out";
        } else {
            
        }
    }
**/
    function startSession(){
        if(isset($_SESSION['validuser'])){
            session_start();
        }
    }
    
    function protect() {
        if (!isset($_SESSION['validuser'])) {
            header("Location:".$baseURL."index.php");
        }
    }

    function logout() {
        session_start();
        session_destroy();
        die();
    }
    
    function signupLogout(){
        //session_start();
        session_destroy();
        header("Location:../index.php");
    }

}

$authMethods = new Auth();
