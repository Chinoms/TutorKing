<?php


/**
 * This class handles authentication, including session handling,
 *  user levels logging in and logging out.
 *
 * @author Chinoms
 */
class Auth {
    function session(){
        if(!isset($_SESSION['validuser'])){
            echo "You're logged in";
        }else{
            echo "You're not logged in";
        }
    }
    
    function logout(){
        session_start();
        session_destroy();
    }
}
$authMethods = new Auth();
