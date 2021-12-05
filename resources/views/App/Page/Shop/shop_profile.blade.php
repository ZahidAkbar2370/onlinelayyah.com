@extends('App.Page.Shop.shop_profile_layout')
@section("content")

 <div class="row profile-body">
        <!-- left wrapper start -->
        <div class="d-none d-md-block col-md-4 col-sm-2 col-xl-3 left-wrapper">
            <div class="card rounded">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h6 class="card-title mb-0 ">About</h6>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="19" cy="12" r="1"></circle>
                                    <circle cx="5" cy="12" r="1"></circle>
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2">
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                    </svg> <span class="">Edit</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-branch icon-sm mr-2">
                                        <line x1="6" y1="3" x2="6" y2="15"></line>
                                        <circle cx="18" cy="6" r="3"></circle>
                                        <circle cx="6" cy="18" r="3"></circle>
                                        <path d="M18 9a9 9 0 0 1-9 9"></path>
                                    </svg> <span class="">Update</span></a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm mr-2">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg> <span class="">View all</span></a>
                            </div>
                        </div>
                    </div>
                    <p>{{ $profile_information->about_me ?? "hi i m zahid" }}</p>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Shop Owner:</label>
                        <p class="text-muted">{{ $profile_information->owner_name ?? "zahid" }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Shop Name:</label>
                        <p class="text-muted">{{ $profile_information->shop_name ?? "khan mobile" }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">location:</label>
                        <p class="text-muted">{{ $profile_information->address  ?? "layyah" }}</p>
                    </div>
                    <div class="mt-3">
                        <label class="tx-11 font-weight-bold mb-0 text-uppercase">Contact:</label>
                        <p class="text-muted">{{ $profile_information->mobile_no ?? "03081312527" }}</p>
                    </div>
                    <div class="mt-3 d-flex social-links">
                        <a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon github">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github" data-toggle="tooltip" title="" data-original-title="github.com/nobleui">
                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                            </svg>
                        </a>
                        <a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter" data-toggle="tooltip" title="" data-original-title="twitter.com/nobleui">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                            </svg>
                        </a>
                        <a href="javascript:;" class="btn d-flex align-items-center justify-content-center border mr-2 btn-icon instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram" data-toggle="tooltip" title="" data-original-title="instagram.com/nobleui">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-6 middle-wrapper">
            <div class="row">
                @if (!empty($all_products))
                    @foreach ($all_products as $product)
                
                    <div class="col-md-12 grid-margin">
                        <div class="card rounded">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="img-xs rounded-circle" src="{{ asset('img/2.jpg') }}" alt="">
                                        <div class="ml-2">
                                            <p>{{ $profile_information->shop_name }}</p>
                                            <p class="tx-11 text-muted">{{ $product->created_at }}</p>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg pb-3px">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-meh icon-sm mr-2">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="8" y1="15" x2="16" y2="15"></line>
                                                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                                </svg> <span class="">Unfollow</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-right-up icon-sm mr-2">
                                                    <polyline points="10 9 15 4 20 9"></polyline>
                                                    <path d="M4 20h7a4 4 0 0 0 4-4V4"></path>
                                                </svg> <span class="">Go to post</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2 icon-sm mr-2">
                                                    <circle cx="18" cy="5" r="3"></circle>
                                                    <circle cx="6" cy="12" r="3"></circle>
                                                    <circle cx="18" cy="19" r="3"></circle>
                                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                </svg> <span class="">Share</span></a>
                                            <a class="dropdown-item d-flex align-items-center" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy icon-sm mr-2">
                                                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                                </svg> <span class="">Copy link</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h4 class="mb-3 tx-14">{{ $product->product_name }}</h4>
                                <p class="mb-3 tx-14">{{ $product->category_name }} - {{ $product->brand_name }}</p>
                                <a href="{{url('product-detail')}}"><img class="img-fluid" src="{{ asset('img/shop/cart/widget/04.jpg') }}" alt="" style="max-height: 400px;width: 100%;"></a>
                            </div>





                            <div class="card-footer">
                                <div class="d-flex post-actions">
                                    <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart icon-md">
                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                        </svg>
                                        <p class="d-none d-md-block ml-2">Like</p>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center text-muted mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square icon-md">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                        <p class="d-none d-md-block ml-2">Comment</p>
                                    </a>
                                    <a href="javascript:;" class="d-flex align-items-center text-muted">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share icon-md">
                                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                            <polyline points="16 6 12 2 8 6"></polyline>
                                            <line x1="12" y1="2" x2="12" y2="15"></line>
                                        </svg>
                                        <p class="d-none d-md-block ml-2">Share</p>
                                    </a>
                                    <div class="bottom-wrap"> 
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach
                @endif


            </div>
        </div>
        <!-- middle wrapper end -->



















        <!-- right wrapper start -->
        <div class="d-none d-xl-block col-xl-3 right-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card rounded">
                        <div class="card-body">
                            <h6 class="card-title">Latest Products</h6>
                            <div class="latest-photos">
                                <div class="row">
                                    <div class="col-md-4">
                                        <figure>
                                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure>
                                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure>
                                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure>
                                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure>
                                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="mb-0">
                                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="mb-0">
                                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                                        </figure>
                                    </div>
                                    <div class="col-md-4">
                                        <figure class="mb-0">
                                            <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar9.png" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>














                <div class="col-md-12 grid-margin">
                    <div class="card rounded">
                        <div class="card-body">
                            <h6 class="card-title">All Product Category</h6>
                            <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                <div class="d-flex align-items-center hover-pointer">
                                    <!-- <img class="img-xs rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt=""> -->
                                    <div class="ml-2">
                                        @if (!empty($all_products))
                                            @foreach ($all_products as $product)
                                            <p class="tx-11 text-muted">{{ $product->category_name }}</p>
                                            @endforeach
                                        @endif
                                        

                                        {{-- <p class="tx-11 text-muted">Garments</p>

                                        <p class="tx-11 text-muted">Mobile</p> --}}
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- right wrapper end -->
    </div>

@endsection