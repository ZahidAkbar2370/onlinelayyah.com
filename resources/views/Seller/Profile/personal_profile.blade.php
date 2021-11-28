@extends("Seller.seller_panel")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Personal Profile</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <a href="#"><button class="btn btn-primary">Business Profile</button></a>
                                <a href="#"><button class="btn btn-primary">Account Detail</button></a>
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('#')}}">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">First Name</label>
                                            <input id="first_name" class="form-control form-control-lg @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" type="text" name="first_name" placeholder="Enter your First Name"  autocomplete="first_name" autofocus/>

                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input id="last_name" class="form-control form-control-lg @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" type="text" name="last_name" placeholder="Enter your Last Name"  autocomplete="last_name" autofocus/>

                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Mobile #</label>
                                            <input id="mobile_no" class="form-control form-control-lg @error('mobile_no') is-invalid @enderror" value="{{ old('mobile_no') }}" type="number" name="mobile_no" placeholder="Enter Your Mobile No"  autocomplete="mobile_no" autofocus/>

                                            @error('mobile_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Whatsapp #</label>
                                            <input id="whatsapp_no" class="form-control form-control-lg @error('whatsapp_no') is-invalid @enderror" value="{{ old('whatsapp_no') }}" type="number" name="whatsapp_no" placeholder="Enter Your Mobile No"  autocomplete="whatsapp_no" autofocus/>

                                            @error('whatsapp_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Permanent Address</label>
                                            <textarea id="address" class="form-control form-control-lg @error('address') is-invalid @enderror" value="{{ old('address') }}" rows="4" name="address" placeholder="Enter Your Mobile No"  autocomplete="address" autofocus></textarea>

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