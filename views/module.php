<style>

    @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);
    
    #main-body
    {
        margin-top: 5px;
        margin-bottom: 20px;
    }
    
    form{
        /*border-radius: */
        text-align: right;
        background-image: url("../images/test.jpg");
    }
        
        
    body{
        direction: rtl;
        font-family: 'Droid Arabic Naskh', serif;
        background-image: url("../images/callout_bg.jpg");
    }
    
    h1
    {
        background:#222;
        color:#f9f9f9;
        padding:50px;
        
    }
    
    #question
    {
        text-align: center;
    }
    
    #main-body
    {
    
        padding: 20px;
    }
    
    .outter
    {
        text-align: center;    
    }
    
    .inner
    {
        width: 50%;
        margin: 0 auto;     
    }
    
    .radio{
        margin: 50px;
    }
    
    #submit
    {
        margin-bottom: 15px;   
        padding: 15px;
    }
    
</style>

<?php
    $type = $data['type'];
    if ($type === "choice")
        {
            print("<h1>"); 
            print("ثانياً: أسئلة الاختيار من متعدد");
            print("</h1>");
        }
        else
        {
            print("<h1>");
            print("أولاً: أسئلة الصواب و الخطأ ");
            print("</h1>");
                 
        }

?>

<div id="main-body">
    <form action="test.php" method="post">
        
        <?php

            // check the type of the question 
            // $type = $data["type"]; 
            
            
            if ($type === "choice")
            {
                
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
                print("</br>"); 
                print('<div id="question">');
                print($data["question"]); 
                print('</div>');
                print("</br>"); 
                
                print('<div class="outter">'); 
                // yes //
                print(' نعم '); 
                print("<input class='radio' type='radio' name='answer' value='yes' class='answer'required/>"); 
                
                print("</span>"); 
                
                // no // 
                print(' لا '); 
                print("<input class='radio' type='radio' name='answer' value='no' class='answer'required/>"); 
                
                print('</div>'); 
                
            }
            
            
            // print new line 
            print("</br>");
        ?>
        
        <div class='outter'>
            <input id="submit" class='inner' type="submit" value="تأكيد "/>
        </div>
    </form>
</div>
