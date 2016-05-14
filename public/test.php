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
            $_SESSION["result"] = 0; 
            $size = count($query); 
            $_SESSION["size"] = $size; 
            $_SESSION["test"] = $query; 
            render("module.php", ["title" => "test", "data" => $query[$counter]]);
        }
        
        
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $counter = $_SESSION["counter"]; 
        $size = $_SESSION["size"]; 
        $query = $_SESSION["test"];
        $result = $_SESSION["result"];
        $right_answer = $_POST['answer']; 
        
        // chkeck the type of the question 
        if ($query[$counter]["right_answer"] == $right_answer)
        {
            $result++; 
            $_SESSION['result'] = $result; 
        }
        
         
        
        if ($counter < $size - 1)
        {
            $counter++; 
            $_SESSION["counter"] = $counter; 
            
            render("module.php", ["title" => "test", "data" => $query[$counter]]);
        }
        else 
        {
            
            $module_number = $_SESSION["current_module"]; 
            // todo display the result and send it to the database
            // check the result 
            $current_module = $module_number - 1; 
            $current_module = $current_module % 3; 
            $current_module++; 
            
            // precentage 
            $degree = $_SESSION["result"] / $_SESSION["size"]; 
            $degree *= 100; 
            
            if ($current_module == 1)
            {
                $_SESSION["module1"] = $degree;
                CS50::query("UPDATE users SET module1 = ? WHERE id = ?", $_SESSION['module1'], $_SESSION['id']); 
            }
            else if ($current_module == 2)
            {
                $_SESSION["module2"] = $degree;
                CS50::query("UPDATE users SET module1 = ? WHERE id = ?", $_SESSION['module2'], $_SESSION['id']); 
            }
            else if ($current_module == 3)
            {
                $_SESSION["module3"] = $degree;
                CS50::query("UPDATE users SET module1 = ? WHERE id = ?", $_SESSION['module3'], $_SESSION['id']); 
            }
            
            render('test_result.php',
                    ["title" => "result", "result" => $_SESSION["result"], "total" => $_SESSION["size"], 
                            "degree" => $degree]); 
        }
        
    }

?>