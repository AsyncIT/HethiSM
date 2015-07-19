@extends('app')

@section('content_section')

    <section id="product">
    <div class="container">
     <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Category</li>
      </ul>
      <div class="row">
        <!-- Sidebar Start-->
        <aside class="span3">
         <!-- Category-->
          <div class="sidewidt">
            <h2 class="heading2"><span>Categories</span></h2>
            <ul class="nav nav-list categories">
              <li><a href="{{url('category')}}">Legumes</a>
              </li>
              <li><a href="{{url('category')}}">Cr�merie</a>
              </li>
              <li><a href="{{url('category')}}"> Surgel�s</a>
              </li>
              <li><a href="{{url('category')}}">Monde De B�b�
                </a>
              </li>
              <li><a href="{{url('category')}}">Boissons Alcoolis�es </a>
              </li>
              <li><a href="{{url('category')}}">T�l�phone
                </a>
              </li>
              <li><a href="{{url('category')}}">Ordinateurs Portable
                </a>
              </li>
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
                    Sort By :
                    <select class="span2">
                      <option>Default</option>
                      <option>Name</option>
                      <option>Pirce</option>
                      <option>Rating </option>
                      <option>Color</option>
                    </select>
                    &nbsp;&nbsp;
                    Show:
                    <select class="span1">
                      <option>10</option>
                      <option>15</option>
                      <option>20</option>
                      <option>25</option>
                      <option>30</option>
                    </select>
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
                                <div class="pricenew">{{$product->price}}</div>
                                <div class="priceold">{{$product->promo_price}}</div>
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

