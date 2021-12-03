@extends("Seller.seller_panel")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Change Password</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="{{route('profile.change.password')}}">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Current Password</label>
                                            <input id="current_password" class="form-control form-control-lg @error('current_password') is-invalid @enderror" value="{{ old('current_password') }}" type="password" name="current_password" placeholder="Enter your Brand Name" required  autocomplete="current_password" autofocus/>

                                            @error('current_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">New Password</label>
                                            <input id="new_password" class="form-control form-control-lg @error('new_password') is-invalid @enderror" value="{{ old('new_password') }}" type="password" name="new_password" placeholder="Enter your Brand Name" required  autocomplete="new_password" autofocus/>

                                            @error('new_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input id="word" name="confirm_password" class="form-control form-control-lg @error('word" name="confirm_password') is-invalid @enderror" value="{{ old('word" name="confirm_password') }}" type="password" name="word" name="confirm_password" placeholder="Enter your Brand Name" required  autocomplete="word" name="confirm_password" autofocus/>

                                            @error('word" name="confirm_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="text-center mt-3">
                                             <button type="submit" class="btn btn-lg btn-primary">
                                                {{ __('Update Password') }}
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