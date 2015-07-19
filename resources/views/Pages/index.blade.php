<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Herthi Super Market</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
  <link href="http://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel="stylesheet">
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

  <div class="container">
    <div class="row">
    <div class="span8">
      @include('Pages.template.slider')
    </div>
    <div class="span4">
      <img src="img/sliders/banner_01_5.jpg" alt="" />
    </div>
    </div>
  </div>


  <!-- Section Start-->
  <!-- Section  Banner Start-->
  <section class="container smbanner">
    <div class="row">
      <div class="span3"><a href="#"><img src="img/sliders/banner_01_1.png" alt="" title=""></a>
      </div>
      <div class="span3"><a href="#"><img src="img/sliders/banner_02_1.png" alt="" title=""></a>
      </div>
      <div class="span3"><a href="#"><img src="img/sliders/banner_03_1.png" alt="" title=""></a>
      </div>
      <div class="span3"><a href="#"><img src="img/sliders/banner_04_1.png" alt="" title=""></a>
      </div>
    </div>
  </section>
  <!-- Section  End-->

  <!-- Section  Banner Start-->
  <section class="container smbanner">
    <div class="row">
      <div class="span3"><a href="#"><img src="img/sliders/banner_05_1.png" alt="" title=""></a>
      </div>
      <div class="span3"><a href="#"><img src="img/sliders/banner_06_1.png" alt="" title=""></a>
      </div>
      <div class="span3"><a href="#"><img src="img/sliders/banner_07_1.png" alt="" title=""></a>
      </div>
      <div class="span3"><a href="#"><img src="img/sliders/banner_08_1.png" alt="" title=""></a>
      </div>
    </div>
  </section>
  <!-- Section  End-->


  <!-- Section End-->
  
  <!-- Featured Product-->
  <section id="featured" class="row mt40">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Featured Products</span><span class="subtext"> See Our Most featured Products</span></h1>
      <ul class="thumbnails">


    @foreach($featured_products as $product)

        <li class="span3">
          <a class="prdocutname" href="{{url('view',$product->id)}}">{{$product->product_name}}</a>
          <div class="thumbnail">

            <a href="{{url('view',$product->id)}}"><img alt="" src="{{$product->image1}}"></a>

            <div class="pricetag">
              <span class="spiral"></span><a href="{{url('view',$product->id)}}" class="productcart">ADD TO CART</a>
              <div class="price">
                <div class="pricenew">{{$product->price}}</div>
                <div class="priceold">{{$product->promo_price}}</div>
              </div>
            </div>
          </div>
        </li>
  @endforeach
      </ul>
    </div>
  </section>
  
  <!-- Latest Product-->
  <section id="latest" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Latest Products</span><span class="subtext"> See Our  Latest Products</span></h1>
      <ul class="thumbnails">
        @foreach($products as $product)

          <li class="span3">
            <a class="prdocutname" href="{{url('view',$product->id)}}">{{$product->product_name}}</a>
            <div class="thumbnail">

              <a href="{{url('view',$product->id)}}"><img alt="" src="{{$product->image1}}"></a>

              <div class="pricetag">
                <span class="spiral"></span><a href="{{url('view',$product->id)}}" class="productcart">ADD TO CART</a>
                <div class="price">
                  <div class="pricenew">{{$product->price}}</div>
                  <div class="priceold">{{$product->promo_price}}</div>
                </div>
              </div>
            </div>
          </li>
        @endforeach
      </ul>
    </div>
  </section>

  <!-- Section  Banner Start-->

  <!-- Section  End-->

 <!-- Brand Names -->

<!-- Brand Names -->

</div>
<!-- /maincontainer -->

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