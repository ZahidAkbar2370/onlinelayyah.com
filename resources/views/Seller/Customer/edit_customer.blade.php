@extends("Seller.seller_panel")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Update Customer</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('seller-update-customer',$edit_customer->id)}}">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Customer Name</label>
                                            <input id="customer_name" class="form-control form-control-lg @error('customer_name') is-invalid @enderror" value="{{$edit_customer->customer_name}}" type="text" name="customer_name" placeholder="Enter your Customer Name" required  autocomplete="customer_name" autofocus/>

                                            @error('customer_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Contact No</label>
                                            <input id="contact_no" class="form-control form-control-lg @error('contact_no') is-invalid @enderror" value="{{$edit_customer->contact_no}}" type="text" name="contact_no" placeholder="Enter your Contact No " required  autocomplete="contact_no" autofocus/>

                                            @error('contact_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Address</label>
                                            <input id="address" class="form-control form-control-lg @error('address') is-invalid @enderror" value="{{$edit_customer->address}}" type="text" name="address" placeholder="Enter your Address" required  autocomplete="address" autofocus/>

                                            @error('address')
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

@endsection