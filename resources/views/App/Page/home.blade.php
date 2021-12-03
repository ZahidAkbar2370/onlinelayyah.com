@extends('App.app_layout')
@section('content')


	<section class="cz-carousel cz-controls-lg">
      <div class="cz-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;nav&quot;:true, &quot;controls&quot;: false},&quot;992&quot;:{&quot;nav&quot;:false, &quot;controls&quot;: true}}}">
        <!-- Item-->
        <div class="px-lg-5" style="background-color: #3aafd2;">
          <div class="d-lg-flex justify-content-between align-items-center pl-lg-4"><img class="d-block order-lg-2 mr-lg-n5 flex-shrink-0" src="img/home/hero-slider/01.jpg" alt="Summer Collection">
            <div class="position-relative mx-auto mr-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
              <div class="pb-lg-5 mb-lg-5 text-center text-lg-left text-lg-nowrap">
                <h2 class="text-light font-weight-light pb-1 from-left">Has just arrived!</h2>
                <h1 class="text-light display-4 from-left delay-1">Huge Summer Collection</h1>
                <p class="font-size-lg text-light pb-3 from-left delay-2">Swimwear, Tops, Shorts, Sunglasses &amp; much more...</p><a class="btn btn-primary scale-up delay-4" href="#">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Item-->
        <div class="px-lg-5" style="background-color: #f5b1b0;">
          <div class="d-lg-flex justify-content-between align-items-center pl-lg-4"><img class="d-block order-lg-2 mr-lg-n5 flex-shrink-0" src="img/home/hero-slider/02.jpg" alt="Women Sportswear">
            <div class="position-relative mx-auto mr-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
              <div class="pb-lg-5 mb-lg-5 text-center text-lg-left text-lg-nowrap">
                <h2 class="text-light font-weight-light pb-1 from-bottom">Hurry up! Limited time offer.</h2>
                <h1 class="text-light display-4 from-bottom delay-1">Women Sportswear Sale</h1>
                <p class="font-size-lg text-light pb-3 from-bottom delay-2">Sneakers, Keds, Sweatshirts, Hoodies &amp; much more...</p><a class="btn btn-primary scale-up delay-4" href="#">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Item-->
        <div class="px-lg-5" style="background-color: #eba170;">
          <div class="d-lg-flex justify-content-between align-items-center pl-lg-4"><img class="d-block order-lg-2 mr-lg-n5 flex-shrink-0" src="img/home/hero-slider/03.jpg" alt="Men Accessories">
            <div class="position-relative mx-auto mr-lg-n5 py-5 px-4 mb-lg-5 order-lg-1" style="max-width: 42rem; z-index: 10;">
              <div class="pb-lg-5 mb-lg-5 text-center text-lg-left text-lg-nowrap">
                <h2 class="text-light font-weight-light pb-1 from-top">Complete your look with</h2>
                <h1 class="text-light display-4 from-top delay-1">New Men's Accessories</h1>
                <p class="font-size-lg text-light pb-3 from-top delay-2">Hats &amp; Caps, Sunglasses, Bags &amp; much more...</p><a class="btn btn-primary scale-up delay-4" href="#">Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>





     <!-- Popular categories-->
    <section class="container position-relative pt-3 pt-lg-0 pb-5 mt-lg-n10" style="z-index: 10;">
      <div class="row">

        <div class="col-xl-8 col-lg-9">
            <div class="card-body px-3 pt-grid-gutter pb-0">
              <div class="row no-gutters pl-1">

                <div class="col-sm-3 px-2 mb-grid-gutter"><a class="d-block text-center text-decoration-none mr-1" href="#"><img class="d-block rounded mb-3" src="app/img/home/categories/cat-sm01.jpg" alt="Men">
                    <h3 class="font-size-base pt-1 mb-0">Men</h3></a></div>

                <div class="col-sm-3 px-2 mb-grid-gutter"><a class="d-block text-center text-decoration-none mr-1" href="#"><img class="d-block rounded mb-3" src="app/img/home/categories/cat-sm02.jpg" alt="Women">
                    <h3 class="font-size-base pt-1 mb-0">Women</h3></a></div>

                <div class="col-sm-3 px-2 mb-grid-gutter"><a class="d-block text-center text-decoration-none mr-1" href="#"><img class="d-block rounded mb-3" src="app/img/home/categories/cat-sm03.jpg" alt="Kids">
                    <h3 class="font-size-base pt-1 mb-0">Kids</h3></a></div>

                <div class="col-sm-3 px-2 mb-grid-gutter"><a class="d-block text-center text-decoration-none mr-1" href="#"><img class="d-block rounded mb-3" src="app/img/home/categories/cat-sm03.jpg" alt="Kids">
                    <h3 class="font-size-base pt-1 mb-0">Cloths</h3></a></div> 
                        
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



     <!-- Products grid (Trending products)-->
    <section class="container pt-md-3 pb-5 mb-md-3">
      <h2 class="h3 text-center">Top Rated Shops</h2>
      <div class="row pt-4 mx-n2">

        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
  
              <a class="card-img-top d-block  "><img src="app/img/shop/catalog/01.jpg" alt="Product"></a>
  
              <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Product 1</a>
                <h3 class="product-title font-size-sm">Shop Name</h3>
              </div>
  
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                </div>
                <a href="#"><button class="btn btn-primary btn-sm btn-block mb-2" type="button" data-toggle="toast" data-target="#cart-toast"><i class="czi-home font-size-sm mr-1"></i>Visit Shop</button></a>
              </div>
  
            </div>
            <hr class="d-sm-none">
          </div>
        

        <!-- Product-->
 
       

    </section>



    <div class="container" style="margin-bottom: 20px;">
          <div class="row">
            <div class="text-center pt-3">
                <a class="btn btn-outline-accent" href="#">More Shops<i class="czi-arrow-right ml-1"></i>
                </a>
            </div>
          </div>
      </div>

       <!-- Banners-->
    <section class="container pb-4 mb-md-3">
      <div class="row">

        <div class="col-md-8 mb-4">
          <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden rounded-lg">
            <div class="py-4 my-2 my-md-0 py-md-5 px-4 ml-md-3 text-center text-sm-left">
              <h4 class="font-size-lg font-weight-light mb-2">Hurry up! Limited time offer</h4>
              <h3 class="mb-4">Converse All Star on Sale</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
            </div><img class="d-block ml-auto" src="img/shop/catalog/banner.jpg" alt="Shop Converse">
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="d-flex flex-column h-100 justify-content-center bg-size-cover bg-position-center rounded-lg" style="background-image: url(img/blog/banner-bg.jpg);">
            <div class="py-4 my-2 px-4 text-center">
              <div class="py-1">
                <h5 class="mb-2">Your Add Banner Here</h5>
                <p class="font-size-sm text-muted">Hurry up to reserve your spot</p><a class="btn btn-primary btn-shadow btn-sm" href="#">Contact us</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>




     <!-- Featured category (Hoodie)-->
    <section class="container mb-4 pb-3 pb-sm-0 mb-sm-5">
      <div class="row">
        <!-- Banner with controls-->
        <div class="col-md-5">
          <div class="d-flex flex-column h-100 overflow-hidden rounded-lg" style="background-color: #e2e9ef;">
            <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
              <div>
                <h3 class="mb-1">Today Shop Sale Offer</h3><a class="font-size-md" href="#">Shop hoodies<i class="czi-arrow-right font-size-xs align-middle ml-1"></i></a>
              </div>
              <div class="cz-custom-controls" id="hoodie-day">
                <button type="button"><i class="czi-arrow-left"></i></button>
                <button type="button"><i class="czi-arrow-right"></i></button>
              </div>
            </div><a class="d-none d-md-block mt-auto" href="#"><img class="d-block w-100" src="img/home/categories/cat-lg04.jpg" alt="For Women"></a>
          </div>
        </div>



        <!-- Product grid (carousel)-->
        <div class="col-md-7 pt-4 pt-md-0">
          <div class="cz-carousel">
            <div class="cz-carousel-inner" data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#hoodie-day&quot;}">
              <!-- Carousel item-->
              <div>
                <div class="row mx-n2">
                  <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                        <div class="card product-card card-static">
                          <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/20.jpg" alt="Product"></a>
                          <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1"><small>Category : </small>cloth</a>
                            <a class="product-meta d-block font-size-xs pb-1"><small>Brand : </small>importent</a>
                            <h3 class="product-title font-size-sm"><small>Name : </small><a href="#">hello product</a></h3>
                          </div>
                        </div>
                      </div>
                  



                  {{-- <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                    <div class="card product-card card-static">
                      <a class="card-img-top d-block overflow-hidden" href="#"><img src="app/img/shop/catalog/20.jpg" alt="Product"></a>
                      <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Categorey</a>
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Brand</a>
                        <h3 class="product-title font-size-sm"><a href="#">Product Name</a></h3>
                      </div>
                    </div>
                  </div> --}}


                  {{-- <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                    <div class="card product-card card-static">
                      <a class="card-img-top d-block overflow-hidden" href="#"><img src="app/img/shop/catalog/20.jpg" alt="Product"></a>
                      <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Categorey</a>
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Brand</a>
                        <h3 class="product-title font-size-sm"><a href="#">Product Name</a></h3>
                      </div>
                    </div>
                  </div> --}}
                  {{-- <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                    <div class="card product-card card-static">
                      <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/20.jpg" alt="Product"></a>
                      <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Categorey</a>
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Brand</a>
                        <h3 class="product-title font-size-sm"><a href="#">Product Name</a></h3>
                      </div>
                    </div>
                  </div> --}}
                  {{-- <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                    <div class="card product-card card-static">
                      <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/20.jpg" alt="Product"></a>
                      <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Categorey</a>
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Brand</a>
                        <h3 class="product-title font-size-sm"><a href="#">Product Name</a></h3>
                      </div>
                    </div> --}}
                  {{-- </div> --}}


                  {{-- <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                    <div class="card product-card card-static">
                      <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/20.jpg" alt="Product"></a>
                      <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Categorey</a>
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Brand</a>
                        <h3 class="product-title font-size-sm"><a href="#">Product Name</a></h3>
                      </div>
                    </div>
                  </div> --}}


                  {{-- <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                    <div class="card product-card card-static">
                      <a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/20.jpg" alt="Product"></a>
                      <div class="card-body py-2"><a class="product-meta d-block font-size-xs pb-1" href="#">Categorey</a>
                        <a class="product-meta d-block font-size-xs pb-1" href="#">Brand</a>
                        <h3 class="product-title font-size-sm"><a href="#">Product Name</a></h3>
                      </div>
                    </div>
                  </div> --}}


              <!-- Carousel item-->
              <div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




     <!-- Shop by brand-->
    <section class="container py-lg-4 mb-4">
      <h2 class="h3 text-center pb-4">Food Points In Layyah</h2>
      <div class="row">
        <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/01.png" style="width: 150px;" alt="Brand"></a></div>
        <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/02.png" style="width: 150px;" alt="Brand"></a></div>
        <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/03.png" style="width: 150px;" alt="Brand"></a></div>
        <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/04.png" style="width: 150px;" alt="Brand"></a></div>
        <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/05.png" style="width: 150px;" alt="Brand"></a></div>
        <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/06.png" style="width: 150px;" alt="Brand"></a></div>
        <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/07.png" style="width: 150px;" alt="Brand"></a></div>
        <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/08.png" style="width: 150px;" alt="Brand"></a></div>
        <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/09.png" style="width: 150px;" alt="Brand"></a></div>
        <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/10.png" style="width: 150px;" alt="Brand"></a></div>
        <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/11.png" style="width: 150px;" alt="Brand"></a></div>
        <div class="col-md-3 col-sm-4 col-6"><a class="d-block bg-white box-shadow-sm rounded-lg py-3 py-sm-4 mb-grid-gutter" href="#"><img class="d-block mx-auto" src="img/shop/brands/12.png" style="width: 150px;" alt="Brand"></a></div>
      </div>
    </section>

@endsection