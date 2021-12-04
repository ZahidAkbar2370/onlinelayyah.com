@extends('App.app_layout')
@section('content')


  <!-- Header Inner -->
    <div class="header-inner">
      <div class="container">
        <div class="cat-nav-head">
          <div class="row">

            <div class="col-lg-3">
              <div class="all-category">
                <h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                <ul class="main-category">
                  <li><a href="#">New Arrivals <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    <ul class="sub-category">
                      <li><a href="#">accessories</a></li>
                      <li><a href="#">best selling</a></li>
                      <li><a href="#">top 100 offer</a></li>
                      <li><a href="#">sunglass</a></li>
                      <li><a href="#">watch</a></li>
                      <li><a href="#">man’s product</a></li>
                      <li><a href="#">ladies</a></li>
                      <li><a href="#">westrn dress</a></li>
                      <li><a href="#">denim </a></li>
                    </ul>
                  </li>
                  <li class="main-mega"><a href="#">best selling <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    <ul class="mega-menu">
                      <li class="single-menu">
                        <a href="#" class="title-link">Shop Kid's</a>
                        <div class="image">
                          <img src="https://via.placeholder.com/225x155" alt="#">
                        </div>
                        <div class="inner-link">
                          <a href="#">Kids Toys</a>
                          <a href="#">Kids Travel Car</a>
                          <a href="#">Kids Color Shape</a>
                          <a href="#">Kids Tent</a>
                        </div>
                      </li>
                      <li class="single-menu">
                        <a href="#" class="title-link">Shop Men's</a>
                        <div class="image">
                          <img src="https://via.placeholder.com/225x155" alt="#">
                        </div>
                        <div class="inner-link">
                          <a href="#">Watch</a>
                          <a href="#">T-shirt</a>
                          <a href="#">Hoodies</a>
                          <a href="#">Formal Pant</a>
                        </div>
                      </li>
                      <li class="single-menu">
                        <a href="#" class="title-link">Shop Women's</a>
                        <div class="image">
                          <img src="https://via.placeholder.com/225x155" alt="#">
                        </div>
                        <div class="inner-link">
                          <a href="#">Ladies Shirt</a>
                          <a href="#">Ladies Frog</a>
                          <a href="#">Ladies Sun Glass</a>
                          <a href="#">Ladies Watch</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#">accessories</a></li>
                  <li><a href="#">top 100 offer</a></li>
                  <li><a href="#">sunglass</a></li>
                  <li><a href="#">watch</a></li>
                  <li><a href="#">man’s product</a></li>
                  <li><a href="#">ladies</a></li>
                  <li><a href="#">westrn dress</a></li>
                  <li><a href="#">denim </a></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-9 col-12">
              <div class="menu-area">
                <!-- Main Menu -->
                <nav class="navbar navbar-expand-lg">
                  <div class="navbar-collapse"> 
                    <div class="nav-inner"> 
                      <ul class="nav main-menu menu navbar-nav">
                          <li class="active"><a href="#">Home</a></li>
                          <li><a href="{{url('products')}}">Product</a></li>                        
                          <li><a href="#">Shop<i class="ti-angle-down"></i><span class="new"></span></a>
                            <ul class="dropdown">
                              <li><a href="#">Cart</a></li>
                              <li><a href="#">Checkout</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Pricing</a></li>
                          <!-- <li><a href="#">Pages</a></li>                   -->
                          <!-- <li><a href="#">Blog<i class="ti-angle-down"></i></a>
                            <ul class="dropdown">
                              <li><a href="#">Blog Single Sidebar</a></li>
                            </ul>
                          </li> -->
                          <li><a href="{{url('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                  </div>
                </nav>
                <!--/ End Main Menu --> 
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    <!--/ End Header Inner -->
  </header>
  <!--/ End Header -->
  
  <!-- Slider Area -->
  <section class="hero-slider">
    <!-- Single Slider -->
    <div class="single-slider">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-9 offset-lg-3 col-12">
            <div class="text-inner">
              <div class="row">
                <div class="col-lg-7 col-12">
                  <div class="hero-text">
                    <h1><span>UP TO 50% OFF </span>Shirt For Man</h1>
                    <p>Maboriosam in a nesciung eget magnae <br> dapibus disting tloctio in the find it pereri <br> odiy maboriosm.</p>
                    <div class="button">
                      <a href="#" class="btn">Shop Now!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ End Single Slider -->
  </section>
  <!--/ End Slider Area -->

	  <!-- Start Small Banner  -->
  <section class="small-banner section">
    <div class="container-fluid">
      <div class="row">
        <!-- Single Banner  -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-banner">
            <img src="https://via.placeholder.com/600x370" alt="#">
            <div class="content">
              <p>Man's Collectons</p>
              <h3>Summer travel <br> collection</h3>
              <a href="#">Discover Now</a>
            </div>
          </div>
        </div>
        <!-- /End Single Banner  -->
        <!-- Single Banner  -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-banner">
            <img src="https://via.placeholder.com/600x370" alt="#">
            <div class="content">
              <p>Bag Collectons</p>
              <h3>Awesome Bag <br> 2020</h3>
              <a href="#">Shop Now</a>
            </div>
          </div>
        </div>
        <!-- /End Single Banner  -->
        <!-- Single Banner  -->
        <div class="col-lg-4 col-12">
          <div class="single-banner tab-height">
            <img src="https://via.placeholder.com/600x370" alt="#">
            <div class="content">
              <p>Flash Sale</p>
              <h3>Mid Season <br> Up to <span>40%</span> Off</h3>
              <a href="#">Discover Now</a>
            </div>
          </div>
        </div>
        <!-- /End Single Banner  -->
      </div>
    </div>
  </section>
  <!-- End Small Banner -->



  <!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Trending Products</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="product-info">
              
              <div class="tab-content" id="myTabContent">


                <!-- Start Single Tab -->
                <div class="tab-pane fade show active" id="man" role="tabpanel">
                  <div class="tab-single">
                    <div class="row">
                      @for($i = 0; $i<8; $i++)
                      <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                        <div class="single-product">
                          <div class="product-img">
                            <a href="{{url('product-detail')}}">
                              <img class="default-img" src="app/images/shopTumbnail/shop.jpg" alt="#" style="height: 350px">
                              <span class="new">Categorey</span>
                            </a>
                            <div class="button-head">
                              <div class="product-action">
                                <a data-toggle="modal" data-target="#exampleModal" title="Profile" href="#"><i class=" ti-eye"></i><span>Shop Profile</span></a>
                              </div>
                              <div class="product-action-2">
                                <a title="View Shop" href="#">Visit Shop</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endfor
                    </div>
                  </div>
                </div>
                <!--/ End Single Tab -->
                <!--/ End Single Tab -->
              </div>
            </div>
          </div>
        </div>
            </div>
    </div>
  <!-- End Product Area -->
  
  <!-- Start Midium Banner  -->
 <!--  <section class="midium-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <div class="single-banner">
            <img src="https://via.placeholder.com/600x370" alt="#">
            <div class="content">
              <p>Man's Collectons</p>
              <h3>Man's items <br>Up to<span> 50%</span></h3>
              <a href="#">Shop Now</a>
            </div>
          </div>
        </div>
        /End Single Banner 
        <div class="col-lg-6 col-md-6 col-12">
          <div class="single-banner">
            <img src="https://via.placeholder.com/600x370" alt="#">
            <div class="content">
              <p>shoes women</p>
              <h3>mid season <br> up to <span>70%</span></h3>
              <a href="#" class="btn">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End Midium Banner -->
  
  <!-- Start Most Popular -->
  <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>Top Shops</h2>
          </div>
        </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
            <!-- Start Single Product -->
              @for($i = 0; $i<10; $i++)
            <div class="single-product">
              <div class="product-img">
                <a href="product-details.html">
                  <img class="default-img" src="app/images/shopTumbnail/shop.jpg" alt="#">
                  <img class="hover-img" src="app/images/shopTumbnail/shop.jpg" alt="#">
                  <span class="out-of-stock">Categorey {{$i}}</span>
                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">Add to cart</a>
                  </div>
                </div>
              </div>


              <div class="product-content">
                <h3><a href="product-details.html">Black Sunglass For Women</a></h3>
                <!-- <div class="product-price">
                  <span class="old">$60.00</span>
                  <span>$50.00</span>
                </div> -->
              </div>
            </div>
            @endfor
            <!-- End Single Product -->
            <!-- Start Single Product -->
           <!--  <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">Add to cart</a>
                  </div>
                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div> -->
            <!-- End Single Product -->
            <!-- Start Single Product -->
            <!-- <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                  <span class="new">New</span>
                                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">Add to cart</a>
                  </div>
                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div> -->
            <!-- End Single Product -->
            <!-- Start Single Product -->
            <!-- <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                </a>
                <div class="button-head">
                  <div class="product-action">
                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                  </div>
                  <div class="product-action-2">
                    <a title="Add to cart" href="#">Add to cart</a>
                  </div>
                </div>
                            </div>
                            <div class="product-content">
                                <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                                <div class="product-price">
                                    <span>$50.00</span>
                                </div>
                            </div>
                        </div> -->
            <!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- End Most Popular Area -->
  
  <section class="section free-version-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 offset-md-2 col-xs-12">
                    <div class="section-title mb-60">
                        <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Eshop Free Lite version</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Currently You are using free<br> lite Version of Eshop.</h2>
                        <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Please, purchase full version of the template to get all pages,<br> features and commercial license.</p>

                        <div class="button">
                            <a href="{{url('contact')}}" target="_blank" rel="nofollow" class="btn wow fadeInUp" data-wow-delay=".8s">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
  

  
  <!-- Start Shop Blog  -->
  <section class="shop-blog section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>From Our Blog</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Blog  -->
          <div class="shop-single-blog">
            <img src="{{asset('app/images/profileImage/zahid.jpg')}}"  class="rounded-circle" style="width: 150px;height: 150px"alt="#">
            <div class="content">
              <p class="date">03 Dec , 2020. Monday</p>
              <a href="#" class="title">Zahid Akbar</a>
              <a href="#" class="more-btn">Continue Reading</a>
            </div>
          </div>
          <!-- End Single Blog  -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Blog  -->
          <div class="shop-single-blog">
            <img src="{{asset('app/images/profileImage/zahid.jpg')}}" class="rounded-circle" style="width: 150px;height: 150px"  alt="#">
            <div class="content">
              <p class="date">22 July, 2020. Monday</p>
              <a href="#" class="title">Jakhar</a>
              <a href="#" class="more-btn">Continue Reading</a>
            </div>
          </div>
          <!-- End Single Blog  -->
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <!-- Start Single Blog  -->
          <div class="shop-single-blog">
            <img src="{{asset('app/images/profileImage/zahid.jpg')}}" class="rounded-circle" style="width: 150px;height: 150px"alt="#">
            <div class="content">
              <p class="date">22 July, 2020. Monday</p>
              <a href="#" class="title">Zahid</a>
              <a href="#" class="more-btn">Continue Reading</a>
            </div>
          </div>
          <!-- End Single Blog  -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Shop Blog  -->
  
  <!-- Start Shop Services Area -->
  <section class="shop-services section home">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="ti-rocket"></i>
            <h4>Free shiping</h4>
            <p>Orders over $100</p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="ti-reload"></i>
            <h4>Free Return</h4>
            <p>Within 30 days returns</p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="ti-lock"></i>
            <h4>Sucure Payment</h4>
            <p>100% secure payment</p>
          </div>
          <!-- End Single Service -->
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <!-- Start Single Service -->
          <div class="single-service">
            <i class="ti-tag"></i>
            <h4>Best Peice</h4>
            <p>Guaranteed price</p>
          </div>
          <!-- End Single Service -->
        </div>
      </div>
    </div>
  </section>
  <!-- End Shop Services Area -->
  
  <!-- Start Shop Newsletter  -->
  <section class="shop-newsletter section">
    <div class="container">
      <div class="inner-top">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
            <!-- Start Newsletter Inner -->
            <div class="inner">
              <h4>Newsletter</h4>
              <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
              <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                <button class="btn">Subscribe</button>
              </form>
            </div>
            <!-- End Newsletter Inner -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Shop Newsletter -->

@endsection