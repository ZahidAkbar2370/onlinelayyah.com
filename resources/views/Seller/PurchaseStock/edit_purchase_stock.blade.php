@extends("Seller.seller_panel")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Edit Stock</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('seller-update-purchase-stock',$edit_purchase_stock->id)}}">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Supplier ID</label>
                                            <input id="supplier_id" class="form-control form-control-lg @error('supplier_id') is-invalid @enderror" value="{{ $edit_purchase_stock->supplier_id }}" type="number" name="supplier_id" placeholder="Enter Supplier Id" required  autocomplete="supplier_id" autofocus/>

                                            @error('supplier_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Product ID</label>
                                            <input id="product_id" class="form-control form-control-lg @error('product_id') is-invalid @enderror" value="{{ $edit_purchase_stock->product_id }}" type="number" name="product_id" placeholder="Enter Supplier Id" required  autocomplete="product_id" autofocus/>

                                            @error('product_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Quantity</label>
                                            <input id="quantity" class="form-control form-control-lg @error('quantity') is-invalid @enderror" value="{{ $edit_purchase_stock->quantity }}" type="number" name="quantity" placeholder="Enter Quantity" required  autocomplete="quantity" autofocus/>

                                            @error('quantity')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Purchase Price</label>
                                            <input id="purchase_price" class="form-control form-control-lg @error('purchase_price') is-invalid @enderror" value="{{ $edit_purchase_stock->purchase_price }}" type="number" name="purchase_price" placeholder="Enter Purchase Price" required  autocomplete="purchase_price" autofocus/>

                                            @error('purchase_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Total Price</label>
                                            <input id="total_price" class="form-control form-control-lg @error('total_price') is-invalid @enderror" value="{{ $edit_purchase_stock->total_price }}" type="number" name="total_price" placeholder="Enter Total Price" required  autocomplete="total_price" autofocus/>

                                            @error('total_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="text-center mt-3">
                                             <button type="submit" class="btn btn-lg btn-primary">
                                                {{ __('Save') }}
                                            </button>
                                            <!-- <a href="#" class="btn btn-lg btn-primary">Login</a> -->
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div> <!-- card body  -->
                        </div><!-- card -->

                    </div> <!-- col md -->
                </div> <!-- col  -->
            </div>
        </div>
    </main>

    <script type="text/javascript">
        $('#quantity').change(function(){
        var quantity = Number($('#quantity').val().trim());
        // var quantity = Number($('#quantity').val().trim());
        if(quantity > 0){
            totalPrice = Number($('#quantity').val().trim()) * Number($('#purchase_price').val().trim());
            $( "#total_price" ).val( totalPrice);
        }
    }),

    $('#purchase_price').change(function(){
        var quantity = Number($('#quantity').val().trim());
        // var quantity = Number($('#quantity').val().trim());
        if(quantity > 0){
            totalPrice = Number($('#quantity').val().trim()) * Number($('#purchase_price').val().trim());
            $( "#total_price" ).val( totalPrice);
        }
    })
    </script>

@endsection