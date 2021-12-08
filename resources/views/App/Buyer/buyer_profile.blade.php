@extends('App.app_layout')
@section("content")




<div class="breadcrumbs" style="margin-bottom: 10px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{url('index')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="{{url('buyer-register')}}">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



<main class="content" style="margin-top: 10px !important">
<div class="container-fluid">

    
<main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center">
                            <h1><b>Buyer Profile</b></h1>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                     <form method="POST" action="#">
                                        @csrf()

                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{Auth::user()->name ?? 'unknown'}} "  type="text" name="name" placeholder="Enter your Name" required  autocomplete="name" autofocus/>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Father Name</label>
                                            <input id="father_name" class="form-control form-control-lg @error('father_name') is-invalid @enderror"  value="{{$buyerProfile->father_name ?? ''}}" type="text" name="father_name" placeholder="Enter your Father Name" required  autocomplete="father_name" autofocus/>

                                            @error('father_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{Auth::user()->email ?? 'test@gmail.com'}}"  type="email" name="email" placeholder="Enter your email" required  autocomplete="email" autofocus/>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <div class="mb-3">
                                            <label class="form-label">Mobile No</label>
                                            <input id="mobile_no" class="form-control form-control-lg @error('mobile_no') is-invalid @enderror" value="{{$buyerProfile->mobile_no ?? ''}}"  type="text" name="mobile_no" placeholder="Enter Your Mobile #" required  autocomplete="mobile_no" autofocus/>

                                            @error('mobile_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <input id="city" class="form-control form-control-lg @error('city') is-invalid @enderror"  type="text" name="city" placeholder="Enter Your City Name"  value="{{$buyerProfile->city ?? ''}}" required  autocomplete="city" autofocus/>

                                            @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Permanent Address</label>
                                            <textarea id="address" class="form-control form-control-lg @error('address') is-invalid @enderror" name="address" placeholder="Enter Your Address" required  autocomplete="address" autofocus>{{$buyerProfile->parmanent_address ?? ''}}</textarea>

                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Any Main Location?</label>
                                            <input id="address" class="form-control form-control-lg @error('address') is-invalid @enderror"  value="{{$buyerProfile->city ?? ''}}"  type="text" name="address" placeholder="Enter Your Address" autocomplete="address" autofocus/>

                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Image</label>
                                            <input id="image" class="form-control form-control-lg @error('image') is-invalid @enderror"  type="file" name="image" autocomplete="image" autofocus/>

                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <div class="text-center mt-3">
                                             <button type="submit" class="btn btn-lg btn-primary">
                                                {{ __('Register') }}
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
        </div>
    </main>
</div>
</main>
</div>

@endsection