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
          apologize("نرجو أدخال كلمة مستخدم "); 
        }
        else if (empty($password))
        {
           apologize("نرجو أدخال كلمة مرور "); 
        }
        else if ($password !== $confirmPassword)
        {
          apologize("كلمة المرور لا تتطابق "); 
        }
         
        // 4. make sure that username and email address is not already used if its not there then
        //    1. insert and redirect to index.html
        $result = CS50::query("INSERT IGNORE INTO users (username, password) VALUES(?, ?)",
            $username, password_hash($password, PASSWORD_DEFAULT));
        
        if ($result != 0){
            redirect('login.php'); 
        }
        else {
            apologize("لقد تم إستخدام كلمات المستخدم من قبل "); 
        }
 
    }

?>