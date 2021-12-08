@extends('App.app_layout')
@section('content')

  <!-- Header Inner -->
  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript">
    $(function(){
        //prepare Your data array with img urls
        var dataArray=new Array();
        dataArray[0]="app/images/slider/slider1.jpg";
        dataArray[1]="app/images/slider/slider2.jpg";
        dataArray[2]="app/images/slider/slider3.jpg";
        dataArray[3]="app/images/slider/slider4.jpg";
        dataArray[4]="app/images/slider/slider6.jpg";
        // dataArray[5]="app/images/slider/slider6.jpg";
        dataArray[5]="app/images/slider/slider.jpg";
        // dataArray[2]="images/img3.png";
        // dataArray[3]="images/img0.png";

        //start with id=0 after 5 seconds
        var thisId=0;

        window.setInterval(function(){
            $('#thisImg').attr('src',dataArray[thisId]);
            thisId++; //increment data array id
            if (thisId==5) thisId=0; //repeat from start
        },2000);        
    });
</script>
  <!--/ End Header -->
  <img src="app/images/slider/slider1.jpg" id="thisImg" style="height: 600px !important;width: 100%;size: cover">
  <!-- Slider Area -->
 
  <!--/ End Slider Area -->

	  <!-- Start Small Banner  -->
  <section class="small-banner section">
    <div class="container-fluid">
      <div class="row">
        <!-- Single Banner  -->
        <div class="col-lg-4 col-md-6 col-12">
          <div class="single-banner">
            <img src="{{asset('app/images/advertisment/02.jpg')}}" alt="#" style="opacity: 0.3 !important;">
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
            <img src="{{asset('app/images/advertisment/03.jpg')}}" alt="#" style="opacity: 0.3 !important;">
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
            <img src="{{asset('app/images/advertisment/04.jpg')}}" alt="#" style="opacity: 0.3 !important;">
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
                      <div class="col-xl-3 col-lg-4 col-md-4 col-12 shadow-lg p-3 mb-5 bg-white rounded" style="box-shadow: 0px 15px 15px #0000000a;">
                        <div class=" single-product">
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
                            <div class="product-content">
                <h3><a href="product-details">Black Sunglass For Women</a></h3>
                <div class="product-price">
                  <span class="old">$60.00</span>
                  <span>$50.00</span>
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
  <div class="product-area most-popular section" style="margin-top: -70px">
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
        <div class="container" >
            <div class="row align-items-center">
                <div class="col-md-8 offset-md-2 col-xs-12">
                    <div class="section-title mb-60">
                        <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Online Layyah Free Desktop App</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Currently You are using free <br> Web App.</h2>
                        <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Please, purchase full version of the Desktop App <br> and Andriod App.</p>

                        <div class="button">
                            <a href="#" target="_blank" rel="nofollow" class="btn wow fadeInUp" data-wow-delay=".8s"  data-toggle="modal" data-target="#exampleModal">Download Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                  </div>
                    <div class="modal-body"  style="background-color: white">
                        <div class="row no-gutters">
              <div class="col-lg-6 offset-lg-3 col-12">
                <h4 style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;">Online Layyah Free Desktop App</h4>
                <h3 style="font-size:30px;color:#333;">Currently We are working on Desktop and Andriod App.<h3>
                <p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;margin-bottom: 90px;">Please, contact on whatsapp: +923081312527</p>
                <!-- <div class="button" style="margin-top:30px;">
                  <a href="#" target="_blank" class="btn" style="color:#fff;">Download Now!</a>
                </div> -->
              </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
  
  

  
  <!-- Start Shop Blog  -->
  <!-- <section class="shop-blog section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>Our Team</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
          
          <div class="shop-single-blog rounded">
            <img src="{{asset('app/images/blogImage/arslan.jpg')}}"  class="rounded-circle" style="width: 150px;height: 150px"alt="#">
            <div class="content">
              <p class="date">Frontend Developer</p>
              <a href="#" class="title">Arslan Ahmad</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          
          <div class="shop-single-blog">
            <img src="{{asset('app/images/blogImage/zahid.jpg')}}" class="rounded-circle" style="width: 150px;height: 150px"  alt="#">
            <div class="content">
              <p class="date">Full Stack Developer</p>
              <a href="#" class="title">Zahid Akbar</a>
            </div>
          </div>
        </div>


        <div class="col-lg-3 col-md-6 col-12">

          <div class="shop-single-blog">
            <img src="{{asset('app/images/blogImage/kamran.jpg')}}" class="rounded-circle" style="width: 150px;height: 150px"alt="#">
            <div class="content">
              <p class="date">Software Engineer</p>
              <a href="#" class="title">Kamran Kalasra</a>

            </div>
          </div>

        </div>


        <div class="col-lg-3 col-md-6 col-12">

          <div class="shop-single-blog">
            <img src="{{asset('app/images/blogImage/rida.jpg')}}" class="rounded-circle" style="width: 150px;height: 150px"alt="#">
            <div class="content">
              <p class="date">Backend Developer</p>
              <a href="#" class="title">Rida Abbas</a>

            </div>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 col-12">

          <div class="shop-single-blog">
            <img src="{{asset('app/images/blogImage/abid.jpeg')}}" class="rounded-circle" style="width: 150px;height: 150px"alt="#">
            <div class="content">
              <p class="date">Backend Developer</p>
              <a href="#" class="title">Abid Ali</a>

            </div>
          </div>

        </div>

        


      </div>
    </div>
  </section> -->
  <!-- End Shop Blog  -->

  <div class="product-area most-popular section" style="margin-top: -70px">
        <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="section-title">
                  <h2>Our Team</h2>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
            <!-- Start Single Product -->
            <div class="single-product">
              <div class="product-img">
                <a href="product-details.html">
                  <img class="default-img" src="app/images/blogImage/zahid.jpg" style="    height: 260px;" alt="#">
                  <span class="out-of-stock">Full Stack Developer</span>
                </a>
              </div>


              <div class="product-content">
                <h3 class="text-center"><a href="#">Zahid Akbar</a></h3>
              </div>
            </div>

            <div class="single-product">
              <div class="product-img">
                <a href="product-details.html">
                  <img class="default-img" src="app/images/blogImage/arslan.jpg" alt="#">
                  <span class="out-of-stock">Frontend Developer</span>
                </a>
              </div>


              <div class="product-content">
                <h3 class="text-center"><a href="#">Arslan Ahmed</a></h3>
              </div>
            </div>

            <div class="single-product">
              <div class="product-img">
                <a href="product-details.html">
                  <img class="default-img" src="app/images/blogImage/abid.jpeg" style="    height: 260px;" alt="#">
                  <span class="out-of-stock">Backend Developer</span>
                </a>
              </div>


              <div class="product-content">
                <h3 class="text-center"><a href="#">Abid Ali</a></h3>
              </div>
            </div>

            <div class="single-product">
              <div class="product-img">
                <a href="product-details.html">
                  <img class="default-img" src="app/images/blogImage/kamran.jpg" style="    height: 260px;" alt="#">
                  <span class="out-of-stock">Software Engineer</span>
                </a>
              </div>


              <div class="product-content">
                <h3 class="text-center"><a href="#">Kamran Kalasra</a></h3>
              </div>
            </div>

            <div class="single-product">
              <div class="product-img">
                <a href="product-details.html">
                  <img class="default-img" src="app/images/blogImage/rida.jpg" style="height: 260px;" alt="#">
                  <span class="out-of-stock">Backend Developer</span>
                </a>
              </div>


              <div class="product-content">
                <h3 class="text-center"><a href="#">Rida Abbas</a></h3>
              </div>
            </div>


          </div>
        </div>
      </div>


    </div>
    </div>
  
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