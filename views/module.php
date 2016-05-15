<style>
    #main-body
    {
        margin: 100px;
        margin-left:500px;
        margin-right: 500px; 
        
    }
    
    form{
        /*border-radius: */
        text-align: right;
    }
        
        
    body{
        direction: rtl;
    }
    
</style>

<div id="main-body">
    <form action="test.php" method="post">
        
        <?php

            // check the type of the question 
            $type = $data["type"]; 
            
            
            if ($type === "choice")
            {
                print("<h1>"); 
                print("ثانياً: أسئلة الاختيار من متعدد");
                print("</h1>");
                
                
                print("<div id='question'>"); 
                print($data["question"]); 
                print("</br>");
                print("</div>"); 
                
                // option 1 // 
                print($data["option1"]);
                print("  ");
                print("<input type='radio' name='answer' value='1' class='answer'required/>");
                print("</br>");
                
                // option 2 // 
                print($data["option2"]); 
                print("  ");
                print("<input type='radio' name='answer' value='2' class='answer' required/>"); 
                print("</br>");
                
                // option 3 // 
                print($data["option3"]); 
                print("  ");
                print("<input type='radio' name='answer' value='3' class='answer'required/>"); 
                print("</br>");
                
                // option 4 // 
                print($data["option4"]); 
                print("  ");
                print("<input type='radio' name='answer' value='4' class='answer'required/>"); 
                print("</br>");
            } 
            else
            {
                print("<h1>");
                print("أولاً: أسئلة الصواب و الخطأ ");
                print("</h1>");
                print("</br>"); 
                print($data["question"]); 
                print("</br>"); 
                
                // yes //
                print(' نعم '); 
                print("<input type='radio' name='answer' value='yes' class='answer'required/>"); 
                
                print("</br>"); 
                
                // no // 
                print(' لا '); 
                print("<input type='radio' name='answer' value='no' class='answer'required/>"); 
                
            }
            
            
            // print new line 
            print("</br>");
        ?>
        
        
        <input type="submit" value="تأكيد "/>
    </form>
</div>
