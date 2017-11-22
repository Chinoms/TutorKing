
<?php
require 'config.php';

require_once ($_SERVER['DOCUMENT_ROOT'] . '/tutorking/classes/Auth.php');
 $authMethods->startSession();
//$authMethods->protect();
//$authMethods->logout();
?>
<style>
    body{
        overflow-x: hidden
    }
</style>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="<?php echo $baseURL; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo $baseURL; ?>assets/css/material-kit.css" rel="stylesheet"/>
        <link rel="stylesheet" href="<?php echo $baseURL; ?>assets/fonts/css/font-awesome.min.css" />
        <link href='http://fonts.googleapis.com/css?family=Coustard' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet'
        <link href="<?php echo $baseURL; ?>assets/css/custom.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


        <style>
            body{
                background-color: white;
                font-family: 'Coustard', Raleway;
            }
            #rightdiv{
                height:800px;;
                background-color:#512da7;
            }
        </style>
        <script
        src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script src="<?php echo $baseURL; ?>assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo $baseURL; ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $baseURL; ?>assets/js/material.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script>
        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>

        <script type="text/javascript">
            function fetch_select(val)
            {
                $.ajax({
                    type: 'post',
                    url: '../modules/getlocations.php',
                    data: {
                        get_option: val
                    },
                    success: function (response) {
                        document.getElementById("new_select").innerHTML = response;
                    }
                });
            }

        </script>



    </head>

    <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0px; background-color:white; color:purple">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $baseURL ?>"><img src="<?php echo $baseURL . "assets/images/static/logo.png"; ?>" style="padding-bottom:10px" height="50px"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php
                    if (!isset($_SESSION['validuser'])) {
                        if ($_SERVER['SCRIPT_NAME'] == 'signup.php') {
                            echo '';
                        } else {
                            echo '<li><a href="' . $baseURL . 'join/signup.php">Become a tutor</a></li>';
                        }
                        echo '<li><a href="#">Tutor Sign in</a></li>';
                    }
                    ?>
                    <li><a href="tel:+2348122334455">0812 233 4455</a> </li>
                    <li><a href="#"><span style="text-transform: lowercase">info@tutorkings.com</span></a></li>

                </ul>
            </div>
        </div>
    </nav>
