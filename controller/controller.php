<?php
    session_start();

    include_once("backend/header.php");
    include_once("backend\inc\graph.php");
    include_once("backend\inc\javascriptInculder.php");
    include_once("backend\inc\database.php");
    include_once("backend\inc\simdata.php");

    class Controller {  

        public function __construct(){    

            $_SESSION["simulation"] = 1;
            $_SESSION["data"] = [5,2,5,6,6,6,5,6,5,4];
            $_SESSION["data1"] = [5,2,5,6,6,6,5,6,5,4];

        } 


        public function invoke()  
        {  
            //display the webpage
            include_once("frontend/struct.php");
        }

    }  
?>