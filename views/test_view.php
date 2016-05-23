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
    print("ﺛﺎﻧﻴﺎً: ﺃﺳﺌﻠﺔ اﻻﺧﺘﻴﺎﺭ ﻣﻦ ﻣﺘﻌﺪﺩ");
    print("</h1>");
}
else
{
    print("<h1>");
    print("ﺃﻭﻻً: ﺃﺳﺌﻠﺔ اﻟﺼﻮاﺏ ﻭ اﻟﺨﻄﺄ ");
    print("</h1>");

}

?>

<div id="main-body">
    <form action="show.php" method="post">

        <?php

            // check the type of the question 
            // $type = $data["type"]; 


        if ($type === "choice")
        {

            print("<div id='question'>"); 
            print($data["question"]); 
            print("</br>");
            print("</div>"); 

            print('</br>');
            print('<div class="outter">'); 
                // option 1 // 
            print($data["option1"]);
            print("</br>");

                // option 2 // 
            print($data["option2"]); 
            print("  ");
            print("</br>");

                // option 3 // 
            print($data["option3"]); 
            print("  ");
            print("</br>");

                // option 4 // 
            print($data["option4"]); 
            print("  ");
            print("</br>");
            print('</br>'); 

            print(''); 

            $template = 'اﻹﺟﺎﺑﺔ اﻟﺼﺤﻴﺤﺔ ﻫﻲ '; 
            if($data['right_answer'] == 1){
                print($template); 
                print('اﻹﺧﺘﻴﺎﺭ اﻷﻭﻝ '); 

            }else if ($data['right_answer'] == 2){
                print($template); 
                print('اﻹﺧﺘﻴﺎﺭ اﻟﺜﺎﻧﻲ '); 

            }else if($data['right_answer'] == 3){
                print($template); 
                print('اﻹﺧﺘﻴﺎﺭ اﻟﺜﺎﻟﺚ ');

            }else {
                print($template); 
                print('اﻹﺧﺘﻴﺎﺭ اﻟﺮاﺑﻊ ');

            }

            print('</div>'); 
            print('</br>');
        } 
        else
        {
            print("</br>"); 
            print('<div id="question">');
            print($data["question"]); 
            print('</div>');
            print("</br>"); 

            print('<div class="outter">'); 
            print("</br>");

            if ($data['right_answer'] == 'yes')
            {
                print('اﻹﺟﺎﺑﺔ اﻟﺼﺤﻴﺤﺔ : ﻧﻌﻢ '); 
            } 
            else 
            {
                print('اﻹﺟﺎﺑﺔ اﻟﺼﺤﻴﺤﺔ : ﻻ ');
            }

            print('</div>');
            print('</br>');

        }            
        ?>
        
        <div class='outter'>
            <input id="submit" class='inner' type="submit" value="اﻟﺘﺎﻟﻲ "/>
        </div>
    </form>
</div>
