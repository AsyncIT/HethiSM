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
        <li class="active"> Shopping Cart</li>
      </ul>       
      <h1 class="heading1"><span class="maintext"> Shopping Cart</span><span class="subtext"> All items in your  Shopping Cart</span></h1>
      <!-- Cart-->
      <div class="cart-info">

        <table class="table table-striped table-bordered">
          <tr>
             <th class="name">Product Name</th>
            <th class="price">Unit Price</th>
             <th class="total">Action</th>

          </tr>
            @foreach($shoppingCarts as $items)
          <tr>

            <td  class="name"><a href="#">{{ $items->product_name }}</a></td>

              <td class="price">{{ $items->product_price }}</td>

             <td class="total"> <a href="#"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>

          </tr>
            @endforeach



        </table>

      </div>

      <div class="container">
      <div class="pull-right">
          <div class="span4 pull-right">
            <table class="table table-striped table-bordered ">
              <tr>
                <td><span class="extra bold">Sub-Total :</span></td>
                <td><span class="bold">$101.0</span></td>
              </tr>
              <tr>
                <td><span class="extra bold">Eco Tax (-5.00) :</span></td>
                <td><span class="bold">$11.0</span></td>
              </tr>
              <tr>
                <td><span class="extra bold">VAT (18.2%) :</span></td>
                <td><span class="bold">$21.0</span></td>
              </tr>
              <tr>
                <td><span class="extra bold totalamout">Total :</span></td>
                <td><span class="bold totalamout">$150.28</span></td>
              </tr>
            </table>
            <input type="submit" value="CheckOut" class="btn btn-orange pull-right">
            <input type="submit" value="Continue Shopping" class="btn btn-orange pull-right mr10">
          </div>
        </div>
        </div>
    </div>
  </section>

  @endsection

