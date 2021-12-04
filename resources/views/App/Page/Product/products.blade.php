@extends('App.app_layout')
@section('content')


<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{url('index')}}">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="{{url('products')}}">Products</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>


<div class="product-area section">
            <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Products</h2>
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
                                <a title="View Shop" href="#">Visit Product</a>
                              </div>
                              </div>
							</div>
							
							<div class="product-content">
								<h3><a href="{{url('product-detail')}}">Women Hot Collection</a></h3>
								<div class="product-price">
                  <span class="old">$0</span>
									<span>$29.00</span>
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

@endsection