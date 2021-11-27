<!DOCTYPE html>
<html lang="en">
<head>
    <link href="theme/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://demo-basic.adminkit.io/charts-chartjs.html" />
</head>
<body>

<main class="content">
<div class="container-fluid">

    
<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Register Your Shop</b></h1>
                            <p class="">
                                Welcome to Online Layyah
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                     <form>
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input id="owner_name" class="form-control form-control-lg @error('owner_name') is-invalid @enderror" value="{{ old('owner_name') }}" type="owner_name" name="text" placeholder="Enter Shop Owner Name" required  autocomplete="owner_name" autofocus/>

                                            @error('owner_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Shop Title</label>
                                            <input id="shop_name" class="form-control form-control-lg @error('shop_name') is-invalid @enderror" value="{{ old('shop_name') }}" type="shop_name" name="text" placeholder="Enter Shop Name" required  autocomplete="shop_name" autofocus/>

                                            @error('shop_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Shop Categorey</label>
                                            <select id="shop_categorey" class="form-control form-control-lg @error('shop_categorey') is-invalid @enderror" value="{{ old('shop_categorey') }}" name="shop_categorey" required  autocomplete="shop_categorey" autofocus>
                                                <option value="">Select Categorey</option>
                                                <option value="">Garment</option>
                                                <option value="">Mobile Shop</option>
                                                <option value="">Cloth House</option>
                                            </select>

                                            @error('shop_categorey')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" name="email" placeholder="Enter your email" required  autocomplete="email" autofocus/>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input id="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter password" required  autocomplete="current-password"/>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                         <div class="mb-2">
                                            <label class="form-label">Confirm Password</label>
                                            <input id="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter Confirm password" required  autocomplete="current-password"/>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="text-center mt-3">
                                             <button type="submit" class="btn btn-lg btn-primary">
                                                {{ __('Sign Up') }}
                                            </button>
                                            <!-- <a href="#" class="btn btn-lg btn-primary">Login</a> -->
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
                                        </div>
                                    </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</main>
</div>

<script rel="stylesheet" src="theme/js/app.js"></script>
    

</body>

</html>