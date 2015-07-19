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
        <li class="active">Checkout</li>
      </ul>
      <div class="row">        
        <!-- Account Login-->


        <div class="span9">

          {!! Form::Open(['url' => 'paid']) !!}
          <div class="checkoutsteptitle">Step 5: Confirm Order<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep">
            <div class="cart-info">
              <table class="table table-striped table-bordered">
                <tr>
                  <th class="name">Product Name</th>
                  <th class="price">Unit Price</th>
                  <th class="total">Action</th>
                </tr>


                <?php $total = 0; ?>
                @foreach($shoppingCarts as $items)
                  <?php $total += $items->product_price; ?>
                  <tr>

                    <td  class="name"><a href="#">{{ $items->product_name }}</a></td>

                    <td class="price">{{ $items->product_price }}</td>

                    <td class="total"> <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>

                  </tr>
                @endforeach

              </table>
            </div>
            <div class="row">
              <div class="pull-right">
                <div class="span4 pull-right">
                  <table class="table table-striped table-bordered ">
                    <tbody>
                      <tr>

                        <td><span class="extra bold totalamout">Total :</span></td>
                        <td><span class="bold totalamout">{{ $total }}</span></td>
                      </tr>
                    </tbody>
                  </table>
                  <ul class="productpagecart">
                    <script
                            data-callback="http://www.facebook.com"
                            data-currency="EUR"
                            data-amount="{{ $total }}"
                            data-name="Product Name"
                            data-button="buynow" src="{{url('js/paypal-button.min.js')}}?merchant=ruwanranganathz@gmail.com" async="async"
                            ></script>
                  </ul>

                </div>
              </div>
            </div>
          </div>
          {!! Form::close() !!}
        </div>


      </div>
    </div>
  </section>

<<<<<<< HEAD
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
<script type="text/javascript"  src="js/paypal-button.min.js"></script>
<script defer src="js/custom.js"></script>
</body>
</html>
=======
@endsection

>>>>>>> origin/master
