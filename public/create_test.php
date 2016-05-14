<?php 
    
    // configuration
    require("../includes/config.php");
    
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("test_form.php", ["title" => "create test"]);
    }
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $module_number = (int)$_POST["module"]; 
        $type = $_POST["type"]; 
        $question = $_POST["question"]; 
        
        
        // Choices question
        if ($type == "choice"){
            // get data //
            $option1 = $_POST["option1"]; 
            $option2 = $_POST["option2"]; 
            $option3 = $_POST["option3"]; 
            $option4 = $_POST["option4"];
            $answer  = $_POST["answer"]; 
            
            $result = CS50::query("INSERT IGNORE INTO questions (question, type, right_answer, module_number, option1, option2, option3, option4) VALUES(?, ?, ?, ?, ?, ?, ?, ?)", $question, $type, $answer,$module_number, $option1, $option2, $option3, $option4);
            
            render("test_form.php", ["title" => "create test"]);
        }
        else 
        {
            // get data 
            $answer = $_POST["answer"];

            // insert data into database 
            if ($answer === "yes" || $answer === "no"){
                $type = "RW"; 
                $result = CS50::query("INSERT IGNORE INTO questions (question, type, right_answer, module_number) VALUES(?, ?, ?, ?)", $question, $type, $answer,$module_number);
                    render("test_form.php", ["title => create test"]); 
            }
            else 
            {
                apologize("Right and wrong questions should be yes or no"); 
            }
            
        }
    }

?>