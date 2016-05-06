<?php 
    
    // configuration
    require("../includes/config.php");
    
    $_SESSION["id"] = 3; 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("home.php", ["title" => "Register"]);
    }

?>