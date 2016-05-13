<?php 
    
    // configuration
    require("../includes/config.php");
    
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        
        $result = CS50::query("SELECT * FROM questions");
        
        if (!empty($result))
        {
            // else render form
            render("test_form.php", ["title" => "test", "data" => $result]);
        }
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        
    }

?>