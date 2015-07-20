@extends('app')
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">

@section('content_section')

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
      <h1 class="heading1"><span class="maintext">Produits Présentés</span><span class="subtext"> Voir nos produits les plus en vedette</span></h1>
      <ul class="thumbnails">


    @foreach($featured_products as $product)

        <li class="span3">
          <a class="prdocutname" href="{{url('view',$product->id)}}">{{$product->product_name}}</a>
          <div class="thumbnail">

            <a href="{{url('view',$product->id)}}"><img alt="" src="{{url('view',$product->image)}}"></a>

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
    </div>
  </section>
  
  <!-- Latest Product-->
  <section id="latest" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">Derniers produits</span><span class="subtext"> Voir Nos derniers produits</span></h1>
      <ul class="thumbnails">

        @foreach($products as $product)

          <li class="span3">
            <a class="prdocutname" href="{{url('view',$product->id)}}">{{$product->product_name}}</a>
            <div class="thumbnail">

              <a href="{{url('view',$product->id)}}"><img alt="" src="{{$product->image1}}"></a>

              <div class="pricetag">
                <span class="spiral"></span><a href="{{url('view',$product->id)}}" class="productcart">AJOUTER AU PANIER</a>
                <div class="price">
                  <div class="pricenew">&euro;{{$product->price}}</div>
                  <div class="priceold">&euro;{{$product->promo_price}}</div>
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

@endsection

