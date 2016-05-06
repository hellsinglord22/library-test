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
        // get all the data from the user 
        $username = $_POST["username"]; 
        $password = $_POST["password"]; 
        $confirmPassword = $_POST["confirmPassword"]; 
        
          // 1. make sure that username is not empty
          if (empty($username))
          {
              apologize("please, provide a username entry !!!"); 
          }
          else if (empty($password))
          {
               apologize("please, provide a password entry !!!"); 
          }
          else if ($password !== $confirmPassword)
          {
              apologize("password doens't match"); 
          }
         
          // 4. make sure that username and email address is not already used if its not there then
          //    1. insert and redirect to index.html
          $result = CS50::query("INSERT IGNORE INTO users (username, hash, cash) VALUES(?, ?, 10000.0000)",
            $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
          
          
          // else 
          //    apologize
     
 
          
    }

?>