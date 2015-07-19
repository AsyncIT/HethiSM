<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <title>Rubi Cart</title>
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
        <li class="active">password reset</li>
      </ul>
       <!-- Account Login-->
      <div class="row">  
        <div class="span9">
          <h1 class="heading1"><span class="maintext">Password Reset</span><span class="subtext">Enter your email address and check email for confirmation</span></h1>
          <section class="newcustomer">
            <h2 class="heading2">Password Reset Instruction </h2>
            <div class="loginbox">
              <h4 class="heading4"> Guidlines</h4>
              <p>If you already tried email confirmation and if it's not working please contact site administrator by email address.</p>
              <br>

              <br>
              <a href="#" class="btn btn-orange">Continue</a>
            </div>
          </section>

          <section class="returncustomer">
            <h2 class="heading2">Forget Password </h2>
            <div class="loginbox">
              <h4 class="heading4">Enter your email address</h4>

              <div class="panel-body">
                @if (session('status'))
                  <div class="alert alert-success">
                    {{ session('status') }}
                  </div>
                @endif

                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="control-group">
                    <label class="col-md-4 control-label">E-Mail Address</label>
                    <div class="col-md-6">
                      <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                  </div>

                  <div class="control-group">
                    <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                        Send Password Reset Link
                      </button>
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
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
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