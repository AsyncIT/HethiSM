<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Herthi Super Market</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'><link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/flexslider.css" type="text/css" media="screen" rel="stylesheet"  />
<link href="css/jquery.fancybox.css" rel="stylesheet">
<link href="css/cloud-zoom.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="assets/ico/favicon.html">
</head>
<body>
<!-- Header Start -->
<header>

  @include('Pages.template.topnav')

  <div class="container">
    @include('Pages.template.middlenav')
    @include('Pages.template.mainnav')

  </div>
</header>
<!-- Header End -->

<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Nous Contactez</li>
      </ul>

        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1471.8415619773552!2d2.282945711829418!3d48.905405690844525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66f7d08d42c5f%3A0x9910d291a4875cc8!2sHerthi!5e0!3m2!1sen!2slk!4v1437211281750" width="100%"  frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>


      <!-- Contact Us-->
      <h1 class="heading1"><span class="maintext">Nous Contactez</span><span class="subtext"> Contactez-nous pour plus</span></h1>
      <div class="row">
        <div class="span9">
          <form class="form-horizontal contactform"  method="post">
            <fieldset>
              <div class="control-group">
                <label for="name" class="control-label">Nom Et Prénom: <span class="required">*</span></label>
                <div class="controls">
                  <input type="text"  class="required" id="name" value="" name="name">
                </div>
              </div>
              <div class="control-group">
                <label for="email" class="control-label">Adresse E-Mail: <span class="required">*</span></label>
                <div class="controls">
                  <input type="email"  class="required email" id="email" value="" name="email">
                </div>
              </div>
              <div class="control-group">
                <label for="url" class="control-label">Sujet :</label>
                <div class="controls">
                  <input type="url" id="url" value="" name="url">
                </div>
              </div>
              <div class="control-group">
                <label for="message" class="control-label">Enquiry:</label>
                <div class="controls">
                  <textarea  class="required" rows="6" cols="40" id="message" name="messagee"></textarea>
                </div>
              </div>
              <div class="form-actions">
                <input class="btn btn-orange" type="submit" value="Submit" id="submit_id">
                <input class="btn" type="reset" value="Reset">
              </div>
            </fieldset>
          </form>
        </div>
        
        <!-- Sidebar Start-->
        <div class="span3">
          <aside>
            <div class="sidewidt">
              <h2 class="heading2"><span>Nous Contactez</span></h2>
              <p>
                  Herthi<br/>
                  31 Rue d'Anjou, <br/>
                  92600 Asnières-sur-Seine,<br/>
                  France<br/>

                  <br>
                Phone:  01 75 47 51 65 <br>
                Email: info@herthi.fr<br>
                Web: herthi.fr<br>
              </p>
            </div>
          </aside>
        </div>
        <!-- Sidebar End-->
        
      </div>
    </div>
  </section>
</div>

<!-- Footer -->
@include('Pages.template.basefooter')
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/application.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script defer src="js/jquery.fancybox.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.tweet.js"></script>
<script  src="js/cloud-zoom.1.0.2.js"></script>
<script  type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript"  src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript"  src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript"  src="js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript"  src="js/jquery.ba-throttle-debounce.min.js"></script>
<script defer src="js/custom.js"></script>
</body>
</html>