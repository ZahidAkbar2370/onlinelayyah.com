@extends("Seller.seller_panel")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Add Product</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('#')}}">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Product Name</label>
                                            <input id="product_name" class="form-control form-control-lg @error('product_name') is-invalid @enderror" value="{{ old('product_name') }}" type="text" name="product_name" placeholder="Enter your Product Name" required  autocomplete="product_name" autofocus/>

                                            @error('brand_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Brand Name</label>
                                            <select id="brand_name" class="form-control form-control-lg @error('brand_name') is-invalid @enderror" name="brand_name" required  autocomplete="brand_name" autofocus>
                                                <option value="">Select Brand</option>
                                                @if(!empty($brands))
                                                @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                                @endforeach
                                                @endif
                                            </select>

                                            @error('brand_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Categorey Name</label>
                                            <select id="categorey_name" class="form-control form-control-lg @error('categorey_name') is-invalid @enderror" name="categorey_name" required  autocomplete="categorey_name" autofocus>
                                                <option value="">Select Categorey</option>
                                                @if(!empty($categories))
                                                @foreach($categories as $categorey)
                                                    <option value="{{$categorey->id}}">{{$categorey->categorey_name}}</option>
                                                @endforeach
                                                @endif
                                            </select>

                                            @error('categorey_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Sale Price</label>
                                            <input id="sale_price" class="form-control form-control-lg @error('sale_price') is-invalid @enderror" value="{{ old('sale_price') }}" type="number" name="sale_price" placeholder="Enter Sale Price" required  autocomplete="sale_price" autofocus/>

                                            @error('sale_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Sale Type</label>
                                            <select id="sale_type" class="form-control form-control-lg @error('sale_type') is-invalid @enderror" name="sale_type" required  autocomplete="sale_type" autofocus>
                                                <option value="">Select Sale Type</option>
                                                <option value="online">Online Only</option>
                                                <option value="on_shop">On Shop Only</option>
                                                <option value="both">Both</option>
                                            </select>

                                            @error('sale_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Discount Price</label>
                                            <input id="sale_price" class="form-control form-control-lg @error('sale_price') is-invalid @enderror" value="0" type="number" name="sale_price" placeholder="Enter Discount Price" required  autocomplete="sale_price" autofocus/>

                                            @error('sale_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Product Images</label>
                                            <input id="product_image1" class="form-control form-control-lg @error('product_image1') is-invalid @enderror mb-3"  type="file" name="product_image1" required  autocomplete="product_image1" autofocus/>

                                            <input id="product_image2" class="form-control form-control-lg @error('product_image2') is-invalid @enderror mb-3"  type="file" name="product_image2" required  autocomplete="product_image2" autofocus/>

                                            <input id="product_image3" class="form-control form-control-lg @error('product_image3') is-invalid @enderror mb-3"  type="file" name="product_image3" required  autocomplete="product_image3" autofocus/>

                                            @error('product_image1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            @error('product_image2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            @error('product_image3')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Label</label>
                                            <select id="label" class="form-control form-control-lg @error('label') is-invalid @enderror" name="label" required  autocomplete="label" autofocus>
                                                <option value="">Select Label</option>
                                                <option value="sale">Sale</option>
                                                <option value="discount">Discount</option>
                                                <option value="offer">Offer</option>
                                            </select>

                                            @error('label')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                         <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea id="description" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" placeholder="Enter Prodcut Description" required  rows="7" autocomplete="description" autofocus></textarea>

                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label"><b>Optional</b></label>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Color</label>
                                            <input id="color" class="form-control form-control-lg @error('color') is-invalid @enderror" value="{{ old('color') }}" type="text" name="color" placeholder="Enter Prodcut Color" required  autocomplete="color" autofocus/>

                                            @error('color')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Size</label>
                                            <input id="size" class="form-control form-control-lg @error('size') is-invalid @enderror" value="{{ old('size') }}" type="text" name="size" placeholder="Enter Prodcut size" required  autocomplete="size" autofocus/>

                                            @error('size')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Warrenty</label>
                                            <select id="warrenty" class="form-control form-control-lg @error('warrenty') is-invalid @enderror" name="warrenty"  autocomplete="warrenty" autofocus>
                                                <option value="">Select Warrenty</option>
                                                <option value="available">Available</option>
                                                <option value="7d">7 Days</option>
                                            </select>

                                            @error('warrenty')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Warrenty Period</label>
                                            <select id="warrenty_period" class="form-control form-control-lg @error('warrenty_period') is-invalid @enderror" name="warrenty_period"  autocomplete="warrenty_period" autofocus>
                                                <option value="">Select Warrenty Period</option>
                                                <option value="1d">1 Day</option>
                                                <option value="7d">7 Days</option>
                                                <option value="15d">12 Days</option>
                                                <option value="1m">1 Month</option>
                                                <option value="6m">6 Months</option>
                                                <option value="1y">1 Year</option>
                                            </select>

                                            @error('warrenty')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Delivery</label>
                                            <select id="delivery" class="form-control form-control-lg @error('delivery') is-invalid @enderror" name="delivery"  autocomplete="delivery" autofocus>
                                                <option value="">Select Delivery</option>
                                                <option value="available">Available</option>
                                                <option value="un_available">Un-Available</option>
                                            </select>

                                            @error('delivery')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Delivery Charges</label>
                                            <input id="delivery_charges" class="form-control form-control-lg @error('delivery_charges') is-invalid @enderror" value="0" type="number" name="delivery_charges" placeholder="Enter Sale Price" required  autocomplete="delivery_charges" autofocus/>

                                            @error('delivery_charges')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="text-center mt-3">
                                             <button type="submit" class="btn btn-lg btn-primary">
                                                {{ __('Save') }}
                                            </button>
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

@endsection