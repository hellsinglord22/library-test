<style>
    @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);

    #main
    {
        text-align: center;
        margin-top: 10px;    
        
    }
    
    body
    {
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
    
    
    
    button
    {
        width: 25%;
        padding: 5px;
        margin-top: 40px;
    }
    
    .message
    {
    }
    
    
</style>



<div id='main'>
    
    <h1>
        <?php
        
            print('نتيجة إختبار الموديول ');
            if ($current_module == 1)
            {
                print('الأول '); 
            }
            else if ($current_module == 2)
            {
                print('الثاني '); 
            }
            else if ($current_module == 3)
            {
                print('الثالث '); 
            }
        ?>
    </h1>
    
    
    <div>
        <?php
        
            // Attributes // 
            $fail = "عزيزي المتعلم لقد حصلت على درجة أقل من 90 % قم بالضغط على التالي لدراسة الموديل مرة أخرى  "; 
            $success = "عزيزي المتعلم لقد حصلت على درجة أعلى من 90 ٪ إضغط على التالي للذهاب للصفحة الرئيسية "; 
            
            
            $newline = "</br>"; 
            
            $successButton = '
                <div class="message">
                    <button>
                        <a href="/">
                            التالي 
                        </a>
                    </button>
                </div>'; 
            
            // end of Attributes // 
            
        
            if ($current_module == 1)
            {
                if ($_SESSION['module1'] >= 90)
                {
                 print($success);    
                 print($newline); 
                 print($successButton); 
                }
                else 
                {
                    print($fail); 
                    print($newline); 
                    print('
                        <div class="message">
                            <button>
                                <a href="http://rdatrainingcourse.com/module1/story.html">
                                    التالي 
                                </a>
                            </button>
                        </div>'); 
                }
                
            }
            else if ($current_module == 2)
            {
                if ($_SESSION['module2'] >= 90)
                {
                    print($success);    
                    print($newline); 
                    print($successButton); 
                    
                }
                else 
                {
                    print($fail); 
                    print($newline); 
                    print('
                        <div class="message">
                            <button>
                                <a href="http://rdatrainingcourse.com/module2/story.html">
                                    التالي 
                                </a>
                            </button>
                        </div>');
                }
            }
            else if ($current_module == 3)
            {
                if ($_SESSION['module3'] >= 90)
                {
                    print($successButton); 
                    print($newline); 
                    print($success);    
                    
                }
                else 
                {
                    print($fail);
                    print($newline); 
                    print('
                        <div class="message">
                            <button>
                                <a href="http://rdatrainingcourse.com/module1/story.html">
                                    التالي 
                                </a>
                            </button>
                        </div>'); 
                }
            }
        ?>
    </div>
    
    
</div>