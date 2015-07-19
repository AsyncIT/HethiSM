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
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../css/flexslider.css" type="text/css" media="screen" rel="stylesheet"  />
<link href="../css/jquery.fancybox.css" rel="stylesheet">
<link href="../css/cloud-zoom.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<!-- fav -->
<link rel="shortcut icon" href="../assets/ico/favicon.html">
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
        <li class="active">S'identifier</li>
      </ul>
       <!-- Account Login-->
      <div class="row">  
        <div class="span9">
          <h1 class="heading1"><span class="maintext">S'identifier</span><span class="subtext">Premi�re Connectez-vous ici pour voir toutes les informations de votre compte</span></h1>
          <section class="newcustomer">
            <h2 class="heading2">Nouveau Client </h2>
            <div class="loginbox">

              <p>En cr�ant un compte, vous pourrez commander plus vite, d'�tre � jour sur le statut de l'ordre, et de garder trace des commandes que vous avez d�j� faites.</p>
              <br>

              <br>
              <a href="#" class="btn btn-orange">continuer</a>
            </div>
          </section>
          <section class="returncustomer">
            <h2 class="heading2">D�j� Client </h2>
            <div class="loginbox">
              <h4 class="heading4">Je suis un client de retour</h4>

               <form class="form-vertical" role="form" method="POST" action="{{ url('/auth/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="control-group">
                  <label class="control-label">Adresse E-Mail</label>
                  <div class="controls">
                    <input type="email" class="span3" name="email" value="{{ old('email') }}">
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">mot de passe</label>
                  <div class="controls">
                    <input type="password" class="span3" name="password">
                  </div>
                </div>

                <div class="control-group">
                  <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="remember"> Souviens-Toi De Moi
                      </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-orange">S'identifier</button>
                    <a class="btn btn-link" href="{{ url('/password/email') }}">Mot De Passe Oubli�?</a>
                  </div>
                </div>
              </form>



            </div>
          </section>
        </div>
        
        <!-- Sidebar Start-->
        <aside class="span3">
          <div class="sidewidt">

            @if (count($errors) > 0)
              <div class="alert alert-danger">
                <strong>Whoops!</strong> Il y avait quelques probl�mes avec votre entr�e.<br><br>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

          </div>
        </aside>
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
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/respond.min.js"></script>
<script src="../js/application.js"></script>
<script src="../js/bootstrap-tooltip.js"></script>
<script defer src="../js/jquery.fancybox.js"></script>
<script type="text/javascript" src="../js/jquery.tweet.js"></script>
<script  src="../js/cloud-zoom.1.0.2.js"></script>
<script  type="text/javascript" src="../js/jquery.validate.js"></script>
<script type="text/javascript"  src="../js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript"  src="../js/jquery.mousewheel.min.js"></script>
<script type="text/javascript"  src="../js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript"  src="../js/jquery.ba-throttle-debounce.min.js"></script>
<script defer src="../js/custom.js"></script><strong></strong>
</body>
</html>