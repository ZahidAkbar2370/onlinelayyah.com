@extends("Seller.seller_panel")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Update Expense</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('seller-update-expense',$edit_expense->id)}}">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input id="title" class="form-control form-control-lg @error('title') is-invalid @enderror" value="{{$edit_expense->title}}" type="text" name="title" placeholder="Enter your Title" required  autocomplete="title" autofocus/>

                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Amount</label>
                                            <input id="amount" class="form-control form-control-lg @error('amount') is-invalid @enderror" value="{{$edit_expense->amount}}" type="text" name="amount" placeholder="Enter your Amount" required  autocomplete="amount" autofocus/>

                                            @error('amount')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <input id="description" class="form-control form-control-lg @error('description') is-invalid @enderror" value="{{$edit_expense->description}}" type="text" name="description" placeholder="Enter your description" required  autocomplete="description" autofocus/>

                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Data of expense</label>
                                            <input id="data_of_expense" class="form-control form-control-lg @error('data_of_expense') is-invalid @enderror" value="{{$edit_expense->data_of_expense}}" type="text" name="data_of_expense" placeholder="Enter your data of expense" required  autocomplete="data_of expense" autofocus/>

                                            @error('data_of_expense')
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