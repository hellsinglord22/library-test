<style>
    @import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);

    form
    {
        margin-left: 200px;
        margin-right: 200px;
        margin-top: 50px;    
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
    
    #bottom
    {
        margin-left: 200px;
        margin-right: 200px;
    }
</style>

<h1>
     إنشاء حساب 
</h1>
<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="username" placeholder="كلمة مستخدم " type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="كلمة مرور " type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirmPassword" placeholder="أدخل كلمة المرور مرة أخرى " type="password"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                إنشاء حساب 
            </button>
        </div>
    </fieldset>
</form>
<div id="bottom">
    أو <a href="login.php">سجل دخولك </a>
</div>
