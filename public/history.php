<?php
    
    // configuration
    require("../includes/config.php"); 


    // response to get request // 
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $rows = CS50::query("SELECT * FROM history"); 
        
        // make sure you did select anything before rendering 
        if (!empty($rows))
        {
            render("display_history.php", ["title" => "History", "positions" => $rows]); 
        }
    }
?>