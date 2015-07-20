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

          {!! Form::Open(['url' => 'user-details']) !!}
          <div class="checkoutsteptitle">Détails De La Facturation<a class="modify">Modify</a>
          </div>
          <div class="checkoutstep">
            <div class="row">

                <fieldset>
                  <div class="span4">
                    <div class="control-group">
                      <label class="control-label" >Prénom<span class="red">*</span></label>
                      <div class="controls">
                        <input name="first_name" class=""  value="{{ \auth::user()->first_name }}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Nom De Famille<span class="red">*</span></label>
                      <div class="controls">
                        <input name="last_name" class=""  value="{{ \auth::user()->last_name }}">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" >téléphone<span class="red">*</span></label>
                      <div class="controls">
                        <input name="telephone" class=""  value="{{ \auth::user()->telephone }}">
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label" >pays<span class="red">*</span></label>
                      <div class="controls">
                        <input name="country" class=""  value="{{ \auth::user()->country }}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >région<span class="red">*</span></label>
                      <div class="controls">
                        <input name="region" class=""  value="{{ \auth::user()->region }}">
                      </div>
                    </div>

                  </div>
                  <div class="span4">
                    <div class="control-group">
                      <label class="control-label" >entreprise</label>
                      <div class="controls">
                        <input name="company" class=""  value="{{ \auth::user()->company }}">
                      </div>
                    </div>


                    <div class="control-group">
                      <label class="control-label" >adresse 1<span class="red">*</span></label>
                      <div class="controls">
                        <input name="Address1" class=""  value="{{ \auth::user()->Address1 }}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >adresse 2</label>
                      <div class="controls">
                        <input name="Address2" class=""  value="{{ \auth::user()->Address2 }}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >ville<span class="red">*</span></label>
                      <div class="controls">
                        <input name="city" class=""  value="{{ \auth::user()->city }}">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >code Postal<span class="red">*</span></label>
                      <div class="controls">
                        <input name="post_code" class=""  value="{{ \auth::user()->post_code }}" required="">
                      </div>
                    </div>


                  </div>
                </fieldset>

            </div>


          </div>
          {!! Form::submit('mise à jour',['class'=>'btn btn-orange pull-right']) !!}

        </div>


      </div>
    </div>
  </section>



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
@endsection


