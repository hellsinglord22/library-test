<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("login_form.php", ["title" => "Log In"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // get username and password  
        $username = $_POST["username"]; 
        $password = $_POST["password"]; 
        
        
        // make sure that username and password are not empty 
        if (empty($username)){
            apologize("Username can't be empty !"); 
        } 
        else if (empty($password)){
            apologize("Password can't be empty !"); 
        }
        
        
        // find user by username 
        $result = CS50::query("SELECT * FROM users WHERE username = ?", $username); 
        
        // make sure you found at least 1 
        if (count($result) == 1){
            
            // first (and only) row
            $row = $result[0];

            // compare hash of user's input against hash that's in database
            if (password_verify($password, $row["password"]))
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["id"];
                
                // redirect to portfolio
                redirect("index.php");
            }
            else {
                apologize("Invalid username/password !!!");
            }
        }
        else {
            apologize("Invalid username/password !!!");
        }
        
    }

?>
