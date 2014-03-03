<?php
  include("inc/header2.php");
?>

<div id = "slide1">
  <div class = "content">
    <img src="images/BracketTop.png" alt = "BracketTop">
	  <h1>Hello!</h1> 
  	<p>I am a web developer <!-- <img src="images/amp2Light.png" alt = "and" id = 'amp'> -->and designer. I love web and graphic design as well as full stack web
  		development.</p>
  	<p>I have experience in coding HTML, CSS, PHP, MySQL, JavaScript, SEO and <a id = "moreLink" href="#slide3">more...</a></p>
  	<p>On the otherhand I have experience using many graphic design programs such as the Adobe Creative Suite as well as GIMP and Inkscape.</p>
    <img src="images/BracketBottom.png" alt = "BracketBottom">
  </div>
</div>
<div id = "slide2">
	<h1 class = "page-header">{ My Works }</h1>
  <div class = "row">
    
    <div class = "col-md-2 col-lg-2 col-sm-1 col-xs-1">
      <img class = "imgEnds left" src="images/bracketLeft.png" alt= 'pretty'>
    </div>
    
    <div class = "col-md-8 col-lg-8 col-sm-10 col-xs-10">
      <div id="myWorks" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myWorks" data-slide-to="0" class="active"></li>
          <li data-target="#myWorks" data-slide-to="1"></li>
          <li data-target="#myWorks" data-slide-to="2"></li>
          <li data-target="#myWorks" data-slide-to="3"></li>
          <li data-target="#myWorks" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="images/onePage.png" alt="Pageless">
            <div class="carousel-caption">
              <h2 class = "light">Example of a Pageless site</h3>
            </div>
          </div>
          <div class="item">
            <img src="images/blogPage.png" alt="Blog Page">
            <div class="carousel-caption">
              <h2 class = "dark">Blog Page</h3>
            </div>
          </div>
          <div class="item">
            <img src="images/fwrfcPage.png" alt="FWRFC Old">
            <div class="carousel-caption">
              <h2 class = "light">Old FWRFC Website</h3>
            </div>
          </div>
          <div class="item">
            <img src="images/FWRFCNewDesign1.png" alt="FWRFC New">
            <div class="carousel-caption">
              <h2 class = "dark">FWRFC Website Redesign</h3>
            </div>
          </div>
          <div class="item">
            <img src="images/exoticReef.png" alt="Exotic Reef">
            <div class="carousel-caption">
              <h2 class = "light">Exotic Reef</h3>
            </div>
          </div>
      </div>

       <!-- Controls -->
        <a class="left carousel-control" href="#myWorks" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myWorks" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    
    <div class = "col-md-2 col-lg-2 col-sm-1 col-xs-1">
      <img class = "imgEnds right" src="images/bracketRight.png" alt= 'pretty'/>
    </div>

  </div>
</div>

<div id = "slide3">
	<div class = "row">
	<div class = "content col-md-6 col-lg-6 col-sm-12 col-xs-12 pull-left">
        <h1 class = "page-header">{ The Basics }</h1>
        <p class = "para">
          I've been programming for the last 5 years with various different languages
           but I'm passoinate about creating websites. I really enjoy creating something 
           that a user will be able to interact with over their various media devices with 
           ease. Currently I am on the east coast but I am relocating to San Diego as soon 
           as I find a job. I have experience in creating both informational sites and e-commerce 
           sites. 
    	</p>
    </div>
	<div class = "col-md-5 col-lg-5 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 pull-right ">
        <h1 class = "page-header">{ The Skills }</h1>
        <div class = "row list">
          <ul class = "col-md-4 col-lg-4 col-sm-5 col-xs-5 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1">
            <li>HTML/HTML5</li>
            <li>CSS/CSS3</li>
            <li>JavaScript</li>
            <li>PHP</li>
            <li>Inkscape</li>
            <li>Adobe Creative Suite</li>
            <li>Currently Learning: Ruby on Rails</li>
          </ul>
          <ul class = "first col-md-2 col-lg-2 col-sm-4 col-xs-4 col-lg-offset-1 col-md-offset-1 ">
            <li>jQuery</li>
            <li>Bootstrap</li>
            <li>GIMP</li>
            <li>MySQL</li>
            <li>Git</li>
            <li>SVN</li>
            <li>SEO</li>
            <li>MySQL</li>
          </ul>
        </div>
      </div>
	</div>
</div>
<div id = "slide4">
  <h1>{ Contact Me }</h1>
  <div class = "row">
    <div class = "col-md-6 col-lg-6 col-sm-12 col-xs-12"
    <p class = "para">
      If you would like to hire me  or need more information send me a message and I will get back to you as soon as possible!
    </p>
    <div class = "email">
      <a href="mailto:dkn5678@gmail.com"><?php include('images/myWhale.svg');?></a>
    </div>
  </div>
    <div class = "col-md-6 col-lg-6 col-sm-12 col-xs-12" id = "twitter">
      <?php
        include('inc/twitter.php');
      ?>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	  <script type="text/javascript">
       $('#myWorks').carousel({
          interval: 2000
       });
   </script>
  </body>
</html>