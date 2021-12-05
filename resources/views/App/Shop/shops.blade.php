@extends('App.app_layout')
@section('content')

<div class="breadcrumbs mb-6">
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


<section class="small-banner section">
    <div class="container-fluid">
      <div class="row">
        <!-- Single Banner  -->
        @for($i = 0; $i<20 ; $i++)
        <div class="col-lg-4 col-md-6 col-12 mb-3">
          <div class="single-banner">
            <img src="https://via.placeholder.com/600x370" alt="#">
            <div class="content">
              <p>Categorey</p>
              <h3>Summer travel collection</h3>
              <a href="{{url('shop-profile')}}">Visit Show</a>
            </div>
          </div>
        </div>
        @endfor
        <!-- /End Single Banner  -->
        <!-- Single Banner  -->
        <!-- <div class="col-lg-4 col-md-6 col-12">
          <div class="single-banner">
            <img src="https://via.placeholder.com/600x370" alt="#">
            <div class="content">
              <p>Bag Collectons</p>
              <h3>Awesome Bag <br> 2020</h3>
              <a href="#">Shop Now</a>
            </div>
          </div>
        </div> -->
        <!-- /End Single Banner  -->
        <!-- Single Banner  -->
        <!-- <div class="col-lg-4 col-12">
          <div class="single-banner tab-height">
            <img src="https://via.placeholder.com/600x370" alt="#">
            <div class="content">
              <p>Flash Sale</p>
              <h3>Mid Season <br> Up to <span>40%</span> Off</h3>
              <a href="#">Discover Now</a>
            </div>
          </div>
        </div> -->
        <!-- /End Single Banner  -->
      </div>
    </div>
  </section>


@endsection