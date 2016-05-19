<div class="container">
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 

      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">تسجيل الخروج </a></li>
        <?php
        	if ($_SESSION['id'] == 5)
        	{
        		print('<li><a href="history.php"> السجل  </a><li>'); 
        	}
        ?>
	      <li><a href="contactus.html">اتـصل بنـا </a></li>
        <li><a href="sites.html">مواقع هامة</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">الموديولات التعليمية   <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://rdatrainingcourse.com/module1/story.html"target="_self" ">المـوديـول الأول</a></li>
            <?php
              if (isset($_SESSION['module1']))
              {
                  if ($_SESSION['module1'] >= 90){
                    print('<li><a href="http://rdatrainingcourse.com/module2/story.html"target="_self" ">المـوديـول الثاني </a></li>');
                  }
              }
              
              if (isset($_SESSION['module2']))
              {
                  if ($_SESSION['module2'] >= 90){
                    print('<li><a href="http://rdatrainingcourse.com/module3/story.html"target="_self" ">المـوديـول الثالث  </a></li>');
                  }
              }
            
            ?>

          </ul>
	    <li class="active"><a href="index.html">الرئيسية</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </div>

    
    
<!-- start slider-->
    <section class="slider">
	<div class="container">
	<div id="myslider" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myslider" data-slide-to="0" class="active"></li>
    <li data-target="#myslider" data-slide-to="1"></li>
    <li data-target="#myslider" data-slide-to="2"></li>
    <li data-target="#myslider" data-slide-to="3"></li>
    <li data-target="#myslider" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="sliderimg" src="images/01.png" alt="library">
      <div class="carousel-caption">
        <h2 class="wow bounceInLeft">الموديول الاول   </h2>
	<P class="wow bounceInLeft">
	الموديولات التعليمية لمهارات الفهرسة باستخدام قواعد وصف المصادر وإتاحتها</br>
	 لدى أخصائي المكتبات والمعلومات بشبكة مكتبات مصر العامة (RDA)
	</P>
      </div>
    </div>
    <div class="item">
      <img class="sliderimg" src="images/02.png" alt="library">
      <div class="carousel-caption">
        <h2 class="wow bounceInLeft"> الموديول الثاني   </h2>
	<P class="wow bounceInLeft">
	الموديولات التعليمية لمهارات الفهرسة باستخدام قواعد وصف المصادر وإتاحتها</br>
	 لدى أخصائي المكتبات والمعلومات بشبكة مكتبات مصر العامة (RDA)
	</P>
      </div>
    </div>
    
    <div class="item">
      <img  class="sliderimg" src="images/03.png" alt="library">
      <div class="carousel-caption">
        <h2 class="wow bounceInLeft">الموديول الثالث    </h2>
	<P class="wow bounceInLeft">
	الموديولات التعليمية لمهارات الفهرسة باستخدام قواعد وصف المصادر وإتاحتها</br>
	 لدى أخصائي المكتبات والمعلومات بشبكة مكتبات مصر العامة (RDA)
	</P>
      </div>
    </div>
	
    <div class="item">
      <img class="sliderimg"src="images/04.png" alt="library">
      <div class="carousel-caption">
        <h2 class="wow bounceInLeft">الموديول الاول    </h2>
	<P class="wow bounceInLeft">
	الموديولات التعليمية لمهارات الفهرسة باستخدام قواعد وصف المصادر وإتاحتها</br>
	 لدى أخصائي المكتبات والمعلومات بشبكة مكتبات مصر العامة (RDA)
	</P>
      </div>
    </div>
	    
    <div class="item">
      <img class="sliderimg"src="images/05.png"  alt="library">
      <div class="carousel-caption">
        <h2 class="wow bounceInLeft">الموديول الثاني    </h2>
	<P class="wow bounceInLeft">
	الموديولات التعليمية لمهارات الفهرسة باستخدام قواعد وصف المصادر وإتاحتها</br>
	 لدى أخصائي المكتبات والمعلومات بشبكة مكتبات مصر العامة (RDA)
	</P>
      </div>
    </div>
  
  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#myslider" role="button" data-slide="prev">
    <img class="arrow" src="images/left.png"/>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myslider" role="button" data-slide="next">
     <img class="arrow" src="images/right.png"/>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>	
