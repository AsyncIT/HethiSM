@extends('app')

@section('content_section')

    <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Accueil</a>
          <span class="divider">/</span>
        </li>
        <li class="active"> Panier</li>
      </ul>       
      <h1 class="heading1"><span class="maintext"> Panier</span><span class="subtext">Tous les articles dans votre panier</span></h1>
      <!-- Cart-->
      <div class="cart-info">

        <table class="table table-striped table-bordered">
          <tr>
              <th class="name">Nom du produit</th>
              <th class="price">quantité</th>
              <th class="price">Prix Unitaire</th>
              <th class="total">supprimer</th>

          </tr>

            <?php $total = 0; $subtotal = 0; ?>
            @foreach($shoppingCarts as $items)
                <?php $subtotal = $items->product_price * $items->product_qty; ?>
                <?php $total += $subtotal; ?>
                <tr>

                    <td  class="name"><a href="#">{{ $items->product_name }}</a></td>

                    <td class="qty">{{ $items->product_qty }}</td>

                    <td class="price">{{ $items->product_price }}</td>

                    <td class="total"> <a href="{{url('removecart',$items->id)}}#"><img class="tooltip-test" data-original-title="Remove"  src="img/remove.png" alt=""></a></td>

                </tr>
            @endforeach



        </table>

      </div>

      <div class="container">
      <div class="pull-right">
          <div class="span4 pull-right">
            <table class="table table-striped table-bordered ">
              <tr>

              <tr>
                <td><span class="extra bold totalamout">Total :</span></td>
                <td><span class="bold totalamout">{{ $total }}</span></td>
              </tr>
            </table>
            <a href="{{url('checkout')}}"> <input type="submit" value="Check Out" class="btn btn-orange pull-right"> </a>
            <a href="{{url('/')}}"> <input type="submit" value="Continue Shopping" class="btn btn-orange pull-right mr10"> </a>
          </div>
        </div>
        </div>
    </div>
  </section>

  @endsection

