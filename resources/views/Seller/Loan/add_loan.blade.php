@extends("Seller.seller_panel")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Add Loan</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('seller-save-add-loan')}}">
                                        @csrf()

                                         <div class="mb-3">
                                            <input id="customer_id" class="form-control form-control-lg @error('customer_id') is-invalid @enderror" value="{{$id}}" type="hidden" name="customer_id" placeholder="customer id"  autocomplete="customer_id" autofocus/>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Loan Type</label>
                                            <select  id="loan_type" class="form-control form-control-lg @error('loan_type') is-invalid @enderror" value="{{ old('loan_type') }}"name="loan_type" placeholder="loan type" required  autocomplete="loan_type" autofocus>
                                                <option value="">Select Type</option>
                                                <option value="recive">Recive</option>
                                                <option value="give">Give</option>
                                            </select>

                                            @error('loan_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Amount</label>
                                            <input id="amount" class="form-control form-control-lg @error('amount') is-invalid @enderror" value="{{ old('amount') }}" type="text" name="amount" placeholder="amount" required  autocomplete="amount" autofocus/>

                                            @error('amount')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <input id="description" class="form-control form-control-lg @error('description') is-invalid @enderror" value="{{ old('description') }}" type="text" name="description" placeholder="description" required  autocomplete="description" autofocus/>

                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3" style="display: none">
                                            <label class="form-label">Bill</label>
                                            <input id="bill" class="form-control form-control-lg @error('bill') is-invalid @enderror" value="none" type="text" name="bill" placeholder="bill"  autocomplete="bill" autofocus/>

                                            @error('bill')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Loan Date</label>
                                            <input id="loan_date" class="form-control form-control-lg @error('loan_date') is-invalid @enderror" value="{{ old('loan_date') }}" type="date" name="loan_date" placeholder="loan date" required  autocomplete="loan_date" autofocus/>

                                            @error('loan_date')
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