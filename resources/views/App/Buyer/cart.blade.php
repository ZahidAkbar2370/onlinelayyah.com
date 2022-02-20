@extends('App.app_layout')
@section("content")

<div class="shopping-cart section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Shopping Summery -->
                    <table class="table shopping-summery">
                        <thead>
                            <tr class="main-hading">
                                <th>PRODUCT</th>
                                <th>NAME</th>
                                <th class="text-center">QUANTITY</th>
                                <th class="text-center">UNIT PRICE</th>
                                <th class="text-center">DISCOUNT PRICE</th>
                                <th class="text-center">TOTAL</th> 
                                <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($all_cart))
                            @foreach($all_cart as $cart)
                            <tr>
                                <td class="image" data-title="No"><img src="https://via.placeholder.com/100x100" alt="#"></td>
                                <td class="product-des" data-title="Description">
                                    <p class="product-name"><a href="#">{{$cart->product_name}}</a></p>
                                    <p class="product-des">Brand: {{$cart->brand_name}} <br> Categorey: {{$cart->categorey_name}}</p>
                                </td>
                                <td class="price" data-title="Price"><span>{{$cart->quantity}} </span></td>
                                <td class="price" data-title="Price"><span>{{$cart->price}} </span></td>
                                <td class="price" data-title="Price"><span>{{$cart->discount}} </span></td>
                                <!-- <td class="qty" data-title="Qty">

                                    <div class="input-group">
                                        <div class="button minus">
                                            <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                <i class="ti-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="100" value="1">
                                        <div class="button plus">
                                            <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
                                                <i class="ti-plus"></i>
                                            </button>
                                        </div>
                                    </div>

                                </td> -->
                                <td class="total-amount" data-title="Total"><span>{{($cart->quantity* $cart->price) - $cart->discount}}</span></td>
                                <td class="action" data-title="Remove"><a href="{{url('delete-cart',$cart->cartID)}}"><i class="ti-trash remove-icon"></i></a></td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    <!--/ End Shopping Summery -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Total Amount -->
                    <div class="total-amount">
                        <div class="row">
                            <div class="col-lg-8 col-md-5 col-12">
                                <!-- <div class="left">
                                    <div class="coupon">
                                        <form action="#" target="_blank">
                                            <input name="Coupon" placeholder="Enter Your Coupon">
                                            <button class="btn">Apply</button>
                                        </form>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-lg-4 col-md-7 col-12">
                                <div class="right">
                                    <ul>
                                        <li>Total Items<span>{{$totalItems ?? 00}}</span></li>
                                        <li>Cart Subtotal<span>{{$totalPrice ?? 00}}</span></li>
                                        <li>You Save<span>{{$totalDiscount}}</span></li>
                                        <li class="last">You Pay<span>{{$grandTotal}}</span></li>
                                    </ul>
                                    <div class="button5">
                                        <a href="#" class="btn">Checkout</a>
                                        <a href="{{url('products')}}" class="btn">Continue shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Total Amount -->
                </div>
            </div>
        </div>
    </div>

@endsection