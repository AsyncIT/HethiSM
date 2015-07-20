@extends('app')
<head>
  <meta charset="utf-8">
  <title>Herthi Super Market</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
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
        <li class="active">Category <span class="divider">/</span> </li>

        <li class="active"> {{$id}} </li>

      </ul>
      <div class="row">
        <!-- Sidebar Start-->
        <aside class="span3">
         <!-- Category-->
          <div class="sidewidt">
            <h2 class="heading2"><span>Categories</span></h2>
            <ul class="nav nav-list categories">
              @foreach($category as $menu)
              <li><a href="{{url('category',$menu->category)}}">{{$menu->category}}</a>
              </li>
              @endforeach
            </ul>
          </div>

        </aside>
        <!-- Sidebar End-->
        <!-- Category-->
        <div class="span9">
          <!-- Category Products-->
          <section id="category">
            <div class="row">
              <div class="span9">
               <!-- Sorting-->
                <div class="sorting well">
                  <form class=" form-inline pull-left">
                    <h2 class="heading2"><span>{{$id}}</span></h2>

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


                    @foreach($products as $product)
                    <li class="span3">
                      <a class="prdocutname" href="{{url('view',$product->id)}}">{{$product->product_name}}</a>
                      <div class="thumbnail">

                        <a href="{{url('view',$product->id)}}"><img alt="" src="{{url($product->image1)}}"></a>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="{{url('view',$product->id)}}" class="productcart">AJOUTER AU PANIER</a>
                          <div class="price">
                            <div class="pricenew">{{$product->price}}&euro;</div>
                            <div class="priceold">{{$product->promo_price}}&euro;</div>
                          </div>
                        </div>
                      </div>
                    </li>

                    @endforeach


                  </ul>
                  <ul class="thumbnails list row">
                    @foreach($products as $product)
                    <li>
                      <div class="thumbnail">
                        <div class="row">
                          <div class="span3">

                            <a href="{{url('view',$product->id)}}"><img alt="" src="{{$product->image1}}"></a>
                          </div>
                          <div class="span6">
                            <a class="prdocutname" href="{{url('view',$product->id)}}">{{$product->product_name}}</a>
                            <div class="productdiscrption"> {{$product->product_description}}<br>
                              <br>
                             </div>
                            <div class="pricetag">
                              <span class="spiral"></span><a href="{{url('view',$product->id)}}" class="productcart">ADD TO CART</a>
                              <div class="price">
                                <div class="pricenew">{{$product->price}}&euro;</div>
                                <div class="priceold">{{$product->promo_price}}&euro;</div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </li>
                    @endforeach


                  </ul>
                  <div class="pagination pull-right">
                    <ul>
                      <li><a href="#">Prev</a>
                      </li>
                      <li class="active">
                        <a href="#">1</a>
                      </li>
                      <li><a href="#">2</a>
                      </li>
                      <li><a href="#">3</a>
                      </li>
                      <li><a href="#">4</a>
                      </li>
                      <li><a href="#">Next</a>
                      </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

  @endsection

