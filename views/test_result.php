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
    
    
</style>



<div id='main'>
    
    <h1>
        <?php
        
            print('ﻝﻮﻳﺩﻮﻤﻟا ﺭﺎﺒﺘﺧﺇ ﺔﺠﻴﺘﻧ ');
            if ($current_module == 1)
            {
                print('ﻝﻭﻷا '); 
            }
            else if ($current_module == 2)
            {
                print('ﻲﻧﺎﺜﻟا '); 
            }
            else if ($current_module == 3)
            {
                print('ﺚﻟﺎﺜﻟا '); 
            }
        ?>
    </h1>
    
    
    <div>
        <?php
        
            // Attributes // 
            $fail = "ﻯﺮﺧﺃ ﺓﺮﻣ ﻞﻳﺩﻮﻤﻟا ﺔﺳاﺭﺪﻟ ﻲﻟﺎﺘﻟا ﻰﻠﻋ ﻂﻐﻀﻟﺎﺑ ﻢﻗ % 90 ﻦﻣ ﻞﻗﺃ ﺔﺟﺭﺩ ﻰﻠﻋ ﺖﻠﺼﺣ ﺪﻘﻟ ﻢﻠﻌﺘﻤﻟا ﻱﺰﻳﺰﻋ  "; 
            $success = "ﺔﻴﺴﻴﺋﺮﻟا ﺔﺤﻔﺼﻠﻟ ﺏﺎﻫﺬﻠﻟ ﻲﻟﺎﺘﻟا ﻰﻠﻋ ﻂﻐﺿﺇ ٪ 90 ﻦﻣ ﻰﻠﻋﺃ ﺔﺟﺭﺩ ﻰﻠﻋ ﺖﻠﺼﺣ ﺪﻘﻟ ﻢﻠﻌﺘﻤﻟا ﻱﺰﻳﺰﻋ "; 
            
            
            $newline = "</br>"; 
            
            
            
            // end of Attributes // 
            
        
            if ($current_module == 1)
            {
                if ($_SESSION['module1'] >= 90)
                {
                 print($success);    
                 print($newline); 
                 print('
                <div class="message">
                    <a href="http://rdatrainingcourse.com/module1/story.html">
                        <button>
                            ﻲﻟﺎﺘﻟا 
                        </button>
                    </a>        
                </div>'); 
                }
                else 
                {
                    print($fail); 
                    print($newline); 
                    print('
                        <div class="message">
                            <button>
                                <a href="http://rdatrainingcourse.com/contentm1/story.html">
                                    ﻲﻟﺎﺘﻟا 
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
                    print('
                <div class="message">
                    <button>
                        <a href="http://rdatrainingcourse.com/module1/story.html">
                            ﻲﻟﺎﺘﻟا 
                        </a>
                    </button>
                </div>'); 
                    
                }
                else 
                {
                    print($fail); 
                    print($newline); 
                    print('
                        <div class="message">
                            <button>
                                <a href="http://rdatrainingcourse.com/contentm2/story.html">
                                    ﻲﻟﺎﺘﻟا 
                                </a>
                            </button>
                        </div>');
                }
            }
            else if ($current_module == 3)
            {
                if ($_SESSION['module3'] >= 90)
                {
                    print($success);    
                    print($newline); 
                    print('
                <div class="message">
                    <button>
                        <a href="http://rdatrainingcourse.com/module1/story.html">
                            ﻲﻟﺎﺘﻟا 
                        </a>
                    </button>
                </div>'); 
                    
                }
                else 
                {
                    print($fail);
                    print($newline); 
                    print('
                        <div class="message">
                            <button>
                                <a href="http://rdatrainingcourse.com/contentm3/story.html">
                                    ﻲﻟﺎﺘﻟا 
                                </a>
                            </button>
                        </div>'); 
                }
            }
        ?>
    </div>
    
    
</div>