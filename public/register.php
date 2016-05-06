<?php 
    
    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
          // 1. make sure that username is not empty 
          // 2. make sure that password is not empty 
          // 3. make sure that password and confirm password match
          // 4. make sure that username and email address is not already used if its not there then
          //    1. insert and redirect to index.html 
          // else 
          //    apologize 
    }

?>