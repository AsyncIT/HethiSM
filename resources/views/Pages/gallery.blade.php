@extends('app')
<head>
  <meta charset="utf-8">
  <title>Herthi Super Market</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  <link href="http://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
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
  <link rel="shortcut icon" href="assets/ico/favicon.html">
</head>
@section('content_section')

    <section id="product">
    <div class="container">
     <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li class="active">galerie <span class="divider">/</span> </li>

        <li class="active"> galerie </li>

      </ul>
      <div class="row">

        <!-- Category-->
        <div class="span12">
          <!-- Category Products-->
          <section id="category">
            <div class="row">
              <div class="span12">
               <!-- Sorting-->
                <div class="sorting well">
                  <form class=" form-inline pull-left">
                    <h2 class="heading2"><span>galerie</span></h2>

                  </form>
                  <div class="btn-group pull-right">
                    <button class="btn" id="list"><i class="icon-th-list"></i>
                    </button>
                    <button class="btn btn-orange" id="grid"><i class="icon-th icon-white"></i></button>
                  </div>
                </div>
               <!-- Category-->

                <section id="categorygrid">
                  <ul class="thumbnails grid">

                    <li class="span3">
                      <a class="prdocutname" href="product.html">Galerie</a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="{{url('img/product2.jpg')}}"></a>
                        <div class="shortlinks">
                          <a class="wishlist" href="#">Galerie Item</a>
                        </div>

                      </div>
                    </li>


                    <li class="span3">
                      <a class="prdocutname" href="product.html">Galerie</a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="{{url('img/product2.jpg')}}"></a>
                        <div class="shortlinks">
                          <a class="wishlist" href="#">Galerie Item</a>
                        </div>

                      </div>
                    </li>


                    <li class="span3">
                      <a class="prdocutname" href="product.html">Galerie</a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="{{url('img/product2.jpg')}}"></a>
                        <div class="shortlinks">
                          <a class="wishlist" href="#">Galerie Item</a>
                        </div>

                      </div>
                    </li>



                    <li class="span3">
                      <a class="prdocutname" href="product.html">Galerie</a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="{{url('img/product2.jpg')}}"></a>
                        <div class="shortlinks">
                          <a class="wishlist" href="#">Galerie Item</a>
                        </div>

                      </div>
                    </li>



                    <li class="span3">
                      <a class="prdocutname" href="product.html">Galerie</a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="{{url('img/product2.jpg')}}"></a>
                        <div class="shortlinks">
                          <a class="wishlist" href="#">Galerie Item</a>
                        </div>

                      </div>
                    </li>



                    <li class="span3">
                      <a class="prdocutname" href="product.html">Galerie</a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="{{url('img/product2.jpg')}}"></a>
                        <div class="shortlinks">
                          <a class="wishlist" href="#">Galerie Item</a>
                        </div>

                      </div>
                    </li>



                    <li class="span3">
                      <a class="prdocutname" href="product.html">Galerie</a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="{{url('img/product2.jpg')}}"></a>
                        <div class="shortlinks">
                          <a class="wishlist" href="#">Galerie Item</a>
                        </div>

                      </div>
                    </li>



                    <li class="span3">
                      <a class="prdocutname" href="product.html">Galerie</a>
                      <div class="thumbnail">
                        <a href="#"><img alt="" src="{{url('img/product2.jpg')}}"></a>
                        <div class="shortlinks">
                          <a class="wishlist" href="#">Galerie Item</a>
                        </div>

                      </div>
                    </li>



                  </ul>

                </section>



              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

  @endsection

