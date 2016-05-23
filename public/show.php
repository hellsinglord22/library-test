<?php 
    
    // configuration
    require("../includes/config.php");
   
     
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        
        // get module number and type of test 
        $module_number = (isset($_GET['module_number'])) ? $_GET["module_number"] : 1 ; 
        $_SESSION["current_module"] = $module_number; 
        
        
        // TODO add exam_type 
        $query = CS50::query("SELECT * FROM questions WHERE module_number = ?", $module_number);
        
        
        if (!empty($query))
        {
            // else render form
            $counter = 0; 
            $_SESSION["counter"] = 0; 
            $size = count($query); 
            $_SESSION["size"] = $size; 
            $_SESSION["test"] = $query; 
            render("test_view.php", ["title" => "Viiew Test", "data" => $query[$counter]]);
        }
        else 
        {
            // their is no questions 
            apologize('their is no questions');
        }
        
        
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $counter = $_SESSION["counter"]; 
        $size = $_SESSION["size"]; 
        $query = $_SESSION["test"];
        
        
        if ($counter < $size - 1)
        {
            $counter++; 
            $_SESSION["counter"] = $counter; 
            
            render("test_view.php", ["title" => "View Test", "data" => $query[$counter]]);
        }
        else 
        {
            // send the admin to the home page 
            redirect('/'); 
        }
        
    }

?>