@extends("Seller.seller_panel")
@section("content")

<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
               

                 <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Business Profile</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <a href="#"><button class="btn btn-primary">Personal Profile</button></a>
                                <a href="#"><button class="btn btn-primary">Account Detail</button></a>
                                <div class="m-sm-4">
                                     <form method="POST" action="{{URL::to('#')}}">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Shop Name</label>
                                            <input id="shop_name" class="form-control form-control-lg @error('shop_name') is-invalid @enderror" value="{{ old('shop_name') }}" type="text" name="shop_name" placeholder="Enter your First Name"  autocomplete="shop_name" autofocus/>

                                            @error('shop_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Shop Categorey</label>
                                            <select id="categorey" class="form-control form-control-lg @error('categorey') is-invalid @enderror" name="categorey"  autocomplete="categorey" autofocus>
                                                <option value="mobile_shop">Mobile Shop</option>
                                                <option value="laptop_shop">Laptop Shop</option>
                                            </select>

                                            @error('categorey')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Profile Image</label>
                                            <input id="profile_image" class="form-control form-control-lg @error('profile_image') is-invalid @enderror" value="{{ old('profile_image') }}" type="file" name="profile_image" autocomplete="profile_image" autofocus/>

                                            @error('profile_image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Cover Photo</label>
                                            <input id="cover_photo" class="form-control form-control-lg @error('cover_photo') is-invalid @enderror" value="{{ old('cover_photo') }}" type="file" name="cover_photo"  autocomplete="cover_photo" autofocus/>

                                            @error('cover_photo')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <select id="city" class="form-control form-control-lg @error('city') is-invalid @enderror" name="city"  autocomplete="city" autofocus>
                                                <option value="layyah">Layyah</option>
                                                <option value="jamanshah">Jamanshah</option>
                                                <option value="kotsultan">Kot Sultan</option>
                                            </select>

                                            @error('city')
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