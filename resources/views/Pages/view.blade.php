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
<link href="../ss/cloud-zoom.css" rel="stylesheet">

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


    <!-- Middle Navigation -->
    <div class="pull-left">

      <a href="{{url('/')}}" class="logo pull-left">
        <img src="../img/logo.png" alt="Herthi Super Market" title="Herthi Super Market"></a>

    </div>


    <div class="headerdetails">




      <div class="pull-right">
        <ul class="nav topcart pull-left">
          <li class="dropdown hover carticon ">
            <a href="#" class="dropdown-toggle" > Panier <span class="label label-orange font14">Aucun article(s)</span> - $00.00 <b class="caret"></b></a>
            <ul class="dropdown-menu topcartopen ">
              <li>

              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- Middle Navigation -->


    @include('Pages.template.mainnav')

  </div>
</header>
<!-- Header End -->

<div id="maincontainer">
  <section id="product">
    <div class="container">      
      <!-- Product Details-->
      <div class="row">
       <!-- Left Image-->
        <div class="span5">
          <ul class="thumbnails mainimage">
            <li class="span5">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="../{{$products->image1}}">
                <img src="../{{$products->image1}}" alt="" title="">
              </a>
            </li>

          </ul>
          <span>Mouse move on Image to zoom</span>
          <ul class="thumbnails mainimage">
            <li class="producthtumb">
              <a class="thumbnail" >
                <img  src="../{{$products->image1}}" alt="" title="">
              </a>
            </li>

          </ul>
        </div>
         <!-- Right Details-->
        {!! Form::Open(['url' => 'AddToCart']) !!}
        <div class="span7">
          <div class="row">
            <div class="span7">
              <h1 class="productname"><span class="bgnone">{{$products->product_name}}</span></h1>
              <div class="productprice">
                <div class="productpageprice">
                  <span class="spiral"></span>{{$products->price}}&euro;</div>
                <div class="productpageoldprice">{{$products->promo_price}}&euro;</div>

                <ul class="rate">
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="off"></li>
                </ul>

                Quantity :

                <input type="number" min="1"  name="product_qty" value="1">
              </div>


              <p><h3>{{$products->product_description}}</h3></p>
              <ul class="productpagecart">
                {!! Form::submit('AJOUTER AU PANIER', ['class' => 'btn btn-orange']) !!}
              </ul>

              @unless (\Auth::guest())

              <input type="text" class="hidden" name="customer_id" value='{{Auth::user()->id}}'>
              <input type="text" class="hidden" name="product_id" value='{{$products->id}}'>
              <input type="text" class="hidden" name="product_name" value="{{$products->product_name}}">
              <input type="text" class="hidden" name="product_price" value="{{$products->price}}">
             
                @endunless
         <!-- Product Description tab & comments-->

            </div>
          </div>
        </div>

        {!! Form::close() !!}

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
<script defer src="../js/jquery.flexslider.js"></script>
<script type="text/javascript" src="../js/jquery.tweet.js"></script>
<script  src="../js/cloud-zoom.1.0.2.js"></script>
<script  type="text/javascript" src="../js/jquery.validate.js"></script>
<script type="text/javascript"  src="../js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script type="text/javascript"  src="../js/jquery.mousewheel.min.js"></script>
<script type="text/javascript"  src="../js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript"  src="../js/jquery.ba-throttle-debounce.min.js"></script>
<script defer src="../js/custom.js"></script>
</body>
</html>