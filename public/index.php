<?php 
    
    // configuration
    require("../includes/config.php");
    
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("home.php", ["title" => "Register"]);
    }

?>