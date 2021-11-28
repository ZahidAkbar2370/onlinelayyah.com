@extends("Seller.seller_panel")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Account Detail</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <a href="#"><button class="btn btn-primary">Personal Profile</button></a>
                                <a href="#"><button class="btn btn-primary">Business Profile</button></a>
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('#')}}">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Account Holder Name</label>
                                            <input id="account_holder_name" class="form-control form-control-lg @error('account_holder_name') is-invalid @enderror" value="{{ old('account_holder_name') }}" type="text" name="account_holder_name" placeholder="Enter Account Holder Name"  autocomplete="account_holder_name" autofocus/>

                                            @error('account_holder_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Account Type</label>
                                            <select id="account_type" class="form-control form-control-lg @error('account_type') is-invalid @enderror" name="account_type"  autocomplete="account_type" autofocus>
                                                <option value="">Select Type</option>
                                                <option value="jazzcash">Jazzcash</option>
                                                <option value="easypassa">Easypassa</option>
                                                <option value="bank_account">Bank Account</option>
                                            </select>

                                            @error('account_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Bank Name</label>
                                            <input id="bank_name" class="form-control form-control-lg @error('bank_name') is-invalid @enderror" value="{{ old('bank_name') }}" type="text" name="bank_name" placeholder="If Bank then Write Name Here"  autocomplete="bank_name" autofocus/>

                                            @error('bank_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Account #</label>
                                            <input id="account_no" class="form-control form-control-lg @error('account_no') is-invalid @enderror" value="{{ old('account_no') }}" type="number" name="account_no" placeholder="Enter Your Account No"  autocomplete="account_no" autofocus/>

                                            @error('account_no')
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