</section>

<!-- end slider-->
<div class="container  text-center ">
<section class="intro">
	<div class="row">
	    <div class="logo col-lg-12 col-sm-12 col-xs-12">
		  <img src="images/logo.png" width="65" height="95"/>
		  <div class="logo_text"></div>
		  <h5> كلية الدراسات العليا للتربية</br> قسم تكنولوجيا التعليم</h5>
		  </div>
	    </div>
	
	 <div class="title col-lg-12 col-sm-12 col-xs-12">
		 <img class="img-responsive center-block" src="images/title.png"/>
	    </div>

	     <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
		 <h2 class="searsher">إعداد الباحث</br>
		 <h2 class="searsher2">مصطفى محمد تهامي عمارة </br>
		 أخصائي مكتبات ومعلومات – مكتبة مصر العامة</h2>
</h2>		
	    </div>
	     
	      <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
		<h2 class="ashraf"> إشــــراف</h2>
		<div class=" col-lg-6 col-sm-6 col-xs-12 text-center">
		 <h2 class="dr"> الأستاذ الدكتور</br>
		محمد فتحي عبد الهادي  </br>
		 أستاذ المكتبات والمعلومات</br>
		 كليـة الآداب - جامعـة القاهرة</h2>
		</div>
		
		<div class=" col-lg-6 col-sm-6 col-xs-12 text-center">
		 <h2 class="dr"> الدكتور</br>
		 ممدوح سالم الفقي </br>
		 مدرس تكنولوجيا التعليـم والتعليم عن بعد </br>
		كلية الدراسات العليا للتربية
		 بجامعة القاهرة</h2>
		</div>
		<div class="col-lg-12 col-sm-12 col-xs-12 text-center title_2">
	        <p class="lead">
		 لدى أخصائي المكتبات والمعلومات بشبكة مكتبات مصر العامة (RDA)  الموديولات التعليمية لمهارات الفهرسة باستخدام قواعد وصف المصادر وإتاحتها 
		   </p>
		</div>
	</div>
	</div>
</section>
</div>

 <div class="container  text-center">
    <section class="modules">
	<div class="row">
	<div class=" blocks col-lg-4 col-sm-4 col-xs-12 text-center">
	    <a href="http://rdatrainingcourse.com/module1/story.html"target="_self" ">
	   <h2 class="m_title ">الموديول الأول</h2>
	<img class="img-responsive center-block "src="images/modules.png" width="80" height="80"/>
	    </a>
	</div>
	
	<div class=" blocks col-lg-4 col-sm-4 col-xs-12 text-center">
	   
	   <?php
	    if (isset($_SESSION['module1'])){
	      if ($_SESSION['module1'] >= 90){
	        print('<a href="http://rdatrainingcourse.com/module2/story.html" target="_self" "="">
	   <h2 class="m_title ">الموديول الثاني</h2>
	<img class="img-responsive center-block " src="images/modules.png" width="80" height="80">
	    </a>'); 
	      }
	      else {
	        print('
	   <h2 class="m_title ">الموديول الثاني</h2>
	<img class="img-responsive center-block " src="images/modules.png" width="80" height="80">'); 
	      }
	    }
	    
	   
	   
	   ?>


	</div>
	
	<div class=" blocks col-lg-4 col-sm-4 col-xs-12 text-center">
	   
	   <?php
	   	 if (isset($_SESSION['module2'])){
	      if ($_SESSION['module2'] >= 90){
	        print('<a href="http://rdatrainingcourse.com/module3/story.html" target="_self" "="">
	   <h2 class="m_title ">الموديول الثالث </h2>
	<img class="img-responsive center-block " src="images/modules.png" width="80" height="80">
	    </a>'); 
	      }
	      else {
	        print('
	   <h2 class="m_title ">الموديول الثالث </h2>
	<img class="img-responsive center-block " src="images/modules.png" width="80" height="80">'); 
	      }
	    }
	   ?>

	</div>
	</div>
    </section>
    
 </div>


 <div class="container  text-center">
<section class="footer">
    <div class="row">
	<h3 class="foot"> جميع الحقوق محفوظة للباحث</h3>
    </div>
</section>   
</div>
